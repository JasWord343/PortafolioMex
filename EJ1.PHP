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
    <section class="exercise1">
    <h2>Calcular área de un triángulo</h2>
    <form method="post" action="">
        <label for="base">Base:</label>
        <input type="text" name="base" id="base" required><br><br>
        
        <label for="altura">Altura:</label>
        <input type="text" name="altura" id="altura" required><br><br>
        
        <input type="submit" name="calcular" value="Calcular">
    </form>

    <?php
    if (isset($_POST['calcular'])) {
        $base = $_POST['base'];
        $altura = $_POST['altura'];
        
        $area = ($base * $altura) / 2;
        
        echo "<p>El área del triángulo es: " . $area . "</p>";
    }
    ?>
    </section>

    
  </div>
</body>
</html>
