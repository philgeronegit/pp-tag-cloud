<?php

/**
 * Classe abstraite pour les contrôleurs. Fournit des méthodes communes.
 *
 * @property string $action Action à exécuter
 * @property string $view Vue à afficher
 */
abstract class BaseController {
    private string $view;
    protected string $action;

    /**
     * Constructeur du contrôleur de base
     *
     * @param string $action Action à exécuter
     */
    public function __construct(string $action)
    {
        $this->action = $action;
    }

    /**
     * Retourne le chemin de la vue courante
     *
     * @return string Chemin de la vue
     */
    public function getView(): string {
        return $this->view;
    }

    /**
     * Définit le chemin de la vue à utiliser
     *
     * @param string $view Chemin de la vue
     * @return void
     */
    protected function setView(string $view): void {
        $this->view = $view;
    }

    /**
     * Exécute l'action demandée (index ou show)
     *
     * @param mixed $id Identifiant optionnel
     * @return array<string, mixed> Données à passer à la vue
     */
    public function run($id = null): array|string {
      $data = [];

      switch ($this->action) {
          case "index":
              $data = $this->index();
              break;
          case "show":
              $data = $this->show($id);
              break;
          default:
              echo "404 - Action '{$this->action}' not found.";
              break;
      }

      return $data;
    }

    /**
     * Méthode devant retourner la liste des éléments
     *
     * @return array<string, mixed>
     */
    abstract protected function index(): array;
    /**
     * Méthode devant retourner un élément selon son identifiant
     *
     * @param mixed $id Identifiant
     * @return array<string, mixed>
     */
    abstract protected function show($id): array;
}
