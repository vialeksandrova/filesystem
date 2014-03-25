<?php

$pageTitle= 'Files list';
include 'header.php';
?>
<div><a href="upload.php">Upload file</a></div>
<div><a href="destroysession.php">Log out</a></div>
<?php
$userDir='./uploads';
$dirContent= scandir($userDir);

if(count($dirContent) <= 2) {//първите 2 елемента са . и ..
echo '<p>No uploaded files</p>';
}
else{
echo '<table border=3>
<tr>
<td>File name</td>
<td>Size</td>
</tr>';

$count = count($dirContent);
for($i = 2; $i < $count; $i++) {
$size = filesize($userDir . DIRECTORY_SEPARATOR . $dirContent[$i]);

echo '<tr><td><a href=readfile.php>'.$dirContent[$i] .'</a></td><td>'.$size.'</td></tr>';
}
echo '</table>';
}
?>
<?php
include 'footer.php';
?>
