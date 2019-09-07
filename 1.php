
	<?php
	$name='Avila Difa Adhiguna'; //string
	 
	$address='Pamulang, Tangsel'; //string

	$hobbies = array ("Basket","Futsal");
	$myJSON = json_encode($hobbies);

	$yes=true;
	$no=false;

	class highschool{
		function highschool(){
			$this->model = "SMK Bina Informatika";
		}
	}

	$school = new highschool();

	$skill = array ("MySQL","PHP","HTML");
	$myJSONS = json_encode($skill);
	


	echo "Name :$name"; echo "<br>";
	echo "Address :$address"; echo "<br>";
	 echo "Hobbies :$myJSON"; echo "<br>";
	 echo "Is Married? $no"; echo "<br>";
	 echo "School :$school->model"; echo "<br>";
	 echo "My Skill :$myJSONS"; echo "<br>";

