<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    
</head>
<body>
    <!--------------------Header------------------>
  <header class="text-white p-2 bg-indigo-950 body-font">
    <div class="container mx-auto flex flex-wrap flex-col md:flex-row items-center">
      <a class="lg:ml-4 flex title-font font-medium items-center text-black mb-4 md:mb-0">
        <img class="w-24 h-24" src="https://cdn.pixabay.com/photo/2023/07/19/09/54/caffiinejunction-8136536_1280.png" alt="">
      </a>
      <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
      <a href="./index.php" class="mr-5 lg:text-xl hover:underline hover:transition">Home</a>
        <a href="aboutus.php" class="mr-5 lg:text-xl hover:underline hover:transition">About Us</a>
        <a href="contact.php" class="mr-5 lg:text-xl hover:underline hover:transition">Contact Us</a>
        <a href="premenu.php" href="./menu/premenu.php" class="lg:mr-5 lg:text-xl hover:underline hover:transition">Cafe Menu</a>
      </nav>
      <a href="login.php"><button class="lg:mr-8 transition inline-flex items-center border-2 py-1 px-3 focus:outline-none hover:bg-white hover:text-green-950 rounded text-base mt-4 md:mt-0 duration-300">Login
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
          <path d="M5 12h14M12 5l7 7-7 7"></path>
        </svg>
      </button></a>
    </div>
  </header>
</body>
</html>