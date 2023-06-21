<?php
// esercizio 1
// $counter=0;
// $somma=0; 

// $arrNum= [2,4,8,10,11,13,17];
// foreach($arrNum as $num) {
//       if($num%2==0) {
//         $somma=$somma + $num;
        // $pari+=$num;
//         $counter++;
        
//       }
// }; 

// $media= $somma/$counter;
// echo $media; 

// esercizio2

// $users= [
//     ["name"=>"Davide", "surname"=> "Cariola", "gender"=> "M"],
//     ["name"=>"Marco", "surname"=> "Cariola", "gender"=> "M"],
//     ["name"=>"Rosalia", "surname"=> "Cariola", "gender"=> "F"],
//     ["name"=>"Franca", "surname"=> "Cariola", "gender"=> "F"],



// ];

// foreach($users as $user) {
//     if($user["gender"]=="M") {
//         print_r("Buongiorno Sig." .$user["name"]. $user["surname"]."\n"); 
//     } else {
//         print_r("Buongiorno Sig.ra" .$user["name"]. $user["surname"]."\n"); 
//     };
// };

// esercizio 3

// for ($i=1; $i<101; $i++){
//     if($i%3==0 && $i%5!==0){
//         print_r("PHP\n");
//     } else if ($i%5==0 && $i%3!==0) {
//         print_r("Javascript\n"); 
//     } else if ($i%3==0 && $i%5==0) {
//         print_r("HACKADEMY66\n"); 
//     } else {
//         print_r($i."\n"); 
//     }


        
    
// }


// esercizio 1
$arrNum= [2,30,40,25,27,99];
$sum= 0;
$counter=0; 
foreach($arrNum as $num){
    if($num%2==0){
        $sum= $sum + $num;
        $counter++; 

    }; 
}; 

$media= $sum/$counter;

print_r($media); 

// esercizio 2

$users= [
    ["username"=> "Rosalia", "surname"=> "Auciello", "gender"=> "F"],
    ["username"=> "Marco", "surname"=> "Rossi", "gender"=> "M"],
    ["username"=> "Leonardo", "surname"=> "Lerario", "gender"=> "M"],
]; 

foreach($users as $user) {
    if($user["gender"]=="M") {
        print_r("Buongiorno Sig. ".$user["username"]." ".$user["surname"]."\n"); 
    } else {
        print_r("Buongiorno Sig.ra ".$user["username"]." ". $user["surname"]."\n");
    }; 
}; 

// esercizio 3

for ($i=1; $i<101; $i++){
       if ($i%3==0 && $i%5!==0) {
        print_r("PHP\n");
       } else if ($i%5==0 && $i%3!==0) {
        print_r("JAVASCRIPT\n"); 
       } else if ($i%3==0 && $i%5==0) {
        print_r("HACKADEMY 66\n"); 
       } else {
        print_r($i."\n"); 
       }; 
}; 




?>