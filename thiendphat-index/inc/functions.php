<?php
function load_json($path) {
    if (!file_exists($path)) return [];
    $json = file_get_contents($path);
    $data = json_decode($json, true);
    return $data ?: [];
}

function save_json($path, $data) {
    $json = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    file_put_contents($path, $json, LOCK_EX);
}

function e($v){
    return htmlspecialchars($v, ENT_QUOTES, 'UTF-8');
}

function find_product($products, $id){
    foreach($products as $p){
        if ((string)$p['id'] === (string)$id) return $p;
    }
    return null;
}

?>
