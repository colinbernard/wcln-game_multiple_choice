<!DOCTYPE html>
<html>
<head>
	<title>WCLN - Multiple Choice</title>
	<meta charset="utf-8"/>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://bclearningnetwork.com/lib/jquery/jquery-3.2.1.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato"><!-- google web font -->
	<link rel="stylesheet" type="text/css" href="style/style.css"/>
	<link rel="shortcut icon" href="images/favicon.ico"/>
	<script type="text/javascript" src="helper.js"></script>
	<script type="text/javascript" src="multiple_choice.js"></script><!-- the main game JS file -->
</head>
<body onload="init('<?=isset($_GET['title'])?$_GET['title']:null?>');"><!-- body onload calls function to initialize game -->
	<div class="container">
		<div class="row" id="heading-bar">
			<div class="col-md-3">
				<img id="logo" height="50px" src="images/logo.png">
			</div>
			<div class="col-md-6 text-center">
				<h2 id="game-title">Test Title</h2>
			</div>
			<div class="col-md-3">
				<a onclick="toggleMute()"><img id="mute-btn" src="images/unmute.png"></a>
			</div>
		</div>
		<div class="row text-center" id="game-over-row">
			<div class="col-md-12">
				<p id="quiz-complete">Quiz Complete!</p>
				<p id="score-text">Score: 0/0</p>
				<p id="total-time">Total Time: 0 seconds</p>
				<button onclick="restart()">Restart</button>
			</div>
		</div>
		<div class="row text-center" id="question-row">
			<div class="col-md-6 question">
				<p id="question-text">This triangle has three equal sides. It is:</p>
			</div>
			<div class="col-md-6 question">
				<img id="question-image" src="images/triangle.png">
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<form action="">
				  <input type="radio" name="answer" value="1" class="option" id="option1"><label for="option1" class="option"> an equilateral triangle</label><br>
				  <input type="radio" name="answer" value="2" class="option" id="option2"><label for="option2" class="option"> an isosceles triangle</label><br>
				  <input type="radio" name="answer" value="3" class="option" id="option3"><label for="option3" class="option"> a scalene triangle</label><br>
				  <input type="radio" name="answer" value="4" class="option" id="option4"><label for="option4" class="option"> a right-angled triangle</label>
				</form>
			</div>
		</div>
		<div class="row" id="bottom-bar">
			<div class="col-md-5 pull-right text-right">
				<p id="correct">Correct: 0</p>
				<p id="wrong">Wrong: 0</p>
				<button id="next" onclick="next()">Next</button>
			</div>
		</div>
	</div>


</body>
</html>