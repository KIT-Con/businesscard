<?php
require_once 'config.php';

header('Content-Type: text/vcard');
header('Content-Disposition: attachment; filename="contact.vcf"');

echo "BEGIN:VCARD\r\n";
echo "VERSION:3.0\r\n";
echo "FN:" . $config['name'] . "\r\n";
echo "TITLE:" . $config['job'] . "\r\n";
echo "TEL;TYPE=WORK,VOICE:" . $config['phone'] . "\r\n";
echo "EMAIL;TYPE=PREF,INTERNET:" . $config['email'] . "\r\n";

// Social Links als Notiz oder URL (kann in vielen Apps angezeigt werden)
foreach ($config['socials'] as $platform => $url) {
    echo "URL;TYPE=" . strtoupper($platform) . ":" . $url . "\r\n";
}

echo "END:VCARD\r\n";
exit;
?>