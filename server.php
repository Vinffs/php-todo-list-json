<?php
$list = file_get_contents('todo-list.json');
$arrayList = json_decode($list, true);

if (!empty($_POST['task'])) {
  $newTask = [

    'text' => $_POST['task'],
    'done' => false,

  ];

  array_unshift($arrayList, $newTask);
  $toJson = json_encode($arrayList);
  file_put_contents('todo-list.json', $toJson);
}


header('Content-Type: application/json');
echo json_encode($arrayList);
