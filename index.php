<?php
session_start();


if($_SESSION['isLogged']==true){
echo '<a href="destroysession.php">Log out</a>';
}
else{
if($_POST){
$username=trim($_POST['username']);
$password=trim($_POST['pass']);
$error=false;
if($username!==user || $password!==qwerty){
echo '<p>Password or username are incorrect</p>';
$error=true;
}
if(!$error){//ако няма грешка се изпълнява
$_SESSION['isLogged']=true;
header('Location:files.php');
exit;
}
}
}

$pageTitle= 'Login';
include 'header.php';
?>
<form method="post">
<div>Name:<input type="text" name="username"></div>
<div>Password:<input type="password" name="pass"></div>
<div><input type="submit" value="Go"></div>
<?php
include 'footer.php';
?>
