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
    <title>CRT Bank | Transfer Money</title>
    <link rel="shortcut icon" href="./assets/images/favicon.png">
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
          <h2>~~ Transfer Money ~~</h2>
          <div class="userTable">
            <h3>Your Balance:</h3>
            <br />
            <table class="userDetails">
              <tr>
                <th>User Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Balance</th>
              </tr>

              <?php
                  require 'backend/config.php';
                  $userId =  $_GET['id'];
                  $select = "SELECT * FROM user WHERE id = $userId";
                  $selectResult = $conn->query($select); while($row =
                mysqli_fetch_array($selectResult))
                { 
                  echo "<tr><td class='center'>$userId</td>"; 
                  echo "<td>$row[name]</td>"; 
                  echo "<td>$row[email]</td>"; 
                  echo "<td class='center'>$row[balance]</td>";
                } 
              ?>
              </tr>
            </table>

            <h3>Transfer Money:</h3>
            <form
              action="./backend/transferMoney.php?id=<?php echo $userId;?>"
              method="post"
              class="transferForm"
              enctype="multipart/form"
            >
              <select name="transferNames" id="transferNames">
                <option selected disabled>Select User</option>
                <?php
                        $selectAll = "SELECT * FROM user EXCEPT (SELECT * from user where id = $userId)";
                        $selectResults = $conn->query($selectAll); while($rows =
                mysqli_fetch_array($selectResults)){ echo "
                <option value='$rows[id]' required>
                  $rows[name] ($rows[balance]) - ($rows[email])
                </option>
                "; } ?>
              </select> 
              <input
                type="number"
                name="amount"
                id="amount"
                placeholder="Amount"
                required
              />
              <input type="submit" value="Transfer" />
            </form>
          </div>
        </div>
      </div>
    </main>
    <?php 
        include './components/footer.php';
    ?>
  </body>
</html>
