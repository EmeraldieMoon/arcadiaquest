<!doctype html>
<!-- Template bios Heroes -->
<head>
	<title>Chaz | Arcadia Quest</title>
		<link rel="stylesheet" href="css/normalize.min.css">
		<link rel="stylesheet" href="css/main6.css">
		<script type="text/javascript" src="https://raw.github.com/LeaVerou/prefixfree/master/prefixfree.min.js"></script>
		<style>body {background:#15495F}</style>
</head>
<body>
	<div class="bioPage Hero" style="background:url('https://i.ibb.co/mNjKKzx/fChaz.jpg') no-repeat scroll 0 0 #fff">
		<div class="textFrame switch ">
			<div class="bioText">
				<h1>Chaz</h1>
				<p class="quote">“Don’t hate me because I’m beautiful.”</p>
				<p>Chaz is Darryn’s brother (and they’re known collectively as the Black Brothers, thanks to a marketing deal with the Black Armory who supplies their armor). Chaz’s claim to fame is his Power Stance and Stunning Hair. When in his Power Stance (and that’s nearly all the time, even sleeping) he’s an unstoppable swordsman of supreme skill. Unless someone musses his Stunning Hair. Then, he might be better described as a fretting nitwit, as he struggles to comb his hair back into place mid-battle. Thus, it’s a mark of his prowess that the Guilds give him any work at all. (And the kickback from the Black Armory don’t hurt anything either).</p>
			</div>
		</div>
		<div class="mini switch">
			<img src="https://i.ibb.co/yQx3HMB/mini-H-Chaz.png" alt="Chaz miniature" />
		</div>
		<div class="card switch">
			<img src="https://i.ibb.co/p4bhzDq/Chaz.jpg" alt="Chaz profile card" width="531" height="380" />
		</div>
		<div class="switchButttons">
			<span class="switchBio " title="Show biography"></span>
			<span class="switchMini " title="Show miniature"></span>
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