<?php
 
?>

<!DOCTYPE html>
<html>
<div class="homepage">

    <head>

        <link rel="stylesheet" href="Final.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
    </head>


    <body>
    
    </body>
    
    





    <div>
        <h1 class="head"><i>Pizza Corner</i></h1>
        
        
        <div class="nav">
            <nav id="navbar">
                <ul>
                    <li class="item"><a href="slide.php">Home</a></li>
                    <li class="item"><a href="#services-container">Services</a></li>
                    <li class="item"><a href="#client-section">Our Clients</a></li>
                    <li class="item"><a href="#contact">Contact Us</a></li>
                    <li class="item"><a href="login.php">Login</a></li>
                    <li class="item"><a href="Admin Login.php">Admin Login</a></li>

                </ul>
            </nav>
        </div>


    </div>
    
          
    
    


    <div>

        <div id="welcome">
            <section id="home">
                <h1 class="h-primary">Welcome to Pizza Corner</h1>
                <p> Order online now & get your Favorites delivered Pizza from pizza corner. <br> Order now and get offers. </p>
                <form action="gallery.php" method="POST">
                 <button class="ordernow">  Visit</button>
                </form>
                
            </section>
        </div>
    </div>
</div>
</div>
<section id="services-container">
    <h1 class="h-primary center">Our Services</h1>
    <div id="services">
        <div class="box">
            <img src="scary-catering-pizza-other-horror-snacks-halloween-198380543.jpg" alt="">
            <h2 class="h-secondary center">Food Catering</h2>
            <p class="center">We are also Catering a big orders.So if you are planning an event, it is always good to
                have a catering company to assist you. We will lessen your work load and together with you, We will help
                make the event as successful as possible</p>
        </div>

        <div class="box">
            <img src="images\unnamed.jpg" alt="">
            <h2 class="h-secondary center">Bulk Ordering</h2>
            <p class="center">Save money when you buy in bulk! We offer discounts on bulk orders depending on the
                product and the total invoice amount.

                A bulk order can be placed by anyone from anywhere in the world and will be delivered anywhere in the
                world.

            </p>
        </div>
        <div class="box">
            <img src="Food ordering.jpg" alt="">
            <h2 class="h-secondary center">Food Ordering</h2>
            <p class="center">We are providing food ordering at homes,officies,schools ,collages. with take care of
                hygiene. A order can be placed by anyone from anywhere in the world and will be delivered anywhere in
                the world.</p>
        </div>
    </div>
    </div>
</section>
<div class="client-from">
    <section id="client-section">
        <h1 class="h-primary_center">Our Clients</h1>
        <div id="clients">
            <div class="client-item">
                <p>Name: Shrutika Patil
                    <hr> Contact:9720514701
                    <hr> Email: Shrutika@gmail.com
                </p>
            </div>
            <div class="client-item">
                <p>Name: Nikita Sonar
                    <hr> Contact:9963526399
                    <hr> Email: Nikita@gmail.com
                </p>
            </div>

            <div class="client-item">
                <p>Name: Shreya Danole
                    <hr> Contact:97432657466
                    <hr> Email: Shreya@gmail.com
                </p>

            </div>
            <div class="client-item">
                <p>Name: Dipali Menkudale
                    <hr> Contact:9969126399
                    <hr> Email: Dipali@gmail.com
                </p>
            </div>
        </div>

    </section>

    <section id="contact">
        <h1 class="h-primary center">Contact Us</h1>
        <div id="contact-box">
            <form action="Feedback.php">
                <div class="form-group">
                    <label for="name">Name </label>
                    <input type="text" name="name" id="name" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="email">Email </label>
                    <input type="Text" name="email" id="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="mobile">Mobile </label>
                    <input type="Text" name="mobile" id="mobile" placeholder="Enter your phone">
                </div>
                <div class="form-group">
                    <label for="message">Feedback/Queary </label>
                    <textarea name="message" id="message" cols="30" rows="10"></textarea>
                </div>
        </div>
        <input type="button" name="submit" class="submit_" value="submit">
        </form>

    </section>
</div>

<footer>
    <div class="center">
        Copyright &copy; www.pizza Corner.com. All rights reserved!
    </div>
</footer>
</body>
<script>
    function myFunction() {
        var input, filter, ul, li, a, i;
        input = document.getElementById("mySearch");
        filter = input.value.toUpperCase();
        ul = document.getElementById("myMenu");
        li = ul.getElementsByTagName("li");
        for (i = 0; i < li.length; i++) {
            a = li[i].getElementsByTagName("a")[0];
            if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
            } else {
                li[i].style.display = "none";
            }
        }
    }
    
</script>


</body>



</html>