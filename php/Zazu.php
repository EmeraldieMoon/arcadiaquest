
<!doctype html>
<!-- Template bios Heroes -->
<head>
	<title>Zazu | Arcadia Quest</title>
		<link rel="stylesheet" href="css/normalize.min.css">
		<link rel="stylesheet" href="css/main6.css">
		<script type="text/javascript" src="https://raw.github.com/LeaVerou/prefixfree/master/prefixfree.min.js"></script>
		<style>body {background:#15495F}</style>
</head>
<body>
	<div class="bioPage Hero" style="background:url('Img/fZazu.jpg') no-repeat scroll 0 0 #fff">
		<div class="textFrame switch">
			<div class="bioText">
				<h1>Zazu</h1>
				<p class="quote">“Feel my inner calm’ they said… ‘Master your emotions’ they said…. Grrrrrr!!”</p>
				<p>As a young child, Zazu had rage issues. Which is to say he raged at any issue. Bedtime. Dinnertime. Lunchtime. Afternoons. Mornings. Zazu could even rage while asleep. His desperate parents had little choice but to cloister him with the Zen Monks of Tranquil Glade in the hopes that they could teach him a peace that he’d never known in life. Zazu and the monks tried, they really did, but, in the end, Zazu proved completely incapable of mastering the Zen state, which, obviously, infuriated him even more. And yet, in this circle, lay the key. Bye opening himself up to his inadequacy and the fury it causes, Zazu has mastered the perfect cycle of Furious Zen. Like all monks he prepares himself before battle by chanting, though, in Zazu’s case, grinding teeth and muttering takes the place of any meditative chant.</p>
			</div>
		</div>
		<div class="mini switch">
			<img src="Img/mini-H-Zazu.png" alt="Zazu miniature" />
		</div>
		<div class="card switch">
			<img src="Img/card-H-Zazu.png" alt="Zazu profile card" width="531" height="380" />
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