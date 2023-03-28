   <!DOCTYPE html>
   <html>

   <head>
       <title>Formulário IMC</title>
   </head>

   <body>
       <h2>Calculo de IMC</h2>
       <form method="POST" action="form_imc.php">
           <label for="peso">Peso (Kg):</label>
           <input type="text" name="peso" id="peso" required="required">
           <br><br>
           <label for="altura">Altura (m):</label>
           <input type="text" name="altura" id="altura" required="required">
           <br><br>
           <input type="submit" value="Calcular">
       </form>
       <?php
        if (isset($_POST['peso']) && isset($_POST['altura'])) {
            $peso = str_replace(",", ".", $_POST['peso']);
            $altura = str_replace(",", ".", $_POST['altura']);

            $imc = $peso / ($altura * $altura);

            echo "<h3>Resultado</h3>";
            echo "IMC: " . number_format($imc, 2) . "<br>";

            if ($imc < 18.5) {
                echo "Abaixo do peso";
            } else if ($imc >= 18.5 && $imc <= 24.9) {
                echo "Peso normal";
            } else if ($imc >= 25 && $imc <= 29.9) {
                echo "Acima do peso";
            } else if ($imc >= 30 && $imc <= 34.9) {
                echo "Obesidade nível 1";
            } else if ($imc >= 35 && $imc <= 39.9) {
                echo "Obesidade nível 2";
            } else {
                echo "Obesidade nível 3";
            }
        }
        ?>
   </body>

   </html>