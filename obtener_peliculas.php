  <?php
    // Conexión a la base de datos
    $conn = mysqli_connect("localhost", "usuario", "contraseña", "basededatos");

    // Consulta SQL para seleccionar las últimas películas agregadas
    $sql = "SELECT title, description, image_url FROM movies ORDER BY added_date DESC LIMIT 3";
    $result = mysqli_query($conn, $sql);

    // Imprimir cada película en un slide
    while ($row = mysqli_fetch_assoc($result)) {
      echo '<div class="slide">';
      echo '<img src="' . $row['image_url'] . '" alt="Poster de ' . $row['title'] . '">';
      echo '<h3>' . $row['title'] . '</h3>';
      echo '<p>' . $row['description'] . '</p>';
      echo '</div>';
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($conn);
  ?>

