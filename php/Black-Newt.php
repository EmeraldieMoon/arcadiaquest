<!doctype html>
<!-- Template bios Heroes -->
<head>
	<title>Black Newt | Arcadia Quest</title>
		<link rel="stylesheet" href="css/normalize.min.css">
		<link rel="stylesheet" href="css/main6.css">
		<script type="text/javascript" src="https://raw.github.com/LeaVerou/prefixfree/master/prefixfree.min.js"></script>
		<style>body {background:#15495F}</style>
</head>
<body>
	<div class="bioPage Hero" style="background:url('https://i.ibb.co/1RppPzd/f-Black-Newt.jpg') no-repeat scroll 0 0 #fff">
		<div class="textFrame switch ">
			<div class="bioText">
				<h1>Black Newt</h1>
				<p class="quote">“Pfft. Your mom didn’t think so.”</p>
				<p>The self-named ‘Black Newt’ is the son of a very large and wealthy Arcadian family who had the misfortune of being born last. His sisters were beautiful, his brothers were dashing, and all his elder siblings were intelligent, witty, and noble. Alas, the Black Newt had the heart of a troll. Sniping was his second nature, the cutting barb was his forte, and he even took to stealing their diaries to scrawl snarky comments in the margins. He was eventually disowned. But he had learned swordsmanship to at least a competent degree, and a Guild membership was easy enough for someone of his connections. Ironically, he welcomed the invasion, but was cast out when he was found scrawling derisive comments beneath graffiti the orcs would leave on each other’s’ walls. Heart of a troll indeed.</p>
			</div>
		</div>
		<div class="mini switch">
			<img src="https://i.ibb.co/sC08V6T/mini-H-Black-Newt.png" alt="Black Newt miniature" />
		</div>
		<div class="card switch">
			<img src="https://i.ibb.co/YN3bggy/Black-Newt.jpg" alt="Black Newt profile card" width="531" height="380" />
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