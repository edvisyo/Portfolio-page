<?php
include 'classes/database.class.php';
include 'classes/message.class.php';

date_default_timezone_set("Europe/Vilnius");
$time = date("Y-m-d H:i:s");

$send = new Message();

if(isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $date = $time;

    $send->sendMessage($name, $email, $message, $date);
    
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <!-- Google Fonts -->
     <link href="https://fonts.googleapis.com/css?family=Calistoga&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Kalam&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Yantramanav&display=swap" rel="stylesheet">
     <!-- My CSS -->
     <link rel="stylesheet" href="CSS/style.css">
    <title>Document</title>
</head>
<body>
    
    <div class="container-fluid">
    <!-- Navigation -->
    <div class="">
        <div class="row justify-content-end">
            <div class="col-lg-4 col-md-8 col-sm-8"> 
            <div class="topNav">
                <nav>
                    <ul>
                        <li><a href="#about">ABOUT</a></li>
                        <li><a href="#services">SERVICES</a></li>
                        <li><a href="#contact">CONTACT</a></li>   
                    </ul>
                </nav>
            </div>
            </div>
        </div>
    </div>
    <!-- End navigation -->

        <div class="image"></div>
    <!-- Main Content -->
    <main>
        <div class="row justify-content-between" id="about">
        <div class="col-lg-7 col-md-4 col-sm-8">
            <h2>ABOUT US</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore illum quidem sunt eveniet? Repellendus aut,
            adipisci voluptatem eius vel numquam blanditiis cumque quis modi ullam praesentium. Eum consequatur doloribus ullam! Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
            Ea distinctio deleniti nisi eum. Quia, aspernatur maiores tempore nobis quibusdam veniam, expedita harum suscipit accusamus aliquam totam fugiat cumque at exercitationem!</p>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt vero, minus minima omnis repellendus nam? Beatae perferendis ullam inventore quaerat obcaecati corrupti 
            autem recusandae voluptatibus aliquam. Soluta fugit quos eligendi!</p>

            <button id="works">SEE MY WORKS</button>
        </div>
        <div class="col-lg-5 col-md-8">
        <div class="image2"></div>
        </div>
    </div>
       
            <div class="image3" id="services">
                <div class="posAb">
                <div class="col-5">
                <h2>SERVICES</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime culpa ut atque, tempore iste non reiciendis unde placeat totam porro! Perferendis earum illum recusandae
                expedita omnis alias voluptatum assumenda praesentium!</p>
                </div>
            </div>
            <div class="posAbLi">
                
                    
                        <div class="services1">
                        <img src="IMG/project.png" alt="project_symbol">
                        <h5>THEMES DEVELOPMENT</h5>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam ullam illo aliquid labore accusamus 
                        deleniti odio laudantium rem nihil eaque illum voluptate molestiae.</p>
                        </div>
                        <div class="services2">
                        <img src="IMG/verification-of-delivery-list-clipboard-symbol.png" alt="verification_symbol">
                        <h5>INTERFACE DESIGN</h5>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam ullam illo aliquid labore accusamus 
                        deleniti odio laudantium rem nihil eaque illum voluptate molestiae.</p>
                    </div>

        
                    <div class="clearfix">
                        <div class="services3">
                            <img src="IMG/metabolism.png" alt="metabolism_symbol">
                            <h5>FREE UPDATES</h5>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam ullam illo aliquid labore accusamus 
                            deleniti odio laudantium rem nihil eaque illum voluptate molestiae.</p>
                            </div>
                            <div class="services4">
                            <img src="IMG/responsive-symbol-with-a-widescreen-monitor-a-cellphone-and-a-tablet.png" alt="responsive_symbol">
                            <h5>RESPONSIVE DESIGN</h5>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam ullam illo aliquid labore accusamus 
                            deleniti odio laudantium rem nihil eaque illum voluptate molestiae.</p>
                        </div>
                    </div>
        
                </div>
            </div>

            <div class="portfolio">
                <div class="col-lg-4 col-md-4 col-sm-8" style="float: left;">
                <h2>PORTFOLIO</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime culpa ut atque, tempore iste non reiciendis unde placeat totam porro! Perferendis earum illum recusandae
                expedita omnis alias voluptatum assumenda praesentium!</p>
                <button id="portfolio">SEE MY PORTFOLIO</button>
                </div>
                
            </div>
            
                <div class="images">
                    <img class="images_1" src="IMG/isle_of_wight_festival_design.png" style="width: 320px; height: 320px;" alt="electronics">
                    <img class="images_2" src="IMG/different-designs-of-a-skateboard-2777671.jpg" style="width: 320px; height: 320px;" alt="skateboards">
                    <img class="images_3" src="IMG/graphics-design-134654-8386413.jpg" style="width: 320px; height: 320px;" alt="graphic-design">
                    <img class="images_4" src="IMG/bussiness_card.jpg" style="width: 320px; height: 320px;" alt="bussiness_card">
                    <img class="images_5" src="IMG/graphic-design-portfolio-2019-internship.jpg" style="width: 320px; height: 320px;" alt="skateboards">
                    <img class="images_6" src="IMG/redbull_graphic_design.jpg" style="width: 320px; height: 320px;" alt="electronics">
                </div>
    
                <div class="clearfix">
                    <div class="row justify-content-center">
                        <div style="text-align: center;" id="contact">
                        <div class="container">
                            <h2>A CREATIVE STUDIO IN KLAIPEDA, PASSIONATE ABOUT DESIGN, ART AND CREATIVITY, SINCE 2010</h2>
                            <button id="portfolio">CONTACT WITH ME</button>
                        </div>
                        </div>
                    </div>
                </div>
                
                <div class="row justify-content-between">
                <form action="" method="POST" style="margin-bottom: 25px;" class="col-md-6">
                    <div class="col-lg-8">
                    <h2>LETS WORK TOGETHER PROJECTS JUST SEND ME EMAIL HERE</h2>
                    </div>
                    <!-- <label for="name">Name</label> -->
                    <input type="text" id="name" name="name" autocomplete="off" placeholder="Name" required>
                    <!-- <label for="email">Email</label> -->
                    <input type="email" id="email" name="email" autocomplete="off" placeholder="Email" required>
                    <br>
                    <br>
                    <!-- <label for="message">Message</label> -->
                    <textarea name="message" id="message" placeholder="Message" required></textarea>
                    <br>
                    <br>
                    <button id="send" name="send" onclick="sendMessage()" style="margin-bottom: 35px;">SEND MESSAGE</button>
                </form>

                
                <div id="map" class="col-md-6"></div> 
                

        </div>
        </div>    
    </main>
    <!-- End Main Content -->
    <footer>
        <div class="row justify-content-center" style="color: #ffffff; margin-bottom: 25px;">
            &COPY;2019 
        </div>
    </footer>

    <script>
    function initMap() {
        var options = {
            zoom:8,
            center:{lat:55.703297, lng:21.144279}
        }

        var map = new google.maps.Map(document.getElementById('map'), options);

        var marker = new google.maps.Marker({
            position:{lat:55.703297, lng:21.144279},
            map:map
        });
    }
    </script>  

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABfksTTtOy6bGxziAIXR4K8Ky2VwLAT0w&callback=initMap"
    async defer></script>

    <!-- My Script -->
    <script src="Script/script.js"></script>  
</body>
</html>

    