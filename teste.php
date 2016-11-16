<?php

include('code.php');      // Inclui e executa um trecho opcional de código
include 'code.php';       // Maneira alternativa, funciona apenas com include e require.
require('code.php');      // O mesmo que 'include', porém pára a execução caso o arquivo não seja encontrado
require_once('code.php'); // O mesmo que require, mas evita que o trecho seja incluído novamente

echo 'abc';               # Escrever abc
print 'abc';              # Realiza o mesmo que 'echo'
$res = print 'abc';       # retorna se foi executado com sucesso saída ou não (0 ou 1) Coisa que o echo não faz.

$x = 2; # Variáveis
if ($x >= 1 && $x < 3) {   // se a variavel $x for maior ou igual a 1 E(AND) menor que 3
    echo 'Olá Usuário Tekset!';     // escreve "Olá Usuário Tekset!"
} else {                   // Se não... 
    print('Relatório!'); // escreve 'Relatório!', print e echo podem ser usados com ou sem parênteses.
}
 
?>
