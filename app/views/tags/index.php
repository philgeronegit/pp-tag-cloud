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
</ul>
