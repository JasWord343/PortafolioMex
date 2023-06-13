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
    <section class="exercise4">
      <H1>Verificacion de Voto</H1>
    <form method="post" action="">
        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" required><br><br>

        <label for="sexo">Sexo:</label>
        <select id="sexo" name="sexo" required>
            <option value="hombre">Hombre</option>
            <option value="mujer">Mujer</option>
        </select><br><br>

        <input type="submit" value="Verificar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener la edad y el sexo ingresados
        $edad = $_POST["edad"];
        $sexo = $_POST["sexo"];

        // Verificar si puede votar
        $puedeVotar = false;

        if ($sexo == "hombre" && $edad >= 18) {
            $puedeVotar = true;
        } elseif ($sexo == "mujer" && $edad >= 18) {
            $puedeVotar = true;
        }

        // Mostrar el resultado
        if ($puedeVotar) {
            echo "<br>Puede votar.";
        } else {
            echo "<br>No puede votar.";
        }
    }
    ?>
    </section>

    
  </div>
</body>
</html>
