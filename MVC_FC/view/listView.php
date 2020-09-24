<?php
    $customCSS ="";
    $customJS = "";
    $title = "Exemple de CRUD - Liste des articles";

    ob_start();
?>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Action</th>
            </tr>
        </thead>
        <body>
            <?php foreach($posts as $post) {?>
                <tr>
                    <td><?=$post['id']?></td>
                    <td><?=$post['title']?></td>
                    <td>
                        <a href="detailController.php?id=<?=$post['id']?>" class="btn btn-outline-primary">Détail</a>
                        <a class="btn btn-outline-primary">Modifier</a>
                        <a class="btn btn-outline-primary">Supprimer</a>
                    </td>
                </tr>
            <?php } ?>
        </body>
    </table>
<?php
    $content = ob_get_clean();
    include "layout.php";
    