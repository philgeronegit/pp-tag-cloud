<h2>Notes</h2>
<ul>
    <?php foreach ($notes as $note): ?>
        <li>
          <a href="?loc=note&action=show&id=<?= urlencode($note['id']) ?>">
            <?= htmlspecialchars($note['text']) ?>
          </a>
        </li>
    <?php endforeach; ?>
</ul>
