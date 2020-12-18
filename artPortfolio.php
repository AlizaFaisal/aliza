<?php 
$title = 'About Aliza Faisal';
require('header.php');

?>
<div class="about-banner">
    <div class=" about-text">
        <p class="ban-txt"> 
       Meet Aliza, Full stack developer.

        </p>
    </div>
</div>
</header>
<main>


<div class=" gallery-container">
<div class="myself">
      <div class="myself_image">
      <img src="images/lezaArtistry.jpeg" alt="">
      <div class="myself_image_text">
          <p>Aliza Faisal</p>
          <small>Makeup Artist/Painter</small>
          <ul>
          <li><a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-facebook-f"></i>
                    </a></li>

                    <li><a href="https://www.linkedin.com/" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-linkedin-in"></i>
                    </a></li>
                        
                    <li><a href="https://instagram.com/" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-instagram"></i>
                    </a></li>
          </ul>
      </div>

      </div>
       <div class="myself_text art_text">
       <h1>Passion for Art</h1>
        <h2>Makeup Artist/Painter</h2>
        <p>Aliza Faisal is an Australian based professional make up artist, painter, content creator and web developer. She carried out her studies at Cameron Jane Make Up Design Institute, Sydney where she specialized in photoshoot and everyday make up techniques. She is currently pursuing a diploma in screen and media productions.<br>
Leza, like she likes to be called, regularly works with fashion and lifestyle photographers from Sydney as well as offering MUA services for events and weddings.<br>
Having a natural talent for painting, she has a passion for designing and executing complex body paint pieces. This gives her portfolio a combination of elegance, color and creativity.<br>
She forms part of the regular team at The Garage Photo Studio in Marsfield and works as a freelancer in the make up and web development industry</p>

       </div>    
 </div>
    <div class="bootstrapSlider">
        <h3>Art Portfolio</h3>
    <!-- Grid row -->
<div class="row">

<!-- Grid column -->
<div class="col-md-12 d-flex justify-content-center mb-5">

  <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="all">All</button>
  <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="1">Makeup</button>
  <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="2">Painting</button>

</div>
<!-- Grid column -->

</div>
<!-- Grid row -->

<!-- Grid row -->
<div class="gallery" id="gallery">

<!-- Grid column -->
<div class="mb-3 pics animation all 2">
  <img class="img-fluid" src="https://i.ibb.co/NKmQnH5/20201218-132058.jpg" alt="Card image cap">
</div>
<!-- Grid column -->

<!-- Grid column -->
<div class="mb-3 pics animation all 1">
  <img class="img-fluid" src="https://i.ibb.co/qsX7rvn/Capture1.jpg" alt="Card image cap">
</div>
<!-- Grid column -->

<!-- Grid column -->
<div class="mb-3 pics animation all 1">
  <img class="img-fluid" src="https://i.ibb.co/0VTbSyQ/Capture2.jpg" alt="Card image cap">
</div>
<!-- Grid column -->

<!-- Grid column -->
<div class="mb-3 pics animation all 2">
  <img class="img-fluid" src="https://i.ibb.co/T2sM6JD/aliza.png" alt="Card image cap">
</div>
<!-- Grid column -->

<!-- Grid column -->
<div class="mb-3 pics animation all 2">
  <img class="img-fluid" src="https://i.ibb.co/DkBBs1C/20201218-133837.jpg" alt="Card image cap" style="width: 100%;">
</div>
<!-- Grid column -->

<!-- Grid column -->
<div class="mb-3 pics animation all 1">
  <img class="img-fluid" src="https://i.ibb.co/G5ZP5WC/Capture3.jpg" alt="Card image cap">
</div>
<!-- Grid column -->

</div>
<!-- Grid row -->
</div>
</div>
<div class="gallery-area">


