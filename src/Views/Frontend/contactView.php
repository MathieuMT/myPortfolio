<?php $this->title = 'Contact'; ?>

<h1 class="text-center titlePage">
    <?= $this->title = 'Contactez-moi' ?>
</h1>

<div class="container contact_page">

    <!-- FORMULAIRE DE CONTACT -->

    <div class="row mt-5">

        <div class="col-12">

            <div class="card bg-dark text-white">

                <div class="boxShadow2 rounded">

                    <img class="card-img" src="Content/img/contact/formulaire-contact.png" alt="Card image">

                    <div class="card-img-overlay">

                        <div class="row text-center justify-content-end">
                            <!-- FORMULAIRE DE CONTACT -->
                            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 mt-5">

                                <form action="https://mmtmc.alwaysdata.net/index.php?action=submitContactData" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="contactFirstName"><h3>Votre prénom *</h3></label>
                                        <input type="text" class="form-control" id="contactFirstName" name="contactFirstName" placeholder="Votre prénom" />
                                    </div>

                                    <div class="form-group">
                                        <label for="contactLastName"><h3>Votre nom *</h3></label>
                                        <input type="text" class="form-control" id="contactLastName" name="contactLastName" placeholder="Votre nom" />
                                    </div>

                                    <div class="form-group">
                                        <label for="contactEmail"><h3>Votre email *</h3></label>
                                        <input type="email" class="form-control" id="contactEmail" name="contactEmail" placeholder="Votre email" />
                                    </div>

                                    <div class="form-group">
                                        <label for="contactObject"><h3>Objet du message *</h3></label>
                                        <input type="text" class="form-control" id="contactObject" name="contactObject" placeholder="Objet du message" />
                                    </div>

                                    <div class="form-group">
                                        <label for="contactMsg"><h3>Votre Message *</h3></label>
                                        <textarea class="form-control" id="contactMsg" name="contactMsg" placeholder="Votre Message" rows="6"></textarea>
                                    </div>

                                    <p class="text-muted">
                                        <b>*</b> Champs obligatoires.
                                    </p>

                                    <button type="submit" id="btnContact" class="btn btn-info btn-lg mt-2">Envoyer</button>

                                    <div id="display"></div>
                                </form>

                            </div>

                        </div>

                    </div>

                    <div class="fond2 rounded"></div>

                </div>

            </div>

        </div>
    </div>
    <!-- END FORMULAIRE DE CONTACT -->


    <!-- GOOGLE MAP -->
    <div class="row mt-5">

        <div class="col-12">

            <div class="boxShadow rounded">

                <div id="map" class="shadow rounded"></div>

                <div class="fond rounded"></div>

            </div>

        </div>

    </div>

</div>


<!-- Google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAhujcCt5Q8480AuaNBhLuw-UQPmg4wgo4&callback=initMap" async defer></script>



<script src="Content/JS/map.js"></script>