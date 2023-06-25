<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="My cinema, site pour gérer son cinema">
    <link rel="stylesheet" href="style.css">
    <title>My cinema - Modifier / Ajouter</title>
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
        <form action="edit_membership.php?manage=<?php echo $_GET["manage"] ?>" method="post">
            
        <?php
        $connect = new mysqli('127.0.0.1', 'root', 'vacance2013', 'cinema');
        $request = $connect->query("SELECT * FROM user WHERE id = '".$_GET["manage"]."'");

        while ($res = $request->fetch_assoc()){
            $id = $res["id"];
            $firstname = $res["firstname"];
            $lastname = $res["lastname"];
        }

        $result = $connect->query("SELECT * FROM membership WHERE id_user = '".$id."'");
        
        if($result->num_rows == 0){
            echo "<h1>Créez un abonnement</h1>
            <p>Vous n'avez pas d'abonnement donc vous pouvez en créer un pour ".$firstname . " " . $lastname."</p>
            <div>
                <label for=\"membership\">Choisissez l'abonnement : </label>
                <select name=\"membership\" id=\"membership\">
                    <option value=\"\"></option>
                    <option value=\"4\">Pass day</option>
                    <option value=\"3\">Classic</option>
                    <option value=\"1\">VIP</option>
                    <option value=\"2\">GOLD</option>
                </select>
            </div>
            <input type=\"submit\" name=\"adding\" value=\"Ajouter\"><br>
            <button><a href=\"search_user.php\">Revenir en arrière</a></button>";
        }

        if(isset($_POST['adding'])){
            $connect->query("INSERT INTO membership (id_user, id_subscription, date_begin) VALUES (".$id.", ".$_POST['membership'].", NOW() )");
            header("Location: edit_membership.php?manage=".$_GET["manage"]."");
        }

        elseif($result->num_rows == 1){
            $display = $connect->query("SELECT name FROM subscription INNER JOIN membership ON subscription.id = membership.id_subscription WHERE membership.id_user = ".$_GET['manage']."");
            while ($row = $display->fetch_assoc()){
                $subscription_name = $row['name'];
            }
            echo "<h1>Mofifier l'abonnement en cours</h1>
            <p>L'abonnement en cours pour ".$firstname ." " . $lastname." est le <span class=\"form__span--membership\">".$subscription_name."</span></p>
            <p>Vous pouvez le modifier en cliquant sur : </p>
            <label for=\"membership\">Choisissez l'abonnement : </label>
            <select name=\"membership\" id=\"membership\">
                <option value=\"\"></option>
                <option value=\"4\">Pass day</option>
                <option value=\"3\">Classic</option>
                <option value=\"1\">VIP</option>
                <option value=\"2\">GOLD</option>
            </select><br>
            <input type=\"submit\" name=\"modify\" value=\"Modifier\"><br>
            Vous pouvez supprimer l'abonnement ici : 
            <input type=\"submit\" name=\"delete\" value=\"Supprimer\"><br>
            <button><a href=\"search_user.php\">Revenir en arrière</a></button>";
        }

        if(isset($_POST['modify'])){
            $connect->query("UPDATE membership SET id_subscription = '".$_POST['membership']."' WHERE id_user = ".$_GET['manage']."");
            header("Location: edit_membership.php?manage=".$_GET["manage"]."");
        }

        if(isset($_POST['delete'])){
            $delete = $connect->query("SELECT id FROM membership WHERE id_user = ".$_GET['manage']."");
            if($result->num_rows >= 1){
                while ($new = $delete->fetch_assoc()){
                    $id_member = $new['id'];
                }
                $connect->query("DELETE FROM membership_log WHERE id_membership = $id_member");
                $connect->query("DELETE FROM membership WHERE id_user = ".$_GET['manage']."");
            }
            header("Location: edit_membership.php?manage=".$_GET["manage"]."");
        }

        echo "</form><form action=\"history.php\" method=\"get\">
            <button type=\"submit\" name=\"history\" value=\"$id\">Voir historique</button>
        </form>";
        ?>
</body>
</html>