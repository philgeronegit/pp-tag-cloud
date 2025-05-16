<?php

require_once 'BaseController.php';

class TagController extends BaseController
{
    public function __construct(string $action) {
        parent::__construct($action);
    }

    public function index(): array {
        $this->setView(BASE_PATH . '/views/tags/index.php');
        return ['tags' => [
            ['id' => 1, 'text' => 'Tag 1'],
            ['id' => 2, 'text' => 'Tag 2']
        ]];
    }

    public function show($id): array {
        $this->setView(BASE_PATH . '/views/tags/show.php');
        return ['tag' => ['id' => $id, 'text' => "Un Tag avec l'ID $id"]];
    }
}
