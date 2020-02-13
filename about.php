<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/nav.css" rel="stylesheet" type="text/css">
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <link href="css/about.css" rel="stylesheet" type="text/css"/>
    <script src="Js/myfirst.js"></script>
</head>


<body onload="secons();" onscroll="hiddrop(); medi(); hamad(); secons(); secons1();" >

<?php
    
    // the message
$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
/*mail("kumarpatel692@gmail.com","My subject",$msg);*/

    if(isset($_POST['submit'])){
        $to         = "kumarpatel692@gmail.com";
        $email      = $_POST['email'];
        $telephone  = _POST['telephone'];
        $subject    = _POST['subject'];
        $body       = _POST['body'];
        
        mail($to, $email, $telephone, $subject, $body, $header);
        
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
        
        <h1 id="abs">About us</h1>
        <div id="who-we-are">
           <div id="left-article">
                <article>
                    <p>
                        The Labour Alliance Uganda Ltd (TLAU) is registered by the Uganda Registration Services Bureau (URSB) and Ministry of Gender Labour Social Development (GLSD) OSH Department. The Labour Alliance Uganda strives to advocate for, promote and defend employees,employers and other marginalised groups in society against all forms of exploitation, subjugation and enslavement at places of work in Uganda and beyond. TLAU is governed and administered by a Board of Directors and Secretariat located in Kampala City Uganda. we networks and collaborates with social partners like the Labour Union activists, employers’ and employees’ organisations, Government Ministries, think tanks,private sector, Civil Society Organisations (CSOs) and Non-Government Organisations (NGOs) with similar objectives and interests. 
                    </p>
                </article>
            </div>
            <div id="we-logo">
                <img src="Images/logo1.png"/>
            </div>
        </div>
        
        <div id="competence">
            <article>
               <h1>Competence</h1>
                <p>
                    In partnerships, unions can become member’s partners and stake holders in business It is the job of workers union to press for higher and better benefits and we believe this can be done better under the alliance. The Alliance Advocates for accepted methods of teaching which are successfully used in education. During our trainings, full residential facilities are provided to enable participants to be comfortable while in residences in case of workshops. The Alliance has a competent staff mass complement of expert persons in staff training and appraisal. There is an advisory board which meets to discuss the programs of the Alliance and recommend new areas of involvement. 
                </p>
            </article>
        </div>
        
        <div id="visions">
            <div id="vision">
                <article>
                    <h1>VISION</h1>
                    <p>
                        To be a leading Alliance Labour Organization in Africa in meeting and managing labour challenges associated with globalization. 
                    </p>
                </article>
            </div>
            
             <div id="vision">
                <article>
                    <h1>MISSION</h1>
                    <p>
                       To increase the intellectual and strategic capacity of workers organizations and establish stronger working relationships between trade unions, employers, employees, the ILO, sports personalities and the scientific community. 
                    </p>
                </article>
            </div>
            
            <div id="vision">
                <article>
                    <h1>INTEREST</h1>
                    <p>
                      To have a collective action within ourselves and become stronger by lifting and providing support to local unions and employees. 
                    </p>
                </article>
            </div>
            
             <div id="vision">
                <article>
                    <h1>STANDARDS </h1>
                    <p>
                      We maintain safety standards in a variety of potentially dangerous industries and workplace. 
                    </p>
                </article>
            </div>
            
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
