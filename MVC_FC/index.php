<?php
    // FRONT CONTROLLER
    // index.php
    
    include "../vendor/autoload.php";
    
    include 'model/Post.php';
    
    
    require_once 'model/PostRepository.php';
    require_once 'controller/controllers.php';

    use Symfony\Component\HttpFoundation\Request;
    
    error_reporting(E_ALL);
    ini_set('display_errors', TRUE);
    ini_set('display_startup_errors', TRUE);
    
    
    $request = Request::createFromGlobals();

    // load and initialize any global libraries
    //require_once 'controller/controllers.php';
    // route the request internally
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    if ('/index.php' === $uri) {
        listAllPost();
    } elseif ('/index.php/read' === $uri) {
        $id = $request->query->get('id'); // Never Trust The USER ! TODO TODO TODO !!!! 
        detailPost($id);
    } else if('/index.php/create') {
        //createPostAction();
    } else {
        header('HTTP/1.1 404 Not Found');
        echo '<html><body><h1>Page Not Found</h1></body></html>';
    }
