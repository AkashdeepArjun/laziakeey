<?php
/* ini_set('short_tag_open') */
$url = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
/* $url =$_GET[] */


$final_url = rtrim($url,'/');
$page='';

switch ($final_url) {
    case '':
        $page='home';
        break;

    /* case '': */
    /*     $page='home'; */
    /*     break; */

    case '/about':

        $page='about';
        break;

    case '/projects':

        $page='projects';
        break;

    case '/career':
        $page='jobs';
        break;

    case '/skills':
        $page='skills';
        break;

    case '/services':
        $page='services';
        break;

    default:
        # code...
        http_response_code(404);
        exit;
        break;
}

require __DIR__.'/views/layout.php';

?>
