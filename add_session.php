<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="My cinema, site pour gérer son cinema">
    <link rel="stylesheet" href="style.css">
    <title>My cinema - Ajouter une séance</title>
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
    <h1>Ajouter une séance</h1>
    
    <?php
    $connect = new mysqli('127.0.0.1', 'root', 'vacance2013', 'cinema');
    $result = $connect->query("SELECT * FROM movie WHERE id = '".$_GET['add_session']."'");

    while ($row = $result->fetch_assoc()){
        $name = $row['title'];
    }

    echo "<p>Vous voulez ajouter une séance pour <span class=\"form__span--membership\">$name</span></p>
    <p>Êtes-vous sûr de vouloir l'ajouter ?
    <form action=\"add_session.php?add_session=".$_GET['add_session']."\" method=\"post\">
        <div>
            <button type=\"submit\" name=\"yes\">Oui</button>
            <button type=\"submit\" name=\"no\">Non</button>
        </div>
    </form>";

    if(isset($_POST['no'])){
        header("Location: search_movie.php");
    }

    if(isset($_POST['yes'])){
        $random = random_int(1, 17);
        $query = "INSERT INTO movie_schedule (id_movie, id_room, date_begin) VALUES (".$_GET['add_session'].", $random, NOW() )";
        $connect->query($query);
        header("Location: search_movie.php");
    }
    ?>
</body>
</html>