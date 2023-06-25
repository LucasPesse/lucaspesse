<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="My cinema, site pour gérer son cinema">
    <link rel="stylesheet" href="style.css">
    <title>My cinema - Rechercher des films</title>
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
    <h1>Rechercher des films</h1>
    <form action="search_movie.php" method="post">
        <div>
            <label class="div__label--searchmovie" for="distributor">Les distributeurs :</label>
            <input type="text" class="div__input--searchmovie" name="distributor" id="distributor" placeholder="Walt Disney, Marvel Studios...">
        </div>
        <div>
            <label class="div__label--searchmovie" for="name">Le nom du film :</label>
            <input type="text" class="div__input--searchmovie" name="name" id="name" placeholder="Zodiac, Panique sur Florida Beach...">
        </div>
        <div>
            <label class="div__label--searchmovie" for="gender">Le genre du film :</label>
            <select name="gender" class="div__input--searchmovie">
                <option value="">--- Choisissez un genre ---</option>
                <option value="Action">Action</option>
                <option value="Animation">Animation</option>
                <option value="Adventure">Adventure</option>
                <option value="Drama">Drama</option>
                <option value="Comedy">Comedy</option>
                <option value="Mystery">Mystery</option>
                <option value="Biography">Biography</option>
                <option value="Crime">Crime</option>
                <option value="Fantasy">Fantasy</option>
                <option value="Horror">Horror</option>
                <option value="Sci-Fi">Sci-Fi</option>
                <option value="Romance">Romance</option>
                <option value="Family">Family</option>
                <option value="Thriller">Thriller</option>
            </select>
        </div>
        <div>
            <input type="submit" class="button" name="search" value="Rechercher">
        </div>
    </form>
    <?php
    if(isset($_POST['search'])){
        $connect = new mysqli('127.0.0.1', 'root', 'vacance2013', 'cinema');
        $request = "SELECT movie.id as \"movie_id\", movie.title as \"movie_title\", genre.name as \"genre_name\", distributor.name as \"distributor_name\", movie.director as \"movie_director\"
        FROM movie
        INNER JOIN distributor ON movie.id_distributor = distributor.id
        INNER JOIN movie_genre ON movie_genre.id_movie = movie.id
        INNER JOIN genre on genre.id = movie_genre.id_genre
        WHERE 1";

        echo "<div class=\"php__div--table\"><table>
            <tr>
                <th>Nom du film</th><th>Réalisateur</th><th>Distributeur</th><th>Genre</th><th>Ajouter une séance ?</th>
            </tr>";

        if(!empty($_POST['gender'])){
            $request .= " AND genre.name = \"".$_POST['gender']."\"";
        }

        if(!empty($_POST['distributor'])){
            $distributor = str_replace("'", "\'", $_POST['distributor']);
            $request .= " AND distributor.name LIKE '%".$distributor."%'";
        }

        if(!empty($_POST['name'])){
            $name = str_replace("'", "\'", $_POST['name']);
            $request .= " AND movie.title LIKE '%".$name."%'";
        }

        $request .= " ORDER BY movie.id ASC";
        $result = $connect->query($request);

        while ($row = $result->fetch_assoc()){
            printf(
                "<tr>
                    <td>". $row["movie_title"] ."</td>
                    <td>" . $row["movie_director"] . "</td>
                    <td>" . $row["distributor_name"] . "</td>
                    <td>" . $row["genre_name"] . "</td>
                    <td><form action=\"add_session.php\" method=\"get\">
                        <button type=\"submit\" name=\"add_session\" value=\"".$row["movie_id"]."\">Ajouter</button>
                    </form></td>
                    </tr>");
        }
        echo "</table></div>";
    }
    ?>
</body>

</html>