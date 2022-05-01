<?php

 

 //untuk penghubung dengan file koneksi

 include 'koneksi.php';




 //cara menangkap data yang dikirim dari form

 if(isset($_POST['submit'])){

  $username = $_POST['username'];

  $password = $_POST['password'];


  //ambil data dari database tabel login dengan username dan password yang sesuai

  $data = mysqli_query($koneksi,"SELECT * FROM login WHERE username='$username' AND password='$password'");



  if(mysqli_num_rows($data)){

    header("location:dashboard.php");

  }else{

   echo "Login Gagal";

  }





 }



 ?>

