
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

<div class = "main_header">
	<div class ="row w-300 h-300">
		<div class = "col-lg-5 col-md-5 col-12 order-lg-1 order-2">
			<div class ="leftside w-100 h-100 d-flex justify-content-center
			align-items-center">
         <img src="https://previews.123rf.com/images/arcady31/arcady311505/arcady31150500054/39940883-unity-icon.jpg"  width="500" height="500">
			</div>
		   </div>

			<div class = "col-lg-7 col-md-7 col-12 order-lg-2 order-1">
				<div class = "rightside w-100 h-100 d-flex justify-content-center
			align-items-center">
				<h1>Let's Stay Safe & Fight Together </br>Against Cor<span class = "corona_rot"> <img src="https://thumbs.dreamstime.com/b/coronavirus-cartoon-illustration-isolated-white-background-pray-china-illustrations-concept-corona-virus-covid-wuhan-175601035.jpg" width="70" height="70"></span>na Virus</br> </h1>	
				</div>
			
				
			</div>

	

</div>
<!-- ***************** corona latest updates********** 1. used display flex-->

<section class = "corona_update conatainer-fluid">

  <div class = "my-5">

    <h3 class = "text-uppercase text-center"> COVID-21 LIVE UPDATES OF THE INDIA</h3>

</div>
<!--
	 <div class = "d-flex justify-content-around align-items-center count_style"> 

            <div>
		    <h1 class = "count">1,524,266</h1>
		    <p> Passengers screened at airport</p>
		</div>

		<div> 
		<h1 class = "count">512</h1>
		<p>Active Covid-21 cases*</p>
		</div>

		<div> 
		<h1 class = "count">40</h1>
		<p>Cured/discharged cases </p>
		</div>

		<div> 
		<h1 class = "count">9</h1>
		<p> Death cases</p>

		</div> 

		</div>  -->

		  <div class = "table-responsive container-fluid">
			<table class = " table table-bordered table-striped text-center" id = "tbval">
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

<!-- ***************** about section ************ -->

<div class = "container-fluid sub_section pt-5 pb-5" id = "aboutid">
	<div class = "section_header text-center mb-5 mt-4">
		<h1>About COVID-19</h1>
		
	</div>

   <div class = "row pt-5">
	<div class = "col-lg-5 col-md-6 col-12 ">
		<img src="https://neuronerdz.com/wp-content/uploads/2020/10/5b.jpg" class = "img-fluid">
	</div>

	<div class = "col-lg-5  col-md-6 col-12 ml-5">
		<h2> What is COVID-19 (Corona-Virus) ? </h2>
		<p>COVID-19 is a disease caused by a new strain of coronavirus. ‘CO’ stands for corona, ‘VI’ for virus, and
            ‘D’ for disease. Formerly, this disease was referred to as ‘2019 novel coronavirus’ or ‘2019-nCoV.’
            The COVID-19 virus is a new virus linked to the same family of viruses as Severe Acute Respiratory
            Syndrome (SARS) and some types of common cold. </p>
		<p>The virus is transmitted through direct contact with respiratory droplets of an infected person (generated
               through coughing and sneezing). Individuals can also be infected from and touching surfaces
          contaminated with the virus and touching their face (e.g., eyes, nose, mouth). The COVID-19 virus may
                   survive on surfaces for several hours, but simple disinfectants can kill it.
</p>

	</div>
	

</div>


</div>

<!-- SYPTOMS Corona-Symptoms-------------------------------------------------------------
}-->
<div class = "container-fluid pt-5 pb-5" id = "sympid">
	<div class = "section_header text-center mb-5 mt-4">
		<h1>Coronavirus Symptoms</h1>
		
	</div>

	<div class = "conatainer">
		<div class = "row">
			<div class = "col-lg-4 col-md-4 col-12 mt-5">
				<figure class = "text-center">
					<img src="https://t3.ftcdn.net/jpg/03/10/11/70/240_F_310117075_pn44xY7Mk8y6Qn5DGEY3OD3oBG4maFzG.jpg" class = "image-fluid bg-info" width="150" height="150">
               <figcaption>Cough</figcaption>
				</figure>

			</div>

			<div class = "col-lg-4 col-md-4 col-12 mt-5 ">
				<figure class = "text-center">
					<img src="https://previews.123rf.com/images/kakigori/kakigori1910/kakigori191000068/132303378-sweet-little-girl-sneezing-holding-handkerchief-with-runny-nose-and-green-mucus.jpg" class = "image-fluid bg-info" width="150" height="150">
               <figcaption>Runny nose</figcaption>
				</figure>

			</div>

			<div class = "col-lg-4 col-md-4 col-12 mt-5 ">
				<figure class = "text-center">
					<img src="https://st2.depositphotos.com/4297405/6330/v/600/depositphotos_63306837-stock-illustration-illustration-is-a-sick-child.jpg" class = "image-fluid bg-info" width="150" height="150">
               <figcaption>Fever</figcaption>
				</figure>

			</div>

			<div class = "col-lg-4 col-md-4 col-12 mt-5 ">
				<figure class = "text-center">
					<img src="https://image.freepik.com/free-vector/person-with-cold_23-2148487348.jpg" class = "image-fluid bg-info" width="150" height="150">
               <figcaption>Cold</figcaption>
				</figure>

			</div>

			<div class = "col-lg-4 col-md-4 col-12 mt-5 ">
				<figure class = "text-center">
					<img src="https://img.freepik.com/free-vector/businessman-tired-working-with-low-battery_77417-18.jpg?size=626&ext=jpg" class = "image-fluid bg-info" width="150" height="150">
               <figcaption>Tiredness</figcaption>
				</figure>

			</div>

			<div class = "col-lg-4 col-md-4 col-12 mt-5 ">
				<figure class = "text-center">
					<img src="https://media.istockphoto.com/vectors/illustration-of-a-person-who-has-difficulty-breathing-vector-id1221519211" class = "image-fluid bg-info" width="150" height="150">
               <figcaption>Diffculty Breathing (Severe Cases)</figcaption>
				</figure>

			</div>

		
		</div>
	</div>
