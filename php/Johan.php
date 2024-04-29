
<!doctype html>
<!-- Template bios Heroes -->
<head>
	<title>Johan | Arcadia Quest</title>
		<link rel="stylesheet" href="css/normalize.min.css">
		<link rel="stylesheet" href="css/main6.css">
		<script type="text/javascript" src="https://raw.github.com/LeaVerou/prefixfree/master/prefixfree.min.js"></script>
		<style>body {background:#15495F}</style>
</head>
<body>
	<div class="bioPage Hero" style="background:url('Img/fJohan.jpg') no-repeat scroll 0 0 #fff">
		<div class="textFrame switch">
			<div class="bioText">
				<h1>Jøhan</h1>
				<p class="quote">“It’s all in the wrist.”</p>
				<p>Jøhan and his brothers made everything a competition. School, work, girls, and especially swordplay. Not a one of them didn’t dream of joining the Sunguard. In fact, they all got so good at fighting each other, they developed whole new strategies and tactics never before considered at the Academy. Jøhan had the singular distinction of defeating his admissions officer in single combat, something no other aspirant had ever done. No one on faculty had ever considered that a sword could function like a boomerang. Now a full Knight Errant, Jøhan was questing abroad when eternal night descended. He has returned, more determined than ever, to conquer Arcadia and rebuild the Sunguard.</p>
			</div>
		</div>
		<div class="mini switch">
			<img src="Img/mini-H-Johan.png" alt="Jøhan miniature" />
		</div>
		<div class="card switch">
			<img src="Img/card-H-Johan.png" alt="Jøhan profile card" width="531" height="380" />
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