<?php

$destinataire="aubinborissimotsebo@gmail.com";
$sujet="Bienvenue sur mon site web";
$message="<html><body>";

$message.="<h2>Bienvenue sur mon site web</h2>";

$message.="<p>Merci de votre intérêt pour notre site web. Voici quelques informations à propos de nous:</p>";

$message.="<ul>";
    $message.="<li>Notre adresse: 123 Rue de la Galette, 75009 Paris</li>";
    $message.="<li>Nous contacter: 01 23 45 67 89</li>";
    $message.="<li>Nos jours de service: Lundi - Vendredi, 9h - 18h</li>";

$message.="</ul>";

$headers=[
    "From"=>"aubinborissimotsebo@gmail.com",
    "Reply-To"=>"aubinborissimotsebo@gmail.com",
    "Content-Type"=>"text/html; charset=UTF-8"
];

if(mail($destinataire, $sujet, $message, $headers)){
    echo "le mail a ete envoyé";
}else{
 echo " le mail na pas ete envoyer";
}














