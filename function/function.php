<?php
function space(){
    echo "<br>";
    echo "<hr>"; 
    echo "<br>"; 
    }


function capitalize($firstname){
$first=ucfirst($firstname);
return $first;
}
echo capitalize("john<br>");
echo capitalize("sam<br>");
echo capitalize("manu<br>");

space();

date_default_timezone_set("europe/paris");
echo date("H:i");
echo "<br>";

space();

date_default_timezone_set("europe/paris");
echo date('d-m-Y H:i:s');
echo "<br>";

space();

function sum($a,$b) {
if(is_string($a) ){
return("IT IS NOT A NUMBER");
}
else{
return $a + $b;
};
}
print_r (sum(15,17));

space();

print_r (sum ("not",5));
// is_number= est un nombre
// is_int("c'est un nombre entier");

space();

function initiales($string)
{
    $words = explode(" ", $string);//casse la chaine de caractère à chaque espace et les placent dans un tableau
    $initiale = '';// on déclare un string
	foreach($words as $init){
		$initiale .= $init{0};//va concatainer chaque élément 
    }
    return strtoupper($initiale);
}
echo initiales("php hyper-text preprocessor");

space();

function replace($ae){
    $ae = preg_replace("/ae/i","æ",$ae);
    // peut aussi par str_replace("ae,"æ",$ae)
    return $ae;
}
echo replace("caecotrophie, "."chaenichthys, "."microsphaera, ". "sphaerotheca");

space();



function replaceb($replace){
    $ae = str_replace("æ","ae",$replace);
    // peut aussi par str_replace("ae,"æ",$ae)
    return $ae;
}
echo replaceb("cæcotrophie,". " chænichthys,"." microsphæra,"." sphærotheca");

space(); 

function message($message,$nameError = "error"){
    $message='<div class='.$nameError.'>Error: Incorrect email address.</div>';
    return($message);
}
echo message("bonjour comment ça va","alert");

space();

// Create a random words generator, outputing 2 words: one which length is between 1 to 5 letters, the other between 7 and 15 letters. The screen will display a title "Generate a new word", and then the two generated words, and underneath, a bouton with the text "Generate").
function generator(){
$wordlittle = ['salut',  'joker','chaud','zoo','long','froid'];
$wordbig = ['bonjour', 'aurevoir','baladeur','espacée','ordinateur','montagne'];
$num1 = rand(0, 5);
$num2 =rand(0,5);
return $wordbig[$num1]." ".$wordlittle[$num2];
}
echo generator();
    echo'<h1>Generate a new word</h1>
        <form method="POST">
        <input type="submit" value="Generate" name="go">
        </form>';
        if(isset($_POST['go']) AND $_POST['go']=='Generate');

space();

function decapitalize($string){
    $string = strtolower($string);
    return $string;
}
echo decapitalize("STOP YELLING I CAN'T HEAR MYSELF THINKING!!");

space();

function volume($hauteur , $rayon){
    $volume = $rayon * $rayon * 3.14 * $hauteur * (1/3); 
    echo 'The volume of a cone which ray is 5 and height is 2 = ' . $volume . ' cm<sup>3</sup><br />';  

}
echo volume(3,7);
?>
