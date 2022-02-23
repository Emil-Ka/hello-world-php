<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <style>
      body {
         display: flex;
         flex-direction: column;
      }

      .header {
         display: flex;
         justify-content: center;
      }

      .title {
         text-align: center;
         font-size: 1.5rem;
         font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
         
      }

      main {
         flex: 1 1 auto;
      }

      .hello {
         font-size: 1.8rem;
         text-align: center;
         font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
         animation: hello 2s ease-in-out infinite reverse;
         margin-bottom: 300px;
      }

      @keyframes hello {
         from {
            transform: translateX(0px)
         } 50% {
            transform: translateX(20px)
         } to {
            transform: translateX(-20px)
         }
      }

      footer {
         text-align: center;
         font-size: 1.6rem;
         font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
      }

   </style>
</head>
<body>
   <?php
      echo '<header class="header">
               <img src="./img/logo.jpg" width="80px"/>
               <h1 class="title">Задание №1 веб-страница на PHP</h1>
            </header>';
      echo '<main>
               <p class="hello">Hello World</p>
            </main>';
      echo '<footer>
               Лабораторную работу выполнил студент группы 211-321 Караев Эмиль Рафаилович
            </footer>'
   ?>
</body>
</html>