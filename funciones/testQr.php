<?php
require 'qrCode.class.php'; // Include the QRCode class
$oQRC = new QRCode; // Create vCard Object
try {
    $data = json_decode($_POST['parametros']);
    $tab = $data[0];
    $tamaño = $data[1];
    $rgb = $data[2];
    if ($tab == "url-tab") {
        //$url = $data[3];
        //print_r("Url: " . $url . "<br>");
        $oQRC->url($data[3]);// Add URL Website
    }
    else if ($tab == "vcard-tab") {
        $oQRC->fullName($data[3])// Add Full Name
        ->address($data[9].$data[4].$data[10].$data[5].', CP:'.$data[11])// Add Nickname
        ->workPhone($data[6])// Add Gender
        ->homePhone($data[12])// Add Instant Messenger
        ->email($data[7])// Add Email Address
        ->url($data[15])// Add URL Website
        ->role($data[8])// Add Note
        ->organization($data[13])// Add Categories
        ->lang('es-ES')// Add Language
        ->finish(); // End vCard
        //print_r($data);
    }
    else if ($tab =="texto-tab") {
        //print_r($data);
        $oQRC->note($data[3]);// Add URL Website
    }
    // echo '<p><img src="' . $oQRC->get(300) . '" alt="QR Code" /></p>'; // Generate and display the QR Code
    $oQRC->display(); // Display

} catch (Exception $oExcept) {
    echo '<p><b>Exception launched!</b><br /><br />' .
        'Message: ' . $oExcept->getMessage() . '<br />' .
        'File: ' . $oExcept->getFile() . '<br />' .
        'Line: ' . $oExcept->getLine() . '<br />' .
        'Trace: <p/><pre>' . $oExcept->getTraceAsString() . '</pre>';
}