<?php

namespace Galoa\ExerciciosPhp\TextWrap;

/**
 * Implemente sua resolução aqui.
 */

class Resolucao implements TextWrapInterface {


public function textWrap(string $text, int $length): array {
        
$linhas=array();
$textArray=explode(" ", $text);
$linhaAtual="";

        for ($i=0;$i<count($textArray);$i++){
            if (strlen($textArray[$i]) / $length > 1) {
                if (strlen($linhaAtual) != 0) {
                    array_push($linhas, $linhaAtual);
                }
                
                $nl = (strlen($textArray[$i]) / $length);
                for ($j = 0; $j < $numLinhas; $j++) {
                    $linhaAtual = substr($textArray[$i], $j * $length, $length);
                    array_push($linhas, $linha);
                }
                $linhaAtual = ""; 
                if (strlen($textArray[$i]) % $length != 0) {
                    $linha = substr($textArray[$i], $numLinhas * $length, $length);
                }
        }
        elseif (strlen($textArray[$i]) + strlen($linhaAtual) < $length) {
                if(strlen($linhaAtual) == 0){ 
                    $linhaAtual = $textArray[$i];
                } else {
                    $linhaAtual = $linhaAtual . " " . $textArray[$i];
                }
            }
            else { 
                array_push($linhas, $linhaAtual);
                $linhaAtual = $textArray[$i];
            }
        }
       
        array_push($linhas, $linhaAtual);
        return $linhas;
    
        



}
    
    }
