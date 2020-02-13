<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/nav.css" rel="stylesheet" type="text/css">
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <link href="css/safety.css" rel="stylesheet" type="text/css">
</head>
<body onload="secons();" onscroll="hiddrop(); hidemenu(); medi(); hamad(); secons(); secons1();">
    
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
   
   
    
    <!--image slider!-->
    <div class="cycle-slideshow">
			<span class="cycle-prev">&#9001;</span>
			<span class="cycle-next">&#9002;</span>
			<span class="cycle-pager"></span>
			<img src="Images/meet1.png"/>
			<img src="Images/meet2.png"/>
			<img src="Images/meet3.png"/>
    </div>
    <!-- end of slider !-->
    </div>
       
    <div id="my-para">
       
        <p>
           TLAU's department of occupational Safety and Health (OSH) has a wide coverage but its main goal is to prevent workplace injuries and illnesses, protect the health of all workers and save lives. This includes efforts to protect groups of workers who are small and unorganized (e.g. those in the diaspora) but who are particularly vulnerable or who face special hazards. Whenever possible, this department will seek and expect implementation of hazards control strategies based on primary prevention, that is; strategies which focus on fixing the underlying causes of problems / disasters and reducing hazardous exposures at their source. The department in liaison with Ministry of Gender, Labour and Social Development (MoGLSD) starts from workplace inspection, staff training and stretches to initiating strategic, public-private partnerships to identify and encourage the spread of industry best practices to prevent and solve OSH related crises 
        </p>
        
        <p>
            This department ensures Employer commitment, meaningful employee participation and involvement in OSH schemes are key ingredients to the success of our flagship programme. we make sure that all safety and health services, resources, laws and information are readily accessible and understandable to employees, employers, including all industrial and construction staff. Through this department, we intend to be a performance-oriented, data-driven organization that places the highest premium on real results rather than activities and processes. Our programs must be judged according to their success at eliminating hazards and reducing injuries and illnesses at workplaces. In this regard, the department supports workers and employers to establish OSH committees at all places of work in accordance with the OSH Act. 
        </p>
        
        <p>
            A safe and healthy environment increases productivity, efficiency, growth and employee loyalty
        </p>
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
           <img class="foot-log" src="Images/logo%20(1).jpg"/>
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