<?php
/**
 * Series of exercises on PHP conditional structures.
*/  
// 1.1 Clean your room Exercise 

// $room_is_filthy = false;

// if( $room_is_filthy == true ){
// 	echo "Yuk, Room is dirty : let's clean it up !";
// 	function cleanup_room(){
// 	echo"<br>Room is now clean!";
//     $room_is_filthy = false;
//     }
    
// } 
// else {
// 	echo "<br>Nothing to do, room is neat.";
// }

// 1.2 Clean your room Exercise, improved

// Create the array of possible states
// $possible_states = [ 
//     0=> "health hazard", 
//     1=>"filthy",
//     2=>"dirty",
//     3=>"clean",
//     4=>"immaculate"];

// // When testing, change the index value to navigate to the possible array values
// $room_filthiness = $possible_states[2]; 
// if($room_filthiness == $possible_states[0]){
//     echo "you're in danger yuk!!!! go out of this room!!!!";
// }
// elseif($room_filthiness == $possible_states[1]  ){
// 	echo "Yuk, Room is Disgusting! Let's clean it up !";
// } 
// elseif( $room_filthiness == $possible_states[2] ){
// 	echo "Yuk, Room is dirty : let's clean it up !";
// } 
// else {
// 	echo "<br>Nothing to do, room is neat.";
// }
// date_default_timezone_set("europe/paris");
// $now = date("H:i");
// $hour= date("H");
// $minutes= date("i");
// echo $now;

//     If  ( $hour > 5 && $hour<=9  && $minutes >=0){
//         echo "<p>Good morning !</p>";
//     }
//     elseIf  (($hour > 9 && $minutes >=1) &&  $hour<=12){ 
//         echo "<p>Good day !</p>";
//     }
//     elseIf  (($hour >  12 && $minutes >=1) && $hour <=16 ){
//         echo "<p>Good afternoon !</p>";
//     }
//     elseIf  (($hour > 16 &&  $minutes >=1) && $hour <=21 ){
//         echo "<p>Good evening !</p>";
//     }
//     else{ 
//         echo "Good night !";
//     }

// 3. "Different greetings according to age" Exercise

// // if age is less than 12 years old, display "Hello kiddo!"
// if age is between 12 and 18 years old, display "Hello Teenager !"
// if age is between 18 and 115 years old, display Hello Adult !"
// if age is beyond 115 years old, display "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?"

 /*if (isset($_GET['age'])&& isset($_GET['gender'])){
     $gender = $_GET['gender'];
// 	// Form processing
    if ($_GET['age'] < 12){
        if($gender=="man"){
            echo "hello boy kiddo!";
        }
        elseif($gender=="woman"){
            echo "hello girl kiddo";
        }

}
    elseif($_GET['age'] >= 12 && $_GET['age'] <= 18){
        if($gender=="man"){
            echo "hello boy teenager!";
        }
        elseif($gender=="woman"){
            echo "hello girl teenager";
        }

}

    elseif ($_GET['age'] > 18 && $_GET['age'] <= 115){
        if($gender=="man"){
            echo "hello man adult!";
        }
        elseif($gender=="woman"){
            echo "hello woman adult";
        }

}

    elseif ($_GET['age'] >115){
        if($gender=="man"){
            echo "hello robotic man!";
        }
        elseif($gender=="woman"){
            echo "hello robotic woman";
        }
    }
    // echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
    // }
    
}
//  Form (incomplete)
// ?>
<form method="get" action="">
    <label for="age">...</label>
    <input type="text" name="age">
    <input type="radio" id="woman" name="gender" value="woman">
    <label for="woman">woman</label>
    <input type="radio" id="man" name="gender" value="man">
    <label for="man">man</label>
    <input type="submit" name="submit" value="Greet me now">

</form>*/

//5. The Girl Soccer team
//You want to create a soccer team for girls between 21 and 40 years old.

// Create a form asking for the age, gender and name of the person. Use the $age and $gender variables in an if/else to display a "welcome to the team !" or "Sorry you don't fit the criteria" message.

// if(isset($_GET['name'])&&($_GET['age'])&&($_GET['gender'])){
// $age = $_GET['age'];
// $gender = $_GET['gender'];
// if(($age>=21 && $age<=40)&&($gender=="woman")){
//     echo"Welcome to the the team";
// }
// else{
//     echo"Sorry you don't fit the criteria";
// }
// };
// ?>
<!-- // <form method="get" action="">
//     <label for="name">name</label>
//     <input type="text" name="name">

//     <label for="age">age</label>
//     <input type="text" name="age">

//     <input type="radio" id="woman" name="gender" value="woman">
//     <label for="woman">woman</label>
//     <input type="radio" id="man" name="gender" value="man">
//     <label for="man">man</label>

//     <input type="submit" name="submit" value="Greet me now">

// </form> -->

<!-- 6. Achieve the same, without the ELSE.
A key aspect of coding conditions is to keep them as simple as possible. Improve the previous exercise by using only an if statement (without the else), and a default value that changes only if the condition is true. -->
<?php  
// if(isset($_GET['name'])&&($_GET['age'])&&($_GET['gender'])){
//     $reponse=false;
// $age = $_GET['age'];
// $gender = $_GET['gender'];
// if(($age>=21 && $age<=40)&&($gender=="woman")){
//     $reponse=true;
//     echo $reponse;
// }
// if ($reponse==true){
//     echo "Welcome to the the team";
// }
// if ($reponse==false){
//     echo "Sorry you don't fit the criteria";
// }
// };
?> 
    <!-- <form method="get" action="">
        <label for="name">name</label>
        <input type="text" name="name">

        <label for="age">age</label>
        <input type="text" name="age">

        <input type="radio" id="woman" name="gender" value="woman">
        <label for="woman">woman</label>
        <input type="radio" id="man" name="gender" value="man">
        <label for="man">man</label>

        <input type="submit" name="submit" value="Greet me now">

    </form> -->

    <!-- <p></p>
    <form method="get" action="">
        <label for="cotation">points de l'élève</label>
        <input type="text" name="cotation">
        <input type="submit" name="submit" value="Greet me now">
    </form> -->

    <?php
    // if(isset($_GET["cotation"])){
    //     $cotation=$_GET["cotation"];
    //     if($cotation<4){
    //         echo "This work is really bad. What a dumb kid! ";
    //     }
    //     elseif(($cotation>=5) && ($cotation <=9)){
    //         echo "This is not sufficient. More studying is required.";
    //     }
    //     elseif($cotation==10){
    //         echo "barely enough!";
    //     }
    //     elseif($cotation>=11 && $cotation<=14){
    //         echo "Not bad!";
    //     }
    //     elseif($cotation>=15 && $cotation<=18){
    //         echo "Bravo, bravissimo!";
    //     }
    //     elseif($cotation<=19){
    //         echo "Too good to be true : confront the cheater!";
    //     }

    // }
    ?>
    


