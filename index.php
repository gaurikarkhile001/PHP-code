<!DOCTYPE html>
<html>
<head>
    <title>My First PHP Page</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Welcome to My PHP Page!</h1>
        <p>This page is running on a LAMP server.</p>
        <p>Current Server Time: <?php echo date("Y-m-d H:i:s"); ?></p>
        <p>Your IP Address: <?php echo $_SERVER['REMOTE_ADDR']; ?></p>
        <h2>PHP Info</h2>
        <p><a href="phpinfo.php">View PHP Info</a></p>
    </div>
    <footer>
        &copy; <?php echo date("Y"); ?> My PHP Website. All rights reserved.
    </footer>
</body>
</html>
