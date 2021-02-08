<?php
require './classe/mail.php';

$mail1 = new Email("jerome.conan@fondationface.org", "user@hotmail.com", "Bonjour, je suis le message pour l'exo 179","Test");

$mail1->send();