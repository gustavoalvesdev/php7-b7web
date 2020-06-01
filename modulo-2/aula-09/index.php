<?php 

$numero = 2.21548;

// retorna o número positivo
# echo abs($numero);

// exibe o valor de PI
# echo pi();

/*
	ESSENCIAIS
*/
// arredondar um número sempre para baixo
# echo floor($numero);

// arredondar um número sempre para cima
# echo ceil($numero);

// dependendo do número arredonda para cima ou para baixo
# echo round($numero);

// arredondar especificando a precisão de casas decimais
# echo round($numero, 2); // duas casas decimais

// retorna um valor aleatório a partir do range especificado
# echo rand(10, 45);

// maior valor de um array
# $numeros = [1, 27, 35, 44, 18, 2, 7];
# echo max($numeros);

// menor valor de um array
# $numeros = [25, 32, 44, 1, 5, 7];
# echo min($numeros);
