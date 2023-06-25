<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="My cinema, site pour gérer son cinema">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head><br>
<body>
    <header>
        <nav class="header__nav">
            <ul>
                <li><a href="index.php" class="li__a--nav">Accueil</a></li>
                <li><a href="search_movie.php" class="li__a--nav">Rechercher films</a> </li>
                <li><a href="search_user.php" class="li__a--nav">Rechercher membres</a> </li>
                <li><a href="search_movie_date.php" class="li__a--nav">Rechercher film par date</a> </li>
            </ul>
        </nav>
    </header> 
    <h1>Historique des visionnages</h1>
    <button><a href="edit_membership.php?manage=<?php echo $_GET['history']?>">Revenir en arrière</a></button>
    <form action="add_entry.php" method="get">
        <button type="submit" name="history" value="<?php echo $_GET['history']?>">Ajouter des entrées dans l'historique</button>
    </form>

    <?php
    $connect = new mysqli('127.0.0.1', 'root', 'vacance2013', 'cinema');
    
    $result = $connect->query("SELECT movie.title, movie.director, movie.duration, movie_schedule.date_begin FROM movie
    INNER JOIN movie_schedule ON movie.id = movie_schedule.id_movie
    INNER JOIN membership_log ON membership_log.id_session = movie_schedule.id
    INNER JOIN membership ON membership.id = membership_log.id_membership
    WHERE membership.id_user = ".$_GET['history']."
    ORDER BY membership_log.id_session ASC");
    
    if($result->num_rows == 0){
        echo "<p>La personne ne possède pas d'historique.</p>
        <p>Vous pouvez donc ajouter une entrée à son historique.</p>";
    }

    else{
        echo "<div class=\"php__div--table\"><table>
        <tr>
            <th>Film(s) vu(s)</th><th>Réalisateur</th><th>Durée (en minutes)</th><th>Date / Heure de passage</th>
        </tr>";
    }

    while ($row = $result->fetch_assoc()){
        echo "<tr>
                <td>" . $row['title'] ."</td>
                <td>" . $row['director'] ."</td>
                <td>" . $row['duration'] ."</td>
                <td>" . $row['date_begin'] ."</td>
            </tr>";
    }
    echo "</table></div>"
    ?>
</body>
</html>