<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="My cinema, site pour gérer son cinema">
    <link rel="stylesheet" href="style.css">
    <title>My cinema - Rechercher utilisateurs</title>
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
    <h1>Recherche d'utilisateurs</h1>
    <form action="search_user.php" method="post">
        <div>
            <label for="firstname">Prénom : </label>
            <input type="text" name="firstname" placeholder="Antoine, Michel...">
        </div>
        <div>
            <label for="lastname">Nom de famille : </label>
            <input type="text" name="lastname" placeholder="Dupont, Dumoulin...">
        </div>
        <div>
            <input type="submit" name="searching" value="Recherchez">
        </div>
        <?php
        if(isset($_POST['searching'])){
            $connect = new mysqli('127.0.0.1', 'root', 'vacance2013', 'cinema');
            $request = "SELECT * FROM user WHERE 1";

            if(!empty($_POST['firstname'])){
                $request .= " AND firstname LIKE '%".$_POST['firstname']."%'";
            }

            if(!empty($_POST['lastname'])){
                $request .= " AND lastname LIKE '%".$_POST['lastname']."%'";
            }

            $result = $connect->query($request);
            
            if($result->num_rows == 0){
                echo "La personne que vous rechechez n'existe pas.<br>";
            }

            elseif($result->num_rows >= 1){
                echo "<div class=\"php__div--table\"><table>
                <tr>
                    <th>Prénom</th><th>Nom de famille</th><th>Voir plus d'infos</th><th>Gérer l'abonnement</th>
                </tr>";
            }

            while ($row = $result->fetch_assoc()){

                echo
                    "<tr>
                        <td>" . $row["firstname"] ."</td>
                        <td>" . $row["lastname"] . "</td>
                        <td><button type=\"submit\" name=\"see\" value=\"".$row["id"]."\">Voir</button></td>
                        </form>
                        <form action=\"edit_membership.php\" method=\"get\">
                        <td><button type=\"submit\" name=\"manage\" value=\"".$row["id"]."\">Gérer</button></td>
                        </form>
                        
                    </tr>";
                }
                echo "</table></div>";
            }

            if(isset($_POST["see"])){
                $connect = new mysqli('127.0.0.1', 'root', 'vacance2013', 'cinema');
                $result = $connect->query("SELECT * FROM user where id = '".$_POST['see']."'");

                while ($res = $result->fetch_assoc()){
                    echo "<div class=\"php__div--table\"><table>
                    <tr>
                        <th>Prénom</th><th>Nom de famille</th><th>email</th><th>Adresse</th><th>Code postal</th><th>Pays</th><th>Dâte de naissance</th><th>Gérer abonnement</th>
                    </tr>
                    <tr>
                        <td>" . $res["firstname"] ."</td>
                        <td>" . $res["lastname"] . "</td>
                        <td>" . $res["email"] ."</td>
                        <td>" . $res["address"] ."</td>
                        <td>" . $res["zipcode"] ."</td>
                        <td>" . $res["country"] ."</td>
                        <td>" . $res["birthdate"] ."</td>
                        </form>
                        <form action=\"edit_membership.php\" method=\"get\">
                        <td><button type=\"submit\" name=\"manage\" value=\"".$res["id"]."\">Gérer</button></td>
                        </form>
                    </tr>";
                }
            }
            ?>
    </form>
</body>
</html>