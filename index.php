<?php

for($i = 1; $i <= 100; $i++){
    if($i % 3 == 0 && $i % 5 == 0){
        echo "Il numero $i è HACKADEMY\n";
    }elseif($i % 5 == 0){
        echo "Il numero $i è JAVASCRIPT\n";
    }elseif($i % 3 == 0){
        echo "Il numero $i è PHP\n";
    }else{
        echo "Non multiplo\n";
    };
};


?>