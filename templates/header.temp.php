
<header class="bg-white shadow-md">
    <nav class="container mx-auto flex justify-between items-center py-4 px-[5%]">
      <h1 class="text-2xl font-bold text-blue-600">DigitalWave</h1>
      <ul class="flex space-x-6">
        <li><a href="../views/home.view.php?page=home" class="<?php echo$_GET['page']=='home'?'text-blue-600 font-medium':'hover:text-blue-600'?> ">Accueil</a></li>
        <li><a href="../views/services.view.php?page=services" class="<?php echo$_GET['page']=='services'?'text-blue-600 font-medium':'hover:text-blue-600'?> ">Services</a></li>
        <li><a href="../views/about.view.php?page=about" class="<?php echo$_GET['page']=='about'?'text-blue-600 font-medium':'hover:text-blue-600'?> ">À propos</a></li>
        <li><a href="../views/contact.view.php?page=contact" class="<?php echo$_GET['page']=='contact'?'text-blue-600 font-medium':'hover:text-blue-600'?>  ">Contact</a></li>
      </ul>
    </nav>
  </header>