<?php 
function connectDB() {
    $link = new PDO("mysql:host=localhost;dbname=blog", 'blog', 'blog');
    return $link;    
}

function killDB(&$link) {
    $link = null;
}


function get_all_posts() {
    $link = connectDB();
    $result = $link->query('SELECT id, title FROM post');
    $posts = array();
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $posts[] = $row;
    }
    
    killDB($link);
    return $posts;

}

/* Renvoi un objet de la classe Post plutot qu'un tableau associatif */
function get_post_by_id($id) {

    $link = connectDB();
    // WARNING NTU NTU NTU NTU
    $result = $link->query("SELECT id, title, content FROM post WHERE id=$id");
    $result->setFetchMode(PDO::FETCH_CLASS, 'Post');
    $post = $result->fetch();
    killDB($link);
    return $post;
}