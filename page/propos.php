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
<p class="propo">
    Je m'appelle Ludovic Streetz, passionné de développement âgé de <?php echo $age; ?> ans. <br>Mon parcours a débuté de manière autodidacte grâce à des ressources telles qu'OpenClassroom et des tutoriels sur YouTube. <br>
    Aujourd'hui, je suis à l'aise les langages fondamentaux tels que HTML, CSS et PHP. Mon apprentissage ne s'arrête pas là ; actuellement, je suis en train d'approfondir mes connaissances en SQL et Python. <br>
    Dans le vaste monde du développement web, je me familiarise avec des frameworks tels que Django, Flask, FastAPI, et Discord.py. <br>
    Par ailleurs, je me lance dans l'apprentissage du Java, en vue de créer des plugins Minecraft.  <br>
    Mon objectif en tant que développeur web est de fusionner mes compétences techniques avec ma passion pour créer des expériences en ligne uniques et captivantes. <br>
    Explorez mon portfolio pour découvrir les projets sur lesquels j'ai travaillé, témoins de ma passion pour le développement web et ma capacité à relever de nouveaux défis. <br>
    Je suis ouvert à de nouvelles opportunités, alors n'hésitez pas à me contacter pour discuter de collaborations futures.
</p>
<div class="skill">
    <h2>Mes compétences</h2><br><br>
    <div class="skill-icon">
        <div><i class="fa-brands fa-java"></i><br><p>Java</p></div>
        <div><i class="fa-brands fa-python"></i><br><p>Python</p></div>
        <div><i class="fa-brands fa-html5"></i><br><p>HTML</p></div>
        <div><i class="fa-brands fa-css3-alt"></i><br><p>CSS</p></div>
        <div><i class="fa-brands fa-php"></i><br><p>Php</p></div>
        <div><i class="fa-brands fa-github"></i><br><p>Github</p></div>
        <div><i class="fa-brands fa-git-alt"></i><br><p>Git</p></div>
        <div><i class="fa-solid fa-database"></i><br><p>SQL</p></div>
        <div><i class="fa-brands fa-ubuntu"></i><br><p>Ubuntu</p></div>
        <div><i class="fa-solid fa-server"></i><br><p>Virtual Personal Server</p></div>
    </div>
</div>