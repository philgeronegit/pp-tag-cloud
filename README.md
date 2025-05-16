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
