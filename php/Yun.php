
<!doctype html>
<!-- Template bios Heroes -->
<head>
	<title>Yun | Arcadia Quest</title>
		<link rel="stylesheet" href="css/normalize.min.css">
		<link rel="stylesheet" href="css/main6.css">
		<script type="text/javascript" src="https://raw.github.com/LeaVerou/prefixfree/master/prefixfree.min.js"></script>
		<style>body {background:#15495F}</style>
</head>
<body>
	<div class="bioPage Hero" style="background:url('https://i.ibb.co/q5yF78g/fYun.jpg') no-repeat scroll 0 0 #fff">
		<div class="textFrame switch ">
			<div class="bioText">
				<h1>Yun</h1>
				<p class="quote">“Let’s go another few rounds. The monsters may stop for dinner, but that’s their weakness!”</p>
				<p>Yun wrote the book on Relentless Combat Techniques. No, seriously. That’s the title. Yun’s amazing reflexes and two-weapon technique give him an edge over any monster, but it’s his endurance that truly sets him apart. When anyone else would ask for a breather, Yun keeps going. In fact, Yun petitioned the Guilds to let him attempt a solo recapture of Arcadia. Alas, while Yun’s ‘filibuster combat style’ is truly stunning, even he needs assistance sometimes. He just hopes that the others can keep up.</p>
			</div>
		</div>
		<div class="mini switch">
			<img src="https://i.ibb.co/f4Jx3S7/mini-H-Yun.png" alt="Yun miniature" />
		</div>
	<div class="card switch">
			<img src="https://i.ibb.co/SRVVbVs/Yun.jpg" alt="Yun profile card" width="380" height="531" />
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