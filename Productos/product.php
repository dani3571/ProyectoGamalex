<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
   <!--Css/Tailwind-->
   <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <?php
    include("../EstructuraCuerpo/header.php");
    ?>
    
    <div class="bg-white">
  <div class="mx-auto max-w-2xl py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
    <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
        
    <?php   
    include("mos.php");
    ?>

<!--dasdasdas-->

    </div>
  </div>
</div>
    <?php   
    include("../EstructuraCuerpo/footer.php");
    ?>
    

</body>
</html>