<?php
switch ($_SERVER['REQUEST_URI']) {
    case '/':
        readfile('index.html');
        exit;
    case '/about-us':
        readfile('about-us.html');
        exit;
    case '/our-services':
        readfile('our-services.html');
        exit;
    case '/supported-living':
        readfile('supported-living.html');
        exit;
    case '/contact-us':
        readfile('contact-us.html');
        exit;
    case '/appointment':
        readfile('appointment.html');
        exit;
    default:
        readfile('404page.html');
        exit;
}
?>