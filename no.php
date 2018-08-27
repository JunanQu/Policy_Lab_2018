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
				echo "PRACTICE QUESTION 1: The Supreme Court has gone too far in liberalizing access to abortion." ;
			}elseif ($id_carrier == 24) {
				echo "PRACTICE QUESTION 2: The Affordable Care Act ('Obamacare') should be strengthened, not weakened or abolished." ;
			}else{
			$records = exec_sql_query($myPDO, "SELECT question_content FROM questions WHERE questions.id ='". $id_carrier."'")->fetch(PDO::FETCH_ASSOC);
			if($records){
				echo("Statement ".$current_seq.". ".''.$records['question_content'].'');
				}
			};
      ?></h1>
			<div class="clear"></div>
		 </div>
	</div>
</div>
<body>
  <div class="wrapper4">
  <form action="i_page_no.php" method="post">
  		<p class="question_text">
  			Which party do you predict will be more likely to agree with this statement?
  		</p>
  		<button id="support" name="party_demo" type="submit" value="Democrat_support">
  			<span class="italic">Democrats</span> will agree more
  		</button>
  		<button id="oppose" name="party_repu" type="submit" value="Republican_support">
  			<span class="italic">Republicans</span> will agree more
  </button>
  </form>
  </div>
</body>
</html>
