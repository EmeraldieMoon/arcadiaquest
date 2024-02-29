
<!doctype html>
<!-- Template bios Heroes -->
<head>
	<title>Viktor | Arcadia Quest</title>
		<link rel="stylesheet" href="css/normalize.min.css">
		<link rel="stylesheet" href="css/main6.css">
		<script type="text/javascript" src="https://raw.github.com/LeaVerou/prefixfree/master/prefixfree.min.js"></script>
		<style>body {background:#15495F}</style>
</head>
<body>
	<div class="bioPage Hero" style="background:url('https://i.ibb.co/vj87Bc0/fViktor.jpg') no-repeat scroll 0 0 #fff">
		<div class="textFrame switch ">
			<div class="bioText">
				<h1>Viktor</h1>
				<p class="quote">“Of course I hate eternal night! It makes the hunting too easy.”</p>
				<p>Viktor is the ultimate monster hunter. There is practically no species he hasn’t stalked, and the rarer the better. It began as simple hunting for food and game, but, by his teens, mere animals posed no challenge. He sought far smarter game… but settled for orcs and trolls at the time. As his skills and reputation grew, he sought greater and grander challenges. Mythological creatures, tyrannical warlords, and he’s even said to have hunted a god once (though he only smirks when asked about that). But now, with the bounty out for Arcadia, he believes he’s found his biggest challenge: To hunt an entire CITY!</p>
			</div>
		</div>
		<div class="mini switch">
			<img src="https://i.ibb.co/82Zwgs2/mini-H-Viktor.png" alt="Viktor miniature" />
		</div>
		<div class="card switch">
			<img src="https://i.ibb.co/0CcrmKg/Viktor.jpg" alt="Viktor profile card" width="531" height="380" />
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