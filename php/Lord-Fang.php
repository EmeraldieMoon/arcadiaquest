
<!doctype html>
<!-- Template bios Heroes -->
<head>
	<title>Lord Fang | Arcadia Quest</title>
		<link rel="stylesheet" href="css/normalize.min.css">
		<link rel="stylesheet" href="css/main6.css">
		<script type="text/javascript" src="https://raw.github.com/LeaVerou/prefixfree/master/prefixfree.min.js"></script>
		<style>body {background:#15495F}</style>
</head>
<body>
	<div class="bioPage Hero" style="background:url('Img/fLord-Fang.jpg') no-repeat scroll 0 0 #fff">
		<div class="textFrame switch">
			<div class="bioText">
				<h1>Lord Fang</h1>
				<p class="quote">“Why do I do this, you ask? Because: vampire, obviously. What else would I do?”</p>
				<p>Lord Fang is a complicated man. The only son of the ancient Fang Dynasty, Lord Fang was ironically the only member of his house to embrace vampirism. And he loved it. The Midnight Mountains were the perfect place for the reclusive lord, and never needing to sleep allowed for long walks in his lonely castle, and many, many thousands of hours of productive brooding. And then those cursed Arcadians set the skies in motion, and ruined everything! Now that he’s seized their city and covered the lands in eternal darkness, he can get right back to pacing and brooding. If only those pesky heroes would keep their invasions down to a low roar…</p>
			</div>
		</div>
		<div class="mini switch">
			<img src="Img/mini-H-Lord-Fang.png" alt="Lord Fang miniature" />
		</div>
		<div class="card switch">
			<img src="Img/card-H-Lord-Fang.png" alt="Lord Fang profile card" width="531" height="380" />
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