<?php
include "home.php";

$id_db_karyawan = $_GET['id'];

$query_delete = "delete from tb_karyawan where no= '$id_db_karyawan'";

$query_delete_ok = mysqli_query($connect,$query_delete);

if ($query_delete_ok){
	
	header("location:home.php");
}else{
	header("location:home.php");
}

?>