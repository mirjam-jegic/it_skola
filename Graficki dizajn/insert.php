<?php
 $path = 'data.txt';
 if (isset($_POST['ime']) && isset($_POST['email']) && isset($_POST['tekst'])) {
    $fh = fopen($path,"a+");
    $string = $_POST['ime'].' - '.$_POST['email'].' - '.$_POST['tekst']."\n";
    fwrite($fh,$string); // Write information to the file
    fclose($fh); // Close the file

    header('Location: thankyou.html');
exit();
 }
?>