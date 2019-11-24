<?php if(isAdmin()): ?>

    <a href="index.php?page=addPhoto">Add photo</a>
    
    
<?php else: ?>

    <form action="index.php?page=admin" method="post">
        <input type="email" name="mail" placeholder="Votre Email"/>
        <input type="password" name="password" placeholder="Votre mot de passe"/>
        <button type ="submit" name="submit">Connexion</button>
    </form>
    
<?php endif; ?>