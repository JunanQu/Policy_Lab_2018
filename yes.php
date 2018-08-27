<?php
// include('includes/header.php');
include('test2.php');

if (($support_num_of_demo_percent != 0 || $oppose_num_of_demo_percent != 0) || ($support_num_of_repub_percent != 0 || $oppose_num_of_repub_percent != 0)){
		$dataPoints1 = array(
			array("label"=> "Democrats", "y"=> $support_rate_of_demo_percent, "z"=>$support_num_of_demo_percent),
			array("label"=> "Republicans", "y"=> null),
		);
		$dataPoints2 = array(
			array("label"=> "Democrats", "y"=> $oppose_rate_of_demo_percent, "z"=>$oppose_num_of_demo_percent),
			array("label"=> "Republicans", "y"=> null),
		);

		$dataPoints3 = array(
			array("label"=> "Democrats", "y"=> null),
			array("label"=> "Republicans", "y"=> $support_rate_of_repub_percent, "z"=>$support_num_of_repub_percent)
		);

		$dataPoints4 = array(
			array("label"=> "Democrats", "y"=> null),
			array("label"=> "Republicans", "y"=> $oppose_rate_of_repub_percent, "z"=>$oppose_num_of_repub_percent)
		);
}else{
	$dataPoints1 = array(
		array("label"=> null, "y"=> null, "x"=>null ),
		array("label"=> null, "y"=> null),
	);
	$dataPoints2 = array(
		array("label"=> null, "y"=> null, "x"=>null),
		array("label"=> null, "y"=> null),
	);

	$dataPoints3 = array(
		array("label"=> null, "y"=> null),
		array("label"=> null, "y"=> null, "x"=>null)
	);

	$dataPoints4 = array(
		array("label"=> null, "y"=> null),
		array("label"=> null, "y"=> null, "x"=>null)
	);
}


?>
<!DOCTYPE HTML>
<html>
<head>
<link href="styles/all.css" rel="stylesheet" type="text/css"  />
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
			<h2> </h2>
			<div class="clear_chart"></div>
		 </div>
	</div>
</div>


<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	title: {
		margin:20,
		text: "Percent who agree, by political party",
		// text: "So far, <?php echo ($all_demo_in_world); ?> Democrats and <?php echo ($all_republican_in_world); ?> Republicans have responded to this question. Here are their responses:"
	},
	theme: "light2",
	animationEnabled: true,
	toolTip:{
		shared: false,
		reversed: false
	},
	interactivityEnabled: false,
	axisX: {
	labelFontSize: 30
	},
	axisY: {
		suffix: "%"
	},
	data: [
		{
			color:"#3357FF",
			type: "stackedColumn100",
			name: "Democrats Who Support",
			indexLabel: "{y}% Agree",
			indexLabelFontWeight: "bold",
			indexLabelFontSize: 20,
			indexLabelFontColor: "white",
			// showInLegend: true,
			dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
		},{
			color: "#E1F7FF",
			type: "stackedColumn100",
			name: "Democrats Who Oppose",
			// indexLabelPlacement: "inside",
			// showInLegend: true,
			indexLabel: "{y}% Disagree",
			indexLabelFontWeight: "bold",
			indexLabelFontSize: 20,
			indexLabelFontColor: "black",
			// indexLabelBackgroundColor: "black",
			dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
		},{
			color: "red",
			type: "stackedColumn100",
			name: "Republicans Who Support",
			// showInLegend: true,
			indexLabel: "{y}% Agree",
			indexLabelFontWeight: "bold",
			indexLabelFontSize: 20,
			indexLabelFontColor: "white",
			// indexLabelBackgroundColor: "black",
			dataPoints: <?php echo json_encode($dataPoints3, JSON_NUMERIC_CHECK); ?>
		},{
			color: "#FFCCBB",
			type: "stackedColumn100",
			name: "Republicans Who Oppose",
			// showInLegend: true,
			indexLabel: "{y}% Disagree",
			indexLabelFontWeight: "bold",
			indexLabelFontSize: 20,
			indexLabelFontColor: "black",
			// indexLabelBackgroundColor: "black",
			dataPoints: <?php echo json_encode($dataPoints4, JSON_NUMERIC_CHECK); ?>
		}
	]
});

chart.render();

}
</script>
</head>
<body>


<div id="chartContainer" style="height: 320px; width: 100%;"></div>
<script src="script/canvasjs.min.js"></script>

<div class="wrapper5">
<form action="i_page_yes.php" method="post">
    <p class="question_text">
      Which party do you predict will be more likely to agree with this statement?
    </p>
    <button id="support" name="party_repu" type="submit" value="Democrat_support">
      <span class="italic">Republicans</span> will agree more
    </button>
    <button id="oppose" name="party_demo" type="submit" value="Republican_support">
      <span class="italic">Democrats</span> will agree more
</button>
</form>
</div>
</body>
</html>
