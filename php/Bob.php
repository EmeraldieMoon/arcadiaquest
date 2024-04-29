<!doctype html>
<!-- Template bios Heroes -->
<head>
	<title>Bob the Conjurer | Arcadia Quest</title>
		<link rel="stylesheet" href="css/normalize.min.css">
		<link rel="stylesheet" href="css/main6.css">
		<script type="text/javascript" src="https://raw.github.com/LeaVerou/prefixfree/master/prefixfree.min.js"></script>
		<style>body {background:#15495F}</style>
</head>
<body>
	<div class="bioPage Hero" style="background:url('Img/fBob.jpg') no-repeat scroll 0 0 #fff">
		<div class="textFrame switch ">
			<div class="bioText">
				<h1>Bob the Conjurer</h1>
				<p class="quote">“No, no, I don't blow things up. You're thinking of my brother, the Enchanter.”</p>
				<p>As a conjurer, Bob's skills work best on, alas, himself. While some have called this 'teleportation', Bob insists that any movement is on the world's part, not his. The world simply repositions itself relative to Bob, not the other way around. Although unproven at this time, if found to be true, Bob would rank as the most powerful conjurer the universe has ever known. But, before he can get back to work in his University labs, the monster invasion must be dealt with. They will soon know what it means to challenge the might of Bob: Conjurer Supreme!</p>
			</div>
		</div>
		<div class="mini switch">
			<img src="Img/mini-H-Bob.png" alt="Bob the Conjurer miniature" />
		</div>
		<div class="card switch">
			<img src="Img/card-H-Bob.png" alt="Bob the Conjurer profile card" width="531" height="380" />
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