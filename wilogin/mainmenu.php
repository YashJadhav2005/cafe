<?php  include'header.php'; 
session_start();
print_r($_SESSION['cart'])?>

<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-wrap -m-4">
            <form class="lg:w-1/4 md:w-1/2 p-4 w-full" action="./manage_cart.php" method="POST">
            <div >
              <a class="block relative h-48 rounded overflow-hidden">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://starbucks-cdn-01.s3.ap-south-1.amazonaws.com/Items/Small/100501.jpg">
              </a>
              <div class="mt-4">
                <h2 class="text-gray-900 title-font text-lg font-medium">Java Chip Frappuccino</h2>
                <p class="mt-1">₹ 367.50 </p>
              </div>
              <button type="submit" name="Add_To_Cart" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Java Chip Frappuccino">
              <input type="hidden" name="Price" value="367.50">
            </div></form>


<!--- New Item --->


            <form class="lg:w-1/4 md:w-1/2 p-4 w-full" action="./manage_cart.php" method="POST">
            <div>
              <a class="block relative h-48 rounded overflow-hidden">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://starbucks-cdn-01.s3.ap-south-1.amazonaws.com/Items/Small/100433.jpg">
              </a>
              <div class="mt-4">
                
                <h2 class="text-gray-900 title-font text-lg font-medium">Caffe Americano</h2>
                <p class="mt-1">₹ 262.50</p>
              </div>
            <button type="submit" name="Add_To_Cart" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Caffe Americano">
              <input type="hidden" name="Price" value="262.50">
            </div></form>


<!--- New Item --->


            <form class="lg:w-1/4 md:w-1/2 p-4 w-full" action="./manage_cart.php" method="POST">
            <div >
              <a class="block relative h-48 rounded overflow-hidden">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://starbucks-cdn-01.s3.ap-south-1.amazonaws.com/Items/Small/105468.jpg">
              </a>
              <div class="mt-4">
                
                <h2 class="text-gray-900 title-font text-lg font-medium">Cold coffee</h2>
                <p class="mt-1">₹ 362.25</p>
              </div>
            <button type="submit" name="Add_To_Cart" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Cold coffee">
              <input type="hidden" name="Price" value="362.25">
            </div></form>


<!--- New Item --->


            <form class="lg:w-1/4 md:w-1/2 p-4 w-full" action="./manage_cart.php" method="POST">
            <div >
              <a class="block relative h-48 rounded overflow-hidden">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://www.whiskaffair.com/wp-content/uploads/2020/08/Chocolate-Chip-Frappe-2-3.jpg">
              </a>
              <div class="mt-4">
                
                <h2 class="text-gray-900 title-font text-lg font-medium">Double Chocolate Chip Frappuccino</h2>
                <p class="mt-1">₹ 399.00</p>
              </div>
            <button type="submit" name="Add_To_Cart" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Double Chocolate Chip Frappuccino">
              <input type="hidden" name="Price" value="399.00">
            </div></form>


<!--- New Item --->


            <form class="lg:w-1/4 md:w-1/2 p-4 w-full" action="./manage_cart.php" method="POST">
            <div>
              <a class="block relative h-48 rounded overflow-hidden">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://starbucks-cdn-01.s3.ap-south-1.amazonaws.com/Items/Small/108177.jpg">
              </a>
              <div class="mt-4">
                <h2 class="text-gray-900 title-font text-lg font-medium"><h2 class="text-gray-900 title-font text-lg font-medium">Creamy Spinach & Corn Pocket</h2></h2>
                
                <p class="mt-1">₹ 246.75</p>
              </div>
            <button type="submit" name="Add_To_Cart" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Creamy Spinach & Corn Pocket">
              <input type="hidden" name="Price" value="246.75">
            </div></form>


<!--- New Item --->


            <form  class="lg:w-1/4 md:w-1/2 p-4 w-full"action="./manage_cart.php" method="POST">
            <div>
              <a class="block relative h-48 rounded overflow-hidden">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://starbucks-cdn-01.s3.ap-south-1.amazonaws.com/Items/Small/100419.jpg">
              </a>
              <div class="mt-4">
                
                <h2 class="text-gray-900 title-font text-lg font-medium">Cappuccino</h2>
                <p class="mt-1">₹ 283.50</p>
              </div>
            <button type="submit" name="Add_To_Cart" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Cappuccino">
              <input type="hidden" name="Price" value="283.50">
            </div></form>


<!--- New Item --->


            <form  class="lg:w-1/4 md:w-1/2 p-4 w-full" action="./manage_cart.php" method="POST">
            <div>
              <a class="block relative h-48 rounded overflow-hidden">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://starbucks-cdn-01.s3.ap-south-1.amazonaws.com/Items/Small/104362.jpg">
              </a>
              <div class="mt-4">
                
                <h2 class="text-gray-900 title-font text-lg font-medium">Egg White and Chicken In Multigrain Croiss</h2>
                <p class="mt-1">₹ 383.25</p>
              </div>
            <button type="submit" name="Add_To_Cart" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Egg White and Chicken In Multigrain Croiss">
              <input type="hidden" name="Price" value="383.25">
            </div></form>


