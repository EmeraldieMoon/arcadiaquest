
<!doctype html>
<!-- Template bios Heroes -->
<head>
	<title>Seth | Arcadia Quest</title>
		<link rel="stylesheet" href="css/normalize.min.css">
		<link rel="stylesheet" href="css/main6.css">
		<script type="text/javascript" src="https://raw.github.com/LeaVerou/prefixfree/master/prefixfree.min.js"></script>
		<style>body {background:#15495F}</style>
</head>
<body>
	<div class="bioPage Hero" style="background:url('https://i.ibb.co/61X7KRG/fSeth.jpg') no-repeat scroll 0 0 #fff">
		<div class="textFrame switch">
			<div class="bioText">
				<h1>Seth</h1>
				<p class="quote">“Psst. Hey, buddy. Wanna buy a wand?”</p>
				<p>Seth was admitted to Arcadia University on a scholarship, and was expelled three days later, just to set the record for shortest attendance. An inveterate showoff, Seth was unhappy with the plodding pace at the University, and figured he could simply learn it all on his own. But books are expensive, and arcane knowledge rare. To fund his thirst for learning, Seth picked up the artificing trade, and sells his wands and scrolls to anyone with the necessary coin. Once he qualified for Guild memberships, he took his wares on the road, questing and peddling, and never looked back. Now with Arcadia fallen, he is determined to return and be the first to liberate the University (or rather liberate the University Library of its excess grimoires.)</p>
			</div>
		</div>
		<div class="mini switch">
			<img src="https://i.ibb.co/HT6th4j/mini-H-Seth.png" alt="Seth miniature" />
		</div>
		<div class="card switch">
			<img src="https://i.ibb.co/x63bghH/Seth.png" alt="Seth profile card" width="531" height="380" />
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