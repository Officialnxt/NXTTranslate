<?php
// Get the users language
$la = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
$filename = "$la.php"; // for example: de.php, fr.php, en.php
//Check if the file for that language exists
if (file_exists($filename)) {
     // If it exists, require that file
     require($filename);
}else{
    //If it doesn't exist, use english.
     require("en.php");
}

echo $lang['Home'];

echo $lang['About'];

echo $lang['Search'];
?>
