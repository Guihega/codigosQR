<?php
include('qrlib.php');;//Llamare el autoload de la clase que genera el QR
// $textqr=$_POST['textqr'];//Recibo la variable pasada por post
// $sizeqr=$_POST['sizeqr'];//Recibo la variable pasada por post
// echo "Aqui";
// $sizeqr=$_POST['jsonString'];
// echo($sizeqr);
// print($sizeqr);
// var_dump( $sizeqr );
$tempDir = dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'download'.DIRECTORY_SEPARATOR;
//$tempDir = define('PATH', $_SERVER['SERVER_NAME']) . 'download/';


$data = json_decode($_POST['parametros']);
//print_r($data[0]);
$tab = $data[0];
$tamaño = $data[1];
//$redundancia = $data[2];
$rgb = $data[2];

//echo $tempDir;

if ($tab == "url-tab") {
	//$url = $data[3];
	//print_r("Url: " . $url . "<br>");
	//$qrCode = new QrCode($url);//Creo una nueva instancia de la clase
    //$param = $_GET['id']; // remember to sanitize that - it is user input!
    
    // we need to be sure ours script does not output anything!!!
    // otherwise it will break up PNG binary!
    $fileName = 'QrCode_'.md5($data[3]).'.png';

    $pngAbsoluteFilePath = $tempDir.$fileName;
    $urlRelativeFilePath = $tempDir.$fileName;

    // generating
    // generating
    if (!file_exists($pngAbsoluteFilePath)) {
        QRcode::png($data[3], $pngAbsoluteFilePath);
        // echo 'File generated!';
        // echo '<hr />';
    } 
    // else {
    //     echo 'File already generated! We can use this cached file to speed up site on common codes!';
    //     echo '<hr />';
    // }
    
    //echo 'Server PNG File: '.$pngAbsoluteFilePath;
    // echo '<hr />';

    // displaying
    echo $fileName;
}
// else if ($tab == "vcard-tab") {
//     $name         = $data[3];
//     $phone        = $data[6];
//     $phoneCell    = $data[12];
//     $orgName      = $data[13];
//     $puesto      = $data[8];
//     $email        = $data[7];

//     $addressLabel     = $data[13];
//     $addressStreet    = $data[9];
//     $addressCity    = $data[4];
//     $addressState   = $data[10];;
//     $addressPostCode  = $data[11];
//     $addressCountry   = $data[5];

//     // we building raw data
//     $codeContents  = 'Inicio:VCARD'."\n";
//     $codeContents .= 'Nombre:'.$name."\n";
//     $codeContents .= 'Empresa:'.$orgName."\n";
//     $codeContents .= 'Puesto:'.$puesto."\n";

//     $codeContents .= 'Telefono:'.$phone."\n";
//     $codeContents .= 'Celular:'.$phoneCell."\n";

//     $codeContents .= 'Dirección:'.
//         'Etiqueta="'.$addressLabel.'":'
//         .$addressStreet.';'
//         .$addressCity.';'
//         .$addressState.';'
//         .$addressPostCode.';'
//         .$addressCountry
//     ."\n";

//     $codeContents .= 'Correo:'.$email."\n";

//     $codeContents .= 'Fin:VCARD';

//     $qrCode = new QrCode($codeContents );//Creo una nueva instancia de la clase
// }
// else if ($tab =="texto-tab") {
// 	//print_r($data[3]);
//     $qrCode = new QrCode($data[3]);//Creo una nueva instancia de la clase
// }
// else if ($tab == "email-tab") {
// 	print_r($data);

// 	$codeContents .= 'Para:'.$data[3]."\n";
//     $codeContents .= 'Asunto:'.$data[4]."\n";
//     $codeContents .= 'Mensaje:'.$data[5]."\n";

//     $qrCode = new QrCode($codeContents);//Creo una nueva instancia de la clase
// }
// else if ($tab == "sms-tab") {
// 	print_r($data);

