<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="My cinema, site pour gérer son cinema">
    <link rel="stylesheet" href="style.css">
    <title>My cinema - Film ce soir</title>
</head>
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
    <h1>Afficher les films qui sortent par date</h1>
    <form action="search_movie_date.php" method="post">
        <label for="date">Choisissez la date pour regarder votre film : </label>
        <input type="date" name="date">
        <input type="submit" name="valid" value="Valider">
    </form>
    <?php
    if(isset($_POST['valid'])){
        $connect = new mysqli('127.0.0.1', 'root', 'vacance2013', 'cinema');
        $query = "SELECT DATE_FORMAT(date_begin, \"%Y-%d-%m\") as \"date_begin\", title FROM movie_schedule
        INNER JOIN movie ON movie.id = movie_schedule.id_movie
        WHERE DATE_FORMAT(date_begin, \"%Y-%d-%m\") = '".$_POST['date']."'";

        $result = $connect->query($query);
        echo "<div class=\"php__div--table\"><table>
        <tr>
            <th>Noms des films</th>
            <th>Date</th>
        </tr>";

        while ($row = $result->fetch_assoc()){
            echo "<tr>
                    <td>" . $row['title'] ."</td>
                    <td>" . $row['date_begin'] ."</td>
                </tr>";
        }
    }
    echo "</table></div>"
    ?>
</body>
</html>