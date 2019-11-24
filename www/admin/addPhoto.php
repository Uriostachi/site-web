<?php if(isAdmin()): ?>
    <form id="addPhoto" action="index.php?page=addPhoto" method="post" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="name"/>
        
        <select id="artist" name="artist">
            <option value = "none">...</option>
            <option value = "new">new</option>
            <?php foreach($artists as $artist): ?>
                <option value = <?= $artist['id'] ?> ><?= $artist['firstName'] ?> <?= $artist['lastName'] ?></option>
            <?php endforeach; ?>
        </select>
        
        <label for="img">img</label>
        <input type="file" name="img" id="img"/>
        <div id="artistPlace"></div>
        <button type="submit" name="submit">Ajouter</button>
    </form>
<?php endif; ?>