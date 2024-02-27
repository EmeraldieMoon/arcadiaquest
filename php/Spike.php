
<!doctype html>
<!-- Template bios Heroes -->
<head>
	<title>Spike | Arcadia Quest</title>
		<link rel="stylesheet" href="css/normalize.min.css">
		<link rel="stylesheet" href="css/main6.css">
		<script type="text/javascript" src="https://raw.github.com/LeaVerou/prefixfree/master/prefixfree.min.js"></script>
		<style>body {background:#15495F}</style>
</head>
<body>
	<div class="bioPage Hero" style="background:url('https://i.ibb.co/CPhxjxH/fSpike.jpg') no-repeat scroll 0 0 #fff">
		<div class="textFrame switch">
			<div class="bioText">
				<h1>Spike</h1>
				<p class="quote">“Helmet hair?? Is that ‘sposed ta be a joke, laddie??”</p>
				<p>Being born with a mohawk wasn’t easy for Spike (to say nothing of his poor mother), but his legendary follicles of steel became a point of pride for his dwarven family, and heralded the potential for so much more. Sure enough, at age thirteen when all dwarves awake with their full beards, his was truly one-in-a-generation. He was... a Dragonbeard! One of the fabled heroes of old that served as barber to the ancient dragons. But, alas, humankind doesn’t hold the same traditions as Dwarves about their quasi-religious figures. The constant nettling and mockery has set him a bit on edge, though his inner rage is a source of great retributive strength.</p>
			</div>
		</div>
		<div class="mini switch">
			<img src="https://i.ibb.co/Cwh9KDK/mini-H-Spike.png" alt="Spike miniature" />
		</div>
		<div class="card switch">
			<img src="https://i.ibb.co/Ss57J4v/Spike.png" alt="Spike profile card" width="531" height="380" />
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