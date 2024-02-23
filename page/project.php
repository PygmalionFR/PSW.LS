<article class="page-content">
    <h2>Mes Projets :</h2>

    <?php
    $projects = [
        [
            'id' => 'ceasarP',
            'category' => 'python',
            'img' => 'https://www.yamagucci-gumi.fr/Divers/CeasarP.png',
            'description' => "Découvrez CeasarP, le bot exclusif du serveur Discord <a href='https://discord.com/invite/WR4hWRGn5a' target='_blank'>Yamagucci-gummi</a>, conçu par <a href='https://www.yamagucci-gumi.fr/Pygmalion/pygmalion.php' target='_blank'>Pygmalion</a>. Ce bot dynamique, créé pour répondre aux besoins spécifiques du serveur, offre une expérience unique en gestion. Des fonctionnalités accueillantes pour les nouveaux membres aux commandes ludiques comme le lancer de pièce et les annonces de films, CeasarP évoluera au fil du temps pour enrichir l'expérience des utilisateurs et s'adapter aux évolutions du serveur Discord. Rejoignez-nous pour explorer les multiples facettes de CeasarP et profitez d'une gestion de serveur optimisée.",
            'link' => 'https://www.yamagucci-gumi.fr/Divers/CeasarP.php',
            'techno' => ['python']
        ],
        [
            'id' => 'web1',
            'category' => 'web',
            'img' => 'img/screen-yamagucci-gumi.png',
            'description' => 'Explorez mon univers sur mon site vitrine dédié à ma communauté Discord. Plongez dans mes aventures en direct sur Twitch, découvrez mes vidéos captivantes sur YouTube et rejoignez la discussion sur Discord. Un lieu où la passion pour les jeux vidéo, les moments de convivialité en streaming, et la création de contenu se rencontrent. Rejoignez-nous pour une expérience unique et suivez toutes mes actualités sur les réseaux sociaux !',
            'link' => 'https://www.yamagucci-gumi.fr/',
            'techno' => ['php', 'html5', 'css3-alt', 'js']
        ],
        [
            'id' => 'web2',
            'category' => 'web',
            'img' => 'img/bouki.png',
            'description' => 'Alors voici bouki une page web fait uniquement en HTML5 CSS3 lors d\'un pré-apprentissage avec Openclassroom',
            'link' => 'booki\index.html',
            'codeLink' => 'https://github.com/PygmalionFR/OPCLRM',
            'techno' => ['html5', 'css3-alt']
        ],
        [
            'id' => 'java1',
            'category' => 'java',
            'img' => 'img/java-logo1.png',
            'description' => "Plugin Minecraft : Basic Commande<br>Est un plugin de commande basice comme son nom l'indique il je ne l'est pas publier parce que c'est un plugin qui a des commande de base comme le /fly &#60player&#62, /godmode &#60player&#62, /timer 1h1m1s, /see &#60player&#62 ou encore le /bca &#60message&#62",
            'techno' => ['java']
        ],
        [
            'id' => 'java2',
            'category' => 'java',
            'img' => 'img/java-logo1.png',
            'description' => "Plugin Minecraft : SlenderGame<br>Deux équipes, Slenderman et survivants, s'affrontent (1 pour 5). Objectif des survivants: 9 pages et des bonus. Les Slendermen débloquent des pouvoirs pour éliminer les survivants. <br>En cours de développement pour compatibilité Java et Bedrock.",
            'techno' => ['java']
        ],
        [
            'id' => 'py2',
            'category' => 'python',
            'img' => 'img/psmanager.png',
            'description' => "Gestionnaire de mots de passe en Python avec Tkinter. Utilise une base de données SQLite pour stocker les informations des sites web, noms d'utilisateur et mots de passe. Permet d'ajouter, visualiser, modifier et supprimer des entrées de mot de passe. Interface graphique simple.",
            'codeLink' => 'https://github.com/PygmalionFR/PasswordManager',
            'techno' => ['python']
        ],
        [
            'id' => 'web3',
            'category' => 'web',
            'img' => 'img/PygmaProject.png',
            'description' => "Voici sans aucun doute mon plus gros projet web sur lequel je travaille quand j'ai du temps libre. C'est un forum avec inscription/connexion, édit de profil, publication de texte et image une future messagerie ça va sans doute me prendre encore quelques mois de développement avant de le sortir (j'oublie toujours de mettre à jour le github)",
            'codeLink' => 'https://github.com/PygmalionFR/PygmaProject',
            'techno' => ['php', 'database', 'html5', 'css3-alt']
        ],
    ];
    ?>
    <span class='btn'>
        <button onclick="filterProjects('web')">Projets Web</button>
        <button onclick="filterProjects('python')">Projets Python</button>
        <button onclick="filterProjects('java')">Projets Java</button>
        <button onclick="filterProjects('all')">Tous les projets</button>
    </span>
    <?php foreach ($projects as $project) : ?>
        <div id="<?php echo $project['id']; ?>" class="project <?php echo $project['category']; ?>">
            <img src="<?php echo $project['img']; ?>" target="_blank">
            <p><?php echo $project['description']; ?></p>
            <?php if (isset($project['link'])) : ?>
                <a class="suite" href="<?php echo $project['link']; ?>" target="_blank">Lire la suite...</a>
            <?php endif; ?>
            <?php if (isset($project['codeLink'])) : ?>
                <a class="suite" href="<?php echo $project['codeLink']; ?>" target="_blank">Lien du code</a>
            <?php endif; ?>
            <span>Techno utilisée :
                <?php foreach ($project['techno'] as $techno) : ?>
                    <i class="fa-brands fa-<?php echo $techno; ?>"></i>
                <?php endforeach; ?>
            </span>
        </div>
    <?php endforeach; ?>

    <script>
        function filterProjects(category) {
            var projects = document.querySelectorAll('.project');
            for (var i = 0; i < projects.length; i++) {
                if (category === 'all' || projects[i].classList.contains(category)) {
                    projects[i].style.display = 'block';
                } else {
                    projects[i].style.display = 'none';
                }
            }
        }
    </script>
</article>