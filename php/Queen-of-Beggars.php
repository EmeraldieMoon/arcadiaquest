
<!doctype html>
<!-- Template bios Heroes -->
<head>
	<title>Queen of Beggars | Arcadia Quest</title>
		<link rel="stylesheet" href="css/normalize.min.css">
		<link rel="stylesheet" href="css/main6.css">
		<script type="text/javascript" src="https://raw.github.com/LeaVerou/prefixfree/master/prefixfree.min.js"></script>
		<style>body {background:#15495F}</style>
</head>
<body>
	<div class="bioPage Hero" style="background:url('https://i.ibb.co/41NZkDq/f-Queen-of-Beggars.jpg') no-repeat scroll 0 0 #fff">
		<div class="textFrame switch ">
			<div class="bioText">
				<h1>Queen of Beggars</h1>
				<p class="quote">“Alms. Or else!”</p>
				<p>The Beggar Queen is two parts beggar and one part stabber, which will come in awfully handy when she joins the Guilds in re-taking Arcadia. They say every girl has her price, and a big enough bribe might just save everyone a little pain. However, she's not the Queen of Beggars for nothing, so that bribe had better be a king's ransom! Heroes generally know enough to hand over at least a little something. However, monsters are notorious skinflints! And the Maraud & Barter system leaves no room for the kind of 'mandatory charity' the Queen of Beggars demands.</p>
			</div>
		</div>
		<div class="mini switch">
			<img src="https://i.ibb.co/QDwKv8s/mini-H-Queen-of-Beggars.png" alt="Queen of Beggars miniature" />
		</div>
		<div class="card switch">
			<img src="https://i.ibb.co/NWL68gp/Queen-of-Beggars.jpg" alt="Queen of Beggars profile card" width="531" height="380" />
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