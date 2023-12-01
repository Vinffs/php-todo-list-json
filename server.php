<?php
$list = file_get_contents('todo-list.json');
$arrayList = json_decode($list, true);





header('Content-Type: application/json');
echo json_encode($arrayList);
?>