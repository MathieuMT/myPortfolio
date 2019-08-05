<?php $this->title = 'À Mon Propos'; ?>

<header>
    <h1 class="text-center titlePage animated fadeInLeft">
        <?= $this->title = 'À Mon Propos' ?>
    </h1>
</header>

<section>
    <div class="container cover animated fadeInLeft">
        <div class="row text-justify">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <?php   foreach ($aboutUser as $eachUser): ?>
                <div class="bgColor p-5">
                    <header>
                        <h2 class="text-center">Bienvenue sur mon portfolio</h2><br />
                    </header>
                    <article>
                        <header>
                            <h2 class="text-center"><b class="portfolioName"> - <?= $eachUser->username(); ?> - </b><br /></h2>
                        </header>
                        <p class="fontAbout">Je m'appelle
                            <?= $eachUser->firstname(); ?>,<br/>
                            <?= $eachUser->description(); ?><br /><br /> 
                            En tant que <?= $eachUser->profession(); ?>, je reste à votre entière disposition pour pouvoir exercer et vivre de mon métier.<br /><br />
                        </p>
                        <div class="row text-center">
                            <div class="col-sm-12">
                                <a class="cv" href="Content/img/users/CV/CV.pdf" download="Content/img/users/CV/CV.pdf">Téléchager mon CV</a>
                            </div>
                        </div>
                    </article>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>
</section>
<br />
<footer>
    <h3 class="text-center">Copyright © MathieuMT 2019</h3>
</footer>