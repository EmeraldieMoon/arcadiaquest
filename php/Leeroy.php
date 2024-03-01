
<!doctype html>
<!-- Template bios Heroes -->
<head>
	<title>Leeroy | Arcadia Quest</title>
		<link rel="stylesheet" href="css/normalize.min.css">
		<link rel="stylesheet" href="css/main6.css">
		<script type="text/javascript" src="https://raw.github.com/LeaVerou/prefixfree/master/prefixfree.min.js"></script>
		<style>body {background:#15495F}</style>
</head>
<body>
	<div class="bioPage Hero" style="background:url('https://i.ibb.co/Gc9sDh4/fLeeroy.jpg') no-repeat scroll 0 0 #fff">
		<div class="textFrame switch ">
			<div class="bioText">
				<h1>Leeroy</h1>
				<p class="quote">“Why is everyone always shouting my name? I’m not Norm.”</p>
				<p>Leeroy is known for his startling, epic charges. Monsters are often so stunned that they simply drop their defenses. Leeroy never quite understood the need for advanced tactics and battle strategies. The objective is to fight, right? So why wait? Leeroy’s signature battlecry has earned him fame from one end of the realm to the other, although, when it comes to stealth missions, he’s usually best employed as a distraction. Just let him loose, and then exploit the monsters’ weaknesses. The fact that they’re rolling around on the ground laughing just makes them easier to take down.</p>
			</div>
		</div>
		<div class="mini switch">
			<img src="https://i.ibb.co/10HnWtG/mini-H-Leeroy.png" alt="Leeroy miniature" />
		</div>
		<div class="card switch">
			<img src="https://i.ibb.co/RhynXSd/Leeroy.jpg" alt="Leeroy profile card" width="531" height="380" />
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