<?php
    $a1=$_POST['a1'];
    $b1=$_POST['b1'];
    $c1=$_POST['c1'];

    $a2=$_POST['a2'];
    $b2=$_POST['b2'];
    $c2=$_POST['c2'];

    $D=$a1*$b2-$a2*$b1;
    $Dx=$c1*$b2-$b1*$c2;
    $Dy=$a1*$c2-$c1*$a2;
    if($D==0)
    {
        if($Dx+$Dy==0)
        {
            echo "Hệ phương trình có vô số nghiệm";
        }
        else 
            echo "Hệ phương trình vô nghiệm" ;
    }
    else
    {
        $x=$Dx/$D;
        $y=$Dy/$D;
        echo "Hệ phương trình có nghiệm : <br>";
        echo "x = $x <br>";
        echo "y = $y";
    }

?>
