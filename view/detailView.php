<?php

 $title ="Détail d'un article";
 $customCSS = "<style>body {color:red;}</style>";
 ob_start();
?>
  <?php foreach($posts as $post) { ?>
    <h1 class="mb-4"><?=$post['title']?></h1> 
    <?=$post['content']?>
  <?php } ?>

<?php
  $content = ob_get_clean();
  include "layout.php";