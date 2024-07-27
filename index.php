<?php
phpinfo();
die;

require_once 'config.php';
require_once 'functions.php';

// false - returns "Object"
// $res = json_decode(file_get_contents(BASE_URL . 'getMe'));
// true - returns "Array"
// $res = json_decode(file_get_contents(BASE_URL . 'getMe'), true);
// $res = send_request('getUpdates');
$updates = send_request('getUpdates',['offset' =>  540113303 + 1]);
foreach($updates->result as $update) {
    echo "{$update->update_id} - {$update->message->chat->id} - {$update->message->from->first_name} - {$update->message->text} </br>";
}
// debug($res->result->id);// for Object
// debug($res['result']['id']); //for Array
// debug($res);