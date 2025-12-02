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


<?php  
    //   $pags =['home','services','about','contact'];
  
    //   if (isset($_GET['page']) && !in_array($_GET['page'],$pags)){
    //       header("Location: views/404.view.php");
    //       exit();
    //   }
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/output.css">
</head>
<body>  -->
     
    <?php 
    
    //    include('templates/headerIndex.temp.php');

    //    include('templates/indexSection.temp.php');
       
    //    include('templates/footer.temp.php');
    
    ?>

    <!-- <audio src="assets/ref.mp3" autoplay loop></audio> -->

</body>
</html>