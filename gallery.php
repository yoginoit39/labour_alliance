<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/nav.css" rel="stylesheet" type="text/css">
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <link href="css/gallery.css" rel="stylesheet" type="text/css"/>
    <link href="css/lightbox.min.css" type="text/css" rel="stylesheet"/>
    <script src="Js/lightbox-plus-jquery.min.js"></script>
</head>


<body onload="secons();" onscroll="hiddrop(); medi(); hamad(); secons(); secons1();" >


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
                    <li><a href="#" onclick="clicking();">About us  <span><i id="downs" class="down"></i></span></a>
                        <ul class="dropdown">
                           <li><a href="#" class="red" onclick="hiddrop();">x</a></li>
                            <li><a href="safety.php"> WORKPLACE HEALTH AND SAFETY  </a></li>
                            <li><a href="education.php"> THE GENDER COMPONENT  </a></li>
                             <li><a href="director.php"> DIRECTOR MESSAGE  </a></li>
                             <li><a href="about.php"> ABOUT US </a></li>
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
        
       
        <h1>Gallery</h1>
        
        <div class="gallery">
           <a href="gallery/IMG-20190128-WA0004.jpg" data-lightbox="mygallery"><img class="small" src="gallery/IMG-20190128-WA0004.jpg" /></a>
           <a href="gallery/IMG-20190128-WA0005.jpg" data-lightbox="mygallery"><img class="small" src="gallery/IMG-20190128-WA0005.jpg" /></a>
           <a href="gallery/IMG-20190128-WA0006.jpg" data-lightbox="mygallery"><img class="small" src="gallery/IMG-20190128-WA0006.jpg" /></a>
           <a href="gallery/IMG-20190128-WA0007.jpg" data-lightbox="mygallery"><img class="small" src="gallery/IMG-20190128-WA0007.jpg" /></a>
           <a href="gallery/IMG-20190128-WA0008.jpg" data-lightbox="mygallery"><img class="small" src="gallery/IMG-20190128-WA0008.jpg" /></a>
           <a href="gallery/IMG-20190128-WA0009.jpg" data-lightbox="mygallery"><img class="small" src="gallery/IMG-20190128-WA0009.jpg" /></a>
           <a href="gallery/IMG-20190128-WA0010.jpg" data-lightbox="mygallery"><img class="small" src="gallery/IMG-20190128-WA0010.jpg" /></a>
           <a href="gallery/IMG-20190128-WA0011.jpg" data-lightbox="mygallery"><img class="small" src="gallery/IMG-20190128-WA0011.jpg" /></a>
           <a href="gallery/IMG-20190128-WA0012.jpg" data-lightbox="mygallery"><img class="small" src="gallery/IMG-20190128-WA0012.jpg" /></a>
           <a href="gallery/IMG-20190128-WA0013.jpg" data-lightbox="mygallery"><img class="small" src="gallery/IMG-20190128-WA0013.jpg" /></a>
           <a href="gallery/IMG-20190128-WA0014.jpg" data-lightbox="mygallery"><img class="small" src="gallery/IMG-20190128-WA0014.jpg" /></a>
           <a href="gallery/IMG-20190128-WA0015.jpg" data-lightbox="mygallery"><img class="small" src="gallery/IMG-20190128-WA0015.jpg" /></a>
           <a href="gallery/IMG-20190128-WA0016.jpg" data-lightbox="mygallery"><img class="small" src="gallery/IMG-20190128-WA0016.jpg" /></a>
           <a href="gallery/IMG-20190128-WA0017.jpg" data-lightbox="mygallery"><img class="small" src="gallery/IMG-20190128-WA0017.jpg" /></a>
           <a href="gallery/IMG-20190128-WA0018.jpg" data-lightbox="mygallery"><img class="small" src="gallery/IMG-20190128-WA0018.jpg" /></a>
           <a href="gallery/IMG-20190128-WA0019.jpg" data-lightbox="mygallery"><img class="small" src="gallery/IMG-20190128-WA0004.jpg" /></a>
           <a href="gallery/IMG-20190128-WA0020.jpg" data-lightbox="mygallery"><img class="small" src="gallery/IMG-20190128-WA0005.jpg" /></a>
           <a href="gallery/IMG-20190128-WA0021.jpg" data-lightbox="mygallery"><img class="small" src="gallery/IMG-20190128-WA0006.jpg" /></a>
           <a href="gallery/IMG-20190128-WA0022.jpg" data-lightbox="mygallery"><img class="small" src="gallery/IMG-20190128-WA0007.jpg" /></a>
           <a href="gallery/IMG-20190128-WA0023.jpg" data-lightbox="mygallery"><img class="small" src="gallery/IMG-20190128-WA0008.jpg" /></a>
           <a href="gallery/IMG-20190128-WA0024.jpg" data-lightbox="mygallery"><img class="small" src="gallery/IMG-20190128-WA0009.jpg" /></a>
           <a href="gallery/IMG-20190128-WA0025.jpg" data-lightbox="mygallery"><img class="small" src="gallery/IMG-20190128-WA0010.jpg" /></a>
           <a href="gallery/IMG-20190128-WA0026.jpg" data-lightbox="mygallery"><img class="small" src="gallery/IMG-20190128-WA0011.jpg" /></a>
           <a href="gallery/IMG-20190128-WA0027.jpg" data-lightbox="mygallery"><img class="small" src="gallery/IMG-20190128-WA0012.jpg" /></a>
           <a href="gallery/IMG-20190128-WA0028.jpg" data-lightbox="mygallery"><img class="small" src="gallery/IMG-20190128-WA0013.jpg" /></a>
           <a href="gallery/IMG-20190128-WA0029.jpg" data-lightbox="mygallery"><img class="small" src="gallery/IMG-20190128-WA0014.jpg" /></a>
           <a href="gallery/IMG-20190128-WA0030.jpg" data-lightbox="mygallery"><img class="small" src="gallery/IMG-20190128-WA0015.jpg" /></a>
           <a href="gallery/IMG-20190128-WA0031.jpg" data-lightbox="mygallery"><img class="small" src="gallery/IMG-20190128-WA0016.jpg" /></a>
           <a href="gallery/IMG-20190128-WA0032.jpg" data-lightbox="mygallery"><img class="small" src="gallery/IMG-20190128-WA0017.jpg" /></a>
           <a href="gallery/IMG-20190128-WA0033.jpg" data-lightbox="mygallery"><img class="small" src="gallery/IMG-20190128-WA0018.jpg" /></a>
           <a href="gallery/IMG-20190128-WA0034.jpg" data-lightbox="mygallery"><img class="small" src="gallery/IMG-20190128-WA0004.jpg" /></a>
           <a href="gallery/IMG-20190128-WA0035.jpg" data-lightbox="mygallery"><img class="small" src="gallery/IMG-20190128-WA0005.jpg" /></a>
           <a href="gallery/IMG-20190128-WA0036.jpg" data-lightbox="mygallery"><img class="small" src="gallery/IMG-20190128-WA0006.jpg" /></a>
           <a href="gallery/IMG-20190128-WA0037.jpg" data-lightbox="mygallery"><img class="small" src="gallery/IMG-20190128-WA0007.jpg" /></a>
           <a href="gallery/IMG-20190128-WA0038.jpg" data-lightbox="mygallery"><img class="small" src="gallery/IMG-20190128-WA0008.jpg" /></a>
           <a href="gallery/IMG-20190128-WA0039.jpg" data-lightbox="mygallery"><img class="small" src="gallery/IMG-20190128-WA0009.jpg" /></a>
           <a href="gallery/IMG-20190128-WA0040.jpg" data-lightbox="mygallery"><img class="small" src="gallery/IMG-20190128-WA0010.jpg" /></a>
           <a href="gallery/IMG-20190128-WA0041.jpg" data-lightbox="mygallery"><img class="small" src="gallery/IMG-20190128-WA0011.jpg" /></a>
           <a href="gallery/IMG-20190128-WA0042.jpg" data-lightbox="mygallery"><img class="small" src="gallery/IMG-20190128-WA0012.jpg" /></a>
           <a href="gallery/IMG-20190128-WA0043.jpg" data-lightbox="mygallery"><img class="small" src="gallery/IMG-20190128-WA0013.jpg" /></a>
           <a href="gallery/IMG-20190128-WA0044.jpg" data-lightbox="mygallery"><img class="small" src="gallery/IMG-20190128-WA0014.jpg" /></a>
           <a href="gallery/IMG-20190128-WA0045.jpg" data-lightbox="mygallery"><img class="small" src="gallery/IMG-20190128-WA0015.jpg" /></a>
           <a href="gallery/IMG-20190128-WA0046.jpg" data-lightbox="mygallery"><img class="small" src="gallery/IMG-20190128-WA0016.jpg" /></a>
           <a href="gallery/IMG-20190128-WA0047.jpg" data-lightbox="mygallery"><img class="small" src="gallery/IMG-20190128-WA0017.jpg" /></a>
           <a href="gallery/IMG-20190128-WA0048.jpg" data-lightbox="mygallery"><img class="small" src="gallery/IMG-20190128-WA0018.jpg" /></a>
           <a href="gallery/IMG-20190128-WA0049.jpg" data-lightbox="mygallery"><img class="small" src="gallery/IMG-20190128-WA0004.jpg" /></a>
           <a href="gallery/IMG-20190128-WA0050.jpg" data-lightbox="mygallery"><img class="small" src="gallery/IMG-20190128-WA0005.jpg" /></a>
           <a href="gallery/IMG-20190128-WA0051.jpg" data-lightbox="mygallery"><img class="small" src="gallery/IMG-20190128-WA0006.jpg" /></a>
           <a href="gallery/IMG-20190128-WA0052.jpg" data-lightbox="mygallery"><img class="small" src="gallery/IMG-20190128-WA0007.jpg" /></a>
           <a href="gallery/IMG-20190128-WA0053.jpg" data-lightbox="mygallery"><img class="small" src="gallery/IMG-20190128-WA0008.jpg" /></a>
           <a href="gallery/IMG-20190128-WA0054.jpg" data-lightbox="mygallery"><img class="small" src="gallery/IMG-20190128-WA0009.jpg" /></a>
           <a href="gallery/IMG-20190128-WA0055.jpg" data-lightbox="mygallery"><img class="small" src="gallery/IMG-20190128-WA0010.jpg" /></a>
           <a href="gallery/IMG-20190128-WA0056.jpg" data-lightbox="mygallery"><img class="small" src="gallery/IMG-20190128-WA0011.jpg" /></a>
           <a href="gallery/IMG-20190128-WA0057.jpg" data-lightbox="mygallery"><img class="small" src="gallery/IMG-20190128-WA0012.jpg" /></a>
           <a href="gallery/IMG-20190128-WA0058.jpg" data-lightbox="mygallery"><img class="small" src="gallery/IMG-20190128-WA0013.jpg" /></a>
        </div>
       
       
        <footer>
       <div id="footer-col1">
           <p class="cont">Contact us</p>
           <form role="form" action="index.php" method="post" autocomplete="off">
              
              <div id="form-col1">
                    <p>name</p>
                    <input name="name" type="text" />
                    <p>telephone</p>
                    <input name="telephone" type="text" />
              </div>

              <div id="form-col2">
                    <p>Email</p>
                    <input name="email" type="email" />
                    <p>Subject</p>
                    <input name="subject" type="text" />
              </div>
                    
                    <textarea name="body" class="content-msg"></textarea>
                    <input name="submit" type="submit"/>
               
           </form>
       </div>
       
       <div id="footer-col2">
           <p class="compi">Company Information</p>
           <ul>
               <li>The Labour Alliance Uganda</li>
               <li>Registered in Uganda</li>
           </ul>
           <p>Follow us:</p>
           <a href="https://www.facebook.com/TheLabourAllianceUganda/"><img src="Images/facebook.png"/></a>
           <p>Copyright &copy; The Labour Alliance Uganda</p>
           <img class="foot-log" src="Images/lgg.png"/>
       </div>
       
        <div class="lastfooter">
           <p class="cont">Our Contact Details !</p>
           <p>The Labour Alliance Uganda Plot 2, Geoge Street, Simbamayo Building/MLGSD,Level 5 Office 1 Kampala</p>
            <p>Tel: +2560392001761</p>
            <p>P.O Box 23629 Kla</p>
            <p>Email: info@thelabouralliances.org</p>
        </div>
        
    </footer>
            
          
    </div>
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
