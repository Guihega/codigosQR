<?php

include ('../vendor/autoload.php');//Llamare el autoload de la clase que genera el QR
use Endroid\QrCode\QrCode;

include ('../modelos/Codigo.php');
$codigo =new Codigo();
$data = json_decode($_POST['parametros']);
///print_r($data);
$tab = $data[0];
$tamaño = $data[1];
//$redundancia = $data[2];
$rgb = $data[2];
$tipoCodigo;
if ($tab == "url-tab") {
    $qrCode = new QrCode($data[3]);//Creo una nueva instancia de la clase
    $texto = $data[3];
    $tipoCodigo = 1;
}
else if ($tab == "vcard-tab") {
    $name         = $data[3];
    $phone        = $data[6];
    $phoneCell    = $data[12];
    $orgName      = $data[13];
    $puesto      = $data[8];
    $email        = $data[7];

    $addressLabel     = $data[13];
    $addressStreet    = $data[9];
    $addressCity    = $data[4];
    $addressState   = $data[10];;
    $addressPostCode  = $data[11];
    $addressCountry   = $data[5];

    // we building raw data
    $codeContents  = 'Inicio:VCARD'."\n";
    $codeContents .= 'Nombre:'.$name."\n";
    $codeContents .= 'Empresa:'.$orgName."\n";
    $codeContents .= 'Puesto:'.$puesto."\n";

    $codeContents .= 'Telefono:'.$phone."\n";
    $codeContents .= 'Celular:'.$phoneCell."\n";

    $codeContents .= 'Dirección:'.
        'Etiqueta="'.$addressLabel.'":'
        .$addressStreet.';'
        .$addressCity.';'
        .$addressState.';'
        .$addressPostCode.';'
        .$addressCountry
    ."\n";

    $codeContents .= 'Correo:'.$email."\n";

    $codeContents .= 'Fin:VCARD';

    $qrCode = new QrCode($codeContents );//Creo una nueva instancia de la clase
    $texto = $codeContents;
    $tipoCodigo = 2;
}
else if ($tab =="texto-tab") {
    //print_r($data[3]);
    $qrCode = new QrCode($data[3]);//Creo una nueva instancia de la clase
    $texto = $data[3];
    $tipoCodigo = 3;
}
else if ($tab == "email-tab") {
    $codeContents .= 'Para:'.$data[3]."\n";
    $codeContents .= 'Asunto:'.$data[4]."\n";
    $codeContents .= 'Mensaje:'.$data[5]."\n";

    $qrCode = new QrCode($codeContents);//Creo una nueva instancia de la clase
    $texto = $codeContents;
    $tipoCodigo = 4;
}
else if ($tab == "sms-tab") {
    $codeContents .= 'Telefono:'.$data[3]."\n";
    $codeContents .= 'Mensaje:'.$data[4]."\n";

    $qrCode = new QrCode($codeContents);//Creo una nueva instancia de la clase
    $texto = $codeContents;
    $tipoCodigo = 5;
}
else if ($tab == "wifi-tab") {
    $codeContents .= 'Red:'.$data[3]."\n";
    $codeContents .= 'Password:'.$data[4]."\n";
    $codeContents .= 'Sefuridad:'.$data[5]."\n";

    $qrCode = new QrCode($codeContents);//Creo una nueva instancia de la clase
    $texto = $codeContents;
    $tipoCodigo = 6;
}
else if ($tab == "twitter-tab") {
    $codeContents .= 'https://twitter.com/'.$data[3]."\n";
    $qrCode = new QrCode($codeContents);//Creo una nueva instancia de la clase
    $texto = $codeContents;
    $tipoCodigo = 7;
}
else if ($tab == "facebook-tab") {
    $codeContents .= 'https://www.facebook.com/'.$data[3]."/"."\n";
    $qrCode = new QrCode($codeContents);//Creo una nueva instancia de la clase
    $texto = $codeContents;
    $tipoCodigo = 8;
}
else if ($tab == "telefono-tab") {
    $codeContents .= $data[3]."\n";
    $qrCode = new QrCode($codeContents);//Creo una nueva instancia de la clase
    $texto = $codeContents;
    $tipoCodigo = 9;
}
else if ($tab == "maps-tab") {
    $codeContents .= $data[3].', '.$data[4]."\n";
    $qrCode = new QrCode($codeContents);//Creo una nueva instancia de la clase
    $texto = $codeContents;
    $tipoCodigo = 10;
}
else if ($tab == "evento-tab") {
    $codeContents .= $data[3].', '.$data[4].', '.$data[5]."\n";
    $qrCode = new QrCode($codeContents);//Creo una nueva instancia de la clase
    $texto = $codeContents;
    $tipoCodigo = 11;
}
else if ($tab == "file-tab") {
    $qrCode = new QrCode($data[3]);//Creo una nueva instancia de la clase
    $texto = $codeContents;
    $tipoCodigo = 12;
}

$qrCode->setSize($tamaño);//Establece el tamaño del qr

$colores = explode(";", $rgb);
$foregroundColor = [
        'r' => $colores[0],
        'g' => $colores[1],
        'b' => $colores[2]];

$image= $qrCode
            ->setForegroundColor($foregroundColor)
            ->writeString();


$imageData = base64_encode($image);//Codifico la imagen usando base64_encode

$rspta=$codigo->insertar($tipoCodigo,$texto,$imageData);

echo 'data:image/png;base64,'.$imageData;

?>

