    <?php
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    $config['protocol'] = 'smtp';
    $config['smtp_host'] = 'ssl://smtp.googlemail.com';
    $config['smtp_port'] = 465;
    $config['smtp_user'] = 'sitecnologia.auto@gmail.com';
    $config['smtp_pass'] = 'admincorreo';
    $config['smtp_timeout'] = '3';
    $config['charset'] = 'utf-8';
    $config['newline'] = "\r\n";
    $config['mailtype'] = 'text'; // or html
    $config['validation'] = TRUE; // bool whether to validate email or not