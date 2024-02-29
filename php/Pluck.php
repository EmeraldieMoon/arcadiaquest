
<!doctype html>
<!-- Template bios Heroes -->
<head>
	<title>Pluck | Arcadia Quest</title>
		<link rel="stylesheet" href="css/normalize.min.css">
		<link rel="stylesheet" href="css/main6.css">
		<script type="text/javascript" src="https://raw.github.com/LeaVerou/prefixfree/master/prefixfree.min.js"></script>
		<style>body {background:#15495F}</style>
</head>
<body>
	<div class="bioPage Hero" style="background:url('https://i.ibb.co/3487FJH/fPluck.jpg') no-repeat scroll 0 0 #fff">
		<div class="textFrame switch ">
			<div class="bioText">
				<h1>Pluck</h1>
				<p class="quote">“Heh. They call me the Fryer. Get it? GET IT??”</p>
				<p>When he was seven years old, Pluck managed not to die. Which was, in fact, incredible considering his burgeoning affinity with fire magic, and his rather excitable pyromaniacal nature. In fact, if his parents hadn’t been wealthy enough for a cinder-stone house, they likely would’ve all perished within the year. While it seemed Pluck was on the fast-track to a University scholarship, he never exhibited much desire to learn more magic than it took to create a small open flame. He greatly preferred watching things burn, and experimented at length, noting particularly the flammability of certain mixtures and chemicals. Now he works as a loyal and happy Guildsman, so long as he’s allowed some leeway with regard to collateral damage.</p>
			</div>
		</div>
		<div class="mini switch">
			<img src="https://i.ibb.co/7YtL13p/mini-H-Pluck.png" alt="Pluck miniature" />
		</div>
		<div class="card switch">
			<img src="https://i.ibb.co/yVhHNN5/Pluck.jpg" alt="Pluck profile card" width="531" height="380" />
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