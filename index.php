<?php include('test2.php');
 // include('includes/header.php');
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />

  <title>Social Dynamics Lab-Policy Lab Pilot Testing</title>

  </head>

  <body>
    <div class="index-banner1">
      <div class="header-top">
        <div class="wrap">

          <h1>Welcome to our study</h1>
          <div class="clear"></div>
         </div>
      </div>
    </div>

  <div class="wrapper">

      <?php

        echo '
        <div class="form">
        <p>You must log in using your MTURK user ID in order to participate:
        </p>
        <form action="consent0.php" method="post">
        <label>MTURK USER ID</label>
        <input type="text" name="mTurk_code" placeholder="MTURK ID" required />
        <button name="login" type="submit" value="LogIn">Log In</button>
        </form>
        ';

      ?>

    </div>
  </div>
  <?php include('includes/footer.php')?>
  </body>
  </html>

</html>
