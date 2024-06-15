<html><head>
<style>body{background-color:lightgreen;}
.container {position :relative;
    border: 2px solid #000;top:90px;height:400px;left:30px;
    padding: 20px;
    width: 600px;border-radius:7px;background-color:pink;box-shadow:0 0  10px rgba(0, 0, 0, 8.3);;
}
#c1{position:absolute;left:40px;top:100px;font-size:25px;}
#y1{position:absolute;left:40px;top:230px;font-size:25px;}

.j1{
	 position:absolute;top:180px;left:40px;width:320px;
        padding: 10px;
        border: 2px solid #ccc;
        border-radius: 8px;
        font-size: 16px;border-radius:8px;
    }

   
 .submit-button {
        background-color: #4CAF50; /* Green */position:absolute;top:180px;left:400px;
        border: none;
        color: white;
        padding: 10px 25px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 17px;
        margin: 2px 2px;
        transition-duration: 0.4s;
        cursor: pointer;
        border-radius: 8px;
    }

    .submit-button:hover {
        background-color: orange;
    }

</style>
</head><center>
<body><br><br>
<h1>YOUR NAME CALCULATOR</h1>
<div class="container">
<form name="f1" method="post" onsubmit="return s1()">
<p id="c1"><b>Enter Your name Here:</b></p>
<input type ="text" name="t1" placeholder="enter your name here" id="m1" class="j1">
<input type="submit" value="SUBMIT" class="submit-button" >
<p id="y1"><b>Your Number Is:</b></p>

</form></div>


<?php

if($_POST)
 {

    $tot = 0;$tot1=0;

    // Get the value from the form
    $name = $_POST["t1"];
    
    // Convert the name to lowercase to make the comparison case-insensitive
    $name = strtolower($name);

    // Define an array to map letters to their corresponding values
    $values = [
        'a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5,
        'f' => 8, 'g' => 3, 'h' => 5, 'i' => 1, 'j' => 1,
        'k' => 2, 'l' => 3, 'm' => 4, 'n' => 5, 'o' => 7,
        'p' => 8, 'q' => 1, 'r' => 2, 's' => 3, 't' => 4,
        'u' => 6, 'v' => 6, 'w' => 6, 'x' => 5, 'y' => 1,
        'z' => 7
    ];

    // Loop through each character in the name and sum up the corresponding values
    for($i = 0; $i < strlen($name); $i++) {
        $char = $name[$i];
        if(isset($values[$char])) {
            $tot += $values[$char];
        }
    }
	if($tot>=10){
	while($tot>0){
		$r=$tot%10;
		$tot1=$tot1+$r;
	$tot=$tot/10;}
// echo $tot1;}
echo "<p  style='position:absolute; top: 490px; left: 540px; font-size: 25px;color:red'>$tot1</p>";
}
	else{
	// echo $tot;}
	echo "<p style='position:absolute; top: 490px; left: 540px; font-size: 25px;color:red'>$tot</p>";
	}
	
}
?> 

?>
<script>

function s1(){
	var hash=document.getElementById("m1").value;
	if(hash===""){
		alert("please enter your date of birth");
	    return false;
	}
}
</script>
</body></center></html>