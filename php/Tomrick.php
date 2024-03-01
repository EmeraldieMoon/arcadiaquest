
<!doctype html>
<!-- Template bios Heroes -->
<head>
	<title>Tomrick | Arcadia Quest</title>
		<link rel="stylesheet" href="css/normalize.min.css">
		<link rel="stylesheet" href="css/main6.css">
		<script type="text/javascript" src="https://raw.github.com/LeaVerou/prefixfree/master/prefixfree.min.js"></script>
		<style>body {background:#15495F}</style>
</head>
<body>
	<div class="bioPage Hero" style="background:url('https://i.ibb.co/58vj3VL/fTomrick.jpg') no-repeat scroll 0 0 #fff">
		<div class="textFrame switch ">
			<div class="bioText">
				<h1>Tomrick</h1>
				<p class="quote">“Snakeyes?? Check again. Seven. See?”</p>
				<p>From his youngest days, Tomrick loved throwing the bones. Four-sided, six-, eight-, tens-, even the dreaded twelve-siders… it didn’t matter, so long as there was something to win or lose. Tomrick’s problem came when his magical talents emerged. Suddenly, the dice had never thrown so well. Suspiciously well, in fact, and poor Tomrick’s gambling days had come to an end. But all was not lost. After long study and many thousands of games played at the University’s Causality Tower, Tomrick has emerged as the foremost Diceomantic authority in Arcadia (and gained a near encyclopedic knowledge of every game of chance known to mankind). No longer is Tomrick’s good fortune restricted to just rolling dice. Why, his Grand Unified Gaming Theory posits that every living thing in the entire world is caught up in one great game, and that if you know the rules well enough, then you know just enough to break them in your favor.</p>
			</div>
		</div>
		<div class="mini switch">
			<img src="https://i.ibb.co/3MmNPXj/mini-H-Tomrick.png" alt="Tomrick miniature" />
		</div>
		<div class="card switch">
			<img src="https://i.ibb.co/d5L3qs0/Tomrick.jpg" alt="Tomrick profile card" width="531" height="380" />
		</div>
		<div class="switchButttons">
			<span class="switchBio" title="Show biography"></span>
			<span class="switchMini" title="Show miniature"></span>
			<span class="switchCard" title="Show profile card"></span>
			<!--<span class="switchClose" title="Hide all"></span>-->
		</div>
	</div>
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script>
	$(document).ready(function(){
		$(".card").show(10);
		$(".switchBio").click(function(){
			$(".switch").hide(10);
			$(".textFrame").show(10);
		});
		$(".switchMini").click(function(){
			$(".switch").hide(10);
			$(".mini").show(10);
		});
		$(".switchCard").click(function(){
			$(".switch").hide(10);
			$(".card").show(10);
		});
		$(".switchClose").click(function(){
			$(".switch").hide(10);
		});
	});
	</script>
	
</body>
</html><style>.bioText p {line-height: 15px}</style>