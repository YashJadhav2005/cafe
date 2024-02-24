<?php  include'./header.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
  @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Lugrasimo&display=swap');
</style>
</head>
<body>
  <!--------------------mid body------------------>
  <section class="text-white bg-[url('https://static.myfigurecollection.net/upload/pictures/2022/06/26/3150895.gif')] bg-no-repeat bg-cover body-font ">
  <div class="px-5 py-48 flex items-center backdrop-blur-sm justify-center flex-col">
    <div class="text-center rounded-3xl p-8 lg:w-2/3 w-full ">
      <h1 style="font-family: 'Dancing Script', cursive; text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF;" class=" title-font lg:text-8xl text-5xl border-spacing-10 mb-4 font-semibold text-white">CAFFEINE JUNCTION</h1>
      <div class="flex justify-center">
        <a href="login.php"><button class="ml-4 inline-flex text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded text-lg">Order Now</button></a>
      </div>
    </div>
  </div>
</section>

<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto flex flex-wrap">
    <div class="flex w-full mb-20 flex-wrap">
      <h1 class="ml-20 sm:text-3xl text-2xl font-medium title-font uppercase text-gray-900 lg:w-1/6 lg:mb-0 mb-4">Our gallery</h1>
      <p class="lg:pl-6 lg:w-2/3 mx-auto leading-relaxed text-base">Caffeine Junction is a vibrant and cozy cafe shop known for its exceptional coffee and delectable pastries. Located in a bustling city, the cafe offers a warm and inviting atmosphere with a modern yet comfortable design.</p>
    </div>
    <div class="flex flex-wrap md:-m-2 -m-1">
      <div class="flex flex-wrap w-1/2">
        <div class="md:p-2 p-1 w-1/2">
          <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://img4.nbstatic.in/tr:w-500/5e66414e652205000b88093b.jpg">
        </div>
        <div class="md:p-2 p-1 w-1/2">
          <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://www.dealnloot.com/wp-content/uploads/2019/07/ccd-nearbuy.jpg">
        </div>
        <div class="md:p-2 p-1 w-full">
          <img alt="gallery" class="w-full h-full object-cover object-center block" src="https://i.pinimg.com/originals/67/32/85/673285d26ddf666d693eb8c8e1e88f8f.jpg">
        </div>
      </div>
      <div class="flex flex-wrap w-1/2">
        <div class="md:p-2 p-1 w-full">
          <img alt="gallery" class="w-full h-full object-cover object-center block" src="https://www.dellaresorts.com/images/cafe24banner111.jpg">
        </div>
        <div class="md:p-2 p-1 w-1/2">
          <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://brunchcafe.com/wp-content/uploads/2020/12/IMG_2127.jpeg">
        </div>
        <div class="md:p-2 p-1 w-1/2">
          <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://www.gatorledger.com/wp-content/uploads/2022/07/Cafe-Market.jpg">
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>
<?php include'./footer.php' ?>