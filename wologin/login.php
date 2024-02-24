<?php
session_start();
error_reporting(0);
include'../conn.php';
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $se = "SELECT * FROM login WHERE username = '$email' && password = '$password'";
    $query = mysqli_query($conn,$se);
    $ckeck = mysqli_fetch_assoc($query);
    $qwe = mysqli_num_rows($query);
    if($qwe == 1) {
        echo "<script>alert('login success');</script>";
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $u;
        echo "<script> window.location.href='../wilogin/index.php'; </script>";
    }else {
        echo "<script>alert('Username or password is Incorrect');</script>";

    }
    
}
if ($_SESSION['redirect'] == 1) {
  echo "<script>alert('Registered successfully');</script>";
}else {
}
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-indigo-200">
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8r">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <img class="mx-auto h-20 w-auto" src="https://cdn.pixabay.com/photo/2023/07/19/09/54/caffiinejunction-8136536_1280.png" alt="Your Company">
    <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-black">Sign in to your account</h2>
  </div>

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form class="space-y-6" action="#" method="POST">
      <div>
        <label for="email" class="block text-sm font-medium leading-6 text-black">Email address</label>
        <div class="mt-2">
          <input id="email" name="email" type="email" autocomplete="email" required class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>

      <div>
        <div class="flex items-center justify-between">
          <label for="password" class="block text-sm font-medium leading-6 text-black">Password</label>
        </div>
        <div class="mt-2">
          <input id="password" name="password" type="password" autocomplete="current-password" required class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>

      <div>
        <button type="submit" name="login" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
      </div>
    </form>

    <p class="mt-4 text-center text-sm text-gray-500">
      Not a member?
      <a href="./register.php" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Register Here</a><br>
      <a href="./index.php" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500"><- GO HOME -></a>
    </p>
  </div>
</div>
</section>
</body>
</html>