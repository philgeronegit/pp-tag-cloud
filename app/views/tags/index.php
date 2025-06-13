<?php
global $tags;
?>

<h2>Tags</h2>
<ul>
    <?php foreach ($tags as $tag): ?>
        <li>
          <a href="?loc=tag&action=show&id=<?= urlencode($tag['id']) ?>">
            <?= htmlspecialchars($tag['text']) ?>
          </a>
        </li>
    <?php endforeach; ?>

    <div class="mon-tag" data-color="blue">Tag A</div>
    <div class="mon-tag" data-color="green">Tag B</div>
    <div class="mon-tag" data-color="red">Tag C</div>

</ul>
