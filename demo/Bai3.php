<?php
    $diem=$_POST['d'];
    if($diem>=0&&$diem<=10)
    {
        if($diem<4) echo"=> F";
    else if($diem<=4.5) echo"=> D"; 
    else if($diem<5) echo"=> D+"; 
    else if($diem<6) echo"=> C"; 
    else if($diem<7) echo"=> C+"; 
    else if($diem<8) echo"=> B"; 
    else if($diem<8.5) echo"=> B+";
    else echo"=> A"; 
    }
    else{
        echo "Điểm phải nằm trong khoảng [0;10]";
    }
    
?>