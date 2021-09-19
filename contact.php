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
          <h2>~~ Contact Us ~~</h2>
          <div class="contact">
              <h1>CRT Banks</h1>
              <hr>
              <div class="contactDetails">
                  <h4><strong>Address:</strong> XX, XX Road, City, State, India</h4>
                  <h4><strong>Phone:</strong> +91 XXXXX XXXXX</h4>
                  <h4><strong>Fax:</strong> (020)XXXXXX</h4>
                  <h4><strong>Email: </strong> XXXX@gmail.com</h4>
              </div>
              <hr>
              <div class="impLinks">
                  <p>
                      <a href="https://github.com/chaitanyashimpi/banksystem" target="_blank">Github Code</a>
                  </p>
                  <p>
                      <a href="https://crtbank.cratonik.com" target="_blank">Live Project</a>
                  </p>
                  <p>
                      <a href="https://chaitanyashimpi.netlify.app/" target="_blank">Creator's Portfolio</a>
                  </p>
                  <p>
                      <a href="https://cratonik.com/" target="_blank">Creator's Business Site</a>
                  </p>
              </div>
          </div>
          </div>
        </div>
      </div>
    </main>
    <?php 
        include './components/footer.php';
    ?>
  </body>
</html>
