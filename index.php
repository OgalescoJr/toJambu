<!DOCTYPE html>
<html Lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scaled=1.0">
      <meta http-equiv="X-UA_Compatible" content="ie=edge">
      <link rel="stylesheet"  href="Startpage/style.css">
      <title>Startpage</title>
 </head>

<body>
  <nav>
      <div class="logo">
       <h4>Local Government of Manila</h4>
      </div>
        <ul class="nav-links">
         <li><a href="index.php">Home</a></li>
         <li><a href="#">About Us</a></li>
         <li><a href="#">Contact</a></li>
        
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
  </nav>   
  <section class="hero">
      <div class="hero-container">
        <div class="column-left">
          <h1>Barangay</h1>
          <p id="frontp">
           IOT Based Violation Ticketing and Monitoring System with Data Analytics
          </p>
          <button id="open">Get Started</button>
           <div class="modal-container"  id="modal_container">
           <button id="close">X</button>
           <div class="row">
            <!--First User design starts here-->
            <div class="profile-card">
                <div class="profile-content">
                    <div class="profile-image">
                        <!---<img src="em.png" alt="first user">--->
                    </div>
                    <div class="desc">
                        <h2>Officials Portal</h2>
                      <!----  <p id="defi">Matatanda Sila</p> --->
                    </div>
                    <div class="btn-div">
                    <a href="LoginOld/login.php">
                        <button class="btn"><i class="fa fa-facebook" style="padding-right: 10px;"></i>Sign In/Up</button>
                     </a>
                    </div>
                </div>
            </div>
            <!--First user design ends here-->
             <!--second User design starts here-->
             <div class="profile-card">
                <div class="profile-content">
                    <div class="profile-image">
                      <!---  <img src="em.png" alt="first user"> -->
                    </div>
                    <div class="desc">
                        <h2>Enforcer's Portal</h2>
                       <!---- <p id="defi">Matatanda din sila</p> --->
                    </div>
                    <div class="btn-div">
                    <a href="index.php">
                        <button class="btn"><i class="fa fa-facebook" style="padding-right: 10px;"></i>Sign In/Up</button>
                     </a>
                      </div>
                </div>
            </div>
            <!--second user design ends here-->
           
        </div>
           
              </div>

           </div>
      
        <div class="column-right">
          <img
            src="Startpage/manila.webp"
            alt="illustration
        "
            class="hero-image"
          />
        </div>
      </div>
    </section>

 
  
  <script src="Startpage/app.js"></script>
</body>

</html>