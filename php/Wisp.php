
<!doctype html>
<!-- Template bios Heroes -->
<head>
	<title>Wisp | Arcadia Quest</title>
		<link rel="stylesheet" href="css/normalize.min.css">
		<link rel="stylesheet" href="css/main6.css">
		<script type="text/javascript" src="https://raw.github.com/LeaVerou/prefixfree/master/prefixfree.min.js"></script>
		<style>body {background:#15495F}</style>
</head>
<body>
	<div class="bioPage Hero" style="background:url('https://i.ibb.co/sRVRxJ5/fWisp.jpg') no-repeat scroll 0 0 #fff">
		<div class="textFrame switch">
			<div class="bioText">
				<h1>Wisp</h1>
				<p class="quote">"....."</p>
				<p>Once a thief in a land where ‘singing floors’ became popular among the gentry, Wisp made a name for himself by moving silently where such a thing should not have been possible. Unfortunately, this only drew attention to himself, which is really the last thing any thief wants. Beleaguered by his celebrity status, and surrounded by adoring fans, Wisp found it impossible to lead a proper life of crime in his home city of Favry. He spent most of his considerable fortune journeying far across the sea to distant Arcadia and made his home in the fabled Evershadow district and learned its streets like few others. Now that Arcadia has fallen, his skills will be needed once more.</p>
			</div>
		</div>
		<div class="mini switch">
			<img src="https://i.ibb.co/Hp3Y00W/mini-H-Wisp.png" alt="Wisp miniature" />
		</div>
		<div class="card switch">
			<img src="https://i.ibb.co/SfsZR2B/Wisp.png" alt="Wisp profile card" width="531" height="380" />
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