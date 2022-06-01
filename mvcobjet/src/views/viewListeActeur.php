<!DOCTYPE html>
<html>
    <header>
        <meta charset="utf-8" />
        <title>Liste des acteurs</title>
    </header>
    <body>
        <h1>Liste des acteurs</h1>
        <table>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
            </tr>
            <?php
            foreach ($res as $acteur) {
                echo '<tr>';
                echo '<td>' . $acteur->getFirstName() . '</td>';
                echo '<td>' . $acteur->getLastName() . '</td>';
                echo '<td>' . '<a href="/getActeur/?id=' . $acteur->getId() . '">Afficher</a>' . '</td>';
                echo '<td>' . '<a href="/getActeur/?id=' . $acteur->getId() . '">Modifier</a>' . '</td>';
                echo '<td>' . '<a href="/getActeur/?id=' . $acteur->getId() . '">Supprimer</a>' . '</td>';
                echo '</tr>';
            }
            ?>
        </table>
    </body>
</html>
