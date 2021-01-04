<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $controller ?></title>
</head>
<body>
<header>
    <nav>
        <ul>
            <li> <a href="/">Accueil</a>  </li>
            <li> <a href="/?controller=blog"> Blog </a> </li>
            <li> <a href="/?controller=shop"> Boutique </a> </li>
        </ul>
    </nav>
</header>
    <?= $body ?> 
</body>
</html>