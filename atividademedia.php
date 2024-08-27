<?php     
            $nota1 = 0;
            $nota2 = 0;
            $nota3 = 0;
            $nota4 = 10;

            $resultado = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
            $mensagem = '';
            
            echo "Suas notas foram:"."<br>";
            echo "1° nota: ".$nota1."<br>";
            echo "2° nota: ".$nota2."<br>";
            echo "3° nota: ".$nota3."<br>";
            echo "4° nota: ".$nota4."<br>";
            echo "--------------<br>";
            echo "Média: ";
            echo $resultado;
            echo "<br>--------------<br>";

            if ($resultado >=7 && $resultado !=10) {
                $mensagem = 'O aluno foi aprovado.';
                echo $mensagem;
                /*echo "O aluno foi aprovado!";*/
            }
            else if ($resultado == 0){
                echo "Estude mais, você não acertou nada.";
            }
            else if ($resultado == 10) {
                echo "Parabéns! Aprovado com nota máxima.";
            }
            else  {
                $mensagem = 'O aluno foi reprovado.';
                echo $mensagem;
                /*echo "O aluno foi reprovado";*/
            }
?>     
