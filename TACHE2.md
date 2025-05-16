# Créer un composant MyButton

## TODO 2.1

Créez un composant dans le fichier _components/MyButton.vue_

### Question 2.2

Quels sont les autres composants que l’on peut faire dans un projet ? Donnez au moins 10 exemples en expliquant leur fonctionnalité.

Voici 10 exemples de composants que l’on peut créer dans un projet, avec leur fonctionnalité :

| Nom                   | fonctionnalité                                                                                        |
| --------------------- | ----------------------------------------------------------------------------------------------------- |
| Header                | Affiche l’en-tête du site, souvent avec le logo, le menu principal et parfois une barre de recherche. |
| Footer                | Affiche le pied de page du site, avec des liens utiles, des informations légales ou de contact.       |
| Sidebar               | Barre latérale contenant des liens de navigation, des filtres ou des widgets supplémentaires.         |
| Card                  | Présente une information sous forme de carte (image, titre, description, bouton d’action).            |
| Modal                 | Fenêtre pop-up pour afficher des messages, formulaires ou confirmations sans quitter la page.         |
| Formulaire de contact | Permet à l’utilisateur d’envoyer un message ou une demande via un formulaire.                         |
| Liste d’articles      | Affiche une liste d’éléments (articles, produits, utilisateurs) sous forme de liste ou de grille.     |
| Pagination            | Permet de naviguer entre plusieurs pages de contenu.                                                  |
| Notification/Toast    | Affiche des messages temporaires pour informer l’utilisateur (succès, erreur, alerte).                |
| Loader/Spinner        | Indique à l’utilisateur qu’un contenu est en cours de chargement.                                     |

Chacun de ces composants est réutilisable et facilite la maintenance et l’organisation du code dans un projet.

### Question 2.3

Quel est le cycle de vie d’un composant ?

Le cycle de vie d’un composant Vue.js correspond aux différentes étapes par lesquelles passe un composant, de sa création à sa destruction. Voici les principales phases :

1. **Création (Creation)**

   - `beforeCreate` : Le composant est initialisé, mais les données et événements ne sont pas encore configurés.
   - `created` : Les données réactives et les événements sont configurés, mais le composant n’est pas encore monté dans le DOM.

2. **Montage (Mounting)**

   - `beforeMount` : Juste avant l’insertion du composant dans le DOM.
   - `mounted` : Le composant est inséré dans le DOM, on peut accéder aux éléments du DOM.

3. **Mise à jour (Updating)**

   - `beforeUpdate` : Appelé avant la mise à jour du DOM suite à un changement de données.
   - `updated` : Appelé après la mise à jour du DOM.

4. **Destruction (Unmounting)**
   - `beforeUnmount` (Vue 3) / `beforeDestroy` (Vue 2) : Juste avant la destruction du composant.
   - `unmounted` (Vue 3) / `destroyed` (Vue 2) : Après la destruction du composant, nettoyage effectué.

Chaque étape permet d’exécuter du code spécifique grâce aux hooks du cycle de vie.

### Question 2.4

Peut-on modifier le texte du bouton depuis le html ? comment ?

> Oui, on peut modifier le texte du bouton depuis le HTML en utilisant une prop (propriété) dans le composant Vue.

On passe le texte comme attribut :

```html
<MyButton label="Cliquez ici" />
```

Dans le composant, on utilise la prop label :

```html
<template>
  <button>{{ label }}</button>
</template>
<script>
  export default {
    props: {
      label: String
    }
  };
</script>
```

## TODO 2.5

Donner une valeur par défaut au label.

```ls
const props = defineProps({
  label: { type: String, default: "Button" },
  variant: { type: String, default: "primary" }
});
```

### Question 2.6

Comment modifier le composant pour qu’il prenne en charge l'écriture suivante ?

```html
<div id="mon-bouton" data-variant="primary">Pomme</div>
```

C'est-à-dire comment prendre en compte la valeur à l’intérieur du composant, ici “Pomme”.

> Il faut ajouter un _slot_ au composant :

```html
<template>
  <button :class="['btn', variant]">
    <slot>{{ label }}</slot>
  </button>
</template>
```

On l'utilise comme ceci :

```html
<MyButton>
  <span>Mon <b>Contenu</b></span>
</MyButton>
```
