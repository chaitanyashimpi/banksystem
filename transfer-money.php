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
  </head>
  <body>
  <?php 
      include "./components/header.php";
      $status = $_GET['status'];
      if($status == 1){
        
      ?>
        <script>
          alert("You do not have sufficient Amount!!");
        </script>
        <?php
      }
    ?>
    <main class="crtbanking">
      <div class="crtComponent">
        <?php
            require "./components/all-in-one-component.php"
        ?>
        <div class="compMainNav">
          <h2>~~ Transfer Money ~~</h2>
          <div class="userTable">
            <table class="userDetails">
              <tr>
                <th>Sr. No.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Balance</th>
                <th>Transfer Money</th>
              </tr>
              
                <?php
                require 'backend/config.php';
                
                $select = "SELECT * FROM user";
                $selectResult = $conn->query($select); 
                $srno = 1;
                while($row = mysqli_fetch_array($selectResult)){
                    echo "<tr><td class= 'center'>$srno</td>";
                    echo "<td>$row[name]</td>";
                    echo "<td>$row[email]</td>";
                    echo "<td class= 'center'>&#8377; $row[balance]</td>";
                    echo "<td class='center'><a href='transfer.php?id=$row[id]'>Transfer</a></td></tr>";
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
