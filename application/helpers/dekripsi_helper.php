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

function getDB($chr){
    $c = '';
    $chrnew = hex2bin($chr);

    // for($i=0;$i<strlen($chrnew);$i++){
    //     $c .= ord($chrnew[$i]);

    //     if($i!=strlen($chrnew)-1){
    //         $c .= ' ';
    //     }
    // }
    return $chrnew;
}
//Dekripsi
//M=E^(d) mod n
function decrypt($cipher,$d,$n){
    $data[0]=1;
    $get = '';

    for($i=0;$i<strlen($cipher);$i++){
        for($j=0;$j<$d;$j++){
            $rest[$j] = pow(ord($cipher[$i]),1) % $n;
            if($data[$j]>$n){
                $data[$j+1] = $data[$j]*$rest[$j] % $n;
            }else{
                $data[$j+1] = $data[$j]*$rest[$j];
            }
        }
        $get .= chr($data[$d]%$n);
    }
    return $get;
}

function dec($word){
    $pi=11;
    $qi=17;
    
    $n = $pi*$qi;
    $j = ($pi-1)*($qi-1);
    
    $d = 23;
    return decrypt(getDB($word),$d,$n);
}
?>