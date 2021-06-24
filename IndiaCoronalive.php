<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<?php include 'link/links.php'; ?>
	<?php include 'css/style.php'; ?>

</head onload ="fetch()">
<body>
<nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav ml-auto pr-7 ">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">About</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#sympid">Symtoms</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#preventionid">Prevention</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="IndiaCoronalive.php">IndiaCoronaLive</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#contactid">Contact</a>
      </li>
     
     
    </ul>
   
  </div>
</nav>

<section class = "corona_update conatainer-fluid ">

  <div class = "my-5">

    <h3 class = "text-uppercase text-center"> COVID-21 LIVE UPDATES OF THE INDIA</h3>

  <div class = "table-responsive  ">
      <table class = " table table-bordered table-striped text-center pl-5 pr-5" >
        <tr>
  
   <th>LastUpdated</th>
    <th>State</th>
     <th>Confirmed</th>
    <th>Active</th>
    <th>Recovered</th>
    <th>Deaths</th>
          
        </tr>

        <?php

$data = file_get_contents('https://api.covid19india.org/data.json');
$coranalive = json_decode($data, true);

$statescount = count($coranalive['statewise']);

 


$i=1;
while($i < $statescount){
        ?>
        <tr>
          <td>
            <?php 
            echo $coranalive['statewise'][$i]['lastupdatedtime']   
            ?>
            
          </td>
           <td>
            <?php 
            echo $coranalive['statewise'][$i]['state']   
            ?>
            
          </td>

          
           <td>
            <?php 
            echo $coranalive['statewise'][$i]['confirmed']   
            ?>
            
          </td>
           <td>
            <?php 
            echo $coranalive['statewise'][$i]['active']    
            ?>
            
          </td>
           <td>
            <?php 
            echo $coranalive['statewise'][$i]['recovered']   
            ?>
            
          </td>

           <td>
            <?php 
            echo $coranalive['statewise'][$i]['deaths']    
            ?>
            
          </td>

         
          

          
           
           
        </tr>

        <?php
  $i++;
}


?>
  <!-- echo $coranalive['statewise'][$i]['lastupdatedtime'] . "<br>"  ;
  echo $coranalive['statewise'][$i]['state'] . "<br>"  ;

   echo $coranalive['statewise'][$i]['confirmed'] . "<br>"  ;
  echo $coranalive['statewise'][$i]['active'] . "<br>"  ;
  echo $coranalive['statewise'][$i]['recovered'] . "<br>"  ;
  echo $coranalive['statewise'][$i]['deaths'] . "<br>"  ;  -->


      </table>


    </div> 
    </section>









<div class = "conatainer scrolltop float-right pr-5">
  <i class = "fa fa-arrow-up" onclick="topFunction()" id = "myBtn"> </i>
  
</div>



<!--- /////////// fotter /////////// -->

<footer class = "mt-5">
  <div class = "footer_style text-white text-center conatainer-fluid">
    <p> Copyright by Kumari Tejaswini</p>
    
  </div>
</footer>

<script type="text/javascript">

  
  //Get the button:
mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}



</script>





</body>
</html>