<!--- New Item --->


            <form  class="lg:w-1/4 md:w-1/2 p-4 w-full" action="./manage_cart.php" method="POST">
            <div>
              <a class="block relative h-48 rounded overflow-hidden">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://starbucks-cdn-01.s3.ap-south-1.amazonaws.com/Items/Small/107704.jpg">
              </a>
              <div class="mt-4">
                
                <h2 class="text-gray-900 title-font text-lg font-medium">New York Cheesecake</h2>
                <p class="mt-1">₹ 404.25</p>
              </div>
            <button type="submit" name="Add_To_Cart" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="New York Cheesecake">
              <input type="hidden" name="Price" value="404.25">
            </div></form>


<!--- New Item --->


            <form  class="lg:w-1/4 md:w-1/2 p-4 w-full" action="./manage_cart.php" method="POST">
            <div>
                <a class="block relative h-48 rounded overflow-hidden">
                  <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://starbucks-cdn-01.s3.ap-south-1.amazonaws.com/Items/Small/109270.jpg">
                </a>
                <div class="mt-4">
                  
                  <h2 class="text-gray-900 title-font text-lg font-medium">Butter Croissant</h2>
                  <p class="mt-1">₹ 288.75</p>
                </div>
            <button type="submit" name="Add_To_Cart" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Butter Croissant">
              <input type="hidden" name="Price" value="288.75">
            </div></form>


<!--- New Item --->


            <form  class="lg:w-1/4 md:w-1/2 p-4 w-full" action="./manage_cart.php" method="POST">
              <div>
                <a class="block relative h-48 rounded overflow-hidden">
                  <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://starbucks-cdn-01.s3.ap-south-1.amazonaws.com/Items/Small/100075.jpg">
                </a>
                <div class="mt-4">
                  
                  <h2 class="text-gray-900 title-font text-lg font-medium">Blueberry Muffin</h2>
                  <p class="mt-1">₹ 320.25</p>
                </div>
              <button type="submit" name="Add_To_Cart" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Blueberry Muffin">
              <input type="hidden" name="Price" value="320.25">
            </div></form>


<!--- New Item --->


              <form  class="lg:w-1/4 md:w-1/2 p-4 w-full" action="./manage_cart.php" method="POST">
              <div>
                <a class="block relative h-48 rounded overflow-hidden">
                  <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://starbucks-cdn-01.s3.ap-south-1.amazonaws.com/Items/Small/103689.jpg">
                </a>
                <div class="mt-4">
                  
                  <h2 class="text-gray-900 title-font text-lg font-medium">Banana Chocolate Loaf Cake</h2>
                  <p class="mt-1">₹ 330.75</p>
                </div>
              <button type="submit" name="Add_To_Cart" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Banana Chocolate Loaf Cake">
              <input type="hidden" name="Price" value="330.75">
            </div></form>


<!--- New Item --->


              <form  class="lg:w-1/4 md:w-1/2 p-4 w-full" action="./manage_cart.php" method="POST">
              <div>
                <a class="block relative h-48 rounded overflow-hidden">
                  <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://starbucks-cdn-01.s3.ap-south-1.amazonaws.com/Items/Small/107707.jpg">
                </a>
                <div class="mt-4">
                  
                  <h2 class="text-gray-900 title-font text-lg font-medium">Double Chocolate Chip Cookie</h2>
                  <p class="mt-1">₹ 294.00</p>
                </div>
              <button type="submit" name="Add_To_Cart" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Double Chocolate Chip Cookie">
              <input type="hidden" name="Price" value="294.00">
            </div></form>


<!--- New Item --->


              <form  class="lg:w-1/4 md:w-1/2 p-4 w-full" action="./manage_cart.php" method="POST">
              <div>
                <a class="block relative h-48 rounded overflow-hidden">
                  <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://starbucks-cdn-01.s3.ap-south-1.amazonaws.com/Items/Small/104108.jpg">
                </a>
                <div class="mt-4">
                  
                  <h2 class="text-gray-900 title-font text-lg font-medium">Chilli Cheese Toast</h2>
                  <p class="mt-1">₹ 346.50</p>
                </div>
              <button type="submit" name="Add_To_Cart" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Chilli Cheese Toast">
              <input type="hidden" name="Price" value="346.50">
            </div></form>

<!--- New Item --->

              <form  class="lg:w-1/4 md:w-1/2 p-4 w-full" action="./manage_cart.php" method="POST">
              <div>
                <a class="block relative h-48 rounded overflow-hidden">
                  <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://starbucks-cdn-01.s3.ap-south-1.amazonaws.com/Items/Small/112615.jpg">
                </a>
                <div class="mt-4">
                  
                  <h2 class="text-gray-900 title-font text-lg font-medium">Tomato Basil Bruschetta</h2>
                  <p class="mt-1">₹ 336.00</p>
                </div>
              <button type="submit" name="Add_To_Cart" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Tomato Basil Bruschetta">
              <input type="hidden" name="Price" value="336.00">
            </div></form>

