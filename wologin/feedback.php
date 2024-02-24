<?php  include'./header.php' ?>
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-indigo-200">
    
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8  ">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm ">
            <img class="mx-auto h-20 w-auto" src="https://cdn.pixabay.com/photo/2023/07/19/09/54/caffiinejunction-8136536_1280.png" alt="Your Company">
          <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-black">Feedback</h2>
        </div>
      
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
          <form class="space-y-6" action="#" method="POST">
            <div>
              <label for="name" class="block text-sm font-medium leading-6 text-black">Email</label>
              <div class="mt-2">
                <input id="email" name="email" type="email" autocomplete="name" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
              </div>
            </div>
      
            <div>
              <div class="flex items-center justify-between">
                <label for="message" class="block text-sm font-medium leading-6  text-black">Message</label>
                
              </div>
              <div class="mt-2">
                <textarea id="message" name="message" class="block w-full rounded-md border-0 py-1.5  shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
              </div>
            </div>
      
            <div>
              <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"> Submit</button>
            </div>
          </form>
        </div>
      </div>
</body>
</html>
<?php
 include'./footer.php' ;
 ?>