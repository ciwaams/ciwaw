<?php
include "connect.php";
// insialisasi data yang diterima
$user = $_POST['username'];
$pass = $_POST['password'];


//print $user.' '.$pass;
// cek data kosong;
if (!empty($user) && !empty($pass))
{
   // cek ke database
   $sql = "SELECT * FROM user WHERE username = '$user' AND password = '$pass'";
   $query = mysqli_query($con,$sql);
   $cek = mysqli_num_rows($query);

   // decision!
   if ($cek > 0)
   {
      session_start();
      while ($m = mysqli_fetch_array($query))
      {
         $user = $m['username'];
         $pass = $m['password'];
      }
      print $user.' '.$pass;
      $_SESSION['username'] = $user;
      
      
      header('location:ph.php');
      //echo '<META HTTP-EQUIV="Refresh" Content="0; URL=pages/material/material.php">';
      //exit;
   }
   else
   {
      session_destroy();
      header('location:../index.php?i=salah');
   }
}
?>