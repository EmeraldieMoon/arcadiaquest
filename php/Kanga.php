<!doctype html>
<!-- Template bios Heroes -->
<head>
	<title>Kanga | Arcadia Quest</title>
		<link rel="stylesheet" href="css/normalize.min.css">
		<link rel="stylesheet" href="css/main6.css">
		<script type="text/javascript" src="https://raw.github.com/LeaVerou/prefixfree/master/prefixfree.min.js"></script>
		<style>body {background:#15495F}</style>
</head>
<body>
	<div class="bioPage Hero" style="background:url('https://i.ibb.co/Z1S2fBS/fKanga.jpg') no-repeat scroll 0 0 #fff">
		<div class="textFrame switch">
			<div class="bioText">
				<h1>Kanga</h1>
				<p class="quote">“These orcs know nothing of proper marauding!”</p>
				<p>One of the rare Bruentte Elves of the southern Daylight Forests, Kanga’s clan has long claimed shared blood with the Burn-It Orcs from ancient days. And it makes sense, naturally, because how else might one explain their dark hair? The Brunette Elves tend towards fiery tempers, and Kanga is no exception. Where other elves are content to dance and sing, Kanga prefers a good day of marauding. With the aid of her griffon companion, Kanga has marauded many a dungeon in her time, and now she’s set her sights on Arcadia. In battle, Kanga’s companions learn very quickly to keep her aimed squarely at the enemy.</p>
			</div>
		</div>
		<div class="mini switch">
			<img src="https://i.ibb.co/xjr4Syr/mini-H-Kanga.png" alt="Kanga miniature" />
		</div>
		<div class="card switch">
			<img src="https://i.ibb.co/44fkY8B/Kanga.png" alt="Kanga profile card" width="531" height="380" />
		</div>
		<div class="switchButttons">
			<span class="switchBio" title="Show biography"></span>
			<span class="switchMini" title="Show miniature"></span>
			<span class="switchCard" title="Show profile card"></span>
			<!--<span class="switchClose" title="Hide all"></span>-->
		</div>
	</div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
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
		$(".switchClose").click(function(){
			$(".switch").hide(10);
		});
	});
	</script>
	
</body>
</html>