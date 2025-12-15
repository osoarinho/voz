<?php
require_once __DIR__ . '/../form_security.php';

// Handler de formulário - Voz / Locução
$config = [
    'site_name'      => 'Locução e Dublagem',
    'recipient'      => 'contato@soarinho.com',
    'subject_prefix' => '[Voz]',
    'fields'         => ['name', 'email', 'subject', 'message'],
    'required'       => ['name', 'email', 'message'],
    'email_field'    => 'email',
    'phone_field'    => null,
    'name_field'     => 'name',
    'subject_field'  => 'subject',
];

$result  = form_security_process($config);
$status  = $result['success'] ? 'ok' : 'error';
$message = urlencode($result['message']);

$redirectUrl = 'index.html?status=' . $status . '&msg=' . $message . '#contato';
header('Location: ' . $redirectUrl);
exit;

