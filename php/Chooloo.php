
<!doctype html>
<!-- Template bios Heroes -->
<head>
	<title>Chooloo | Arcadia Quest</title>
		<link rel="stylesheet" href="css/normalize.min.css">
		<link rel="stylesheet" href="css/main6.css">
		<script type="text/javascript" src="https://raw.github.com/LeaVerou/prefixfree/master/prefixfree.min.js"></script>
		<style>body {background:#15495F}</style>
</head>
<body>
	<div class="bioPage Hero" style="background:url('https://i.ibb.co/tpc7wv6/fChooloo.jpg') no-repeat scroll 0 0 #fff">
		<div class="textFrame switch ">
			<div class="bioText">
				<h1>Chooloo</h1>
				<p class="quote">“Who's making all that noise???”</p>
				<p>Already sleeping restlessly due to the sudden rotation of the planet by Arcadia centuries ago, Chooloo has been roused from its eons-long nap by the sudden stop. The planet destroyer is still a growing child and needs its sleep, and is now EXTREMELY annoyed.<br />Whether Chooloo usurps Lord Fang to keep the world permanently locked in night (some quiet at last), or joins the Heroes to start it spinning again (kind of like a gentle rocking motion, very soothing) will be up to you! It doesn't matter much to Chooloo, it just wants to get back to sleep so as to be nice and fresh for the end times.</p>
			</div>
		</div>
		<div class="mini switch">
			<img src="https://i.ibb.co/1MkgnVb/mini-H-Chooloo.png" alt="Chooloo miniature" />
		</div>
		<div class="card switch">
			<img src="https://i.ibb.co/QPr6jSL/Bob.jpg" alt="Chooloo profile card" width="531" height="380" />
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