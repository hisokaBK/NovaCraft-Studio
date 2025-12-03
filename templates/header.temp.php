
<header class="bg-white shadow-md">
    <nav class="container mx-auto flex justify-between items-center py-4 px-[5%]">
      <h1 class="text-2xl font-bold text-blue-600">DigitalWave</h1>
      <ul class="flex space-x-6">
        <li><a href="?page=home" class="<?php echo isset($_GET['page']) && $_GET['page']!='home'?'hover:text-blue-600':'text-blue-600 font-medium' ?> ">Accueil</a></li>
        <li><a href="?page=services" class="<?php echo  isset($_GET['page']) && $_GET['page']=='services'?'text-blue-600 font-medium':'hover:text-blue-600'?> ">Services</a></li>
        <li><a href="?page=about" class="<?php echo  isset($_GET['page']) && $_GET['page']=='about'?'text-blue-600 font-medium':'hover:text-blue-600'?> ">À propos</a></li>
        <li><a href="?page=contact" class="<?php echo  isset($_GET['page']) && $_GET['page']=='contact'?'text-blue-600 font-medium':'hover:text-blue-600'?>  ">Contact</a></li>

   
      </ul>
    </nav>
  </header>