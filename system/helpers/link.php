<?php

function linkCSS($cssPath){

    
    $url = BASEURL . "/" .$cssPath;
    echo '<link rel="stylesheet" href="'. $url .'">';


}

function linkJS($jsPath){

    $url = BASEURL. "/". $jsPath;
    echo '<script src="'. $url .'"></script>';
}

function route($url = ''){
 $url = BASEURL. "/". $url;
   echo $url;
}

?>
