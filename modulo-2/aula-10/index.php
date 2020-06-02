<?php 

$nome = 'gustavo alves da silva';
$numero = 14343.54;

// remove espaços no começo e no fim da string
# echo trim($nome);

// conta quantos caracteres existem em uma string
# echo strlen(trim($nome));

// transforma todas as letras a string em minúsculas
# echo strtolower($nome);

// transforma todas a letras da string para maiúsculas
# echo strtoupper($nome);

// substitui uma string por outra
# echo str_replace('Pereira', 'Alves', $nome);

// pega apenas parte da string
# echo substr($nome, 7);
// segundo parâmetro é a quantidade de caracteres que eu quero pegar
# echo substr($nome, 7, 6);

// procura um caractere ou palavra dentro de outra e retorna a posição onde se encontra o termo procurado
# echo strpos($nome, 'Alves');
// quando não tem retorna false 
# echo (strpos($nome, 'Ferreira')) ? strpos($nome, 'Ferreira') : 'Não tem';

// transforma a primeira letra da string em maiúscula
# echo ucfirst($nome);

// transforma a primeira letra de cada palavra da string em maiúscula
# echo ucwords($nome);

// transforma cada palavra de uma string em um item de um array
# print_r(explode(' ', $nome));

// formata números
echo 'R$ '.number_format($numero, 2, ',', '.');
