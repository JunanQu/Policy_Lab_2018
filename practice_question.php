<?php include('test2.php');
 // include('includes/header.php');
?>
<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
  <link href="styles/question_pages.css" rel="stylesheet" type="text/css" />

  <script src="//code.jquery.com/jquery-1.12.1.min.js"></script>
  <script src="script/jquery.backDetect.js"></script>
  <script src="script/back_button.js"></script>

  <title>Social Dynamics Lab-Policy Lab Pilot Testing</title>

  </head>

  <body>
    <div class="index-banner1">
      <div class="header-top">
        <div class="wrap">

          <h1> Practice Questions </h1>
          <div class="clear"></div>
         </div>
      </div>
    </div>

  <div class="wrapper3">

      <form  action="i_page_yes.php?preference=1" method="post">

      <label>BEFORE WE START THE SURVEY, PLEASE ANSWER THE PRACTICE QUESTION.</label>
      <button id="continue_button" name="continue" type="submit" value="continue">Continue</button>
      </form>


  </div>
  <?php include('includes/footer.php')?>
  </body>
  </html>

</html>
