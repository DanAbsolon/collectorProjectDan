<?php

require 'src/db.php';

require 'src/functions.php';

?>

<!DOCTYPE html>
<html lang="en" lang="vi">
<head>
	<title>Bookshelf</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://kit.fontawesome.com/5139af5f3f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div tabindex='0'><h1>a bookshelf</h1></div>
    <?php echo displayBooks($books);
    ?>
    <p></p>
</body>
</html>

