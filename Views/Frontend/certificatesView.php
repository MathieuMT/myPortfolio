<?php $this->title = 'Portfolio'; ?>



<h1 class="text-center titlePage"><?= $this->title = 'Portfolio - Mes certificats' ?></h1>
<br/>
<br/>
<br/>





<?php
/* $aboutWork est la variable provenant de WorkManager.php qui envoie en tableau d'objets "works" donc pour chaque objet, on fait une boucle renvoyant les données de chaque objet "Work"  ( dans la méthode "getWorkDescription()" d' "WorkManager.php" qui insatncie l'entité "Work" en objet )*/
    
    
    


echo 'tableau d\'objets où chaque objet contient un tableau de données de la BDD :';
var_dump($aboutCertificate);

echo '<hr>';
foreach ($aboutCertificate as $eachCertificate): ?>



<?php var_dump($eachCertificate); ?>
<fieldset>
    <article>
       
            id: <?= $eachCertificate->id(); ?><br />name:<?= $eachCertificate->name(); ?><br />slug: <?php var_dump($eachCertificate->slug()); ?><br />categorie_id: <?php var_dump($eachCertificate->categiryid()); ?><br />certificatImg:<?= $eachCertificate->certificatImg(); ?>
            
        
    </article>
</fieldset>
    <hr />




<?php endforeach; ?>


///////////////////////////////////////////////////////////////////////////////////////
?>
-->




