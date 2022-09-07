<?php
// fungsi mencari bilangan prima
// function prime($number){
//     if ($number == 1)
//     return 0;
//     for ($i = 2; $i <= $number/2; $i++){
//         if ($number % $i == 0)
//             return 0;
//     }
//     return 1;
// }

// //mencari bilangan e
// for($e = 0; $e < 1000; $e++){ 
//     $fpb = gmp_gcd($e, $j);
//     if($e>1 && prime($fpb)==1) 
//     break;
// }

// $e = $e;

// // mencari bilangan d
// for($d=3;$d<1000;$d++) {      
// 	$fpa = ($e*$d)%$j;
//     if(prime($fpa)==1) 
//     break;
// }

// $d = $d;


//Enkripsi
//E=M^(e) mod n
function encrypt($plaintext,$e,$n){
    $data[0]=1;
    $get = '';

    for($i=0;$i<strlen($plaintext);$i++){
        for($j=0;$j<$e;$j++){
            $rest[$j] = pow(ord($plaintext[$i]),1) % $n;
            if($data[$j]>$n){
                $data[$j+1] = $data[$j]*$rest[$j] % $n;
            }else{
                $data[$j+1] = $data[$j]*$rest[$j];
            }
        }
        $get .= $data[$e]%$n;

        if($i!=strlen($plaintext)-1){
            $get .= ' ';
        }
    }
    return $get;
}
function sendDB($ord){
    $x = '';
    $oh = explode(' ',$ord);
    foreach($oh as $o){
        $x .= chr($o);
    }
    return bin2hex($x);
}


function enc($word){
    $pi=11;
    $qi=17;

    $n = $pi*$qi;
    $j = ($pi-1)*($qi-1);

    $e = 7;
    return strval(sendDB(encrypt($word,$e,$n)));
}
?>