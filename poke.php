<?php

$filename = 'ochko.pokes';
$salt = 'iyg67rvuru4uf64ru7rY%H5jf';

$pokes = apc_fetch('ochko_pokes_global');
if ($pokes == false) {
    $pokes = intval(file($filename)[0]);
    apc_store('ochko_pokes_global', $pokes);
}

if (
    isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
    strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'
    && $_SERVER['HTTP_REFERER'] == 'http://ochkochopko.ru/'
    && !empty($_SERVER['HTTP_USER_AGENT'])
    && $_SERVER['REQUEST_METHOD'] == 'POST'
    && $_SERVER['HTTP_ORIGIN'] == 'http://ochkochopko.ru'
) {
    $pokes++;
    apc_store('ochko_pokes_global', $pokes);
    if ($pokes % 20 == 0) {
        $f = fopen($filename, 'w');
        fwrite($f, $pokes);
        fclose($f);
//        echo 'saved';
    }

    $clientPokes = isset($_REQUEST['clientPokes']) ? $_REQUEST['clientPokes'] : 0;
//    $test = md5($salt . ($clientPokes - 1)) == $_REQUEST['signature'];
    $test = '~'.($clientPokes-1).'~' == $_REQUEST['signature'];

    $data = [
        'globalPokes' => $pokes,
        'signature' => '~'.$clientPokes.'~',  //md5($salt . $clientPokes),
        'pokes' => $clientPokes,
        'test' => $test ,
    ];
    echo json_encode($data);

} elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo 'что-то пошло не так...';
} else {

    echo $pokes;
}



//echo $pokes;