<h2>Makeup for all occasions </h2>
<h3>Natural Makeup/Makeup No Makeup Look <i onclick="showNaturalGallery()" class="fas fa-arrow-circle-down"></i></h3>
<div class="hidden-gallery-natural" id="hidden-gallery-natural">
    <img src="https://i.ibb.co/fvhGXM4/fakegodsblue2.jpg"alt="">
    <img src="https://i.ibb.co/7WcPhcw/bela18.jpg" alt="">
    <img src="https://i.ibb.co/Vx1FGCS/bella11text.jpg" alt="">
    <img src="https://i.ibb.co/G5ZP5WC/Capture3.jpg"  alt="">
    <img src="https://i.ibb.co/89ZW6xx/closeup1.jpg" alt="">
    <img src="https://i.ibb.co/TPv35tc/Capture5.jpg" alt="">
</div>
<h3>Editorial Makeup Look <i onclick="showEditorialGallery()" class="fas fa-arrow-circle-down"></i></h3>
<div class="hidden-gallery-editorial" id="hidden-gallery-editorial">
<img src="https://i.ibb.co/5vLHPCv/kristy1.jpg" alt="">
    <img src="https://i.ibb.co/9ZgN7xR/fakegodspink2.jpg"alt="">
    <img src="https://i.ibb.co/znNCZ0k/sleepatnight2.jpg" alt="">
    <img src="https://i.ibb.co/R3vMwyB/bluecoat8.jpg" alt="">
    <img src="https://i.ibb.co/pWPJc8X/glitterlove3.jpg"  alt="">
    <img src="https://i.ibb.co/3SCzkgL/kristy2.jpg" alt="">
   
</div>
<h3>Group PhotoShoot/ Storytelling <i onclick="showGallery()" class="fas fa-arrow-circle-down"></i></h3>
<div class="hidden-gallery" id="hidden-gallery">
    <img src="https://i.ibb.co/qjP2Spv/heavengroup.jpg"alt="">
    <img src="https://i.ibb.co/ws6CLQC/heavensolooxana1.jpg" alt="">
    <img src="https://i.ibb.co/4d2Z5Nq/hellgirls2.jpg" alt="">
    <img src="https://i.ibb.co/G5ZP5WC/Capture3.jpg"  alt="">
    <img src="https://i.ibb.co/3RVhnxG/Capture4.jpg" alt="">
    <img src="https://i.ibb.co/TPv35tc/Capture5.jpg" alt="">
