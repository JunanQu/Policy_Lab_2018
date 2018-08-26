<!-- <?php include('includes/header.php')?> -->
<?php include('test2.php')?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/style2.css" media="all" />


  <!-- function for "clicking checkbox to enable button" -->

  <script type="text/javascript">
function enableButton() {
	if(document.getElementById('myCheck').checked){
		document.getElementById('myButton').disabled='';
	} else {
		document.getElementById('myButton').disabled='true';
	}
}
</script>




  <!-- Adds the carousel to this file -->
  <title>Social Dynamics Lab-Policy Lab Pilot Testing</title>
  </head>


  <body onload="enableButton();">


    <!-- header -->
 	 <div class="header" id="myHeader">

  		<h2>Instructions</h2>
	</div>


    <div class="wrapper" id="consent">
      <p>
       Dear Participant,
       <p>
       Please read the following instructions carefully before you begin.
       </p>
       <p>
         This study tests group differences in political and cultural beliefs between the two main political parties in the U.S.
         We are interested not only in how well members of a political party identify the current positions of their party, but also how well they identify the future positions that their party will take on issues that may soon become relevant.
         Accordingly, we will ask you to respond to 22 questions about politics and culture.
       </p>
      <p>
        Please note that once you submit your answers and move onto the next item,
        you will not be able to go back and change your responses.
        Please do not press the back button on your browser, or you will risk causing your session to end prematurely, which will prevent you from being paid for completing the test.
      </p>
   <br><br>



       <?php

       // if ( $current_user_world_id == 1 ){
       // echo'<form action="nochart.php" method="post">';
       //  }else{
       // echo'<form action="newChart2.php" method="post">';
       //  }
       ?>
       <form action="political_id.php" method="post">
       <p><input type="checkbox" id="myCheck" onclick="javascript:enableButton();" >
         I have carefully read the instructions and am ready to continue with the test.<br></p>


     <input type = "submit" class="button" id = "myButton" value = "Continue" onclick="javascript:enableButton();"  >

     </form>


    </div>

  </body>
  </html>

</html>
