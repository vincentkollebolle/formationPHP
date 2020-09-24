<?php

 $title ="Détail d'un article";
 $customCSS = "<style>body {color:red;}</style>";
 ob_start();
?>
  
    <h1 class="mb-4">LE CHAT <?=$post->getTitle()?></h1> 
    <?=$post->getContent()?>
  

<?php
  $content = ob_get_clean();
  $customJS= "";
  include "layout.php";