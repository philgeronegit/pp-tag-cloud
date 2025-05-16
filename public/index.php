<?php

include '../bootstrap.php';

function my_extract(array $data) {
  foreach ($data as $key => $value) {
      $GLOBALS[$key] = $value;
  }
}

$loc = filter_input(INPUT_GET, "loc");
$action = filter_input(INPUT_GET, "action");
$id = filter_input(INPUT_GET, "id");

$controller = null;

switch ($loc) {
    case "tag":
        include(__DIR__ . "/../app/controllers/TagController.php");
        $controller = new TagController($action);

        break;
    case "note":
        include(__DIR__ . "/../app/controllers/NoteController.php");
        $controller = new NoteController($action);
        break;

    default:
        include(__DIR__ . "/../app/controllers/NoteController.php");
        $controller = new NoteController("index");
        break;
}

$data = $controller->run($id);
extract($data);

// Include layout
include "template/header.php";
include $controller->getView();
include "template/footer.php";