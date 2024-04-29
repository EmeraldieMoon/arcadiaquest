
<!doctype html>
<!-- Template bios Heroes -->
<head>
	<title>Hitch | Arcadia Quest</title>
		<link rel="stylesheet" href="css/normalize.min.css">
		<link rel="stylesheet" href="css/main6.css">
		<script type="text/javascript" src="https://raw.github.com/LeaVerou/prefixfree/master/prefixfree.min.js"></script>
		<style>body {background:#15495F}</style>
</head>
<body>
	<div class="bioPage Hero" style="background:url('Img/fHitch.jpg') no-repeat scroll 0 0 #fff">
		<div class="textFrame switch ">
			<div class="bioText">
				<h1>Hitch</h1>
				<p class="quote">“Everybody lies.”</p>
				<p>Hitch’s origins are a mystery, but he’s a rare breed of Mento-Mancer, known for their piercing gazes and minty-fresh breath. Such mind magicians are both feared and respected, as they’re notoriously perceptive and infamously truthful. Asking a Mento-Mancer if they’re having a good day is to open oneself up for an hours-long dissertation. Hitch himself has managed to curb his absolute dedication to truth and accuracy in the midst of battle, although his cutting critiques of orcish swordsmanship has caused more than one opponent to break down in tears. In his private life, Hitch prefers quiet solitude to that of the local scene, although this is likely due to his blanket ban from all local ale-houses and, most notably, the ‘Fizzy Flagons’ franchise ever since the explosion.</p>
			</div>
		</div>
		<div class="mini switch">
			<img src="Img/mini-H-Hitch.png" alt="Hitch miniature" />
		</div>
		<div class="card switch">
			<img src="Img/card-H-Hitch.png" alt="Hitch profile card" width="531" height="380" />
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