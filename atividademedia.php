<?php     
            $nota1 = 10;
            $nota2 = 10;
            $nota3 = 10;
            $nota4 = 10;

            $resultado = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
            
            echo "Suas notas foram:"."<br>";
            echo "1° nota: ".$nota1."<br>";
            echo "2° nota: ".$nota2."<br>";
            echo "3° nota: ".$nota3."<br>";
            echo "4° nota: ".$nota4."<br>";
            echo "-------------- <br>";
            echo "Média: ";
            echo $resultado;
            echo "<br>";

            if ($resultado >=7 && $resultado !=10) {
                echo "O aluno foi aprovado!";
            }
            elseif ($resultado == 0){
                echo "Estude mais, você não acertou nada.";
            }
            elseif ($resultado == 10) {
                echo "Parabéns! Aprovado com nota máxima.";
            }
            else  {
                echo "O aluno foi reprovado";
            }
?>    
