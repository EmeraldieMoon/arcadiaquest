
<!doctype html>
<!-- Template bios Heroes -->
<head>
	<title>Annika | Arcadia Quest</title>
		<link rel="stylesheet" href="css/normalize.min.css">
		<link rel="stylesheet" href="css/main6.css">
		<script type="text/javascript" src="https://raw.github.com/LeaVerou/prefixfree/master/prefixfree.min.js"></script>
		<style>body {background:#15495F}</style>
</head>
<body>
	<div class="bioPage Hero" style="background:url('https://i.ibb.co/m0pcMpM/fAnnika.jpg') no-repeat scroll 0 0 #fff">
		<div class="textFrame switch hide">
			<div class="bioText">
				<h1></h1>
				<p class="quote"></p>
				<p></p>
			</div>
		</div>
		<div class="mini switch">
			<img src="https://i.ibb.co/DW1jV9q/mini-H-Annika.png" alt="Annika miniature" />
		</div>
		<div class="card switch">
			<img src="https://i.ibb.co/g43PXtR/Annika.png" alt="Annika profile card" width="531" height="380" />
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
</html><style>.bioText p {line-height: 15px}</style>