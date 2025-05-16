# Projet Nuage de Tags

## Partie 1

### 1.1 Création d'un controlleur parent

- [x] Créez une classe abstraite BaseController
- [x] Implémentez les méthodes communes utilisées par les contrôleurs existants
- [x] Refactorisez NoteController et TagController pour hériter de cette classe parent

### 1.2 Mise en place de PHPStan

- [x] Installez PHPStan via Composer
- [x] Lancer une analyse PHPStan du niveau 0

  ```bash
  vendor/bin/phpstan analyse app public bootstrap.php --level=0
  ```

- [x] Corrigez toutes les erreurs détectées par PHPStan
- [x] Lancer une analyse au niveau suivant jusqu’au niveau 5 en corrigeant à chaque fois.
- [x] Ajoutez des commentaires PHPDoc appropriés à toutes les classes, méthodes et propriétés
- [x] Confi gurez PHPStan avec un niveau minimal de 6

## Partie 2

### Objectif

Travailler sur les composants du front-end de manière modulaire et indépendante. On utilise les composants vue.js comme des widgets et pas comme une SPA.

Ce qu’on veut :

- Garder le HTML côté PHP
- Injecter un composant Vue dans une portion spécifi que d'une page (genre un formulaire dynamique, un calendrier, un tableau interactif, etc.)
- Éviter d'avoir toute une app Vue qui gère les routes/pages (SPA)

### Consignes

Pour chaque TODO ajouter un commit en indiquant le numéro de la tâche exemple #TODO1-2
Ajouter un fi chier markdown, par tâche. Exemple : TACHE1.md Pour chaque Question répondez sur ce fi chier markdown, en indiquant le numéro de la question.
