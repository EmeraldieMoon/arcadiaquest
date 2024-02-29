
<!doctype html>
<!-- Template bios Heroes -->
<head>
	<title>Prince Aaron | Arcadia Quest</title>
		<link rel="stylesheet" href="css/normalize.min.css">
		<link rel="stylesheet" href="css/main6.css">
		<script type="text/javascript" src="https://raw.github.com/LeaVerou/prefixfree/master/prefixfree.min.js"></script>
		<style>body {background:#15495F}</style>
</head>
<body>
	<div class="bioPage Hero" style="background:url('https://i.ibb.co/xD2kWkk/f-Prince-Aaron.jpg') no-repeat scroll 0 0 #fff">
		<div class="textFrame switch ">
			<div class="bioText">
				<h1>Prince Aaron</h1>
				<p class="quote">“Chaaarge! CHAAAAAARGE!”</p>
				<p>For a crown prince that always leads from the front, it's amazing that Prince Aaron is still alive, let alone as relatively unscathed as he is. Unusually Blessed, it's perhaps because of his invincible reputation that those that follow him are so inspired, and his opponents so cowed (or perhaps it's because of his incredibly loud shouty voice). Nothing will stand in his way to reclaiming the throne for the glory of the royal family! Just keep that shady Newt fella away from him.</p>
			</div>
		</div>
		<div class="mini switch">
			<img src="https://i.ibb.co/fF5vd9N/mini-H-Prince-Aaron.png" alt="Prince Aaron miniature" />
		</div>
		<div class="card switch">
			<img src="https://i.ibb.co/QPSh0BG/Prince-Aaron.jpg" alt="Prince Aaron profile card" width="380" height="531" />
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