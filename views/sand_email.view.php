<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
         <form class="max-w-xl mx-auto bg-white p-8 shadow-md rounded-lg space-y-4" action="/novaCraft_Studio/controllers/form_validation.php" method="POST">

            <input type="text" name="nom" placeholder="Votre nom" class="w-full border  px-4 py-2 rounded-lg" value="">
            
            <input type="email" name="email" placeholder="Votre email" class="w-full border px-4 py-2 rounded-lg ">
       
            <textarea name="message" placeholder="Votre message" class="w-full border px-4 py-2 rounded-lg "></textarea>
      
            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">Envoyer</button>
         </form>

  
</body>
</html>