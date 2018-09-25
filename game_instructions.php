<!-- <?php include('includes/header.php')?> -->
<?php include('test2.php')?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/style2.css" media="all" />

  <script src="//code.jquery.com/jquery-1.12.1.min.js"></script>
  <script src="script/jquery.backDetect.js"></script>
  <script src="script/back_button.js"></script>

  <!-- Adds the carousel to this file -->
  <title>Social Dynamics Lab-Policy Lab Pilot Testing</title>

<style>
</style>
</head>
<body>
    <div class="header" id="myHeader">
        <h2>Instructions</h2>
    </div>

    <div class="wrapper" id="consent">
       <form action="political_id.php" method="post">
           <p><input type="checkbox" class="item">
           You will see 15 statements about various political and cultural
           beliefs (plus a practice question that does not count).</p>
           <br/>

           <p>
           For each statement:<br/>

           <input type="checkbox" class="item">
           You will see the views of previous participants from each political
           party.
           <br/>

           <input type="checkbox" class="item">
           We will ask you to predict the reason most [D/R] players will give
           for why your party agrees or disagrees: ideology, history, or
           popularity?
           <br/>

           <input type="checkbox" class="item">
           At the end of the game, the player with the most accurate predictions
           will win $100, divided equally in case of ties.
           </p>
           <br/>

           <p>
               In addition:</br>

               <input type="checkbox" class="item">
               For each statement, we will ask you to indicate whether you
               personally agree or disagree with the the statement.
               <br/>

               <input type="checkbox" class="item">
               PLEASE DO NOT PRESS THE BACK BUTTON ON YOUR BROWSER! This may
               erase your data, causing you to be unpaid for your participation.
               <br/>
           </p>

           <p>
               When you have read these instructions, please check the box below
               and press continue:
               <br/>

               <input type="checkbox" id="myCheck" class="item"
                    onclick="enableButton();">
               I have carefully read the instructions and am ready to continue
               with the test.
           </p>

           <input type="submit" class="button" id="submitButton" value="Continue" disabled>
        </form>
    </div>
</body>

<script type="text/javascript">
let unselectedItems;

$(document).ready(() => {
    unselectedItems = $('.item').size();
    console.log('Number of required items: ', unselectedItems);
    // toggleButton(false);
});

$('.item').click((e) => {
    if (e.target.checked) {
        unselectedItems--;
    } else {
        unselectedItems++;
    }

    toggleButton(unselectedItems == 0);
});

/**
 * Whether to enable button.
 * @param {boolean} enable
 */
function toggleButton(enable) {
	$('#submitButton').prop('disabled', !enable);
}
</script>

</html>
