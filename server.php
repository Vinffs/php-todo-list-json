<?php
$list = file_get_contents('todo-list.json');
$arrayList = json_decode($list, true);

if (!empty($_POST['task'])) {
  $newTask = [
    [
      'task' => $_POST['task'],
      'done' => false,
    ],
  ];
  array_push($newTask, $arrayList);
  $toJson = json_encode($newTask);
  file_put_contents('todo-list.json', $toJson);
}


header('Content-Type: application/json');
echo json_encode($arrayList);
