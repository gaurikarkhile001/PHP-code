# My PHP Page

This project is a simple PHP web page that displays the current server time, the user's IP address, and provides a link to view detailed PHP configuration information.

## Project Structure

The project consists of the following files:

- `index.php`: The main PHP file that generates the HTML content for the web page.
- `phpinfo.php`: A PHP file that displays detailed information about the PHP configuration.
- `styles.css`: A CSS file that contains the styles for the web page.

## Files

### index.php

This file generates the main content of the web page. It includes the following features:

- Displays a welcome message.
- Shows the current server time using the `date` function.
- Displays the user's IP address using the `$_SERVER['REMOTE_ADDR']` variable.
- Provides a link to view detailed PHP configuration information by linking to `phpinfo.php`.

```php
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
