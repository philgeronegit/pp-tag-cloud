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
