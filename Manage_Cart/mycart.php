<?php
 include('header.php');

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
    <title>Cart</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center border rounded bg-light my-5">
          <h1>MY CART</h1>
        </div>

        <div class="col-lg-9">
          <table class="table">
            <thead class="text-center">
              <tr>
                <th scope="col">Serial No.</th>
                <th scope="col">Item Name</th>
                <th scope="col">Item Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody class="text-center">
              <?php
               
               if(isset($_SESSION['cart']))
               {
                 foreach($_SESSION['cart'] as $key => $value)
                 {
                   $sr=$key+1; 
                  
                   echo"
                     <tr>
                       <td>$sr</td>
                       <td>$value[Item_Name]</td>
                       <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
                       <td>
                         <form action='manage_cart.php' method='POST'>
                            <input class='text-center iquantity' name='Mod_Quantity' onchange='this.form.submit();' type='number' value='$value[Quantity]' min='1' max='10'>
                            <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                         </form>
                       </td>
                       <td class='itotal'></td>
                        <td>
                          <form action='manage_cart.php' method='POST'>
                           <td><button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button></td>
                           <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                          </form>
                        </td>
                     </tr>
                        
                    ";
                 }
               } 
              ?>
              
              
              
            </tbody>
          </table>
        </div>
        <div class="col-lg-3">
          <div class="border bg-light rounded p-4">
            <h4>Grand Total:</h4>
            <h5 class="text-right" id="gtotal"></h5>
            <br>
            <?php 
               if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
               {
                 
              ?>
              <form action="purchase.php" method="POST">
              <div class="form-group">
                <label>Full Name</label>
                <input type="text" name="fullname" class="form-control" required>
              </div>
              <div class="form-group">
                <label>Phone Number</label>
                <input type="number" name="phone_no" class="form-control" required>
              </div>
              <div class="form-group">
                <label>Address</label>
                <input type="text" name="address" class="form-control" required>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="pay_mode" value="COD" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                Online Payment
                </label>
              </div>
              
              <br>
              <button class="btn btn-primary btn-block" name="purchase">Make Payment</button>
            </form>
            <?php
               }
               ?>
            

          </div>

        </div>
        

      </div>
      
    </div>
    <script>

      var gt=0;
      var iprice=document.getElementsByClassName('iprice');
      var iquantity=document.getElementsByClassName('iquantity');
      var itotal=document.getElementsByClassName('itotal');
      var gtotal=document.getElementById('gtotal');
      

      function subTotal()
      {
        gt=0;
        for(i=0;i<iprice.length;i++)
        {
          itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
          gt = gt+(iprice[i].value)*(iquantity[i].value);
        }
        gtotal.innerText=gt;
      }


      subTotal();

    </script>  

    

      

  </body>
    
</html> 
    