</div>

<!--function fetch(){
 6 preventions
   )
}-->

<div class = "container-fluid sub_section pt-5 pb-5" id = "preventionid">
	<div class = "section_header text-center mb-5 mt-4">
		<h1>6 Steps Prevention Against Coronavirus</h1>
		
	</div>

	<div class = "container">
		<div class = "row">
			<div class = "col-lg-4 col-md-4 col-12 mt-5 ">
				<div class = "row">
					<div class = "col-lg-4 text-center col-md-4 col-12" >
					<figure >
					<img src="https://i.pinimg.com/originals/21/1a/19/211a19896bc741e2ef4bbb50ad844710.jpg" width="120" height="120">
                      </figure>	
                      	</div>

                      	<div class = "col-lg-8 text-center col-md-8 col-12" >
                      	<p>Wash your hands regularly for 20 seconds, with soap and water or alcohol-based hand rub.</p>
                      	</div>


					
				</div>

			</div>




			<div class = "col-lg-4 col-md-4 col-12 mt-5 ">
				<div class = "row">
					<div class = "col-lg-4 text-center col-md-4 col-12" >
					<figure >
					<img src="https://media.istockphoto.com/vectors/young-businessman-wearing-face-medical-mask-and-showing-thumbs-up-vector-id1215656302?k=6&m=1215656302&s=612x612&w=0&h=ZDh4lFSjDoOsBIcd66a6y6YaGBQzRT4WckfA5kCvvt8=" width="120" height="120">
                      </figure>	
                      	</div>

                      	<div class = "col-lg-8 text-center  col-md-8 col-12" >
                      	<p>Cover your nose and mouth with a disposable tissue or flexed elbow when you cough or sneeze.</p>
                      	</div>


					
				</div>

			</div>



			<div class = "col-lg-4 col-md-4 col-12 mt-5 ">
				<div class = "row">
					<div class = "col-lg-4 text-center col-md-4 col-12" >
					<figure >
					<img src="https://i.pinimg.com/736x/ed/30/19/ed301978769bc3c9afaaa9a57b45273a.jpg" width="120" height="120">
                      </figure>	
                      	</div>

                      	<div class = "col-lg-8 text-center col-md-8 col-12" >
                      	<p>Avoid close contact (1 meter or 3 feet) with people who are unwell</p>
                      	</div>


					
				</div>

			</div>


			<div class = "col-lg-4 col-md-4 col-12 mt-5 ">
				<div class = "row">
					<div class = "col-lg-4 text-center  col-md-4 col-12" >
					<figure >
					<img src="https://media.istockphoto.com/vectors/covid19-coronavirus-quarantine-campaign-cartoon-family-wearing-face-vector-id1214216509" width="110" height="110">
                      </figure>	
                      	</div>

                      	<div class = "col-lg-8 text-center  col-md-8 col-12" >
                      	<p> Stay home and self-isolate from others in the household if you feel unwell.</p>
                      	</div>


					
				</div>

			</div>


			<div class = "col-lg-4 col-md-4 col-12 mt-5 ">
				<div class = "row">
					<div class = "col-lg-4 text-center  col-md-4 col-12" >
					<figure >
					<img src="https://image.freepik.com/free-vector/anchorwoman-television-channel-studio-cartoon_33099-1599.jpg" width="110" height="110">
                      </figure>	
                      	</div>

                      	<div class = "col-lg-8  text-center  col-md-8 col-12" >
                      	<p> Stay informed by watching news and follow the recommended practices.</p>
                      	</div>


					
				</div>

			</div>

			<div class = "col-lg-4 col-md-4 col-12 mt-5 ">
				<div class = "row">
					<div class = "col-lg-4 text-center  col-md-4 col-12" >
					<figure >
					<img src="https://thumbs.dreamstime.com/b/cartoon-woman-sick-vector-virus-symptoms-covid-illustration-178363133.jpg" width="120" height="120">
                      </figure>	
                      	</div>

                      	<div class = "col-lg-8 text-center  col-md-8 col-12" >
                      	<p>If you have fever, cough and diffculty breating, seek medical care early.</p>
                      	</div>


					
				</div>

			</div>


			

		</div>
		


	</div>
	</div>
