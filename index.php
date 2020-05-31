<html>
	<head>
		<title>Test</title>
		<link rel="stylesheet" href="css/style.css" media="screen">
		<link rel="stylesheet" type="text/css" href="css/menu.css"/>
	</head>
	<body>
	<?php include 'navigation.phtml'; ?>
		<div class="header">
			<h2>{ JSON The day is my enemy... but... The Night my Fate !!!  Push the Tempo... }</h2>
		</div>
		
	<div class="body">
		
		<div class="container1">
			<div class="contact-box">
			
				<span> Laissez un message SVP</span> <br></br>
				
				<form action="traitement.php" method="POST">
					<label for="nom" style="color: white; font-size: 20px;">Votre nom:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
					<input type="text" name="nom" id="nom"> <br></br>
					<label for="mail" style="color: white; font-size: 20px;">Votre e-mail:&nbsp&nbsp&nbsp</label>
					<input type="email" name="email" id="email"> <br></br>
					<label for="message" style="color: white; font-size: 20px;">Votre message:</label>
					<textarea name="message" id="message" style="height:140px; width: 171px;"></textarea>
					<br></br>
					<button type="submit">Deposer le message</button><br></br>
					<a style="color: white; font-size: 20px;" href="https://www.youtube.com/watch?v=JEq10L7u3SM&list=RD4v-73vpBbps&index=24">SON</a>
				</form>	
			</div>
		</div>
	</div>
	</body>
</html>	