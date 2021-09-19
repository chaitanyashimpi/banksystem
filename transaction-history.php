<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./assets/css/app.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <title>CRT Bank | Transaction History</title>
  </head>
  <body>
    <?php 
      include "./components/header.php";
    ?>
    <main class="crtbanking">
      <div class="crtComponent">
        <?php
            require "./components/all-in-one-component.php"
        ?>
        <div class="compMainNav">
          <h2>~~ Transaction History ~~</h2>
          <div class="userTable">
            <table class="userDetails">
              <tr>
                <th>Sr. No.</th>
                <th>Sender</th>
                <th>Receiver</th>
                <th>Amount</th>
                <th>Date and Time</th>
              </tr>
              
                <?php
                require 'backend/config.php';
                
                $select = "SELECT * FROM transaction_history ORDER BY transfer_date desc";
                $selectResult = $conn->query($select); 
                $srno = 1;
                while($row = mysqli_fetch_array($selectResult)){
                    echo "<tr><td class= 'center'>$srno</td>";
                    echo "<td>$row[sender]</td>";
                    echo "<td>$row[receiver]</td>";
                    echo "<td class= 'center'>&#8377; $row[amount]</td>";
                    echo "<td class='center'>$row[transfer_date]</td></tr>";
                    $srno += 1;
                }


                ?>
              
            </table>
          </div>
        </div>
      </div>
    </main>
    <?php 
        include './components/footer.php';
    ?>
  </body>
</html>
