
<!doctype html>
<!-- Template bios Heroes -->
<head>
	<title>Monkey Queen | Arcadia Quest</title>
		<link rel="stylesheet" href="css/normalize.min.css">
		<link rel="stylesheet" href="css/main6.css">
		<script type="text/javascript" src="https://raw.github.com/LeaVerou/prefixfree/master/prefixfree.min.js"></script>
		<style>body {background:#15495F}</style>
</head>
<body>
	<div class="bioPage Hero" style="background:url('Img/fMonkey-Queen.jpg') no-repeat scroll 0 0 #fff">
		<div class="textFrame switch ">
			<div class="bioText">
				<h1>Monkey Queen</h1>
				<p class="quote">“He's about 5 feet tall covered in fur, has a tail, and is probably drunk. WHERE IS MY HUSBAND?”</p>
				<p>What began as an arranged marriage with Wukong blossomed into love, or so Yuling imagined. The Queen is more than a little put out with Wukong dumping her with the kids and an ungovernable kingdom of apes to traipse off on some stupid adventure. Placing the first minister (a baboon with a rather fetching red bottom) in charge, the Queen has journeyed to Arcadia to drag her husband hime, and pity any foolish vampires that stand in her way!</p>
			</div>
		</div>
		<div class="mini switch">
			<img src="Img/mini-H-Monkey-Queen.png" alt="Monkey Queen miniature" />
		</div>
		<div class="card switch">
			<img src="Img/card-H-Monkey-Queen.png" alt="Monkey Queen profile card" width="531" height="380" />
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