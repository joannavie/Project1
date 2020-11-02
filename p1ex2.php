<?php


      $grades = array( "Georgiou Nikos" => 5,
                        "Pappa Maria" =>10,
                        "Papadopoulou Melina" => 3,
                        "Petrou petrow" => 7
                      );


          function printGrades($grades){
			 
			 	foreach ($grades as $key => $value) {
						if 	($value >=5 )
							   $color = "#00FF00";

                        else 
							 $color = "#FF0000";
                         
					   echo "<table border: 1px solid blue\"><tr border: 1px solid blue?><td border: 1px solid blue> $key</td>
		  <td><span style=\"color: $color\">$value</span></td></tr></table>\n";}}
		  echo" <h1>Initial Grades Table</h1>\n";
		  echo printGrades($grades);
		  
		  /*array_push($grades,"Prassa Ioanna",'7',"Lamprou Georgia",'2');
		  echo" <h1> Grades Table After Adding Students</h1>\n";
		  echo printGrades($grades); den ixera pws na kanw swsta autin tin sinartisi kai halaei ta apotelesmata olwn twn ypoloipwn an aferethi t ypoloipa trehoun swsta*/
		  echo" <h1> Grades Table After Deleting Students</h1>\n";
		  array_pop($grades);
		  array_pop($grades);
          echo printGrades($grades);
		  echo" <h1> Grades Table in Ascending Alphabetical Students Order</h1>\n";
		  asort($grades);
		  echo printGrades($grades);
		  echo" <h1> Grades Table in Decending Order Based On Student's Grades</h1>\n";
		  krsort($grades);
		  echo printGrades($grades);
		  
		  
		  function search($grades, $name)
                    {
                     echo "<br><b>Search results for <em>$name</em>:</b><br>";
                     if (array_key_exists($name, $grades)){
                      echo "The student '$name' exists.";
                      echo "The student is $grades[$name]&#8364.<br>";
					 }
                     else
                       {
                     echo "The student '$name' does not exist.<br>";
                       }
                     }
		 /* search(&grades,"Papadopoulou Melina");
		 
		    search(&grades,"Papadopoulou Despoina");
		  den mporousa na vrw giati den m ta emfanizei m evgaze syntax error*/
		 
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  



?>