<?php

/**
 * Classe Operacao
 */
class Operacao
{
    // atributos da classes
    public $numero1;
    public $numero2;
    public $tipo;
    public $resultado;
    
    //ações
    public function __construct($tipo)
    {
        switch ($this->tipo) {
            case 'soma':
                # code...
                break;
            case 'subtracao':
                # code...
                break;
            case 'multiplicacao':
                # code...
                break;
            case 'divisao':
                # code...
                break;
            default:
                echo 'Tipo invalido';
                break;
        }
    }
    // regra de operação
    public function soma()
    {
        $this ->resultado = $this->numero1 - $this ->numero2
    }
    public function subtracao()
    {
        $this ->resultado = $this->numero1 - $this ->numero2
    }
    public function multiplicacao()
    {
        $this ->resultado = $this->numero1 - $this ->numero2
    }
    public function divisao()
    {
        $this ->resultado = $this->numero1 - $this ->numero2
    }
}