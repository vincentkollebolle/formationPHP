<?php
    function listAllPost() {
        $posts = get_all_posts();
        include "view/listView.php";
    }

    function detailPost($id) {
        $post = get_post_by_id($id);
        include "view/detailView.php";
    }

    // [...]