</div>
</div>
<?php 
        //handling error of the form
        if(isset($_POST['submit'])){
         
            if(empty($_POST['fname'])){
                $fnameErr = 'First Name is required';
            }else{
                $fname = $_POST['fname'];
            }
            if(empty($_POST['lname'])){
                $lnameErr = 'Last Name is required';
            }else{
                $lname = $_POST['lname'];
            }
            $fullName = $fname . ' ' . $lname;  
            if(empty($_POST['phone'])){
                $phoneErr = 'phone number is required';
            }else{
                $phone = $_POST['phone'];
            }
            if(empty($_POST['email'])){
                $emailErr = 'Email is required';
            }else{
                $email = $_POST['email'];
            }
            if(empty($_POST['msg'])){
                $msgErr = 'Please write the message';
            }else{
                $msg = $_POST['msg'];
            }
            if($_POST['compName'] == ''){
                $compName = '';
            }else{
                $compName = $_POST['compName'];
            }
            if($fnameErr == '' &&  $lnameErr== '' &&  $phoneErr == '' &&  $emailErr== '' &&  $msgErr== '' ){
                $sql = "INSERT INTO `user_messages` ( `fullName`, `email`, `companyName`, `message`, `phone`) VALUES ( '$fullName', '$email', '$compName', '$msg', '$phone')";
                $res = mysqli_query($conn, $sql);
               if($res){
                   $msgSent = 'Your message is sent';
               }
            }
           
        }
        ?>

       <div class="form_wrapper">
       <h3>Book me for your next event</h3>
       <div class="contact-form">
           
            <p>Fill out the form below and we’ll be in touch soon. </p>
                <form action="" method="post">
                        <label for="fname">First Name:</label>
                        <input type="text" id="fname" name="fname" value="<?php if(isset($fname)) { echo $fname; }?>"><br>
                        <span><?php if(isset($fnameErr)) { echo $fnameErr; }?></span><br>
                        <label for="lname">Last Name:</label>
                        <input type="text" id="lname" name="lname" value="<?php if(isset($lname)) { echo $lname; }?>"><br>
                        <span><?php if(isset($lnameErr)) { echo $lnameErr; }?></span><br>
                        <label for="phone">Phone:</label>
                        <input type="mob" id="phone" name="phone" value="<?php if(isset($phone)) { echo $phone; }?>"><br>
                        <span><?php if(isset($phoneErr)) { echo $phoneErr; }?></span><br>
                        <label for="email">Your email address:</label>
                        <input type="email" id="email" name="email" value="<?php if(isset($email)) { echo $email; }?>"><br>
                        <span><?php if(isset($emailErr)) { echo $emailErr; }?></span><br>
                        <label for="compName">Company Name(Optional):</label>
                        <input type="text" id="compName" name="compName" value="<?php if(isset($compName)) { echo $compName; }?>"><br>
                        <label for="enquiryTopic">Your Enquiry Topic:</label>
                        <select name="enquiryTopic" id="enquiryTopic">
                            <option value="">Choose One</option>
                            <option value="">Website Development</option>
                            <option value="">Makeup Services</option>
                        </select>
                        <label for="msg">Message:</label>
                        <textarea id="msg" name="msg" ><?php if(isset($msg)) { echo $msg; }?></textarea><br>
                        <span><?php if(isset($msgErr)) { echo $msgErr; }?></span><br>
                        <span><?php if(isset($msgSent)) { echo $msgSent; }?></span><br>
                        <input type="submit" name="submit" value="submit &rarr;">
                
                </form>
        </div>
       </div>
     <div class="small_container">
     <div class="Sc_section">
			<h3>More resources</h3>
			<div class="row">
				<div class="box">
					<h4>Makeup images</h4>
					<p>Read what people say about their experience at bbhe<button onclick="togglePopup()"><i class="fas fa-arrow-right"></i></button></p>
					<div class="popup" id="popup">
						<div class="overlay"> </div>
						<div class="content">
                        <div class="close-btn" onclick="togglePopup()">×</div>
                        <div class="hidden-images">
                        <img src="https://i.ibb.co/L5dCBbR/Capture.jpg"alt="">
                        <img src="https://i.ibb.co/qsX7rvn/Capture1.jpg" alt="">
                        <img src="https://i.ibb.co/0VTbSyQ/Capture2.jpg" alt="">
                        <img src="https://i.ibb.co/G5ZP5WC/Capture3.jpg"  alt="">
                        <img src="https://i.ibb.co/3RVhnxG/Capture4.jpg" alt="">
                        <img src="https://i.ibb.co/TPv35tc/Capture5.jpg" alt="">
                        </div>
							
						</div>
					</div>

				</div>
                <div class="box">
					<h4>Painting images</h4>
					<p>Read what people say about their experience at bbhe<button onclick="togglePopupOne()"><i class="fas fa-arrow-right"></i></button></p>
					<div class="popupOne" id="popupOne">
						<div class="overlay"> </div>
						<div class="content">
                        <div class="close-btn" onclick="togglePopupOne()">×</div>
                        <div class="hidden-images">
                        <img src="https://i.ibb.co/ygTbqdW/20201218-125302.jpg" alt="">
                        <img src="https://i.ibb.co/NKmQnH5/20201218-132058.jpg" alt="">
                        <img src="https://i.ibb.co/T2sM6JD/aliza.png" alt="">
                        <img src="https://i.ibb.co/DkBBs1C/20201218-133837.jpg"  alt="">
                        <img src="https://i.ibb.co/R6gz3D9/20201218-125502.jpg" alt="">
                        <img src="https://i.ibb.co/J252X7s/20201218-125054.jpg"alt="" >
                        </div>
							
						</div>
					</div>

				</div>
				</div>
			</div>
     </div>
</main>

<?php
require('footer.php');
?>