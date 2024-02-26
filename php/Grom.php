
<!doctype html>
<!-- Template bios Heroes -->
<head>
	<title>Grom | Arcadia Quest</title>
		<link rel="stylesheet" href="css/normalize.min.css">
		<link rel="stylesheet" href="css/main6.css">
		<script type="text/javascript" src="https://raw.github.com/LeaVerou/prefixfree/master/prefixfree.min.js"></script>
		<style>body {background:#15495F}</style>
</head>
<body>
	<div class="bioPage Hero" style="background:url('https://i.ibb.co/MCv0bg5/fGrom.jpg') no-repeat scroll 0 0 #fff">
		<div class="textFrame switch">
			<div class="bioText">
				<h1>Grom</h1>
				<p class="quote">“GGGGRRRRAAAAAAAAAAAGGGGGH<br/>HHHHHHHHHHH!!!!!!”</p>
				<p>As a tiny barbarian, Grom was told that ‘practice makes perfect’, and the young Grom took it to heart… perhaps a little too literally. Grom prefers not to walk anywhere. He fights his way from place to place. He does not eat dinner. He conquers it! He does not take out the trash. He forces it into exile! He does not bathe… er, because, barbarian! In all the world, Grom fears only one thing. It is the greatest opponent he has ever faced. No matter his wit, no matter his cunning, it matches him move for move, and stalks him everywhere he goes: His shadow.</p>
			</div>
		</div>
		<div class="mini switch">
			<img src="https://i.ibb.co/N1QbwqZ/mini-H-Grom.png" alt="Grom miniature" />
		</div>
		<div class="card switch">
			<img src="https://i.ibb.co/v4xb99J/Grom.png" alt="Grom profile card" width="531" height="380" />
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
		$(".textFrame").show(10);
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