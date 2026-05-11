<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tapahtumasovellus</title>
    <link rel="stylesheet" href="../css/tapahtumasovellus.css">
</head>
<body>
    <header>
        <h1>Tapahtumasovellus</h1>
    </header>
    <nav class="nav-container">
        <ul class="nav">
                <li class="nav-item">
                    <a class="nav-item-link" href="">
                            Etusivu
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-item-link" href="">
                            Tietoja
                    </a>
                <?php if(!isLoggedIn()): ?>    
                </li>
                <li class="nav-item">
                    <a class="nav-item-link" href="/login">
                            Kirjaudu
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-item-link" href="register">
                            Rekisteröidy
                    </a>
                </li>
                <?php else: ?>
                <li class="nav-item">
                    <a class="nav-item-link" href="/add_event">
                            Lisää Tapahtuma
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-item-link" href="/logout">
                            Kirjaudu ulos
                    </a>
                </li>
                <?php endif ?>
        </ul>
    </nav>