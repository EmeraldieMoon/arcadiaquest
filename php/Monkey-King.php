
<!doctype html>
<!-- Template bios Heroes -->
<head>
	<title>Monkey King | Arcadia Quest</title>
		<link rel="stylesheet" href="css/normalize.min.css">
		<link rel="stylesheet" href="css/main6.css">
		<script type="text/javascript" src="https://raw.github.com/LeaVerou/prefixfree/master/prefixfree.min.js"></script>
		<style>body {background:#15495F}</style>
</head>
<body>
	<div class="bioPage Hero" style="background:url('Img/fMonkey-King.jpg') no-repeat scroll 0 0 #fff">
		<div class="textFrame switch ">
			<div class="bioText">
				<h1>Monkey King</h1>
				<p class="quote">“Responsibilities shmersponsibilities… let's have some fun!”</p>
				<p>Stepping out of the mists (and jungles) of legend, Wukong is on a little vacation from his traditional role as the head and deity of the Kingdom of Apes. Along with the noble goal of restoring the day, the Monkey King is also keen to check out the various bars, pubs and dens of debauchery that the human world has to offer! Just don't tell his Queen…</p>
			</div>
		</div>
		<div class="mini switch">
			<img src="Img/mini-H-Monkey-King.png" alt="Monkey King miniature" />
		</div>
		<div class="card switch">
			<img src="Img/card-H-Monkey-King.png" alt="Monkey King profile card" width="531" height="380" />
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