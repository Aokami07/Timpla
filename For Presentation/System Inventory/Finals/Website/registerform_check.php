<?php
session_start();
include "db_login.php";

if (isset($_POST['email']) && isset($_POST['password']) 
  && isset($_POST['name']) && isset($_POST['cpassword'])) {
  function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  $email = validate($_POST['email']);
  $pass = validate($_POST['password']);

  $cpass = validate($_POST['cpassword']);
  $name = validate($_POST['name']);

    $user_data = '$email=' . $email. '$name=' . $name;


  if (empty($email)) {
    header("Location: register_form.php?error=Email is required&$user_data");
    exit();
  }else if (empty($pass)) {
    header("Location: register_form.php?error=Password is required&$user_data");
    exit();
  }
  else if (empty($cpass)) {
    header("Location: register_form.php?error=Confirm your password&$user_data");
    exit();
  }

  else if (empty($name)) {
    header("Location: register_form.php?error=Name is required&$user_data");
    exit();
  }

  else if (empty($pass !== $cpass)) {
    header("Location: register_form.php?error=The confirmation password does not match&$user_data");
    exit();
  }
  
  else {
   // $sql = "SELECT * FROM users WHERE email='$email' AND password='$pass'";
//
  //  $result = mysqli_query($conn, $sql);

 //   if (mysqli_num_rows($result) === 1) {
  //    $row = mysqli_fetch_assoc($result);
  //    if ($row['email'] === $email && $row['password'] === $pass){
  //      $_SESSION['email'] = $row['email'];
  //      $_SESSION['email'] = $row['email'];
 //       $_SESSION['name'] = $row['name'];
  //      $_SESSION['id'] = $row['id'];
  //      header("Location: page.php");
 //       exit();
 //    }else{
 //       header("Location: register_form.php?error=Incorect Email or Password");
 //       exit();
 //     }
   // }else{
  //    header("Location: register_form.php?error=Incorect Email or Password");
   //   exit();
 //     }
  }

}else {
  header("Location: register_form.php?error");
  exit();
}
