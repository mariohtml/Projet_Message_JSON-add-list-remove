<html>
	<head>
		<title>Test extrer les messages</title>
		<link rel="stylesheet" href="css/style.css" media="screen">
		<link rel="stylesheet" type="text/css" href="css/menu.css"/>
		<meta charset="utf-8">
	</head>
	<body>
	<?php include 'navigation.phtml'; ?>
		<div class="header">
			<h2>{ JSON Suppression des Messages !!!}</h2>
		</div>
		
	<div class="body1">
		
		<div class="container">
			<div class="contact-box_messages">
				
				<h3 align="center" style="margin-bottom:40px;">Les Messages</h3>
				
				<?php
						$messages = file_get_contents('messages.json') ;
						$messages = json_decode($messages, true) ;
						
						for($i = 0; $i<count($messages) ; $i++) :
				?>
				
				<div class="wrap">
					<div class="icon">
						
					</div><br></br>
					<div class="content">
						<!--<b>Nom de l'user</b> <br></br>-->
						<b>Nom:</br>  <?php echo $messages[$i]['nom'];?></b> <br></br>
						<p>Message:</br>
							<?php echo $messages[$i]['contenu'];?>
						</p>
						<b class="date"><?php echo $messages[$i]['date']; ?></b>
					</div><br></br><br></br>
					<a href="traitement.php?del=<?php echo $messages[$i]['id']; ?>" class="action">X</a>
				</div><br></br><br></br>
				<?php 					
					endfor;
				?>	
			</div>
		
		</div>
	
	</div>
	</body>
</html>	