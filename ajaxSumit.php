<?php
if($_POST["message"]) {
    mail("hareshkharwa@gmail.address", "Form to email message", $_POST["message"], "From: haresh@chalotours.com");
}
?>