<!--- New Item --->

              <form  class="lg:w-1/4 md:w-1/2 p-4 w-full" action="./manage_cart.php" method="POST">
              <div>
                <a class="block relative h-48 rounded overflow-hidden">
                  <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://starbucks-cdn-01.s3.ap-south-1.amazonaws.com/Items/Small/112590.jpg">
                </a>
                <div class="mt-4">
                  
                  <h2 class="text-gray-900 title-font text-lg font-medium">Vegan Croissant Bun</h2>
                  <p class="mt-1">₹ 388.50</p>
                </div>
              <button type="submit" name="Add_To_Cart" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Vegan Croissant Bun">
              <input type="hidden" name="Price" value="388.50">
            </div></form>

<!--- New Item --->

              <form  class="lg:w-1/4 md:w-1/2 p-4 w-full" action="./manage_cart.php" method="POST" method="POST">
              <div>
                <a class="block relative h-48 rounded overflow-hidden">
                  <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://starbucks-cdn-01.s3.ap-south-1.amazonaws.com/Items/Small/113946.jpg">
                </a>
                <div class="mt-4">
                  
                  <h2 class="text-gray-900 title-font text-lg font-medium">Chatpata Paratha Wrap</h2>
                  <p class="mt-1">₹ 357.00</p>
                </div>
              <button type="submit" name="Add_To_Cart" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Chatpata Paratha Wrap">
              <input type="hidden" name="Price" value="357.00">
            </div></form>

<!--- New Item --->

              <form  class="lg:w-1/4 md:w-1/2 p-4 w-full" action="./manage_cart.php" method="POST">
              <div>
                <a class="block relative h-48 rounded overflow-hidden">
                  <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://starbucks-cdn-01.s3.ap-south-1.amazonaws.com/Items/Small/113942.jpg">
                </a>
                <div class="mt-4">
                  
                  <h2 class="text-gray-900 title-font text-lg font-medium">Spiced Paneer Sandwich in Focaccia</h2>
                  <p class="mt-1">₹ 399.00</p>
                </div>
              <button type="submit" name="Add_To_Cart" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Spiced Paneer Sandwich in Focaccia">
              <input type="hidden" name="Price" value="399.00">
            </div></form>

<!--- New Item --->

              <form  class="lg:w-1/4 md:w-1/2 p-4 w-full" action="./manage_cart.php" method="POST">
              <div>
                <a class="block relative h-48 rounded overflow-hidden">
                  <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://starbucks-cdn-01.s3.ap-south-1.amazonaws.com/Items/Small/113944.jpg">
                </a>
                <div class="mt-4">
                  
                  <h2 class="text-gray-900 title-font text-lg font-medium">Pesto & Mozzarella Sandwich in Panini</h2>
                  <p class="mt-1">₹ 414.75</p>
                </div>
              <button type="submit" name="Add_To_Cart" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Pesto & Mozzarella Sandwich in Panini">
              <input type="hidden" name="Price" value="414.75">
            </div></form>

<!--- New Item --->

              <form  class="lg:w-1/4 md:w-1/2 p-4 w-full" action="./manage_cart.php" method="POST">
              <div>
                <a class="block relative h-48 rounded overflow-hidden">
                  <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://starbucks-cdn-01.s3.ap-south-1.amazonaws.com/Items/Small/113941.jpg">
                </a>
                <div class="mt-4">
                  
                  <h2 class="text-gray-900 title-font text-lg font-medium">Herbed Chicken Focaccia Sandwich</h2>
                  <p class="mt-1">₹ 414.75</p>
                </div>
              <button type="submit" name="Add_To_Cart" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Herbed Chicken Focaccia Sandwich">
              <input type="hidden" name="Price" value="414.75">
            </div></form>

<!--- New Item --->

              <form  class="lg:w-1/4 md:w-1/2 p-4 w-full" action="./manage_cart.php" method="POST">
              <div>
                <a class="block relative h-48 rounded overflow-hidden">
                  <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://starbucks-cdn-01.s3.ap-south-1.amazonaws.com/Items/Small/113943.jpg">
                </a>
                <div class="mt-4">
                  
                  <h2 class="text-gray-900 title-font text-lg font-medium">Tandoori Chicken Panini Sandwich</h2>
                  <p class="mt-1">₹ 414.75</p>
                </div>
              <button type="submit" name="Add_To_Cart" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Tandoori Chicken Panini Sandwich">
              <input type="hidden" name="Price" value="414.75">
            </div></form>

<!--- New Item --->

            
              
          </div>
        </div>
</div>
      </section> 
      
      
</body>
</html>
<?php
 include'footer.php' ;
 ?>