<hr class="hr"/>









  
    
    
    <div class="heading">
                       
        <h2 class="card-header text-center animated fadeInLeft">Certificats</h2>                
                       
    </div>
   
   
    <div class="certificates">

            <section class="gallery-block cards-gallery">
                
               <div class="container">
                   
                    <div class="galleryOne">
                   
                           <div class="row">

                               <div class="col-md-6 col-lg-4 animated fadeInLeft">

                                   <div class="card border-0 transform-on-hover">
                                        <a class="lightbox" href="Content/img/certificats/certificat_1_comprendre-le-web.jpg"><img src="Content/img/certificats/certificat_1_comprendre-le-web.jpg" class="card-img-top" /></a>

                                        <div class="card-body">
                                            <h6><b>certificat 1:</b> "Comprendre le web"</h6>
                                            <p class="text-muted card-text">La culture du Web !</p>
                                        </div>


                                   </div>

                               </div>

                               <div class="col-md-6 col-lg-4 animated fadeInLeft">

                                   <div class="card border-0 transform-on-hover">
                                        <a class="lightbox" href="Content/img/certificats/certificat_2_creer-votre-site-web-avec-html5-et-css3.jpg"><img src="Content/img/certificats/certificat_2_creer-votre-site-web-avec-html5-et-css3.jpg" class="card-img-top" /></a>

                                        <div class="card-body">
                                            <h6><b>certificat 2:</b> "Créer votre site web"</h6>
                                            <p class="text-muted card-text">Le développement de sites web en HTML5 et CSS3</p>
                                        </div>


                                   </div>

                               </div>
                                
                                <div class="col-md-6 col-lg-4 animated fadeInLeft">

                                   <div class="card border-0 transform-on-hover">
                                        <a class="lightbox" href="Content/img/certificats/certificat_3_decouvrez-les-solutions-cms.jpg"><img src="Content/img/certificats/certificat_3_decouvrez-les-solutions-cms.jpg" class="card-img-top" /></a>

                                        <div class="card-body">
                                            <h6><b>certificat 5:</b> "Les CMS"</h6>
                                            <p class="text-muted card-text">Les CMS (Content Management System) permettent de lancer rapidement un site web que le client peut modifier à sa guise sans connaissances techniques.</p>
                                        </div>


                                   </div>

                               </div>
                                
                              

                           </div>



                        <div class="row">
                           
                            <div class="col-md-6 col-lg-4 animated fadeInLeft">

                                   <div class="card border-0 transform-on-hover">
                                        <a class="lightbox" href="Content/img/certificats/certificat_4_apprenez-a-coder-avec-javascript.jpg"><img src="Content/img/certificats/certificat_4_apprenez-a-coder-avec-javascript.jpg" class="card-img-top" /></a>

                                        <div class="card-body">
                                            <h6><b>certificat 3:</b> "Apprendre à coder en Javascript"</h6>
                                            <p class="text-muted card-text">Les bases de la programmation Javascript pour devenir acteur du monde numérique</p>
                                        </div>


                                   </div>

                               </div>
                           

                           <div class="col-md-6 col-lg-4 animated fadeInLeft">

                               <div class="card border-0 transform-on-hover">
                                    <a class="lightbox" href="Content/img/certificats/certificat_5_creez-des-pages-web-interactives-avec-javascript.jpg"><img src="Content/img/certificats/certificat_5_creez-des-pages-web-interactives-avec-javascript.jpg" class="card-img-top" /></a>

                                    <div class="card-body">
                                        <h6><b>certificat 4:</b> "Créer des pages web interactives avec Javascript"</h6>
                                        <p class="text-muted card-text">Grâce au langage de programmation Javascript nous rendons nos sites vivants et interactifs</p>
                                    </div>


                               </div>

                           </div>

                           

                           <div class="col-md-6 col-lg-4 animated fadeInLeft">

                               <div class="card border-0 transform-on-hover">
                                    <a class="lightbox" href="Content/img/certificats/certificat_6_introduction-a-jquery.jpg"><img src="Content/img/certificats/certificat_6_introduction-a-jquery.jpg" class="card-img-top" /></a>

                                    <div class="card-body">
                                        <h6><b>certificat 6:</b> "Introduction à jQuery"</h6>
                                        <p class="text-muted card-text">jQuery est une bibliothèque javascript qui permet de réaliser certains effets avancés sur les sites web.</p>
                                    </div>


                               </div>

                           </div>

                       </div>

                        <div class="row">

                           <div class="col-md-6 col-lg-4 animated fadeInLeft">

                               <div class="card border-0 transform-on-hover">
                                    <a class="lightbox" href="Content/img/certificats/certificat_7_les-cles-pour-reussir-son-referencement.jpg"><img src="Content/img/certificats/certificat_7_les-cles-pour-reussir-son-referencement.jpg" class="card-img-top" /></a>

                                    <div class="card-body">
                                        <h6><b>certificat 7:</b> "Les clès pour réussir son référencement web"</h6>
                                        <p class="text-muted card-text">Le SEO (Search Engine Optimization) sert à mieux référencer les pages d'un site web et optimiser leur positionnement parmis les résultats de recherche des moteurs. Les notions de pertinence et de notoriété sont central au référencement des pages web d'un site.</p>
                                    </div>


                               </div>

                           </div>

                           <div class="col-md-6 col-lg-4 animated fadeInLeft">

                               <div class="card border-0 transform-on-hover">
                                    <a class="lightbox" href="Content/img/certificats/certificat_8_concever-votre-site-web-avec-PHP-et-MySQL.jpg"><img src="Content/img/certificats/certificat_8_concever-votre-site-web-avec-PHP-et-MySQL.jpg" class="card-img-top" /></a>

                                    <div class="card-body">
                                        <h6><b>certificat 8:</b> "Concevoir son site web avec PHP et MySQL"</h6>
                                        <p class="text-muted card-text">Le PHP (Hypertext Preprocessor) est un langage de programmation qui permet la création de sites web dynamique. Et MySQL (Structured Query Langage)  est un langage standard pour le traitement des données stockées en base de données dans différentes tables.</p>
                                    </div>


                               </div>

                           </div>

                           <div class="col-md-6 col-lg-4 animated fadeInLeft">

                               <div class="card border-0 transform-on-hover">
                                    <a class="lightbox" href="Content/img/certificats/certificat_9_realisez-des-sites-modernes-et-beaux-grace-a-wordpress-min copie.jpg"><img src="Content/img/certificats/certificat_9_realisez-des-sites-modernes-et-beaux-grace-a-wordpress-min copie.jpg" class="card-img-top" /></a>

                                    <div class="card-body">
                                        <h6><b>certificat 9:</b> "Réalisez des sites modernes et beaux grâce à WordPress"</h6>
                                        <p class="text-muted card-text">WordPress est un CMS pour créer des sites web.</p>
                                    </div>


                               </div>

                           </div>

                       </div>


                       <div class="row">

                           <div class="col-md-6 col-lg-4 animated fadeInLeft">

                               <div class="card border-0 transform-on-hover">
                                    <a class="lightbox" href="Content/img/certificats/certificat_10_adopter-une-architecture-MVC-en-PHP.jpg"><img src="Content/img/certificats/certificat_10_adopter-une-architecture-MVC-en-PHP.jpg" class="card-img-top" /></a>

                                    <div class="card-body">
                                        <h6><b>certificat 10:</b> "Adopter une architecture MVC en PHP"</h6>
                                        <p class="text-muted card-text">Les sites professionnel ont une architecture MVC avec une programmation orientées objet (POO)</p>
                                    </div>


                               </div>

                           </div>

                       </div>
                   
                   </div><!-- .galleryOne -->
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   <div class="galleryTwo">
                   
                           <div class="row">

                               <div class="col-md-6 animated fadeInLeft">

                                   <div class="card border-0 transform-on-hover">
                                        <a class="lightbox" href="Content/img/certificats/certificat_1_comprendre-le-web.jpg"><img src="Content/img/certificats/certificat_1_comprendre-le-web.jpg" class="card-img-top" /></a>

                                        <div class="card-body">
                                            <h6><b>certificat 1:</b> "Comprendre le web"</h6>
                                            <p class="text-muted card-text">La culture du Web !</p>
                                        </div>


                                   </div>

                               </div>

                               <div class="col-md-6 animated fadeInLeft">

                                   <div class="card border-0 transform-on-hover">
                                        <a class="lightbox" href="Content/img/certificats/certificat_2_creer-votre-site-web-avec-html5-et-css3.jpg"><img src="Content/img/certificats/certificat_2_creer-votre-site-web-avec-html5-et-css3.jpg" class="card-img-top" /></a>

                                        <div class="card-body">
                                            <h6><b>certificat 2:</b> "Créer votre site web"</h6>
                                            <p class="text-muted card-text">Le développement de sites web en HTML5 et CSS3</p>
                                        </div>


                                   </div>

                               </div>

                               

                           </div>



                        <div class="row">
                           
                          <div class="col-md-6 animated fadeInLeft">

                                   <div class="card border-0 transform-on-hover">
                                        <a class="lightbox" href="Content/img/certificats/certificat_3_decouvrez-les-solutions-cms.jpg"><img src="Content/img/certificats/certificat_3_decouvrez-les-solutions-cms.jpg" class="card-img-top" /></a>

                                        <div class="card-body">
                                            <h6><b>certificat 5:</b> "Les CMS"</h6>
                                            <p class="text-muted card-text">Les CMS (Content Management System) permettent de lancer rapidement un site web que le client peut modifier à sa guise sans connaissances techniques.</p>
                                        </div>


                                   </div>

                               </div>
                           

                           <div class="col-md-6 animated fadeInLeft">

                                   <div class="card border-0 transform-on-hover">
                                        <a class="lightbox" href="Content/img/certificats/certificat_4_apprenez-a-coder-avec-javascript.jpg"><img src="Content/img/certificats/certificat_4_apprenez-a-coder-avec-javascript.jpg" class="card-img-top" /></a>

                                        <div class="card-body">
                                            <h6><b>certificat 3:</b> "Apprendre à coder en Javascript"</h6>
                                            <p class="text-muted card-text">Les bases de la programmation Javascript pour devenir acteur du monde numérique</p>
                                        </div>


                                   </div>

                               </div>
                        
                         </div>
                         
                        <div class="row">
                            
                            
                            <div class="col-md-6 animated fadeInLeft">

                               <div class="card border-0 transform-on-hover">
                                    <a class="lightbox" href="Content/img/certificats/certificat_5_creez-des-pages-web-interactives-avec-javascript.jpg"><img src="Content/img/certificats/certificat_5_creez-des-pages-web-interactives-avec-javascript.jpg" class="card-img-top" /></a>

                                    <div class="card-body">
                                        <h6><b>certificat 4:</b> "Créer des pages web interactives avec Javascript"</h6>
                                        <p class="text-muted card-text">Grâce au langage de programmation Javascript nous rendons nos sites vivants et interactifs</p>
                                    </div>


                               </div>

                           </div>

                           <div class="col-md-6 animated fadeInLeft">

                               <div class="card border-0 transform-on-hover">
                                    <a class="lightbox" href="Content/img/certificats/certificat_6_introduction-a-jquery.jpg"><img src="Content/img/certificats/certificat_6_introduction-a-jquery.jpg" class="card-img-top" /></a>

                                    <div class="card-body">
                                        <h6><b>certificat 6:</b> "Introduction à jQuery"</h6>
                                        <p class="text-muted card-text">jQuery est une bibliothèque javascript qui permet de réaliser certains effets avancés sur les sites web.</p>
                                    </div>


                               </div>

                           </div>
                            
                            
                            
                        </div>

                      

                        <div class="row">

                           <div class="col-md-6 animated fadeInLeft">

                               <div class="card border-0 transform-on-hover">
                                    <a class="lightbox" href="Content/img/certificats/certificat_7_les-cles-pour-reussir-son-referencement.jpg"><img src="Content/img/certificats/certificat_7_les-cles-pour-reussir-son-referencement.jpg" class="card-img-top" /></a>

                                    <div class="card-body">
                                        <h6><b>certificat 7:</b> "Les clès pour réussir son référencement web"</h6>
                                        <p class="text-muted card-text">Le SEO (Search Engine Optimization) sert à mieux référencer les pages d'un site web et optimiser leur positionnement parmis les résultats de recherche des moteurs. Les notions de pertinence et de notoriété sont central au référencement des pages web d'un site.</p>
                                    </div>


                               </div>

                           </div>

                           <div class="col-md-6 animated fadeInLeft">

                               <div class="card border-0 transform-on-hover">
                                    <a class="lightbox" href="Content/img/certificats/certificat_8_concever-votre-site-web-avec-PHP-et-MySQL.jpg"><img src="Content/img/certificats/certificat_8_concever-votre-site-web-avec-PHP-et-MySQL.jpg" class="card-img-top" /></a>

                                    <div class="card-body">
                                        <h6><b>certificat 8:</b> "Concevoir son site web avec PHP et MySQL"</h6>
                                        <p class="text-muted card-text">Le PHP (Hypertext Preprocessor) est un langage de programmation qui permet la création de sites web dynamique. Et MySQL (Structured Query Langage)  est un langage standard pour le traitement des données stockées en base de données dans différentes tables.</p>
                                    </div>


                               </div>

                           </div>
                           
                        </div>
                        
                        <div class="row">

                           <div class="col-md-6 animated fadeInLeft">

                               <div class="card border-0 transform-on-hover">
                                    <a class="lightbox" href="Content/img/certificats/certificat_9_realisez-des-sites-modernes-et-beaux-grace-a-wordpress-min copie.jpg"><img src="Content/img/certificats/certificat_9_realisez-des-sites-modernes-et-beaux-grace-a-wordpress-min copie.jpg" class="card-img-top" /></a>

                                    <div class="card-body">
                                        <h6><b>certificat 9:</b> "Réalisez des sites modernes et beaux grâce à WordPress"</h6>
                                        <p class="text-muted card-text">WordPress est un CMS pour créer des sites web.</p>
                                    </div>


                               </div>

                           </div>

                           <div class="col-md-6 animated fadeInLeft">

                               <div class="card border-0 transform-on-hover">
                                    <a class="lightbox" href="Content/img/certificats/certificat_10_adopter-une-architecture-MVC-en-PHP.jpg"><img src="Content/img/certificats/certificat_10_adopter-une-architecture-MVC-en-PHP.jpg" class="card-img-top" /></a>

                                    <div class="card-body">
                                        <h6><b>certificat 10:</b> "Adopter une architecture MVC en PHP"</h6>
                                        <p class="text-muted card-text">Les sites professionnel ont une architecture MVC avec une programmation orientées objet (POO)</p>
                                    </div>


                               </div>

                           </div>

                       </div>
                   
                   </div><!-- .galleryTwo -->
                   
               </div><!-- .container --> 
                
            </section> 
        
    </div><!-- end .certificates -->
 



<!-- JAVASCRIPT -->

<!-- baguetteBox -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.0/baguetteBox.min.js"></script>

<!-- Gallerie des certificats -->
<script src="Content/JS/certificate.js"></script>