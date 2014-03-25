<?php 
$pageTitle= 'Upload file';
include 'header.php';

$file = $_FILES['picture']['name'];

if (file_exists("uploads/" . $_FILES['picture']['name'])){
   echo $_FILES['picture']['name'] . " already exists. ";
}
else {
move_uploaded_file($_FILES['picture']['tmp_name'], "uploads/" . $_FILES['picture']['name']);
  echo "Recorded in: " . "uploads/" . $_FILES['picture']['name'];
 }
?>
<div><a href="files.php">Files list</a></div>
<div><a href="destroysession.php">Log out</a></div>

<form method="POST" enctype="multipart/form-data">
<div>Picture:<input type="file" name="picture"/></div>
<div><input type="submit" value="Upload file"/></div>
<a href="files.php">Back</a>
<?php
include 'footer.php';
?>
