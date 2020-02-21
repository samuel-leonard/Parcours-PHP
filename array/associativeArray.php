<?php
// $me = array(
//     'mother' => array(
//         'firstname' => 'marianne',
//         'age'=> 59,
//         'favourite season'=> 'summer',
//         "i like football" => false,
//         "hobbies"=>array("piano","restaurant","cinema")
//     ),

//     'father' => array(
//         'firstname' => 'yvan',
//         'age'=> 65,
//         'favourite season'=> 'spring',
//         "i like football" => false,
//         "hobbies"=>array("garden", "paint")
//     ));
    
// $mother_hobbies=count($me['mother']['hobbies']);
// $father_hobbies= count($me['father']['hobbies']);
// $result=$mother_hobbies+$father_hobbies;

// echo $result;

// $me = array(
//     "hobbies" => [
//         "playstation","football","cinema",
//     ]

// );
// $soulmate = [
//     "hobbies" => [
//         "playstation","cooking","cinema"
//     ]
// ];

// // perform array operation
// $possible_hobbies_via_intersection = array_intersect($me["hobbies"], $soulmate["hobbies"]);
// $possible_hobbies_via_merge = array_merge($me["hobbies"], $soulmate["hobbies"]);

// echo '<pre>';
// print_r($possible_hobbies_via_intersection);
// print_r($possible_hobbies_via_merge);
// echo '</pre>';

$web_development=[
	"frontend"=>[],
	"backend"=>[]
];
array_push($web_development["frontend"],'xhtml');
array_push($web_development["backend"],"ruby on rails");
array_push($web_development["frontend"],"css");
array_push($web_development["backend"],"flash");
array_push($web_development["frontend"],"javascript");
$web_development["frontend"] = array_replace($web_development["frontend"],[0=>"html"]);//[1=>"html"] ceci remplacerait le deuxième élément du tableau
array_pop($web_development["backend"]);
print_r($web_development['backend']);
print_r($web_development["frontend"]);
?>
