
<!doctype html>
<!-- Template bios Heroes -->
<head>
	<title>Hassan | Arcadia Quest</title>
		<link rel="stylesheet" href="css/normalize.min.css">
		<link rel="stylesheet" href="css/main6.css">
		<script type="text/javascript" src="https://raw.github.com/LeaVerou/prefixfree/master/prefixfree.min.js"></script>
		<style>body {background:#15495F}</style>
</head>
<body>
	<div class="bioPage Hero" style="background:url('Img/fHassan.jpg') no-repeat scroll 0 0 #fff">
		<div class="textFrame switch ">
			<div class="bioText">
				<h1>Hassan</h1>
				<p class="quote">“Time and Fate are no mystery to me.”</p>
				<p>A strange prince, from a distant land, Hassan’s combat prowess might only be rated as ‘adequate’ if not for his astonishing luck. He credits his forward-thinking battle strategies and the mystic Dagger of Rhee-Do. Enemies that would surely have struck him a fatal blow find themselves outmaneuvered and bleeding from dozens of tiny wounds (and with sand rubbed in them no less!) As prince of a desert kingdom, Hassan began his journey not long after eternal night fell. For, while relief from the desert heat was pleasing for a time, things have gotten a good bit colder, and firewood is notoriously hard to come by in the dunes.</p>
			</div>
		</div>
		<div class="mini switch">
			<img src="Img/mini-H-Hassan.png" alt="Hassan miniature" />
		</div>
		<div class="card switch">
			<img src="Img/card-H-Hassan.png" alt="Hassan profile card" width="531" height="380" />
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