<?php
$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
if($a==0)
{
    echo'Phương trình là bậc nhất <br>';
    if($b==0){
        if($c==0){
            echo'Phương trình có vô số nghiệm';
        }
        else 
        echo"Phương trình vô nghiệm";
    }
    else{
        $x=-$c/$b; 
        echo"Phương trình có nghiệm: $x";
    }
}
else
{
    $delta=$b*$b-4*$a*$c;
    if($delta>0){
        echo'Phương trình có 2 nghiệm phân biệt <br>';
        $x1=-$b+sqrt($delta)/2*$a;
        $x2=-$b-sqrt($delta)/2*$a;
        echo"X1 = $x1 <br>";
        echo"X2 = $x2";
    }
    else if($delta==0){
        $x=-$b/2*$a;
        echo"Phương trình có nghiệm duy nhất: $x";
    }
    else{
        echo"Phương trình vô nghiệm!";
    }
}
?>
