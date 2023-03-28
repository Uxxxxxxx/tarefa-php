   <!DOCTYPE html>
   <html>

   <head>
       <title>Formulário Notas</title>
   </head>

   <body>
       <h2>Calculo de Notas</h2>
       <form action="form_notas.php" method="GET">

           Nome do Aluno: <input type="text" name="nome_aluno"><br>
           Nota1: <input type="text" name="nota1"><br>
           Nota2: <input type="text" name="nota2"><br>
           <input type="submit" value="Calcular Média e Situação">

       </form>

       <?php

        if (isset($_GET['nome_aluno']) && isset($_GET['nota1']) && isset($_GET['nota2'])) {
            $nome_aluno = $_GET['nome_aluno'];
            $nota1 = $_GET['nota1'];
            $nota2 = $_GET['nota2'];

            $media = ($nota1 + $nota2) / 2;

            if ($media < 4.0) {
                echo "Reprovado";
            } else if ($media >= 6.0) {
                echo "Aprovado";
            } else
                echo "Exame Final";
            echo "Nome do Aluno: $nome_aluno <br>";
            echo "Média calculada: $media <br>";
        }
        ?>
   </body>

   </html>