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
    <section class="exercise5">
      <h2>Salario Mensual</h2>
    <form method="post" action="">
        <label for="horas_trabajadas">Horas trabajadas:</label>
        <input type="number" id="horas_trabajadas" name="horas_trabajadas" required><br><br>

        <label for="tarifa_fija">Tarifa fija:</label>
        <input type="number" id="tarifa_fija" name="tarifa_fija" required><br><br>

        <label for="sueldo_mensual">Sueldo mensual:</label>
        <input type="number" id="sueldo_mensual" name="sueldo_mensual" required><br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener los valores ingresados
        $horasTrabajadas = $_POST["horas_trabajadas"];
        $tarifaFija = $_POST["tarifa_fija"];
        $sueldoMensual = $_POST["sueldo_mensual"];

        // Calcular salario bruto
        $salarioBruto = 0;

        if ($horasTrabajadas <= 35) {
            $salarioBruto = $horasTrabajadas * $tarifaFija;
        } else {
            $horasExtras = $horasTrabajadas - 35;
            $salarioBruto = (35 * $tarifaFija) + ($horasExtras * ($tarifaFija * 1.5));
        }

        // Calcular impuestos
        $impuestos = 0;

        if ($sueldoMensual >= 20000) {
            $impuestos = $salarioBruto * 0.2;
        }

        // Calcular salario neto
        $salarioNeto = $salarioBruto - $impuestos;

        // Mostrar el resultado
        echo "<br>Salario bruto: $" . $salarioBruto;
        echo "<br>Impuestos: $" . $impuestos;
        echo "<br>Salario neto: $" . $salarioNeto;
    }
    ?>
    </section>

    
  </div>
</body>
</html>
