<?php 
$msg = 'Hello world';   //variaveis sao declaradas com $
$Msg = 'Oi meu BB';  // case sentive,so por ser maiucuslo ja diferencia
$espaco = ' <br> ';
$texto = "\n Ola este é texto especial para uma pessoa bem especial
\n ontem a noite <br>...";

echo $msg,$espaco, $Msg;   // n é de php <br> é de html
echo nl2br($texto);    //função faz o /n funcionar  br tbm funciona

