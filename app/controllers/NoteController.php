<?php

require_once 'BaseController.php';

class NoteController extends BaseController {
    public function __construct(string $action) {
        parent::__construct($action);
    }

    protected function index(): array {
      $this->setView(__DIR__ . '/../views/notes/index.php');
      return ['notes' => [
        ['id' => 1, 'text' => 'Note 1'],
        ['id' => 2, 'text' => 'Note 2']
      ]];
    }

    protected function show($id): array {
        $this->setView(__DIR__ . '/../views/notes/show.php');
        return ['note' => ['id' => $id, 'text' => "Une Note avec l'ID $id"]];
    }
}
