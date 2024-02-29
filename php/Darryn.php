<!doctype html>
<!-- Template bios Heroes -->
<head>
	<title>Darryn | Arcadia Quest</title>
		<link rel="stylesheet" href="css/normalize.min.css">
		<link rel="stylesheet" href="css/main6.css">
		<script type="text/javascript" src="https://raw.github.com/LeaVerou/prefixfree/master/prefixfree.min.js"></script>
		<style>body {background:#15495F}</style>
</head>
<body>
	<div class="bioPage Hero" style="background:url('https://i.ibb.co/m0ThDPN/fDarryn.jpg') no-repeat scroll 0 0 #fff">
		<div class="textFrame switch ">
			<div class="bioText">
				<h1>Darryn</h1>
				<p class="quote">“What’s that, dear? Why yes, you do seem a bit thirsty.”</p>
				<p>Darryn loves his sword. Perhaps a bit too much. Not only does he talk to it, he holds long, meaningful conversations with it. When asked about this peculiarity, Darryn insists he’s just talking ‘AROUND’ the sword. Not ‘TO’ the sword. (Yes, that’s much less disturbing.) Regardless, Darryn is just about the most enthusiastic warrior around. He’ll wade straight into any fray, preferring unwounded enemies to those on their last legs. And, if his blade really IS talking to him, well, at least it’s not distracting him from his work.</p>
			</div>
		</div>
		<div class="mini switch">
			<img src="https://i.ibb.co/Bqntvt3/mini-H-Darryn.png" alt="Darryn miniature" />
		</div>
		<div class="card switch">
			<img src="https://i.ibb.co/F6ht503/Darryn.jpg" alt="Darryn profile card" width="531" height="380" />
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