<?php

require_once 'BaseController.php';

/**
 * Contrôleur pour la gestion des notes.
 */
class NoteController extends BaseController {
    /**
     * Constructeur du contrôleur de notes
     *
     * @param string $action Action à exécuter
     */
    public function __construct(string $action) {
        parent::__construct($action);
    }

    /**
     * Retourne la liste des notes
     *
     * @return array{notes: array<int, array{id: int, text: string}>}
     */
    protected function index(): array {
      $this->setView(BASE_PATH . '/views/notes/index.php');
      return ['notes' => [
        ['id' => 1, 'text' => 'Note 1'],
        ['id' => 2, 'text' => 'Note 2']
      ]];
    }

    /**
     * Retourne une note
     *
     * @param int $id Identifiant de la note
     * @return array{note: array{id: int, text: string}}
     */
    protected function show($id): array {
        $this->setView(BASE_PATH . '/views/notes/show.php');
        return ['note' => ['id' => $id, 'text' => "Une Note avec l'ID $id"]];
    }
}
