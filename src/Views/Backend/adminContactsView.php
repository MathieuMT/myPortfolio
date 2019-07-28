<?php $this->title = 'Gestion des Contacts'; ?>




<?php
if (isset($_SESSION['id']) /* && $_SESSION['username'] === $user->username() */){
?>







<h1 class="text-center titlePage"><?= $this->title = 'Gestion des contacts' ?></h1>
<br />
<br />
<br />
<hr class="hr"/>

<div class="container">
    <div class="row text-center">
        <div class="col-12">
            <?php foreach ($aboutContact as $eachContact): ?>

                        <form method="post" action="index.php?action=deleteContact" id="form_adminContact" class="form_adminContact">

                            <div class="border bgColor">

                                            
                                   <b class="contactFirstname">prénom de l'expéditeur: <i><?= $eachContact->firstname() ?></i></b><br />

                                   <b class="contactLastname">nom de l'expéditeur: <i><?= $eachContact->lastname() ?></i></b><br />

                                   <b class="contactEmail">email de l'expéditeur: <i><?= $eachContact->email() ?></i></b><br />

                                   <b class="contactSubject">sujet de l'email: <i><?= $eachContact->subject() ?></i></b><br />            

                                  <p><b>Envoyé le : <i><time><?= $eachContact->comment_date() ?></time></i></b></p>

                                <article>
                                    <p><b>Contenu du message:<br />
                                    <i><?= $eachContact->comments() ?></i></b></p>
                                </article>

                                <hr />

                                <label for="deleteContact">Supprimer le message: </label><br />

                                <input type="hidden" name="contactId" value="<?php echo intval($eachContact->id()); ?>" />

                                <button type="submit" name="submit_delete_contact" class="btn_submit_delete_Contact btn btn-primary mx-auto mt-3" id="deleteContact"><i class="fas fa-trash-alt"></i></button><br /><br />

                                <hr />

                            </div><br />

                        </form>

            <?php endforeach; ?> 
        </div>        
    </div>
</div>


<?php
}

else{
 
    header('Location: index.php?action=about');
}
?> 






