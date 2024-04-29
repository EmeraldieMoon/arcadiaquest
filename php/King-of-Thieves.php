
<!doctype html>
<!-- Template bios Heroes -->
<head>
	<title>King of Thieves | Arcadia Quest</title>
		<link rel="stylesheet" href="css/normalize.min.css">
		<link rel="stylesheet" href="css/main6.css">
		<script type="text/javascript" src="https://raw.github.com/LeaVerou/prefixfree/master/prefixfree.min.js"></script>
		<style>body {background:#15495F}</style>
</head>
<body>
	<div class="bioPage Hero" style="background:url('Img/fKing-of-Thieves.jpg') no-repeat scroll 0 0 #fff">
		<div class="textFrame switch ">
			<div class="bioText">
				<h1>King of Thieves</h1>
				<p class="quote">“Silence is like gold, but doesn't spend half as well.”</p>
				<p>An expert looter and admirer of the orcs' marauding prowess, the King of Thieves is one of the few native Arcadians to remain within the walls after the occupation (hidden, of course). Through skill and an intimate knowledge of the Evershadow District's twisting back alleys, he has compiled what is arguably the most extensive study on orc marauding techniques existant. But, sadly, this was lost when the minotaurs moved into Evershadow. Its labyrinth was no mystery to them, and the King of THieves joined his fellow Arcadians in the fight.</p>
			</div>
		</div>
		<div class="mini switch">
			<img src="Img/mini-H-King-of-Thieves.png" alt="King of Thieves miniature" />
		</div>
		<div class="card switch">
			<img src="Img/card-H-King-of-Thieves.png" alt="King-of-Thieves profile card" width="531" height="380" />
		</div>
		<div class="switchButttons">
			<span class="switchBio " title="Show biography"></span>
			<span class="switchMini " title="Show miniature"></span>
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
</html>