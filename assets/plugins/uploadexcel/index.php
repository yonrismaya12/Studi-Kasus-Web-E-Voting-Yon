<?php
	include ("../../api/connect.php");
	if(isset($_POST["uploadBukuInduk"]))
	{
		$file = $_FILES['file']['tmp_name'];
		$handle = fopen($file, "r");
		$c = 0;
		while(($filesop = fgetcsv($handle, 10000, ",")) !== false)
		{
			$id = $filesop[0];
			$sql = mysql_query("UPDATE ppdb_student_applicant SET keterangan=1 WHERE id=$id");
			$c = $c + 1;
		}
		fclose($handle);
		
		if($sql){
				header('location:../../administrator.php?upload Sukses.'. $c .' data terupdate');
			}else{
				header('location:../../administrator.php?Upload Gagal');
			}

	}
?>