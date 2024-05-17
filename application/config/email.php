<?php defined('BASEPATH') OR exit('No direct script access allowed');

if($_SERVER['HTTP_HOST'] == "itlresearchcentre.com")
{
	$config = array(
		'protocol' => 'smtp',
		'smtp_host' => 'smtpout.secureserver.net',
		'smtp_port' => 465,
		'smtp_user' => 'hr@idea2codeinfotech.com',
		'smtp_pass' => 'T4M9cZ)IL~SM',
		'smtp_crypto' => 'ssl', // Use 'ssl' for port 465, 'tls' for port 587
		'mailtype' => 'html',
		'charset' => 'utf-8',
		'wordwrap' => TRUE
	);
	
}
else
{
    $config = array(
        'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
        'smtp_host' => 'ssl://smtp.googlemail.com',
        'smtp_port' => 465,
        'smtp_user' => 'mitalkachhadiya951@gmail.com',
        'smtp_pass' => 'czxv bqed lzrj spsb',//can be 'ssl' or 'tls' for example
        'mailtype' => 'html', //plaintext 'text' mails or 'html'
        'smtp_timeout' => '7', //in seconds
        'charset' => 'iso-8859-1',
        'wordwrap' => TRUE
    );
}

// $config = array(
//     'protocol' => 'smtp',
//     'smtp_host' => 'mail.itlresearchcentre.com', // Update SMTP host
//     'smtp_port' => 465, // Update SMTP port
//     'smtp_user' => 'inquiry@itlresearchcentre.com', // Update SMTP username
//     'smtp_pass' => 'T4M9cZ)IL~SM', // Update SMTP password
//     'smtp_crypto' => 'ssl', // Use 'ssl' for port 465, 'tls' for port 587
//     'mailtype' => 'html',
//     'smtp_timeout' => '7', // in seconds
//     'charset' => 'utf-8', // Update charset to UTF-8
//     'wordwrap' => TRUE, // Enable word wrapping
// );
