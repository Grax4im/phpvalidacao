<?php 
// Em PHP, aplique as validações necessárias para que se garanta que as variáveis abaixo existam,
// tenham um valor e que estejam no tipo correto para ser utilizado:
//a) Validar a variável:
$variavel = 198;

if(isset($variavel) && is_numeric($variavel)) {
    echo 'Variavel ok';
}
//b) Validar o array e o indice "endereco":

$variavel = [ "nome" => "Pedro Luiz", "endereco" => "Av Taquara", "telefone" => "(51) 5151-51511" ];

if(isset($variavel['endereco']) && is_array($variavel)) {
    echo 'array ok, indice existe';
}

//c) Validar a variável: 
$variavel = "Romarinho";

if(isset($variavel) && is_string($variavel)){
    echo 'variavel ok';
}

?>