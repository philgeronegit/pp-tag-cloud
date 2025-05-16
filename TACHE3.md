# Créer une story

## TODO 3.1

Supprimez le contenu du dossier stories, et créez un fichier _MyButton.stories.js_

Créer une story pour ce composant dans _…/stories/MyButton.stories.js_

## TODO 3.2

Ajoutez un composant tag dont on peut choisir la couleur, et l’ajouter dans le storybook pour vérifier que vous avez compris.

### Question 3.3

Comment ajouter un dossier dans le storybook ?

> Avec indiquant le chemin dans le title du storybook :
>
> ```js
> export default {
>   title: "TAGS/MyTag",
>   component: MyTag
> };
> ```

### Question 3.4

Proposer une façon d’organiser vos composants.

> Organisez vos composants dans un dossier `src/components/` avec un sous-dossier par composant.
> Exemple :
>
> ```bash
> src/
> └── components/
>     ├── MyButton/
>     │   ├── MyButton.js
>     │   └── index.js
>     └── MyTag/
>         ├── MyTag.js
>         ├── MyTagSubComponent.js
>         └── index.js
> ```
>
> Cela facilite la maintenance, la réutilisation et les tests de chaque composant.
