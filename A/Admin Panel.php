<?php
  require("Connection.php");
  session_start();
  if(!isset($_SESSION['AdminLoginId']))
  {
     header("location: Admin Login.php");
  } 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Admin Panel</title>
        <style>
            body{
                margin: 0;
            }
            div.header{
                color: #f0f0f0;
                font-family: 'Times New Roman', Times, serif;
                display: flex;
                flex-direction: row;
                align-items: center;
                justify-content: space-between;
                padding: 0 60px;
                background-color:#1c1c1e;
            }
            div.header button{
                background-color: #f0f0f0;
                font-size: 16px;
                font-weight: 550;
                padding: 8px;
                border: 2px solid black;
                border-radius: 5px;
            }
        </style>
    </head>
    <body>
        <div class="header">
            <h1>ADMIN PANEL- <?php echo $_SESSION['AdminLoginId'] ?></h1>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                <button  type="submit" name="Logout">LOGOUT</button>
        
            </form>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-12">
                    <table class="table text-center table-dark">
                        <thead>
                            <tr>
                                <th scope="col">Order ID</th>
                                <th scope="col">Customer Name</th>
                                <th scope="col">Phone No</th>
                                <th scope="col">Address</th>
                                <th scope="col">PayMode</th>
                                <th scope="col">Orders</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                              $query="SELECT * FROM `order_manager`";
                              $user_result=mysqli_query($con,$query);
                              while($user_fetch=mysqli_fetch_assoc($user_result))
                              {
                                    echo"
                                        <tr>
                                            <td>$user_fetch[Order_id]</td>
                                            <td>$user_fetch[Full_Name]</td>
                                            <td>$user_fetch[Phone_No]</td>
                                            <td>$user_fetch[Address]</td>
                                            <td>$user_fetch[Pay_Mode]</td>
                                            <td>
                                                <table class='table text-center table-dark'>
                                                <thead>
                                                    <tr>
                                                        <th scope='col'>Item Name</th>
                                                        <th scope='col'>Price</th>
                                                        <th scope='col'>Quantity</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                    ";
                                    $order_query="SELECT * FROM `user_orders` WHERE `Order_id`= '$user_fetch[Order_id]'";
                                    $order_result=mysqli_query($con,$order_query);
                                    while($order_fetch=mysqli_fetch_assoc($order_result))
                                    {
                                        echo"
                                          <tr>
                                             <td>$order_fetch[Item_Name]</td>
                                             <td>$order_fetch[Price]</td>
                                             <td>$order_fetch[Quantity]</td>
                                          
                                            </tr>
                                        
                                        
                                        
                                        ";
                                    }
                                    echo"
                                        </tbody>
                                        </table>
    
                                            </td>
                                        </tr>
                                    ";

                                } 
                            
                            ?>
                            
                            
                        </tbody>
                    </table>


                </div>
            </div>
        </div>






        <?php 
           if(isset($_POST['Logout']))
           {
               session_destroy();
               header("location: home.php");
           }
        
        ?>
    </body>
</html>