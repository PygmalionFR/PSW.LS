<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Portfolios | Ludovic Streetz</title>
    <link rel="shortcut icon" href="img/LS.ico" type="image/x-icon">
    <script src="https://kit.fontawesome.com/ba95712233.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <h1>Ludovic Streetz</h1>
        <div class="minidescription">
            <h2>Formation</h2>
            <h3>Développeur Intégrateur Web</h3>
            <p>
                Contrat d'apprentissage - Rythme : 3 semaines en entreprise / 1 semaine en école
                Formation éligible à l'Aide Exceptionnelle de 6000€
            </p>
        </div>
        <nav>
            <a href="?page=default">A propos </a><br><br>
            <a href="?page=projet">Projet </a><br><br>
            <a href="?page=contact">Contact </a><br><br>
        </nav>
        <div class="icon">
            <a href="https://github.com/PygmalionFR" target="_blank"><i class="fa-brands fa-github"></i></a>
            <a href="https://www.yamagucci-gumi.fr/" target="_blank"><i class="fa-solid fa-link"></i></a>
        </div>
    </header>
    <hr>
    <main class="page-container">
    <?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];

            switch ($page) {
                case 'projet':
                    include('page/project.php');
                    break;
                case 'contact':
                    include('page/contact.php');
                    break;
                default:
                    include('page/propos.php');
                    break;
            }
        } else {
            include('page/propos.php');
        }
    ?>
    </main>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var pageContainer = document.querySelector('.page-container');
            pageContainer.style.transform = 'translateX(0)';
        });
    </script>
</body>
</html>