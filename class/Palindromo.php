<?php

//namespace class; 

use Exception;

class Palindromo {
    private $naoPares = 0;
    private $caracteres;
    private $stringEntrada;
    private $stringArray;

    public function __construct(string $string)
    {
        $this->stringEntrada = $string;
    }

    public function verificarPalindromo()
    {
        $this->validaString();

        $this->stringArray = str_split($this->stringEntrada);

        $this->agruparCaracterSimilar();
        $this->checaParesCaracteres();
        if ($this->naoPares > 1) {
            return false;
        }

        return true;
    }

    private function agruparCaracterSimilar()
    {
        foreach ($this->stringArray as $caracter) {
            $this->caracteres[$caracter][]= $caracter;
        }
        
        //return $caracters;
    }
    
    private function checaParesCaracteres()
    {
        foreach ($this->caracteres as $sub) {
            //var_dump($sub); exit;
            if (count($sub) % 2 == 1) {
                $this->naoPares++;
            }
        }
    }

    private function validaString()
    {
        try {
            $tamanho = strlen($this->stringEntrada);

            if ($tamanho < 1 || $tamanho > 100) {
                throw new Exception('A string informada deve conter no minímo 1 caracter e no maxímo 100.');
            }

            if (preg_match('/[^a-z]+/', $this->stringEntrada)) {
                throw new Exception('Permitido somente a entrada de caracteres de "a" a "z" miniculos sem espaços.');
            }

        } catch (Exception $e) {
            echo 'Message: ' .$e->getMessage();
            die;
        }
    }
}