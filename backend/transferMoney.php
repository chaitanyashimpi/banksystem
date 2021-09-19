<?php
    require "config.php";

    $mainUserId = $_GET['id'];
    $userId = $_POST['transferNames'];
    $transferAmount = $_POST['amount'];
    
    // First User (who is transfering money)
    $selectFirst = "SELECT  balance FROM user WHERE id = '".$mainUserId."'";
    $selectFirstResult = $conn->query($selectFirst);

    $row1 = mysqli_fetch_array($selectFirstResult);
    $firstNewAmount = $row1[0] - $transferAmount;
    
    // Second User (Money Transfered to)
    $selectSecond = "SELECT balance FROM user WHERE id = '".$userId."'";
    $selectSecondResult  = $conn->query($selectSecond);

    $row2 = mysqli_fetch_array($selectSecondResult);
    $secondNewAmount = $row2[0] + $transferAmount;


    // Update First User
    $updateFirst = $conn->query("UPDATE user SET balance = $firstNewAmount WHERE id = $mainUserId");

    // Update Second User
    $updateSecond = $conn->query("UPDATE user SET balance = $secondNewAmount where id = $userId");

    // Add History
        // First Values from table
        $selectFirstName = $conn->query("SELECT name from user WHERE id = '".$mainUserId."'");
        $firstNameRow = mysqli_fetch_array($selectFirstName);
        
        
        // Second Values from table
        $selectSecondName = $conn->query("SELECT name from user WHERE id = '".$userId."'");
        $secondNameRow = mysqli_fetch_array($selectSecondName);
        
    $insertHistory = $conn->query("INSERT INTO transaction_history(sender, receiver, amount,transfer_date) VALUES ('$firstNameRow[0]', '$secondNameRow[0]', '$transferAmount', CURRENT_TIMESTAMP)");
    
?>