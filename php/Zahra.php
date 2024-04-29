
<!doctype html>
<!-- Template bios Heroes -->
<head>
	<title>Zahra | Arcadia Quest</title>
		<link rel="stylesheet" href="css/normalize.min.css">
		<link rel="stylesheet" href="css/main6.css">
		<script type="text/javascript" src="https://raw.github.com/LeaVerou/prefixfree/master/prefixfree.min.js"></script>
		<style>body {background:#15495F}</style>
</head>
<body>
	<div class="bioPage Hero" style="background:url('Img/fZahra.jpg') no-repeat scroll 0 0 #fff">
		<div class="textFrame switch ">
			<div class="bioText">
				<h1>Zahra</h1>
				<p class="quote">“How do you win a battle? Get there first with the most stabs.”</p>
				<p>A native of the western savannahs, Zahra's astonishing speed was hailed by her people as nothing short of a gift from the gods. She could run down game, outrun predators, and leap tall structures with a bound, a flip, and a whirling somersault. In fact, it was said she could outrun the sun itself! Which is where all the trouble began. The very day she decided to try, Lord Fang made his move. Now, eager to test her speed against the only worthy adversary left to her, she must aid Arcadia, defeat Lord Fang, and then get back to the savannah, where the real race will begin.</p>
			</div>
		</div>
		<div class="mini switch">
			<img src="Img/mini-H-Zahra.png" alt="Zahra miniature" />
		</div>
		<div class="card switch">
			<img src="Img/card-H-Zahra.png" alt="Zahra profile card" width="531" height="380" />
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