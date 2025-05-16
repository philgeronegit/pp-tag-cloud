<?php

abstract class BaseController {
    private string $view;
    protected string $action;

    public function __construct(string $action)
    {
        $this->action = $action;
    }

    public function getView(): string {
        return $this->view;
    }

    protected function setView(string $view): void {
        $this->view = $view;
    }

    public function run($id = null): array {
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

    abstract protected function index(): array;
    abstract protected function show($id): array;
}
