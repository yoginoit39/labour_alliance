<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/nav.css" rel="stylesheet" type="text/css">
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <script src="Js/myfirst.js"></script>
</head>


<body onload="secons();" onscroll="hiddrop(); medi(); hamad(); secons(); secons1();" >

<?php
    
 
    if(isset($_POST['submit'])){
        $to         = "kumarpatel692@gmail.com";
        $email      = $_POST['email'];
        $telephone  = $_POST['telephone'];
        $subject    = wordwrap($_POST['subject'],70);
        $body       = $_POST['body'];
        $header     = $_POST['email'];
        
        mail($to,$email,$telephone,$subject,$body);
        
    }
?>

<div class="container">
    <div class="welcome">
        <header>
          <span id="close" class="red" onclick="hidemenu();">x</span>
          <span id="open" onclick="menuz(); menuz1(); "><img class="m-icon" src="Images/588a64cdd06f6719692a2d0d.png"></span>
           <img class="logo" src="Images/lgg.png"/>
           <span class="lab"></span>
            <nav id="mynav">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#" onclick="clicking();">About<span><i id="downs" class="down"></i></span></a>
                        <ul class="dropdown">
                           <li><a href="#" class="red" onclick="hiddrop();">x</a></li>
                            <li><a href="safety.php"> WORKPLACE HEALTH AND SAFETY  </a></li>
                            <li><a href="education.php"> THE GENDER COMPONENT  </a></li>
                             <li><a href="director.php"> DIRECTOR MESSAGE  </a></li>
                              <li><a href="about.php"> ABOUT US</a></li>
                        </ul>
                    </li>
                    <li><a href="#" onclick="clicking1();">Services<span><i id="downs" class="down push"></i></span></a>
                        <ul class="dropdown">
                            <li><a href="#" class="red" onclick="hiddrop();">x</a></li>
                            <li><a href="themaincomponent.php"> THE MAIN COMPONENTS </a></li>
                            <li><a href="health.php"> HEALTH THROUGH SPORT </a></li>
                            <li><a href="safety.php"> WORKPALCE HEALTH AND SAFETY </a></li>
                            <li><a href="education.php">  THE GENDER COMPONENT  </a></li><!-- not yet finish !-->
                            <li><a href="monitoring.php"> MONITARING, TRACKING AND RESCUE OF WORKERS </a></li><!-- not yet finish !-->
                            <li><a href="safety.php"> ROAD SAFETY AND COMPONENT  </a></li>
                            <li><a href="environment.php"> ENVIRONMENTAL PROTECTION   </a></li>
                        </ul>
                    </li>
                    <li><a href="contact.php">Contact us</a></li>
                    <li class="lastlink"><a href="index.php">Projects</a></li>
                </ul>
            </nav>
            
            
        </header> 
   
    
    <!--image slider!-->
    <div class="cycle-slideshow">
			<span class="cycle-prev">&#9001;</span>
			<span class="cycle-next">&#9002;</span>
			<span class="cycle-pager"></span>
			<img src="Images/imagenew2.png"/>
			<img src="Images/slide1.jpg"/>
			
    </div>
    <!-- end of slider !-->
</div>

