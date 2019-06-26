<?php $this->title = 'Gestion des réalisations'; ?>







<?php
if (isset($_SESSION['id']) && $_SESSION['username'] === 'MathieuMT'){
?>







<h1 class="text-center titlePage"><?= $this->title = 'Gestion des réalisations' ?></h1>
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












