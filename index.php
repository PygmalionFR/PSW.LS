<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Portfolios</title>
    <link rel="shortcut icon" href="img/LS.ico" type="image/x-icon">
    <script src="https://kit.fontawesome.com/ba95712233.js" crossorigin="anonymous"></script>
</head>
<body>
    <section>
        <h1>Ludovic Streetz</h1>
        <div>
        <?php 
            $birthDate = new DateTime('2000-02-02');
            $currentDate = new DateTime();
            $age = $currentDate->format('Y') - $birthDate->format('Y');
            if (
                $currentDate->format('m') < $birthDate->format('m') ||
                ($currentDate->format('m') == $birthDate->format('m') && $currentDate->format('d') < $birthDate->format('d'))
            ) {
                $age--;
            }
        ?>
        <p>
            Je m'appelle Ludovic Streetz, passionné de développement web âgé de <?php echo $age; ?> ans. <br>Mon parcours a débuté de manière autodidacte grâce à des ressources telles qu'OpenClassroom et des tutoriels sur YouTube. <br>
            Aujourd'hui, je suis à l'aise les langages fondamentaux tels que HTML, CSS et PHP. Mon apprentissage ne s'arrête pas là ; actuellement, je suis en train d'approfondir mes connaissances en SQL et Python. <br>
            Dans le vaste monde du développement web, je me familiarise avec des frameworks tels que Django, Flask, FastAPI, et Discord.py. <br>
            Par ailleurs, je me lance dans l'apprentissage du Java, en vue de créer des plugins Minecraft.  <br>
            Mon objectif en tant que développeur web est de fusionner mes compétences techniques avec ma passion pour créer des expériences en ligne uniques et captivantes. <br>
            Explorez mon portfolio pour découvrir les projets sur lesquels j'ai travaillé, témoins de ma passion pour le développement web et ma capacité à relever de nouveaux défis. <br>
            Je suis ouvert à de nouvelles opportunités, alors n'hésitez pas à me contacter pour discuter de collaborations futures.
        </p>

            <nav>
                <a href="?page=default">---- X ----</a><br>
                <a href="?page=projet">Projet -</a><br><br>
                <a href="?page=contact">Contact -</a><br>
                <a href="?page=default">---- X ----</a>
            </nav>
        </div>
        <div class="icon">
            <a href="https://github.com/PygmalionFR" target="_blank"><i class="fa-brands fa-github"></i></a>
            <a href="https://www.yamagucci-gumi.fr/" target="_blank"><i class="fa-solid fa-link"></i></a>
        </div>
    </section>
    <hr>
    <main>
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
                    include('page/default.php');
                    break;
            }
        } else {
            include('page/default.php');
        }
        ?>
    </main>
</body>
</html>