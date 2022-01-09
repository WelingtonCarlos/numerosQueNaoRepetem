<?php


function naoRepete(): void{ 


    $arraySorteado = array();

    foreach(range(1,20) as $x) { // definindo a quantidade de elementos no array.

        array_push($arraySorteado, rand(1, 10)); // sorteando os elementos para preencher o array de forma aleatória.

    }

    // abaixo faz a contagem das ocorrências do array através da função array_count_values
    $contagemDeOcorrencias = array_count_values($arraySorteado);


    // abaixo faz a verificação dos números que não se repetiram através do valor obtido das ocorrências da função acima.
    $numerosQueNaoRepetem = array();

    foreach ($contagemDeOcorrencias as $key => $valor) { // aqui é pega o número de ocorrências de cada elemento 

    	// e através de uma key é feita a verificação abaixo

        if($valor == 1) { // se o valor da ocorrência for igual a 1, ou seja, se o elemento tiver aparecido somente uma vez:

            array_push($numerosQueNaoRepetem, $key);

        }
    }

    sort($numerosQueNaoRepetem); // realiza uma ordenação dos números que que repetem, afim de que sejam exibidos em ordem crescente.
    
    echo "Array sorteado = [".implode(", ",$arraySorteado)."]".'<br>'.'<br>'; 

    if(count($numerosQueNaoRepetem) == 0) { 

        echo "Todos os números se repetiram.";

    }

    else {

        echo "Os números que não se repetem são: ".preg_replace('/, (?=[^,]*$)/',' e ',implode(", ",$numerosQueNaoRepetem)).".";

    }
}


naoRepete();
