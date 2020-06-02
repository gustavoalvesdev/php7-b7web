<?php 

$nome = 'Gustavo Alves da Silva';

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