<?php
  require "config.php";

  $name = $_POST['name'];
  $email = $_POST['email'];
  $balance = $_POST['balance'];

  $select = "SELECT email FROM user WHERE email ='".$email."'";

  $selectResult = $conn->query($select);

    if(mysqli_num_rows($selectResult)){
        $status= 1;
        header("Location: ../create-user.php?status=$status");
    }
    else{
        $add_user = "INSERT INTO user(name,email,balance) VALUES ('$name', '$email', '$balance')";
        
        if(mysqli_query($conn, $add_user)){
              header("Location: ../transfer-money.php");
        }
        else{
            header('Location: ../create-user.php');
        }
    }

?>

