<div class="fig">
    <?php foreach($infos as $info): ?>
        <fig>
            <img src="www/img/<?= $info['src'] ?>" >
            <figcaption><?= $info['name'] ?></figcaption>
        </fig>
    <?php endforeach; ?>
    <div>
        <?= $info['firstName'] ?> <?= $info['lastName'] ?> <br> <a href="<?= $info['pexelsLink'] ?>" target="_blank">Pexels profile <i class="fas fa-link"></i></a>
    </div>
</div>