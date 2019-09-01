



<?php
$dest = "juanamaquin@gmail.com,  ";
//$destino="contacto@blgroup.pe";
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];


$cont=
        "name: ". $name .
        "\nEmail: " . $email .

        "\nMessage: " . $message ;

mail($dest,"Contact Juana ",$cont);



echo "<script>
alert('Sent Message');
window.location= '/cas222/final-form/template/Form01/views/contact.php';

//template/Form01/views/contact.php
</script>";
?>











