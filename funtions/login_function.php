<?php

if(isset($_POST['login']))
{
    session_start();
    require "../config/config.php";
   
    $email = trim(mysqli_real_escape_string($conn, $_POST['email']));
    $password = trim(mysqli_real_escape_string($conn, $_POST['password']));
   



    //check if the email has registered
    
    $check_user = mysqli_query($conn, "SELECT * FROM users where email = '$email' ");
    if(mysqli_num_rows($check_user) == 0)
    {
        header('location: ../login.php?error=no-user');
    }
    else
    {
          $result = mysqli_fetch_array( $check_user);
          $db_password = $result['password'];

          if(password_verify($password,  $db_password))
          {
              $_SESSION['email'] = $email;
              header('location:../dashboard.php');
          }
          else
          {
            header('location:../login.php?error=incorrect-password');
          }
      
            
           
     }
           
    
}