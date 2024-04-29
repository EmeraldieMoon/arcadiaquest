
<!doctype html>
<!-- Template bios Heroes -->
<head>
	<title>Morgan | Arcadia Quest</title>
		<link rel="stylesheet" href="css/normalize.min.css">
		<link rel="stylesheet" href="css/main6.css">
		<script type="text/javascript" src="https://raw.github.com/LeaVerou/prefixfree/master/prefixfree.min.js"></script>
		<style>body {background:#15495F}</style>
</head>
<body>
	<div class="bioPage Hero" style="background:url('Img/fMorgan.jpg') no-repeat scroll 0 0 #fff">
		<div class="textFrame switch ">
			<div class="bioText">
				<h1>Morgan</h1>
				<p class="quote">“No. I will not smile. Nor say ‘cheese’. Or any other bloody fool thing.”</p>
				<p>Morgan has been an institution at the University in Arcadia since as long as anyone can remember. In fact, come to think of it… no one knows just where he came from. The placard outside his office has always been there: Professor Morgan, Master of Necromantic Studies (And Totally NOT A Vampire). Tenure has its advantages, one supposes. But now, with Arcadia invaded, Morgan has found himself banished along with everyone else. He grumbles, and sighs, and would much rather get back to work, but since the University is now home to new orcish faculty (and their curriculum of Marauding Studies), he must regretfully take up his staff and join a Guild on the quest to free Arcadia.</p>
			</div>
		</div>
		<div class="mini switch">
			<img src="Img/mini-H-Morgan.png" alt="Morgan miniature" />
		</div>
		<div class="card switch">
			<img src="Img/card-H-Morgan.png" alt="Morgan profile card" width="531" height="380" />
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