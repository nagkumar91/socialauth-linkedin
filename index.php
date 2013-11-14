<?php
/**
 * Created by JetBrains PhpStorm.
 * User: nagkumar
 * Date: 13/11/13
 * Time: 3:52 PM
 * To change this template use File | Settings | File Templates.
 */
define('API_KEY',      '759xvuxidxbcq8'                                          );
define('API_SECRET',   'ltbG02m8ujFS2qYS'                                       );
define('REDIRECT_URI', 'http://0.0.0.0:8080/authorized.php');
define('SCOPE',        'r_basicprofile r_emailaddress rw_nus'                        );

// You'll probably use a database
session_name('linkedin');
session_start();

?>

<!doctype html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>Homepage</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>
<body>
    <a href="auth.php">Login Via LinkedIN</a>
<!--    <button onclick="login_linkedin();">Login</button>-->
    <script type="text/javascript" src="assets/js/jquery-latest.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){

        });

    </script>
</body>
</html>
