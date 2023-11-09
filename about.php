<!-- ==========Head========== -->
<?php include('include/head.php')?>
<!-- ==========Head========== -->

<body>


    <!-- ==========Preloader Overlay Starts Here========== -->
    <div class="overlayer">
        <div class="loader">
            <div class="loader-inner"></div>
        </div>
    </div>
    <div class="scrollToTop"><i class="fas fa-angle-up"></i></div>
    <div class="overlay"></div>
    <div class="overlayTwo"></div>
    <!-- ==========Preloader Overlay Ends Here========== -->

    <!-- ==========Header Section Starts Here========== -->
    <header>
       
    <!-- ==========BAR========== -->
    <?php include('include/bar.php')?>
    <!-- ==========BAR========== -->


    
     <!-- ==========Header========== -->
     <?php include('include/header.php')?>
     <!-- ==========Header========== -->
    </header>
    <!-- ==========Header Section Ends Here========== -->




    <!-- ==========Banner Section Starts Here========== -->
    <section class="page-header bg_img" data-background="assets/images/banner/page-header.jpg">
        <div class="container">
            <div class="page-header-content">
                <h1 class="title">À propos Inclustpace</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="index.php">Accueil</a>
                    </li>
                    <li>
                        À propos
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- ==========Banner Section Ends Here========== -->


    <!-- ==========About Section Starts Here========== -->
    <section class="about-section pos-rel padding-bottom padding-top oh">
        <div class="top-shape-center">
            <img src="assets/css/img/gallery1.png" alt="css">
        </div>
        <div class="bottom-shape-left">
            <img src="assets/css/img/bottom-shape.png" alt="css">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-header">
                        <span class="cate"><h3>Bienvenue dans Notre  Inclusapce</h3></span>
                     
                    </div>
                </div>
            </div>
            <h4>C’est quoi INCLUSPACE ?</h4>
            <p>
<h5>INCLUSPACE est un espace numérique qui crée un lien entre parent, enseignant, école, spécialiste et
AVS (Auxiliaire de Vie Scolaire) de façon cohérente pour augmenter l&#39;efficacité des interventions en
fonction des besoins, des objectifs, de l&#39;âge et des intérêts de chaque personne à travers une
meilleure équipe multidisciplinaire qui prend en charge les enfants en situation de vulnérabilité.</h5>
        <div class="padding-top about-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="rtl d-none d-lg-block pr-4">
                            <img src="assets/images/about/about03.png" alt="about">
                        </div>
                    </div>
                   
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-header left-style mb-olpo">
                                <span class="cate">Pourquoi INCLUSPACE ?</span>
                              
                                <p>L&#39;objectif de notre plateforme est de créer un espace éducatif inclusif qui prend en compte les
besoins individualisés en matière d&#39;apprentissage de tous les enfants en situation de vulnérabilité.
À travers INCLUSPACE nous vous assurons une coordination avec les différents partenaires du
processus de la prise en charge dans le but de rédiger un projet personnalisé de scolarisation et
atteindre un meilleur suivi pour la réussite des enfants ayant des troubles du neurodéveloppement
(TND).
Ainsi que notre plateforme facilite la mission des parents des spécialistes et des éducateurs.</p>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========About Section Ends Here========== -->
    <div class="padding-top about-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-thumb">
                    <img src="assets/images/about/about02.png" alt="about">
                </div>
            </div>
<div class="col-lg-6">
                <div class="about-content">
                    <div class="section-header left-style mb-olpo">
                        <span class="cate">INCLUSPACE a l&#39;intention de :</span>
                        
                       
                    </div>
                    <ul class="about-list">
                        <li>
                            <i class="flaticon-vegan"></i><span>Identifier</span> les outils de travail nécessaires dans un plan d'intervention individualisé.


                        </li>
                        <li>
                            <i class="flaticon-vegan"></i><span>Garantir</span> un meilleur suivi afin de réaliser les objectifs visés dans ce projet individualisé et
réussir l&#39;inclusion des enfants TND dans l&#39;école ordinaire.
                        </li>
                        <li>
                            <i class="flaticon-vegan"></i> <span>Proposer</span> une liste des Auxiliaires de vie scolaire (AVS) bien formées et expérimentées dans le
