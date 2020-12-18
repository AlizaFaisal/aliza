<?php 
$title = 'Aliza Faisal-Home';
require('header.php');

?>
<div class="banner">
    <div class="banner-text">
        <p class="ban-txt"> A full stack Web Application Developer. Build a website for your business with me.</p>
    </div>
</div>
</header>
<main>
    <div class="home-container">
        <div class="project-area">
        <h1>My Projects</h1>
            <div class="row">
                <div class="box">
                 <a href="project_details_bbhe.php"><img src="images/bbhe_main.jpg" alt=""></a>
                    <span>Accomodation Website</span>
                    <a href="project_details_bbhe.php"><h2>Barlings Beach Holiday Escapes</h2></a>
                    <p>End to end accommodation booking website with the
real-time free/busy calendar, booking and email functionality. Worked
as a full-stack developer using vanilla PHP, MySQL and front-end
technologies.</p>
                </div>
                <div class="box">
                <a href="project_details_retro.php"><img src="images/retroMain.jpg" alt=""></a>
                    <span>Music Website</span>
                    <a href="project_details_retro.php"><h2>Retro Record</h2></a>
                    <p>Static but fully responsive website developed using HTML 5, Advanced
CSS animations, and JavaScript Sliders.</p>
                </div>
                <div class="box">
                <a href="project_details_ig.php"><img src="images/igMain.jpg" alt=""></a>
                    <span>Instagram Clone</span>
                    <a href="project_details_ig.php"> <h2>PostGram</h2></a>
                    <p>Functionalities: User Profile and Authentication System, Post Creation,
Sharing and Follow features.
Developed using emerging technologies, Laravel for the Back-end and
Vue.JS for the front-end.</p>
                </div>
                <div class="box box-4">
                <a href="project_details_grocery.php"><img src="images/groceryMain.jpg" alt=""></a>
                    <span>Grocery Website</span>
                    <a href="project_details_grocery.php"><h2>Grocery</h2></a>
                    <p>Functionalities: Admin Panel for product, customers and orders
management. Products on Sales, Out of Stock, Cart and Check out
features. Developed using HTML, CSS, AJAX, PHP, MySQL.</p>
                </div>
            </div>
            <a href="portfolio.php" class="button">View all projects &rarr;</a>
        </div>
    </div>
    <div class="section">
     <p>A determined, hard-working Jr. Full-stack Web Applications Developer with hands-on experience on HTML5, CSS3, JavaScript, jQuery, PHP, MySQL, Laravel, Vue.JS, Node.JS, SQLite, Blade Template Engine, WordPress and WooCommerce</p>
     <div class="section-image">
        <img src="images/Aliza.jpeg" alt="">
        </div>
    </div>
</main>

<?php
require('footer.php');
?>