// 	$codeContents .= 'Telefono:'.$data[3]."\n";
//     $codeContents .= 'Mensaje:'.$data[4]."\n";

//     $qrCode = new QrCode($codeContents);//Creo una nueva instancia de la clase
// }
// else if ($tab == "wifi-tab") {
// 	print_r($data);

// 	$codeContents .= 'Red:'.$data[3]."\n";
//     $codeContents .= 'Password:'.$data[4]."\n";
//     $codeContents .= 'Sefuridad:'.$data[5]."\n";

//     $qrCode = new QrCode($codeContents);//Creo una nueva instancia de la clase
// }
// else if ($tab == "twitter-tab") {
// 	$codeContents .= 'https://twitter.com/'.$data[3]."\n";
// 	//print_r($codeContents);
//     $qrCode = new QrCode($codeContents);//Creo una nueva instancia de la clase
// }
// else if ($tab == "facebook-tab") {
// 	$codeContents .= 'https://www.facebook.com/'.$data[3]."/"."\n";
// 	//print_r($codeContents);
//     $qrCode = new QrCode($codeContents);//Creo una nueva instancia de la clase
// }
// else if ($tab == "telefono-tab") {
// 	$codeContents .= $data[3]."\n";
// 	//print_r($codeContents);
//     $qrCode = new QrCode($codeContents);//Creo una nueva instancia de la clase
// }
// else if ($tab == "maps-tab") {
// 	//print_r($data);
// 	$codeContents .= $data[3].', '.$data[4]."\n";
//     $qrCode = new QrCode($codeContents);//Creo una nueva instancia de la clase
// }
// else if ($tab == "evento-tab") {
// 	//print_r($data);
// 	$codeContents .= $data[3].', '.$data[4].', '.$data[5]."\n";
//     $qrCode = new QrCode($codeContents);//Creo una nueva instancia de la clase
// }

// $qrCode->setSize($tamaño);//Establece el tamaño del qr
// //$foregroundColor = 187,7,18;
// //$foregroundColor = [187,7,18];
// // $foregroundColor = [
// //         'r' => 187,
// //         'g' => 7,
// //         'b' => 18];
// $colores = explode(";", $rgb);
// $foregroundColor = [
//         'r' => $colores[0],
//         'g' => $colores[1],
//         'b' => $colores[2]];
// //echo $foregroundColor;
// //$qrCode->setForegroundColor($foregroundColor)
// //header('Content-Type: '.$qrCode->getContentType());
// $image= $qrCode
//             ->setForegroundColor($foregroundColor)
//             ->writeString();
// //$image= $qrCode->writeString();//Salida en formato de texto 

// $imageData = base64_encode($image);//Codifico la imagen usando base64_encode
// $output_file = 'QrCode.jpg';
// //$image = base64_to_jpeg( $my_base64_string, $output_file );
// $image = base64_to_jpeg( $my_base64_string );

// function base64_to_jpeg($imageData) {
//     // open the output file for writing
//     // $ifp = fopen( $output_file, 'wb' ); 

//     // // split the string on commas
//     // // $data[ 0 ] == "data:image/png;base64"
//     // // $data[ 1 ] == <actual base64 string>
//     // $data = explode( ',', $base64_string );

//     // // we could add validation here with ensuring count( $data ) > 1
//     // fwrite( $ifp, base64_decode( $data[ 1 ] ) );

//     // // clean up the file resource
//     // fclose( $ifp ); 

//     // return $output_file;

//     $fp = fopen("./images/QrCode.png", "w+");

//     // write the data in image file
//     fwrite($fp, base64_decode($imageData));

//     // close an open file pointer
//     fclose($fp);

// }

//echo '<img class="img-fluid img-thumbnail" src="data:image/png;base64,'.$imageData.'">';
//echo 'data:image/png;base64,'.$imageData;
//echo '<img src="'.$urlRelativeFilePath.'" />';
//echo $image;
?>