<!--{
 contact us asap-----------------------------------------------------------------------------------------
   )
}-->

<div class = "container-fluid  pt-5 pb-5" id = "contactid">
	<div class = "section_header text-center mb-5 mt-4">
		<h1>Contact Us Asap</h1>
		
	</div>

<div class = "conatainer">
	<div class = "row">
        <div class = "col-lg-8  offset-lg-2 col-12" >
			
         <form action = "" method = "POST">

         <div class="form-group">
    <label >Username</label>
    <input type="text" class="form-control" name="username" placeholder="name" autocomplete = "off" required>
  </div>
  

  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control"  id="email" name="email" placeholder="name@example.com"   autocomplete  ="off" required>
  </div>

    <div class="form-group">
    <label >Mobile</label>
    <input type="number" class="form-control" name="mobile" placeholder="mobile" autocomplete = "off" required>
  </div>




  <div class="form-group">
  	<label> Select Symptoms</label> <br>

    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  <input type="checkbox" class = "custom-control-input" id="customcheckbox1" name = "coronasym[]" value="Cold">
  <label class="custom-control-label" for="customcheckbox1">Cold</label>
</div>

 <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  <input type="checkbox" class = "custom-control-input" id="customcheckbox2" name = "coronasym[]" value="Fever">
  <label class="custom-control-label" for="customcheckbox2">Fever</label>
</div>

 <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  <input type="checkbox" class = "custom-control-input" id="customcheckbox3" name = "coronasym[]" value="Diffculity In breath">
  <label class="custom-control-label" for="customcheckbox3">Diffculity In breath</label>
</div>

 <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  <input type="checkbox" class = "custom-control-input" id="customcheckbox4" name = "coronasym[]" value="Feeling weak">
  <label class="custom-control-label" for="customcheckbox4">Feeling weak</label>
</div>



  </div>
  
  
  <div class="form-group">
    <label >How are you feeling ?</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name = "msg"></textarea>
  </div>


  <button type="submit" class="btn btn-primary" name = "submit">Submit</button>


</form>


		</div>
	</div>
</div>
</div>

<!--- /////////// top cursor /////////// -->
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

	$('.count').counterUp({
		delay :10,
		time:3000
	})
	
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



/*
function fetch(){
	$.get('https://api.covid19api.com/summary' , 

       function (data){ // fetched data

        // console.log(data['Countries'].length);

           var tbval = document.getElementById('tbval');

           for(var i = 1; i < (data['Countries'].length); i++){
           	    var x = tbval.insertRow();
           	   x.insertCell(0); 

           	    tbval.rows[i].cells[0].innerHTML = data['Countries']['i - 1']['Country'];
           	    tbval.rows[i].cells[0].style.background = '#7a4a91';
           	     tbval.rows[i].cells[0].style.color = '#fff';


                   x.insertCell(1); 
           	       tbval.rows[i].cells[1].innerHTML = data['Countries']['i - 1']['TotalConfirmed'];
           	    tbval.rows[i].cells[1].style.background = '#4bb7d8';

           	     x.insertCell(2); 
           	       tbval.rows[i].cells[2].innerHTML = data['Countries']['i - 1']['TotalRecovered'];
           	    tbval.rows[i].cells[2].style.background = '#4bb7d8';

           	      x.insertCell(3); 
           	       tbval.rows[i].cells[3].innerHTML = data['Countries']['i - 1']['TotalDeaths'];
           	    tbval.rows[i].cells[3].style.background = '#f36e23';


           	      x.insertCell(4); 
           	       tbval.rows[i].cells[4].innerHTML = data['Countries']['i - 1']['NewConfirmed'];
           	    tbval.rows[i].cells[4].style.background = '#4bb7d8';

           	      x.insertCell(5); 
           	       tbval.rows[i].cells[5].innerHTML = data['Countries']['i - 1']['NewRecovered'];
           	    tbval.rows[i].cells[5].style.background = '#9cc850';

           	      x.insertCell(6); 
           	       tbval.rows[i].cells[6].innerHTML = data['Countries']['i - 1']['NewDeaths'];
           	    tbval.rows[i].cells[6].style.background = '#f36e23';




           }

       }
		);
}
*/
</script>





</body>
</html>



<?php

include 'dbcon.php';

if(isset($_POST['submit'])){

	$username = $_POST['username'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$Symptoms = $_POST['coronasym'];
   $msg = $_POST['msg'];

	$chk = "";

	foreach($Symptoms as $chk1){
		  $chk .= $chk1.",";
	}
$insertquery = "insert into coronacase(Username , Email , Mobile , Symptoms , Message) values('$username' , '$email' , '$mobile' ,
'$chk' ,'$msg') ";

$query = mysqli_query($con , $insertquery);

if($con){
	?>
	<script>
		alert("insert date successful")
	</script>

	<?php
}else{
	?>
	<script>
		alert("no iserted ")
	</script>

	<?php
}
}


?>



















