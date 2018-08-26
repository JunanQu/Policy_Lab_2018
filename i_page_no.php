<?php
// include('includes/header.php');
include('test2.php');
$dataPoints = array(
	array("y" => 100*$support_rate_of_demo, "label" => "Democrats" ),
	array("y" => 100*$support_rate_of_repub, "label" => "Republican" ),

);

?>
<!DOCTYPE HTML>
<html>
<head>
<link href="styles/all.css" rel="stylesheet" type="text/css"  />
<div class="no_chart_question_text">
<p >

</p>
</div>

</head>
<div class="index-banner1">
	<div class="header-top">
		<div class="wrap">

      <h1 class="content_q"><?php
      if ($id_carrier == 23){
        echo "PRACTICE QUESTION 1: “The Supreme Court has gone too far in liberalizing access to abortion." ;
      }elseif ($id_carrier == 24) {
        echo "PRACTICE QUESTION 2: “The Affordable Care Act ('Obamacare') should be strengthened, not weakened or abolished." ;
      }

      $records = exec_sql_query($myPDO, "SELECT question_content FROM questions WHERE questions.id ='". $id_carrier."'")->fetch(PDO::FETCH_ASSOC);
      if($records){
        echo("Question ".$current_seq.". ".'"'.$records['question_content'].'"');
      };
      ?></h1>
			<div class="clear"></div>
		 </div>
	</div>
</div>
<body>
  <div class="wrapper4">
    <form action="practice_1.php" method="post">
        <p class="question_text">
          Next, we would like to know your own individual opinion.
        </p>
        <p class="question_text">
          As a <?php echo "$user_political_id" ?>, would you be more likely to agree or disagree with this statement?
        </p>
        <button id="support" name="support" type="submit" value="support">
          I <span class="italic">disagree</span> with this statement.
        </button>
        <button id="oppose" name="oppose" type="submit" value="oppose">
          I <span class="italic">agree</span> with this statement.
    </button>
    </form>
  </div>
</body>
</html>
