<?php

if ($_POST) extract($_POST);
if ($_SESSION) extract($_SESSION);

$viewData = [
    'user' => $user ??= false,
    'email' => $email ?? '',
    'password' => $password ?? '',
    'eMsg' => $eMsg ?? '',
    'pMsg' => $pMsg ?? '',

];

viewPath('sessions/create.view.php', $viewData);