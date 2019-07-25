<?php $this->title = 'Gestion des Contacts'; ?>




<?php
if (isset($_SESSION['id']) && $_SESSION['username'] === $user->username()){
?>







<h1 class="text-center titlePage"><?= $this->title = 'Gestion des contacts' ?></h1>
<br />
<br />
<br />
<hr class="hr"/>







<?php
}

else{
 
    header('Location: index.php?action=about');
}
?> 






