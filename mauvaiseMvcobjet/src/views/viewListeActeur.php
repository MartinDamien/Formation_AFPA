<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <h1>Liste des acteurs</h1>
        
            <?php foreach ($res as $acteur) { ?>
                    <?= $acteur->getFirst_name() ?><br> <?= $acteur->getLast_name() ?>
                <?php } ?>
    </body>
</html>