<?php 
$page ;
 if(!isset($_GET['page'])){
    $page='home';
 }else{
    $page=$_GET['page'];
 }


$pags =['home','services','about','contact'];
  
if (!isset($_GET['page']) || in_array($_GET['page'],$pags)) {
     include 'views/' . $page . '.view.php';
}else {
    $page='404';
    include 'views/404.view.php';
}

$titleMap = [
    'home' => 'NovaCraft Studio - Home',
    'about' => 'À propos - NovaCraft Studio',
    'services' => 'Services - NovaCraft Studio',
    'contact' => 'Contact - NovaCraft Studio',
    '404' => 'Page non trouvée - NovaCraft Studio'
];
$title = $titleMap[$page];

?>
