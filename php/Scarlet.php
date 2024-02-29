<!doctype html>
<!-- Template bios Heroes -->
<head>
	<title>Scarlet | Arcadia Quest</title>
		<link rel="stylesheet" href="css/normalize.min.css">
		<link rel="stylesheet" href="css/main6.css">
		<script type="text/javascript" src="https://raw.github.com/LeaVerou/prefixfree/master/prefixfree.min.js"></script>
		<style>body {background:#15495F}</style>
</head>
<body>
	<div class="bioPage Hero" style="background:url('https://i.ibb.co/71Z4mnG/fScarlet.jpg') no-repeat scroll 0 0 #fff">
		<div class="textFrame switch">
			<div class="bioText">
				<h1>Scarlet</h1>
				<p class="quote">“I steal from the rich and give to the poor. Then steal it all over again. Because why make things easy?”</p>
				<p>How exactly Scarlet manages to maintain several Guild memberships, a ten-thousand gold bounty, AND never get caught is a complete mystery. Yet, manage it she does, and is in fine standing with even the Sunguard. They’d lock her up on-sight, if she wasn’t so damned sneaky. She even considered turning herself in once, just to collect the bounty. But she never could figure how she’d steal it from herself, which is really the only hitch in the plan. A master of deception, the blade, and stealth, Scarlet is a valuable addition to any quest… so long as no one was expecting any loot. It’s always inexplicably missing by the time her companions arrive.</p>
			</div>
		</div>
		<div class="mini switch">
			<img src="https://i.ibb.co/RHYgBSB/mini-H-Scarlet.png" alt="Scarlet miniature" />
		</div>
		<div class="card switch">
			<img src="https://i.ibb.co/xXVPD8k/Scarlet.png" alt="Scarlet profile card" width="531" height="380" />
		</div>
		<div class="switchButttons">
			<span class="switchBio" title="Show biography"></span>
			<span class="switchMini" title="Show miniature"></span>
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