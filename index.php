<?php 
$page ;
 if(!isset($_GET['page'])){
    $page='home';
 }else{
    $page=$_GET['page'];
 }


$pags =['home','services','about','contact'];
  
$titleMap = [
    'home' => 'NovaCraft Studio - Home',
    'about' => 'À propos - NovaCraft Studio',
    'services' => 'Services - NovaCraft Studio',
    'contact' => 'Contact - NovaCraft Studio',
    '404' => 'Page non trouvée - NovaCraft Studio'
];

if(!in_array($page,$pags)){
    $page='404';
}
    $title = $titleMap[$page];

if (!isset($_GET['page']) || in_array($_GET['page'],$pags)) {
     include 'views/' . $page . '.view.php';
}else {
    $page='404';
    include 'views/404.view.php';
}

?>
