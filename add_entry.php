<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="My cinema, site pour gérer son cinema">
    <link rel="stylesheet" href="style.css">
    <title>My cinema - Ajouter à l'historique</title>
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
    <h1>Ajouter des entrées</h1>
    <form action="add_entry.php?history=<?php echo $_GET['history']?>" method="post">
        <label for="movie">Ecrivez le film que vous voulez ajouter : </label>
        <input type="text" name="movie" placeholder="L'échelle de Jacob, It follows...">
        <input type="submit" name="valid" value="Rechercher">
    </form><br>
        <?php
            $connect = new mysqli('127.0.0.1', 'root', 'vacance2013', 'cinema');
            if(isset($_POST['valid'])){
                $query = "SELECT DISTINCT movie_schedule.id as \"id_schedule\", title, date_begin FROM movie 
                INNER JOIN movie_schedule ON movie_schedule.id_movie = movie.id
                WHERE movie.title LIKE '%".$_POST['movie']."%'";

                $result = $connect->query($query);

                if($result->num_rows == 0){
                    echo "<p>Affinez votre recherche.</p>";
                }

                else{
                    echo "
                    <div class=\"php__div--table\"><table>
                        <tr>
                            <th>Titre du film</th><th>Date</th><th>Ajouter ?</th>
                        </tr>";
                }

                while($row = $result->fetch_assoc()){
                    echo"<tr>
                        <td>" . $row['title'] ."</td>
                        <td>" . $row['date_begin'] ."</td>
                        <td><form action=\"add_entry.php?history=".$_GET['history']."\" method=\"post\">
                            <button name=\"add_entry\" type=\"submit\" value=\"".$row['id_schedule']."\">Ajouter à l'historique</button>
                        </form></td>
                    </tr>";
                }
                echo "</table></div>";
            }

            $request = $connect->query("SELECT id FROM membership WHERE id_user = '".$_GET['history']."'");

            while($res = $request->fetch_assoc()){
                $id_member = $res['id'];
            }

            if(isset($_POST['add_entry'])){
                $query = "INSERT INTO membership_log (id_membership, id_session) VALUES (".$id_member.", ".$_POST['add_entry'].")";
                $connect->query($query);
                header("Location: history.php?history=".$_GET['history']."");
            }
        ?>
</body>

</html>