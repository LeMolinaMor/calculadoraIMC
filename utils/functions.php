
    <?php

//función para calcular la edad del usuario según su año de nacimiento
function mayor_edad($year){
    return date('Y') - $year;
    }
// FUNCIÓN PARA CALCULAR EL INDICE DE MASA CORPORAL
function calculo_imc($peso,$altura){

    $peso = floatval(str_replace(',', '.', $peso));// de esta manera convertimos la entrada del usuario a valores float
    $altura = floatval(str_replace(',', '.', $altura));// ademas de manejar las comas en caso de que separe decimales de esta forma
    

    if($altura <= 0){
        return false;
    }
    
    if($altura > 3){ // aqui estamos manejando el caso de que el usuario use centimetros o metros para definir estatura
        $altura = $altura / 100;
    }
    $imc = sprintf("%.2f", $peso / ($altura * $altura));
    return $imc;
    }   

// fUNCION para devolver al usuario un resultado en base al indice de masa corporal introducido
function imc_status($imc){
    if($imc < 18.5){
            return "Peso insuficiente";
        }elseif($imc >= 18.5 && $imc <= 25){
            return "Peso normal";
        }elseif($imc > 25 && $imc <= 50){
            return "Sobrepeso";
        }else{
            return "Obesidad";
        }
}

?>





