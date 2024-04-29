
<!doctype html>
<!-- Template bios Heroes -->
<head>
	<title>Pigsy | Arcadia Quest</title>
		<link rel="stylesheet" href="css/normalize.min.css">
		<link rel="stylesheet" href="css/main6.css">
		<script type="text/javascript" src="https://raw.github.com/LeaVerou/prefixfree/master/prefixfree.min.js"></script>
		<style>body {background:#15495F}</style>
</head>
<body>
	<div class="bioPage Hero" style="background:url('Img/fPigsy.jpg') no-repeat scroll 0 0 #fff">
		<div class="textFrame switch ">
			<div class="bioText">
				<h1>Pigsy</h1>
				<p class="quote">“Hummm, I smell bacon!<br />…wait.”</p>
				<p>It's not unusual for a pigman to have a profession NOT dealing with food, so Pigsy has been a rather unsuccessful bandit due in no small part to being very recognizable and often stopping to eat his spoils before getting away. After trying to rob Wukong and failing, Pigsy has decided to turn his hand at being a hero instead, and is surprisingly good at it - albeit with an unfortunate tendency to attract monsters to his rather delicious nature.</p>
			</div>
		</div>
		<div class="mini switch">
			<img src="Img/mini-H-Pigsy.png" alt="Pigsy miniature" />
		</div>
		<div class="card switch">
			<img src="Img/card-H-Pigsy.png" alt="Pigsy profile card" width="531" height="380" />
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
</html>