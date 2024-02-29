
<!doctype html>
<!-- Template bios Heroes -->
<head>
	<title>Elysia | Arcadia Quest</title>
		<link rel="stylesheet" href="css/normalize.min.css">
		<link rel="stylesheet" href="css/main6.css">
		<script type="text/javascript" src="https://raw.github.com/LeaVerou/prefixfree/master/prefixfree.min.js"></script>
		<style>body {background:#15495F}</style>
</head>
<body>
	<div class="bioPage Hero" style="background:url('https://i.ibb.co/5r2NDQk/fElysia.jpg') no-repeat scroll 0 0 #fff">
		<div class="textFrame switch ">
			<div class="bioText">
				<h1>Elysia</h1>
				<p class="quote">“Fear my gaze. FEAR IT!!!”</p>
				<p>A medusa-in-training, Elysia's powers are coming along nicely. But, she hadn't quite earned her master's degree when the invasion banished everyone from Arcadia. She can stun with a look, but alas, her career as a 'real-life' sculptor is on hold. (Yes, 'real-life'. Not 'still-life'.) While some University students often wondered about the morality of her particular field of study, Professor Morgan assured everyone that she was one of his most promising students. This wasn't the ethical violation they were looking for. We can go about our business. Move along.</p>
			</div>
		</div>
		<div class="mini switch">
			<img src="https://i.ibb.co/XpWBqFs/mini-H-Elysia.png" alt="Elysia miniature" />
		</div>
		<div class="card switch">
			<img src="https://i.ibb.co/TPvdPzj/Elysia.jpg" alt="Elysia profile card" width="531" height="380" />
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