<?php
include "db.php";
    if(isset($_POST['insert']))
    {
    $nama=$_POST['nama'];
    $nim=$_POST['nim'];
    $email=$_POST['email'];
    $progdi=$_POST['progdi'];
    $q=mysqli_query($con,"INSERT INTO `mahasiswa` ( `nama` , `nim` , `email`, `progdi` ) VALUES ('$nama','$nim','$email','$progdi')");
    if($q)
    echo "success";
    else
    echo "error";
    }
?>