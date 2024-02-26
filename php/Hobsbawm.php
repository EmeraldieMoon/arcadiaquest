
<!doctype html>
<!-- Template bios Heroes -->
<head>
	<title>Hobsbawm | Arcadia Quest</title>
		<link rel="stylesheet" href="css/normalize.min.css">
		<link rel="stylesheet" href="css/main6.css">
		<script type="text/javascript" src="https://raw.github.com/LeaVerou/prefixfree/master/prefixfree.min.js"></script>
		<style>body {background:#15495F}</style>
</head>
<body>
	<div class="bioPage Hero" style="background:url('https://i.ibb.co/rM5dQPV/f-Hobsbawm.jpg') no-repeat scroll 0 0 #fff">
		<div class="textFrame switch">
			<div class="bioText">
				<h1>Hobsbawm</h1>
				<p class="quote">“… therefore it must be perfectly obvious to even the most amateur understanding of simple physiologic processes that, when properly applied according to the Mendoclian Dactum and basic Theory of Arcane Diffusion and intoned with verbiage not at all dissimilar to proper pyromantic articulation, one will, inevitably and invariably with very little randomization, excepting for local disruptions in the ley convergence and accounting for proper celestial alignments, one will discover that any monster, particularly those of a mortal nature and not linked in any way to a pyroclastic elemental effusion, will expire at the proper ignition temperature. Now, turning to the undead, as both species and philosophy, consider…”</p>
				<p>--Excerpt of Professor Hobsbawm in battle. (Just imagine what his lectures are like.) </p>
			</div>
		</div>
		<div class="mini switch">
			<img src="https://i.ibb.co/0C9xWgd/mini-H-Hobsbawm.png" alt="Hobsbawm miniature" />
		</div>
		<div class="card switch">
			<img src="https://i.ibb.co/5K2YDVX/Hobsbawm.png" alt="Hobsbawm profile card" width="531" height="380" />
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