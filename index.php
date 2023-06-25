<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="My cinema, site pour gérer son cinema">
    <link rel="stylesheet" href="style.css">
    <title>My cinema</title>
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
    <h1 class="body__h1">My cinema</h1>
    <div>
        <p>Films a l'affiche</p>
    </div>
    <div class="body__div--movies">
        <article class="div__article--movie">
            <h2 class="article__h2--moviename">Zodiac</h2>
            <img src="./asset/zodiac.jpg" alt="zodiac">
            <p class="article__p--subtitle">Réalisateur : David Fincher</p>
        </article>
        <article class="div__article--movie">
            <h2 class="article__h2--moviename">Panic sur Florida Beach</h2>
            <img src="./asset/affiche-Panic-sur-Florida-Beach.jpg" alt="Panic sur Florida Beach">
            <p class="article__p--subtitle">Réalisateur : Joe Dante</p>

        </article>
    </div>
    <div class="body__div--movies">
        <article class="div__article--movie">
            <h2 class="article__h2--moviename">Shutter Island</h2>
            <img src="./asset/shutter-island.jpg" alt="Shutter Island">
            <p class="article__p--subtitle">Réalisateur : Matin Scorsese</p>
        </article>
        <article class="div__article--movie">
            <h2 class="article__h2--moviename">The social network</h2>
            <img src="./asset/social-network.jpg" alt="The social network">
            <p class="article__p--subtitle">Réalisateur : David Fincher <3 </p>
        </article>
    </div>

</body>
</html>