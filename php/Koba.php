
<!doctype html>
<!-- Template bios Heroes -->
<head>
	<title>Koba | Arcadia Quest</title>
		<link rel="stylesheet" href="css/normalize.min.css">
		<link rel="stylesheet" href="css/main6.css">
		<script type="text/javascript" src="https://raw.github.com/LeaVerou/prefixfree/master/prefixfree.min.js"></script>
		<style>body {background:#15495F}</style>
</head>
<body>
	<div class="bioPage Hero" style="background:url('https://i.ibb.co/JFvVTkD/fKoba.jpg') no-repeat scroll 0 0 #fff">
		<div class="textFrame switch ">
			<div class="bioText">
				<h1>Koba</h1>
				<p class="quote">“These mysteries will be mine. Oh yes, they will be mine.”</p>
				<p>Insatiably curious since an early age, Koba demonstrated an obsession for anything and everything related to adventure. Swords, spells, sneaking… you name it, she wanted to master it. When adventurers would stay at her grandparents' tavern, she'd virtually appear next to them wherever they went, and hound them for tales of adventure and monster-slaying techniques. Some indulged her precociousness. Others did not, and she has an intense dislike for anyone that she suspects is hiding something from her. When she was of age, she shouldered her swords, staffs, and daggers (quite a trick) and marched off for a life of adventure and excitement in the distant land called Arcadia.</p>
			</div>
		</div>
		<div class="mini switch">
			<img src="https://i.ibb.co/3NB7QP4/mini-H-Koba.png" alt="Koba miniature" />
		</div>
		<div class="card switch">
			<img src="https://i.ibb.co/BPv5s4s/Koba.jpg" alt="Koba profile card" width="531" height="380" />
		</div>
		<div class="switchButttons">
			<span class="switchBio " title="Show biography"></span>
			<span class="switchMini " title="Show miniature"></span>
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