<?php
$to = "$_REQUEST['email']";
$subject = "Bose &ldquo;Bring It Home!&rdquo; Program – Enrollment Confirmation";

$message = "
<html>
<head>
    <title></title>
</head>

<body>
<div>
<img src="/assets/images/hero.jpg" alt="hero" style="width:100%;" />
</div>

    <p>Bose et leur partenaire promotionnel Promosis, Inc. vous adressent ce message.  Pour assurer la réception de nos messages dans votre messagerie (non pas votre dossier ordure ou dossier en bloc), merci d’ajouter l’adresse suivante à votre carnet d’adresses bringithome@email-hub.com.</p>

    <p>Cher/Chère [$_REQUEST['firstname']],<br />
    <br />
    Merci de vous inscrire au programme de ventes &#171; Gagnez-moi &#187;  qui vous donne la chance de remporter un système de musique SoundTouch&#8482; de Bose&#174;.</p>

    <p>Identifiez-vous sur le site pour soumettre chacune de vos ventes d'un système SoundTouch&#8482; admissible.<br />
    <br />
    Si vous vous qualifiez pour un prix, celui-ci vous parviendra à l’adresse que vous avez fournie au moment de votre inscription au programme.  Si votre adresse d’expédition a été modifiée depuis votre inscription, veuillez nous en aviser.</p>

   <div>**********</div><br />
    <div>Votre adresse courriel d’inscription est la suivante:  [$_REQUEST['email']]</div><br />
    <div>***********</div>
    <br />
    Encore une fois, merci de prendre part au programme et bonne chance!<br />
    <br />
    <a href="https://bose-bringithome.perfectprize.com/rulesFR.html">les règlements officiels de participation</a>
    <br />
</div>
</div>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <bringithome@email-hub.com>' . "\r\n";
/* $headers .= 'Cc: someone@someplace.com' . "\r\n"; */

mail($to,$subject,$message,$headers);
?>