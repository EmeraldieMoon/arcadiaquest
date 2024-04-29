
<!doctype html>
<!-- Template bios Heroes -->
<head>
	<title>Sonja | Arcadia Quest</title>
		<link rel="stylesheet" href="css/normalize.min.css">
		<link rel="stylesheet" href="css/main6.css">
		<script type="text/javascript" src="https://raw.github.com/LeaVerou/prefixfree/master/prefixfree.min.js"></script>
		<style>body {background:#15495F}</style>
</head>
<body>
	<div class="bioPage Hero" style="background:url('Img/fSonja.jpg') no-repeat scroll 0 0 #fff">
		<div class="textFrame switch ">
			<div class="bioText">
				<h1>Sonja</h1>
				<p class="quote">“Go ahead and look. Sure, just stand still. Riiiight there. Ignore the sword. Watch the girl.” CHOP! WHACK! HACK!”</p>
				<p>As a young Guildswoman, Sonja heard about the renowned Armor of Invulnerable Offense. It was said to convey superior protection to its wearers, and had helped more than one warrior woman to achieve fame and glory. Sonja relentlessly sought this legendary suit of armor, and eventually tracked it to a dungeon not far from Arcadia. But, when she found it, she couldn’t believe her eyes! It was little more than a golden chainmail bikini!</p>
			</div>
		</div>
		<div class="mini switch">
			<img src="Img/mini-H-Sonja.png" alt="Sonja miniature" />
		</div>
		<div class="card switch">
			<img src="Img/card-H-Sonja.png" alt="Sonja profile card" width="531" height="380" />
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