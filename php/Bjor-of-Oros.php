
<!doctype html>
<!-- Template bios Heroes -->
<head>
	<title>Bjor of Oros | Arcadia Quest</title>
		<link rel="stylesheet" href="css/normalize.min.css">
		<link rel="stylesheet" href="css/main6.css">
		<script type="text/javascript" src="https://raw.github.com/LeaVerou/prefixfree/master/prefixfree.min.js"></script>
		<style>body {background:#15495F}</style>
</head>
<body>
	<div class="bioPage Hero" style="background:url('https://i.ibb.co/51LJJR6/f-Bjor-of-Oros.jpg') no-repeat scroll 0 0 #fff">
		<div class="textFrame switch hide">
			<div class="bioText">
				<h1></h1>
				<p class="quote"></p>
				<p></p>
			</div>
		</div>
		<div class="mini switch">
			<img src="https://i.ibb.co/DDBKG1c/mini-H-Bjor-of-Oros.png" alt="Bjor of Oros miniature" />
		</div>
		<div class="card switch">
			<img src="https://i.ibb.co/tB69JWF/Bjor-of-Oros.png" alt="Bjor of Oros profile card" width="531" height="380" />
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