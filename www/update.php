<?php
include "db.php";
if(isset($_POST['update']))
{
$id=$_POST['id'];
$nama=$_POST['nama'];
$nim=$_POST['nim'];
$email=$_POST['email'];
$progdi=$_POST['progdi'];
$q=mysqli_query($con,"UPDATE `appmahasiswa` SET `nama` ='$nama', `nim` ='$nim', `email` ='$email', `progdi` ='$progdi' where `id` ='$id'");
if($q)
echo "success";
else
echo "error";
}
?>
