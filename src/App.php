<?php

require 'Operacao.php';
require 'Calculadora.php';

$opEscolhida = readline('Digite a operacao: ');
$n1 = readline('Digite o primeiro numero: ');
$n2 = readline('Digite o primeiro numero: ');

$op = new Operacao('multiplicacao', 100, 350); //operacao
$calculadora = new Calculadora($op);

$calculadora->acao();