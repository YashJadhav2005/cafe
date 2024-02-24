<?php
session_start();
if ($_SERVER["REQUEST_METHOD"]=="POST") 
{
    if(isset($_POST['Add_To_Cart']))
    {
        if (isset($_SESSION['cart'])) 
        {
            $myitem=array_column($_SESSION['cart'],'Item_Name');
            if (in_array($_POST['Item_Name'],$myitem)) 
            {
                echo "<script>alert('Item Already Added');
                window.location.href='mainmenu.php';
                </script>";
            }
            else 
            {
            $count=count($_SESSION['cart']);
            $_SESSION['cart'][$count] = array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Price'],'Quantity'=>1);
            echo "<script>alert('Item Added');
                window.location.href='mainmenu.php';
                </script>";
        
            }
        }

        else 
        {
            $_SESSION['cart'][0]=array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Price'],'Quantity'=>1);
            echo "<script>alert('Item Added');
                window.location.href='mainmenu.php';
                </script>";
        }
    }
}



?>