<div id="videos">
   <video autoplay="true" controls="true">
       <source src="../labour/video/SLIDEEE.mp4" type="video/mp4">
       <source src="../labour/video/SLIDEE1.webm" type="video/webm">
   </video>
 </div>
 
 <div id="about-us">
        <h2 class="about-us">ABOUT US</h2>
        <article>
            <p class="about-para1">The Labour Alliance Uganda Ltd (TLAU) is registered by the Uganda Registration Services Bureau (URSB) and Ministry of Gender Labour Social Development ( GLSD) OSH Department.The Labour Alliance Uganda strives to advocate for, promote and defend employees,employers and other marginalised groups in society against all forms of exploitation, subjugation and enslavement at places of work in Uganda and beyond. TLAU is governed and administered by a Board of Directors and Secretariat located in Kampala City Uganda. we networks and collaborates with social partners like the Labour Union activists, employers’ and employees’ organisations, Government Ministries, think tanks,private sector, Civil Society Organisations (CSOs) and Non-Government Organisations (NGOs) with similar objectives and interests.</p>
        </article>
    </div>
    
    <div id="second-section">
        <div class="first-col">
            <h4 class="comp-title">COMPONENTS OF THE LABOUR ALLIANCE UGANDA</h4>
            
            <div id="first-list">
                <ul>
                    <li>Work Place Health and Safety</li>
                    <li>Gender</li>
                    <li>Monitoring, tracking and Rescue of workers</li>
                    <li>The labour Relations.</li>
                </ul>
            </div>
            <div id="second-list">
                 <ul>
                    <li>Environmental Protection</li>
                    <li>Work Place wellness through sports</li>
                    <li>Road Safety</li>
                    <li>Provision of standard Personel</li>
                </ul>
            </div>
        </div>
        <div class="second-col">
            <h4 class="comp-title">OUR CORE VALUES</h4>
            <ul>
                <li>Observance of Justice, Human & Workers rights.</li>
                <li>Transparency, Accountability and Integrity</li>
                <li>Hard Work, Ethics and Productivity.</li>
                <li>Networking, lobbying and collaboration with all stakeholder</li>
                <li>Equity, integrity and service at workplace and in society</li>
                <li>Dignity, team building and sanctity of the human being.</li>
            </ul>
        </div>
        <div class="third-col">
            <h4 class="comp-title">OUR STANDARDS</h4>
            <p>We maintain Occupational Safety and Health standards in a variety of industries and workplaces through demand driven educational and practical sessions through requisite capacity and experience.</p>
        </div>
    </div>
    
     <div id="third-section">
      
         <div id="img1"><img src="Images/bg1.jpg"></div>
         <div id="img2"><img src="Images/bg2.jpg"></div>
         <div id="img3"><img src="Images/bg3.jpg"></div>
      
    </div>
    
    
     <div id="fourth">
         <div class="first-cols">
            <h4 class="comp-title">OUR MAIN OBJECTIVES</h4>
            <p>To ensure that Ugandan Worker’s Occupational Rights, Interests, Welfare, Awareness and Freedoms are monitored, promoted and protected worldwide.</p>
            
            <ul>
                <li><p>
                    To trace, render assistance and rescue (at reasonable charge) any Ugandan migrant worker who may land serious predicaments that are Life threatening or may die mysteriously while working in diaspora 
                </p></li>
                <li><p>
                    To promote and advocate for Decent Work places, maintain and monitor conducive working environments for Ugandan Workers with in and outside Uganda. 
                </p></li>
                
            </ul>
            
        </div>
        
        <div class="second-cols">
            <h4 class="comp-title">OUR GOALS</h4>
            <p>
                To make sure that all ugandan workers Rights, Interest, Welfare ad freedoms are monitored, promoted and prtected worldwide
            </p>
            
            <ul>
                <li><p>
                    To attain free and safe working conditions of migrant workers
                </p></li>
                <li><p>
                    To have decent work places and conducive working enironments for all Uganda workers with in and outside Uganda
                </p></li>
                
               
            </ul>
            
        </div>
        
        <div class="third-cols">
            <h4 class="comp-title">OUR MAIN INTEREST</h4>
            <p>To trigger collective social action within our organisation in conjunction with our partners to become stronger and proactive in monitoring...</p>
            
            <p>supporting and defending the marginalised groups against all forms of exploitation,discrimination, enslavement, physical abuse and violation of fundamental Human and Occupational Rights.</p>
        </div>
    </div>
    
    <footer>
       <div id="footer-col1">
           <h4 class="cont">Contact us</h4>
           <form role="form" action="index.php" method="post" autocomplete="off">
              
              <div id="form-col1">
                     <label>name</label>
                     <input name="name" type="text"/>
                     <label>telephone</label>
                     <input name="telephone" type="tel"/>
              </div>

              <div id="form-col2">
                    <label>Email</label>
                     <input type="email" name="email"/>
                     <label>Subject</label>
                     <input name="subject" type="text"/>
              </div>
                    
                    <textarea name="body" class="content-msg"></textarea>
                    <input name="submit" type="submit"/>
               
           </form>
       </div>
       
       <div id="footer-col2">
           <h4 class="compi">Company Information</h4>
           <ul>
               <li>The Labour Alliance Uganda</li>
               <li>Registered in Uganda</li>
           </ul>
           <h4 compi>Follow us:</h4>
           <a href="https://www.facebook.com/TheLabourAllianceUganda/"><img src="Images/facebook.png"/></a>
           <h4>Copyright &copy; The Labour Alliance Uganda</h4>
           <img class="foot-log" src="Images/lgg.png"/>
       </div>
       
        <div class="lastfooter">
           <h4 class="cont">Our Contact Details !</h4>
           <p>The Labour Alliance Uganda Plot 2, Geoge Street, Simbamayo Building/MLGSD,Level 5 Office 1 Kampala</p>
            <p>Tel: +2560392001761</p>
            <p>P.O Box 23629 Kla</p>
            <p>Email: info@thelabouralliances.org</p>
        </div>
        
    </footer>
    
    
   
    
    </div>
    
    
   
    
<script src="jquery/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="jquery/jquery.cycle2.min.js"></script>
 
<script type="text/javascript">
    
    $(function(){
        
    $('#play').click(function(){$('#slider').cycle('resume'); return false;});
    
     $('#pause').click(function(){$('#slider').cycle('pause'); return false;});
        
    $('#slider').cycle({
        fx: 'scrollHorz',
        next: '#next',
        prev: '#prev',
        pager: '#pager',
        timeout: 3000,
        speed: 900
    });
    });
    
   function menuz(){
    var element1 = document.getElementById("mynav");
    element1.style.display == "none";
       
    element1.style.display = "block";
       
    element1.style.background = "#402f73";
    var b = document.getElementById("open");
       b.style.display = "none";
       
      return true;
       
   }
    
    function menuz1(){
    if(menuz() == true){
         var c = document.getElementById("close");
       c.style.display = "block";
    }
    }
    
    function hidemenu(){
        var element1 = document.getElementById("mynav");
    element1.style.display = "none";
         var c = document.getElementById("close");
       c.style.display = "none";
        
        var b = document.getElementById("open");
       b.style.display = "block";
    }
    
   
    function clicking(){
    var element1 = document.getElementsByClassName("dropdown");
    element1[0].style.display = "block";
    element1[1].style.display = "none";
    }
    
    function clicking1(){
    var element1 = document.getElementsByClassName("dropdown");
    //var element2 = document.getElementsByClassName("down");
    element1[1].style.display = "block";
    element1[0].style.display = "none";
    }
    
    function hiddrop(){
    var element1 = document.getElementsByClassName("dropdown");
    element1[1].style.display = "none";
    element1[0].style.display = "none";
   
    }
    
    
    
    
   

</script>
</body>
</html>