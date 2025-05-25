<!-- template.php -->
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <title>Vue Integration</title>
    <link href="./dist/assets/main-C17_uefF.css" rel="stylesheet">
  </head>
  <body>
    <!-- Ici le composant Vue va s'injecter -->
    <div id="mon-bouton" data-label="Envoyer"></div>

    <div class="mon-tag" data-color="blue">Tag A</div>
    <div class="mon-tag" data-color="green">Tag B</div>
    <div class="mon-tag" data-color="red">Tag C</div>

    <!-- Le fichier JS qui contient ton build -->
    <script type="module" src="./dist/assets/main.js"></script>
  </body>
</html>