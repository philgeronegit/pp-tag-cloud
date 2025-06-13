<?php

include '../bootstrap.php';
//include __DIR__ . '/../app/views/template.php';

/**
 * Extracts array data into the global scope.
 *
 * @param array<string, mixed> $data
 */
function my_extract(array $data): void {
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
include(__DIR__.'/../app/views/template/header.php');
include $controller->getView();
include(__DIR__.'/../app/views/template/footer.php');