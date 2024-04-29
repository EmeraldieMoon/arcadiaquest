<!doctype html>
<!-- Template bios Heroes -->
<head>
	<title>Maya | Arcadia Quest</title>
		<link rel="stylesheet" href="css/normalize.min.css">
		<link rel="stylesheet" href="css/main6.css">
		<script type="text/javascript" src="https://raw.github.com/LeaVerou/prefixfree/master/prefixfree.min.js"></script>
		<style>body {background:#15495F}</style>
</head>
<body>
	<div class="bioPage Hero" style="background:url('Img/fMaya.jpg') no-repeat scroll 0 0 #fff">
		<div class="textFrame switch">
			<div class="bioText">
				<h1>Maya</h1>
				<p class="quote">“The secret to my power? Yoga. And rage. More rage than yoga. In fact, I’m just gonna go with rage.”</p>
				<p>From the time she was a tiny baby, Maya was a prodigy in the art of ice magic. In fact, when her mountain village suffered a particularly brutal winter with snow piling higher than anyone had seen it, a fearful baby Maya instinctively created a series of ice chutes that let the villagers escape the imminent avalanche. As she grew, it became clear that moments of emotional outburst were the source of her amazing talents. It let her drop her barriers and channel more magic than anyone else of her age. As a young woman, she entered Arcadia University and has studied under all the greats, including Professor Hobsbawm. With Arcadia taken and monsters residing in her house (HER HOUSE!!), Maya doesn’t have to search far for the ire to fuel her spells.</p>
			</div>
		</div>
		<div class="mini switch">
			<img src="Img/mini-H-Maya.png" alt="Maya miniature" />
		</div>
		<div class="card switch">
			<img src="Img/card-H-Maya.png" alt="Maya profile card" width="531" height="380" />
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