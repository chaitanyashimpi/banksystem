<?php
  require "./backend/config.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./assets/css/main.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <title>CRT Bank | Create User</title>
  </head>
  <body>
    <?php 
      include "./components/header.php";
    ?>
    <main class="crtbanking">
      <div class="crtComponent">
        <?php
            include "./components/all-in-one-component.php"
        ?>
        <div class="compMainNav">
          <h2>~~ Create User ~~</h2>
          <div class="userIcon">
            <i class="ri-user-line"></i>
          </div>
          <div class="userForm">
            <form
              action="./backend/createUser.php"
              method="post"
              enctype="multipart/form"
            >
              <p>
                <input
                  type="text"
                  name="name"
                  id="name "
                  placeholder="Name"
                  autocomplete="off"
                  required
                />
              </p>
              <p>
                <input
                  type="email"
                  autocomplete="off"
                  name="email"
                  id="email"
                  placeholder="Email"
                  required
                />
              </p>
              <p>
                <input
                  autocomplete="off"
                  type="text"
                  name="balance"
                  id="balance"
                  placeholder="Balance"
                  required
                />
              </p>
              <div>
                <input type="submit" name="create" value="Create" />
                <input type="reset" value="Reset" />
              </div>
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
