<!-- JUMBOTRON -->
<div class="jumbotron text-center">
    <a class="navbar-brand offset"><img src="Content/img/portrait.png" alt="mon portrait"></a>
    <h1>
        <?= $this->title = '<span class="navbar-text">MathieuMT</span>' ?></h1>

    <p><span class="navbar-text">Developpeur Web</span></p>
</div>
            

<!-- NAVBAR -->
<?php
    if (isset($_SESSION['id'])){
?>

<nav class="navbar sticky-top navbar-expand-md">
    <div class="row mr-auto">
        <a class="navbar-brand"><img src="Content/img/portrait_min.png" alt="mon mini-portrait"></a>
        <span class="navbar-text"><u>MathieuMT's Portfolio</u></span>
    </div>

    <button id="btnNavbar" type="button" class="navbar-toggler hidden-md-up ml-auto first-button" data-toggle="collapse" data-target="#collapse_target" aria-expanded="false" aria-label="Toggle navigation">

        <span class="navbar-toggler-icon animated-icon1">
            <span class="btnToggle"></span><span class="btnToggle"></span><span class="btnToggle"></span>
        </span> 
    </button>

    <div class="collapse navbar-collapse" id="collapse_target">
        <div class="row ml-auto">
            <ul class="navbar-nav col-md-12">
                <li class="nav-item">
                    <a class="nav-link" href="https://mmtmc.alwaysdata.net/index.php?action=about">À Mon Propos</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_target_1" id="dropdown_target_1" href="#">Portfolio<span class="caret"></span></a>
                    <div class="dropdown-menu" aria-labelledby="dropdown_target_1">
                        <a class="dropdown-item text-center" href="https://mmtmc.alwaysdata.net/index.php?action=certificates">Mes certificats</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-center" href="https://mmtmc.alwaysdata.net/index.php?action=works">Mes réalisations</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://mmtmc.alwaysdata.net/index.php?action=contact">Contact</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_target_2" id="dropdown_target_2" href="#">
                                    Administration du portfolio
                                    <span class="caret"></span>
                                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdown_target_2">
                        <a class="dropdown-item text-center" href="https://mmtmc.alwaysdata.net/index.php?action=adminProfile&amp;id=<?= $_SESSION['id']; ?>">Gestion du profil</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-center" href="https://mmtmc.alwaysdata.net/index.php?action=adminCertificates">Gestion des certificats</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-center" href="https://mmtmc.alwaysdata.net/index.php?action=adminWorks">Gestion des réalisations</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-center" href="https://mmtmc.alwaysdata.net/index.php?action=adminContacts">Gestion des contacts</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://mmtmc.alwaysdata.net/index.php?action=logout">Déconnexion</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<?php
    } else {
?>

<nav class="navbar sticky-top navbar-expand-md">
    <div class="row mr-auto">
        <a class="navbar-brand"><img src="Content/img/portrait_min.png" alt="mon mini-portrait"></a>
        <span class="navbar-text"><u>MathieuMT's Portfolio</u></span>
    </div>
    
    <button id="btnNavbar" type="button" class="navbar-toggler hidden-md-up ml-auto first-button" data-toggle="collapse" data-target="#collapse_target" aria-expanded="false" aria-label="Toggle navigation">

        <span class="navbar-toggler-icon animated-icon1">
            <span class="btnToggle"></span><span class="btnToggle"></span><span class="btnToggle"></span>
        </span> 
    </button>

    <div class="collapse navbar-collapse" id="collapse_target">
        <div class="row ml-auto">
            <ul class="navbar-nav col-md-12">
                <li class="nav-item">
                    <a class="nav-link" href="https://mmtmc.alwaysdata.net/index.php?action=about">À Mon Propos</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_target_1" id="dropdown_target_1" href="#">Portfolio<span class="caret"></span></a>
                    <div class="dropdown-menu" aria-labelledby="dropdown_target_1">
                        <a class="dropdown-item text-center" href="https://mmtmc.alwaysdata.net/index.php?action=certificates">Mes certificats</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-center" href="https://mmtmc.alwaysdata.net/index.php?action=works">Mes réalisations</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://mmtmc.alwaysdata.net/index.php?action=contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php
    }
?>




