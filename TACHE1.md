# Installation

Dans cette partie vous allez installer deux choses : vue en utilisant vite, et storybook.

## TODO 1.1

Installer vite dans le sous dossier widgets/ et seulement dans ce dossier.
Choisir vue.js et javascript.

Attention vous ne devez pas avoir widgets/widgets ou un widgets/vite-project
Mais bien un seul dossier !

```bash
cd app/widgets
npm create vite@latest . -- --template vue
npm install
```

## Question 1.2

Quelle différences entre ces quatres propositions :

1 npm init vite@lastest

Il y a une faute de frappe : lastest au lieu de latest.
Cette commande ne fonctionnera pas, car le tag lastest n’existe pas.

2 npm init vite@latest

Crée un nouveau projet Vite dans un dossier que vous devrez nommer après avoir lancé la commande.
Vous devrez donc entrer le nom du dossier à la main.

3 npm create vite@latest

Identique à la précédente, mais npm create est la nouvelle syntaxe recommandée.
Vous devrez aussi entrer le nom du dossier à la main.

4 npm create vite@latest .

Crée un projet Vite dans le dossier courant.
C’est la commande à utiliser si vous voulez installer Vite dans le dossier actuel sans créer de sous-dossier.

## TODO 1.3

Installer storybook dans le même dossier.

```bash
npx storybook@latest init
```

## Question 1.4

Quelle est la ligne de commande pour exécuter le storybook ?

```bash
npm run storybook
```

## Question 1.5

Sur quel port peut-on consulter le storybook ? Est ce qu’on peut changer ce port ? Si oui comment ?

> Le port par défaut est _6006_.
> Il est possible de le changer (par example 9009) en modifiant la ligne suivante das le ficher _package.json_ :

```json
"storybook": "storybook dev -p 9009"
```

## Question 1.6

Est ce que l'installation de storyBook, ajoute une dépendance de production ou de développement à votre projet ?

> Le package est installé sous _devDependencies_ dans le fichier _package.json_ donc il ajoute une dépendance de développement

## Question 1.7

Où se trouve le dossier stories ?

> Le dossier _stories_ se trouve dans le répertoire _app/widgets/src/stories_

Utilisez la commande tree pour afficher la structure et indiquer son emplacement.

```bash
 tree ./src/stories

./src/stories
|-- Button.stories.js
|-- Button.vue
|-- Header.stories.js
|-- Header.vue
|-- Page.stories.js
|-- Page.vue
|-- assets
|   |-- accessibility.png
|   |-- accessibility.svg
|   |-- addon-library.png
|   |-- assets.png
|   |-- avif-test-image.avif
|   |-- context.png
|   |-- discord.svg
|   |-- docs.png
|   |-- figma-plugin.png
|   |-- github.svg
|   |-- share.png
|   |-- styling.png
|   |-- testing.png
|   |-- theming.png
|   |-- tutorials.svg
|   `-- youtube.svg
|-- button.css
|-- header.css
`-- page.css

1 directory, 25 files
```
