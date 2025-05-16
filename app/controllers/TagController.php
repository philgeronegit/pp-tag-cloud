<?php

require_once 'BaseController.php';

/**
 * Contrôleur pour la gestion des tags.
 */
class TagController extends BaseController
{
    /**
     * Constructeur du contrôleur de tags
     *
     * @param string $action Action à exécuter
     */
    public function __construct(string $action) {
        parent::__construct($action);
    }

    /**
     * Retourne la liste des tags
     *
     * @return array{tags: array<int, array{id: int, text: string}>}
     */
    public function index(): array {
        $this->setView(BASE_PATH . '/views/tags/index.php');
        return ['tags' => [
            ['id' => 1, 'text' => 'Tag 1'],
            ['id' => 2, 'text' => 'Tag 2']
        ]];
    }

    /**
     * Retourne un tag
     *
     * @param mixed $id
     * @return array{tag: array{id: int, text: string}}
     */
    public function show($id): array {
        $this->setView(BASE_PATH . '/views/tags/show.php');
        $id = (int)$id;
        return ['tag' => ['id' => $id, 'text' => "Un Tag avec l'ID $id"]];
    }
}
