<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  
  <link rel="stylesheet" href="style.css" />
  <!-- Font Awesome CDN Link -->
  <link rel="stylesheet" href="CSS/styles.css"/>
  <script src="JS/dashboard.js"></script>
</head>
<body>
  <div class="container">
    <nav>
      <ul>
        <li>
          <a href="#" class="logo">
            <img src="img/yomerop.jpg" alt="Logo">
            <span class="nav-item">Carlos Torres</span>
          </a>
        </li>
        <li>
          <a href="index.html">
            <i class="fas fa-home"></i>
            <span class="nav-item">Home</span>
          </a>
        </li> 
        <li>
          <a href="EJ1.PHP">
            <i class="fas fa-user"></i>
            <span class="nav-item">Ejercicio 1</span>
          </a>
        </li>
        <li>
          <a href="EJ2.PHP">
            <i class="fas fa-wallet"></i>
            <span class="nav-item">Ejercicio 2</span>
          </a>
        </li>
        <li>
          <a href="EJ3.PHP">
            <i class="fas fa-chart-bar"></i>
            <span class="nav-item">Ejercicio 3</span>
          </a>
        </li>
        <li>
          <a href="EJ4.PHP">
            <i class="fas fa-tasks"></i>
            <span class="nav-item">Ejercicio 4</span>
          </a>
        </li>
        <li>
          <a href="EJ5.PHP">
            <i class="fas fa-cog"></i>
            <span class="nav-item">Ejercicio 5</span>
          </a>
        </li>
      </ul>
    </nav>
    <section class="exercise3">
      <H1>Comparacion de 3 Numeros </H1>
    <form method="post" action="">
        <label for="numero1">Primer número:</label>
        <input type="number" id="numero1" name="numero1" required><br><br>

        <label for="numero2">Segundo número:</label>
        <input type="number" id="numero2" name="numero2" required><br><br>

        <label for="numero3">Tercer número:</label>
        <input type="number" id="numero3" name="numero3" required><br><br>

        <input type="submit" value="Comparar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener los números ingresados
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];
        $numero3 = $_POST["numero3"];

        // Comparar los números y encontrar el mayor
        $mayor = $numero1;

        if ($numero2 > $mayor) {
            $mayor = $numero2;
        }

        if ($numero3 > $mayor) {
            $mayor = $numero3;
        }

        // Mostrar el resultado
        echo "<br>El mayor de los tres números ingresados es: " . $mayor;
    }
    ?>
    </section>

    
  </div>
</body>
</html>