domaine d&#39;accompagnement à l&#39;école au collège, au lycée et aux jardins d&#39;enfants.
                        </li>
                        <li>
                            <i class="flaticon-vegan"></i>  <span> Mettre</span> un &quot;panier d&#39;activités&quot; qui facilite l&#39;apprentissage de l&#39;enfant à travers des activités de
concentration et des devoirs adaptés pour chaque matière.
                        </li>
                        <li>
                            <i class="flaticon-vegan"></i><span>Communiquer</span> avec des spécialistes compétents en cas de besoin.
                        </li>
                            <li>
                            <i class="flaticon-vegan"></i><span> Créer</span> un groupe forum « en ligne » organisé par des psychologues pour une meilleure
guidance parentale.
                        </li>
                        <li>
                            <i class="flaticon-vegan"></i> <span> S’inscrire</span> à des cours de formation élaborés par des psychologues Canadiens dans le
domaine de l&#39;autisme TSA.
                        </li>
                        <li>
                            <i class="flaticon-vegan"></i><span> Offrir</span> des journées pédagogiques immersives numériques par les inspecteurs de l&#39;éducation.
                        </li>
                        <li>
                            <i class="flaticon-vegan"></i>  <span> Organiser</span> des formations présentielles et à distance aux profils des AVS.
                        </li>
                    </ul>
                    
                </div>
            </div>
  

    <?php
// Create a database connection
$conn = new mysqli("localhost", "root", "", "std_db");

// Check the database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the "teacher" table
$query = "SELECT id, image_name, CONCAT(fname, ' ', surname) AS full_name, spec, facebook, instagram, linkedin FROM teacher ORDER BY RAND() LIMIT 4";
$result = mysqli_query($conn, $query);

?>

<section class="teacher-section padding-top padding-bottom pos-rel">
    <div class="top-shape-center">
        <img src="assets/css/img/gallery1.png" alt="css">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-header">
                    <span class="cate">Rencontrez Nos Équipes</span>
                    <h3 class="title">Nos Meilleurs Professeurs Populaires</h3>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mb-30-none">
            <?php
            // Loop through the query results and display each random teacher
            while ($row = mysqli_fetch_assoc($result)) {
                $teacherID = $row['id'];
                $imagePath = 'http://127.0.0.1/incll/backend/' . $row['image_name'];
                $fullName = $row['full_name'];
                $spec = $row['spec'];
                $facebookLink = $row['facebook'];
                $instagramLink = $row['instagram'];
                $linkedinLink = $row['linkedin'];
            ?>
                <div class="col-lg-3 col-sm-6">
                    <div class="teacher-item-2">
                        <div class="teacher-thumb">
                            <div class="thumb">
                                <a href="teacher-single.php?id=<?php echo $teacherID; ?>">
                                    <img src="<?php echo $imagePath; ?>" alt="teacher">
                                </a>
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="teacher-single.php?id=<?php echo $teacherID; ?>"><?php echo $fullName; ?></a></h5>
                                <span><?php echo $spec; ?></span>
                            </div>
                        </div>
                        <div class="teacher-content">
                            <ul class="teacher-social justify-content-center">
                                <li>
                                    <a class="facebook" href="<?php echo $facebookLink; ?>" target="_blank"><i class="fab fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a class="instagram" href="<?php echo $instagramLink; ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a class="linkedin" href="<?php echo $linkedinLink; ?>" target="_blank"><i class="fab fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>

<?php
$conn->close();
?>
    <!-- ==========Teacher Section Ends Here========== -->


    <!-- ==========Map Section Starts Here========== -->
    <?php include('include/map.php')?>
    <!-- ==========Map Section Ends Here========== -->


    <!-- ==========Footer Section Starts Here========== -->
    <footer class="bg_img" data-background="assets/images/footer/footer-bg.jpg">
    <?php include('include/footer.php')?>
    </footer>
    <!-- ==========Footer Section Ends Here========== -->

        <!-- ==========js Section Starts Here========== -->
        <?php include('include/js.php')?>
    <!-- ==========js Section End Here========== -->
</body>



</html>