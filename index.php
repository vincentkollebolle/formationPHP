<?php 
    // FRONT CONTROLLER
    // index.php
    include "vendor/autoload.php";

    error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
    
    use Monolog\Logger;
    use Monolog\Handler\StreamHandler;

    


    $log = new Logger('name');
    
    $log->pushHandler(new StreamHandler('mon.log', Logger::WARNING));
    $log->warning("starting generating pdf....");
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(40,10,'Hello World !');
    $pdf->Output();
    $log->warning('Outpouting pdf');

    /*
    // load and initialize any global libraries
    require_once 'model/model.php';
    //require_once 'controller/controllers.php';
    // route the request internally
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    if ('/index.php' === $uri) {
        listAllPost();
    } elseif ('/index.php/read' === $uri && isset($_GET['id'])) {
        $id = $_GET["id"]; // Never Trust The USER ! TODO TODO TODO !!!! 
        detailPost($id);
    } else if('/index.php/create') {
        createPostAction();
    } else {
        header('HTTP/1.1 404 Not Found');
        echo '<html><body><h1>Page Not Found</h1></body></html>';
    }
}
// */