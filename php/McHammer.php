
<!doctype html>
<!-- Template bios Heroes -->
<head>
	<title>McHammer | Arcadia Quest</title>
		<link rel="stylesheet" href="css/normalize.min.css">
		<link rel="stylesheet" href="css/main6.css">
		<script type="text/javascript" src="https://raw.github.com/LeaVerou/prefixfree/master/prefixfree.min.js"></script>
		<style>body {background:#15495F}</style>
</head>
<body>
	<div class="bioPage Hero" style="background:url('Img/fMcHammer.jpg') no-repeat scroll 0 0 #fff">
		<div class="textFrame switch ">
			<div class="bioText">
				<h1>McHammer</h1>
				<p class="quote">“McSTOP! It be MY time, laddie!!”</p>
				<p>Every year at the McHighland McGames, the McClans of the McNorthlands send their mightiest warriors to compete for the title of McGrand McHigh McHammer (which is really a mouthful). And for the last six years running, the same McClan has held the title. Now, their champion has ventured south to Arcadia and enlisted his mighty hammer in the cause of McRight and McJustice! (Seriously, that’s exactly how his press release reads…) Accents notwithstanding, the McGrand McHammer is a berserking whirlwind on the battlefield. The more enemies, the better!</p>
			</div>
		</div>
		<div class="mini switch">
			<img src="Img/mini-H-McHammer.png" alt="McHammer miniature" />
		</div>
		<div class="card switch">
			<img src="Img/card-H-McHammer.png" alt="McHammer profile card" width="531" height="380" />
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