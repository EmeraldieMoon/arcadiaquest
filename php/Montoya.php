
<!doctype html>
<!-- Template bios Heroes -->
<head>
	<title>Montoya | Arcadia Quest</title>
		<link rel="stylesheet" href="css/normalize.min.css">
		<link rel="stylesheet" href="css/main6.css">
		<script type="text/javascript" src="https://raw.github.com/LeaVerou/prefixfree/master/prefixfree.min.js"></script>
		<style>body {background:#15495F}</style>
</head>
<body>
	<div class="bioPage Hero" style="background:url('Img/fMontoya.jpg') no-repeat scroll 0 0 #fff">
		<div class="textFrame switch ">
			<div class="bioText">
				<h1>Montoya</h1>
				<p class="quote">“You killed my rabbit. Prepare to die!”</p>
				<p>Montoya descends from a long family line of almost magical blacksmiths. The family secret was the golden Hare, a mystic creature that granted its owner superior skill with the forge. Commissioned by Lord Fang (in disguise) to craft him a peerless weapon, Montoya was betrayed at delivery (of course), the Hare accidentally slain during the scuffle. Whether or not Fang dealt the fatal, crunchy stomp is irrelevant o Montoya - he lives now only for vengeance! And loot, of course.</p>
			</div>
		</div>
		<div class="mini switch">
			<img src="Img/mini-H-Montoya.png" alt="Montoya miniature" />
		</div>
		<div class="card switch">
			<img src="Img/card-H-Montoya.png" alt="Montoya profile card" width="531" height="380" />
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