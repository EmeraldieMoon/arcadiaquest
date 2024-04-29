
<!doctype html>
<!-- Template bios Heroes -->
<head>
	<title>Nibbles | Arcadia Quest</title>
		<link rel="stylesheet" href="css/normalize.min.css">
		<link rel="stylesheet" href="css/main6.css">
		<script type="text/javascript" src="https://raw.github.com/LeaVerou/prefixfree/master/prefixfree.min.js"></script>
		<style>body {background:#15495F}</style>
</head>
<body>
	<div class="bioPage Hero" style="background:url('Img/fNibbles.jpg') no-repeat scroll 0 0 #fff">
		<div class="textFrame switch ">
			<div class="bioText">
				<h1>Nibbles</h1>
				<p class="quote">“MUST! FEED!”</p>
				<p>Nibbles is an experiment gone either horribly wronf or horribly right. No one from the University has claimed responsibility for the giant, mutant rabbit (although Bob is the prime suspect), but he does seem to be at least tame, so long as he's fed regularly. When unleashed, Nibbles exhibits the disturbingly trollish tendency to devour his enemies whole and regenerate any battle wounds in seconds. Fortunately, the new effort to re-take Arcadia has come at just the right time! It wouldn't do to let Nibbles run out of food.</p>
			</div>
		</div>
		<div class="mini switch">
			<img src="Img/mini-H-Nibbles.png" alt="Nibbles miniature" />
		</div>
		<div class="card switch">
			<img src="Img/card-H-Nibbles.png" alt="Nibbles profile card" width="531" height="380" />
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