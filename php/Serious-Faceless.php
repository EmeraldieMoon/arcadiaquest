
<!doctype html>
<!-- Template bios Heroes -->
<head>
	<title>Serious Faceless | Arcadia Quest</title>
		<link rel="stylesheet" href="css/normalize.min.css">
		<link rel="stylesheet" href="css/main6.css">
		<script type="text/javascript" src="https://raw.github.com/LeaVerou/prefixfree/master/prefixfree.min.js"></script>
		<style>body {background:#15495F}</style>
</head>
<body>
	<div class="bioPage Hero" style="background:url('https://i.ibb.co/YDCFMZM/f-Serious-Faceless.jpg') no-repeat scroll 0 0 #fff">
		<div class="textFrame switch hide">
			<div class="bioText">
				<h1></h1>
				<p class="quote"></p>
				<p></p>
			</div>
		</div>
		<div class="mini switch">
			<img src="https://i.ibb.co/cFcvdZB/mini-H-Serious-Faceless.png" alt="Serious Faceless miniature" />
		</div>
		<div class="card switch">
			<img src="https://i.ibb.co/h8TrCm4/Serious-Faceless.jpg" alt="Serious Faceless profile card" width="380" height="531" />
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