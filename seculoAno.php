<?php
 function seculoAno($ano){
    if($ano > 100 && $ano < 1000){
        
        $result = $ano % 100;
        if($result == 0){
            $result = substr($ano, 0, 1);
            return "Século: $result"; 
        }else{
            $result = substr($ano, 0, 1) +1;
            return "Século:  $result";
        }
        
    } elseif ($ano > 999 && $ano < 10000){
        $result = $ano % 100;
        if($result == 0){
            $result = substr($ano, 0, 2);
            return "Século: $result"; 
        }else{
            $result = substr($ano, 0, 2) +1;
            return "Século:  $result";
        }
    }else{
        return "Ano inválido.";
    }
 }

 echo seculoAno(501);

?>