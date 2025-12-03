<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/output.css">
    <title> <?php echo $title ?> </title>
</head>
<style>
         #p{
               background-image: url('assets/jj.jpg');
               background-size: cover;
               -webkit-background-clip: text;
               -webkit-text-fill-color: transparent;
               font-size: 100px;
                font-weight: 900;
         }

         #sc{
            background-image: url('assets/gb.gif');
            background-repeat: no-repeat;
            background-size: cover;
          
         }
         .row{
              font-size: 50px;
             font-weight: 600;

         }

</style>
<body>

   <section id="sc" class="p-5 flex-col text-center w-screen h-screen">
         <p id='p' class="text-img  ">
              404
         </p>
         <div class="row">
         <a href="?page=home" class=" text-gray-500 hover:text-gray-300 ">←</a>
         </div>
    </section>
      
</body>
</html>