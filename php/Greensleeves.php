
<!doctype html>
<!-- Template bios Heroes -->
<head>
	<title>Greensleeves | Arcadia Quest</title>
		<link rel="stylesheet" href="css/normalize.min.css">
		<link rel="stylesheet" href="css/main6.css">
		<script type="text/javascript" src="https://raw.github.com/LeaVerou/prefixfree/master/prefixfree.min.js"></script>
		<style>body {background:#15495F}</style>
</head>
<body>
	<div class="bioPage Hero" style="background:url('Img/fGreensleeves.jpg') no-repeat scroll 0 0 #fff">
		<div class="textFrame switch">
			<div class="bioText">
				<h1>Greensleeves</h1>
				<p class="quote">“Do you like my new coat? It’s my complete delight.”</p>
				<p>Greensleeves has two pleasures in life: the sound of an arrow crossing the air, and the feel of fresh cotton against his skin. A native from the Daylight Woods, Greensleeves is an enthusiastic orc hunter and an avid tailor, who is very picky with the quality of the arrows he uses and of the cotton he sews. His aim, either with an arrow or a needle, is legendary. Greensleeves descends from an ancient line of Blond Elves, where honesty and honor are sacred, knowledge and tradition are passed from one generation to the next, and the length of the hair shows how long one intends to stay single. He dreams one day of sewing via archery, but the thread proves problematic to aerodynamic efficiency.</p>
			</div>
		</div>
		<div class="mini switch">
			<img src="Img/mini-H-Greensleeves.png" alt="Greensleeves miniature" />
		</div>
		<div class="card switch">
			<img src="Img/card-H-Greensleeves.png" alt="Greensleeves profile card" width="531" height="380" />
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