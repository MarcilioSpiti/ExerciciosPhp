<?php

namespace Galoa\ExerciciosPhp\TextWrap;

/**
 * Implemente sua resolução aqui.
 */
class Resolucao implements TextWrapInterface {


            $quebra = explode(" ", $text);
            $limiteAtual = 0;
            $textFinal = "";


            if ($length<=0){
              echo "Sem parametro viavél";
              }
              if (strlen($text)==0){
              echo "Digite o texto";
              } 

            for ($i = 0; $i < count($quebra); $i++) {
                if (strlen($quebra[$i]) < ($length - $limiteAtual)) {

                    $textFinal = " " . $quebra[$i];
                    $limiteAtual = $limiteAtual + (strlen($textFinal) - 1);
                } elseif (strlen($quebra[$i]) > ($length - $limiteAtual)) {

                    $textFinal = "<br/ >" . $quebra[$i];
                    $limiteAtual = $limiteAtual + (strlen($textFinal) - 1);
                }
                echo $textFinal;
            }
        }