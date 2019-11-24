<ul class="artistList">
    <?php foreach($artists as $artist): ?>
        <li><a href="index.php?page=oneArtist&id=<?=$artist['id'] ?>"><?= $artist['firstName'] ?> <?= $artist['lastName'] ?></a></li>
    <?php endforeach; ?>
</ul>