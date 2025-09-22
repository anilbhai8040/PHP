<?php
     $arr1 = array(1,2,3,4,5);
     $arr2 = array(1,2,3,4,5);

     $result = true;
     if(count($arr1) == count($arr2)){
        for($i=0; $i < count($arr1); $i++){
            if($arr1[$i] != $arr2[$i]){
                $result = false;
                break;
            }
        }
        if($result){
            echo "Same Array Elements...";
        }else{
            echo "Not Same Array Elements...";
        }
     }else{
        echo "Number of Elements are Different...";
     }

?>