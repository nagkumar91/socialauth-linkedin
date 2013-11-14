<?php
/**
 * Created by JetBrains PhpStorm.
 * User: nagkumar
 * Date: 14/11/13
 * Time: 11:33 AM
 * To change this template use File | Settings | File Templates.
 */
require('auth.php');

echo "Redirect Page <br>";
if(isset($_GET['eror']))    {
    echo $_GET['error']."<br>";
    echo $_GET['error_description']."<br>";
}
else{
    $user_auth_code = $_GET['code'];
    $user_state = $_GET['state'];
    $user = fetch('GET', '/v1/people/~:(firstName,lastName)');
    print "Hello $user->firstName $user->lastName.";
}

//get this http://api.linkedin.com/v1/people/id=0kSItApkAT:(id,formatted-name,first-name,last-name)?format=json