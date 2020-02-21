<?php
// $pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');
// foreach($pronouns as $pronoun){
//     print_r($pronoun." code</br>");
// }

//ex1

// $numbers=1;
// while($numbers<=120){
//     echo($numbers."</br>");
//     $numbers++;
// }


//ex2 

// $numbers=1;
// for($numbers=1;$numbers<=120;$numbers++){
//     print_r($numbers.", ");
// }

//ex3

// $startUp=[
//     "samuel","emmanuel","pierre","magalie","yassine","catherine","laura","amandine"
// ];
// foreach($startUp as $firstname){
//     print_r($firstname.", ");
// }

//ex4

$countries=[
    "be"=>"belgium",
    "jp"=>"Japan",
    "ast"=>"austria",
    "fr"=>"france",
    "GB"=>"england",
    "NDL"=>"neederlands",
    "DE"=>"deutshland",
    "USA"=>"u.s.a",
    "CND"=>"canada",
    "CN"=>"china"  
];
// foreach ($countries as $key=>$array) {
//         echo $countries($key).'<br />';
//     }


?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <FORM>
        <SELECT name="countries" size="1">'
            <?php
foreach($countries as $key => $country){
    // echo"<option>".$country;
    echo "<option value=".$key.">$country</option>";
}
?>
        </SELECT>
    </FORM>
</body>

</html>