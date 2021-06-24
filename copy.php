<!---------------------------------------------------------------------------------------------------
     <div class = "table-responsive ">
      <table class = " table table-bordered table-striped text-center" >
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
 -- echo $coranalive['statewise'][$i]['lastupdatedtime'] . "<br>"  ;
  echo $coranalive['statewise'][$i]['state'] . "<br>"  ;

   echo $coranalive['statewise'][$i]['confirmed'] . "<br>"  ;
  echo $coranalive['statewise'][$i]['active'] . "<br>"  ;
  echo $coranalive['statewise'][$i]['recovered'] . "<br>"  ;
  echo $coranalive['statewise'][$i]['deaths'] . "<br>"  ;  -->


      </table>


    </div> 
    </section> ---------------------------------------------------------------------------->