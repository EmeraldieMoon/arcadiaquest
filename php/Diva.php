
<!doctype html>
<!-- Template bios Heroes -->
<head>
	<title>Diva | Arcadia Quest</title>
		<link rel="stylesheet" href="css/normalize.min.css">
		<link rel="stylesheet" href="css/main6.css">
		<script type="text/javascript" src="https://raw.github.com/LeaVerou/prefixfree/master/prefixfree.min.js"></script>
		<style>body {background:#15495F}</style>
</head>
<body>
	<div class="bioPage Hero" style="background:url('Img/fDiva.jpg') no-repeat scroll 0 0 #fff">
		<div class="textFrame switch">
			<div class="bioText">
				<h1>Diva</h1>
				<p class="quote">“If I always did what I was told, I’d still be a peasant.”</p>
				<p>In the tiny hamlet of Remy, Diva grew up with visions granted by the gods. She glimpsed the future and saw herself covered in dirt, surrounded by monsters, and on her last legs. The warning was clear: do not follow the warrior’s path. But Diva, ever the stubborn heart, had a talent for combat and an indomitable spirit. She bore a soldier’s heart. She felt that, perhaps, the gods were warning of something else: death by dirt. She could see herself in gleaming Sunguard’s armor, standing over her defeated enemies, perfect hair flowing in the breeze. Clearly, this was what the gods intended. She traveled to Arcadia at age 16, enrolled in the academy, and has never looked back. Now a full knight, she spends hour upon hour polishing her own weapons and armor, since lazy squires can’t be trusted.</p>
			</div>
		</div>
		<div class="mini switch">
			<img src="Img/mini-H-Diva.png" alt="Diva miniature" />
		</div>
		<div class="card switch">
			<img src="Img/card-H-Diva.png" alt="Diva profile card" width="531" height="380" />
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