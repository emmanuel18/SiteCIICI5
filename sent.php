<?php
    $destino="contacto@ciici.com.mx";
    $name= $_POST["Name"];
    $email= $_POST["Email"];
    
    $message= $_POST["message"];
    $content= "Nombre: " . $name . "\n E-mail: " . $email ."\nMensaje: " . $message;
    mail($destino,"Contacto desde sitio web", $content);
    header("Location:contact.html");
    
?>