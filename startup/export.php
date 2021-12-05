<?php
$connection=mysqli_connect("localhost","root","","db_upload");

	if (!$connection) {
		die("Failed connecting to MySQL: " . mysqli_connect_error());
	}

	if (isset($_GET['export'])) {
		if ($_GET['export'] == 'true') {
			$view_querys = mysqli_query($connection,"SELECT * FROM tbl_approved");

			$delimiter = ",";
			$filename = "approve_" . date('Ymd') . ".csv"; //create file name

			//create file pointer
			$f = fopen('php://memory', 'w');

			//set column header
			$fields = array('NAME','CATEGORY','TYPE','ADDRESS','EVENT PLACE','START DATE','END DATE','EMAIL','CONTACT');
			fputcsv($f, $fields, $delimiter);

			//output each row of the data, format line as csv and write to file pointer
			while ($rowsa = $view_querys->fetch_assoc()) {
				$linedata = array($rowsa['a_first_name'].$rowsa['a_last_name'], $rowsa['a_category'], $rowsa['a_type'], $rowsa['a_address'], $rowsa['a_event'], $rowsa['a_event_start'], $rowsa['a_event_end'], $rowsa['a_email'], $rowsa['a_contact']);
				fputcsv($f, $linedata, $delimiter);
			}
				//move back to beginning of file
				fseek($f, 0);

				//set headers to download file rather than displayed
				header('Content-Type: text/csv');
				header('Content-Disposition: attachment; filename="' . $filename . '";');

				//output all remaining data on a file pointer
				fpassthru($f);
			
		}
	}
?>