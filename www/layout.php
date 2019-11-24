<!DOCTYPE html>
<html lang="fr">
	<head>
	    <meta charset="UTF-8">
	    <title>Portfolio</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
	    <script
			  src="https://code.jquery.com/jquery-3.4.1.js"
			  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
			  crossorigin="anonymous">
		</script>
	    <link rel="stylesheet" href="www/css/normalize.css">
	    <link rel="stylesheet" href="www/css/style.css"> 
	</head>
	<body>
	    <header>
	        <div class="container">
	            <a href="index.php"><i class="fas fa-camera-retro"></i><span>Ajax display</span></a>
	            <nav>
	                <a class="homePhoto" href="index.php?page=artist">Artist</a>
	                <a href="#">Services</a>
	                <a href="#">Technologies</a>
	                <a href="www/cv/cv_william_machi.pdf" target="_blank">About Me</a>
	                <?php if(isAdmin()): ?>
	                	<a href="index.php?page=disconnect">Disconnect</a>
	                <?php endif; ?>
	            </nav>
	        </div>
	    </header>
	    
	    <main>
	        <div class="container">
	            <?php if(isset($message)): ?>
	                <p><?= $message ?></p>
	            <?php endif; ?>
	            <?php include $template ?>
	        </div>
	    </main>
	    
	    <footer>
	        <div class="container">
	            <span>William MACHI</span>
	            <div>
	                <a href="https://github.com/Uriostachi" target="_blank"><i class="fab fa-github"></i></a>
	                <a href="https://www.linkedin.com/in/william-machi-aa6ba4196"  target="_blank"><i class="fab fa-linkedin"></i></a>
	            </div>
	        </div>
	    </footer>
	    <script src="www/js/AddArtist.js"></script>
	    <script src="www/js/home.js"></script>
	</body>
</html>