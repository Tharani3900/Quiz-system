<?php 
require 'header.php';
?>
		
		<link rel="stylesheet" type="text/css" href="jqueryui/jquery-ui.css">
		<link rel="stylesheet" type="text/css" href="jqueryui/jquery-ui.structure.css">
		<link rel="stylesheet" type="text/css" href="jqueryui/jquery-ui.theme.css">
		<script src="https://code.jquery.com/jquery-3.4.1.js" type="text/Javascript"></script>
		<script src="jqueryui/jquery-ui.js" type="text/Javascript"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<div class="quiz_container">
	<div class="question_number">
		<h3>Question <span class="question_num_value"></span> of <span class="total_ques_num"></span></h3>
	</div>
	<div class="question"></div>
	<div class="options">
		<div id="0" class="option1" onclick="check(this)"></div>
		<div id="1" class="option2" onclick="check(this)"></div>
		<div id="2" class="option3" onclick="check(this)"></div>
		<div id="3" class="option4" onclick="check(this)"></div>
	</div>
	<div class="next_btn">
		<button type="button" class="btn" onclick="next()">Next</button>
	</div>
	<div class="quiz_over">
		<div class="container">
		<h1>
			Your score <span class="mark"></span> out of <span class="totalquestions"></span><br>
			Thats <span class="percentage"></span>
		</h1>
		<button type="button" class="tryagain" onclick="tryagain()">Try again</button>
		</div>
	</div>
</div>
<script src="content.js"></script>
<script type="text/javascript">
		const queryString = window.location.search;
			const urlParams = new URLSearchParams(queryString);
			const domain = urlParams.get('domain');
			if(domain=="History")
				questions=history;
			else if(domain=="General Knowledge")
				questions=gk;
			else if(domain=="Solar system")
				questions=solarsystem;
			else if(domain=="Sports")
				questions=sports;
			else if(domain=="Geography")
				questions=geography;
			else if(domain=="Science and Nature")
				questions=sciandnature;
</script>
<script src="script.js"></script>

	
	

	

