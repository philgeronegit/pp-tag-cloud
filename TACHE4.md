# Implémentation

Objectif : intégrer un composant dans une page de l’application. Dans notre exemple, on utilise simplement le fichier template.php

Comme nous utilisons vue pour des widgets, et que vue est isolé dans le dossier, on ne pourra pas utiliser la commande _npm run dev_ sur un fichier index qui se trouve au-delà du dossier widget.

Remarque : on pourra quand même tester les composants soit dans le storybook soit dans un fichier _index.html_ dans le dossier _widgets/_ (la ou est installer vue.js) si vous ne voulez pas utiliser storybook pour d’autres projets.

Etapes :

1. Monter le composant dans main.js
2. Configurer si besoin dans vite.confi g.js
3. Build ( npm run build)
4. Attacher le js au template (<script>)
5. lancer le serveur php ( terminal ou avec wamp )
6. Constater ( avec vos yeux )
7. (Corriger s’il y a des erreurs)

## TODO 4.1

Préparer le _main.js_ pour monter le composant dans _.../src/main.js_

## TODO 4.2

Construire les composants front-end en utilisant la commande suivante :

```bash
npm run build
```

### Question 4.3

Que définit l'option outDir ?

> Spécifie le répertoire de destination du build.

### Question 4.4

Que définit l'option empty OutDir ?

> Le build sera dans le répertoire par défaut "dist".

### Question 4.5

Que se passe-t-il si on ne définit pas Entry File Names ?

> Les chunks créés lors du bundle vont avoir un nom du type "[name].js"
