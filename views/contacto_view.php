<!-- esta vista es para que el usuario pueda contactarnos mediante un formulario
 -->
<!DOCTYPE html>
<html>
<head>
  <title>Formulario de Contacto</title>
  <link rel="shorcut icon" href="../src/favicon.jpg">

  <style>
    body {
  background-image: url("../src/teamwork.jpg");
  background-size: cover;
  background-repeat: no-repeat;
}

.container {
  max-width: 400px;
  margin: 0 auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 4px;
  background-color: rgba(255, 255, 255, 0.8);
}
h1{
    text-align: center;
}
h2 {
  text-align: center;
}

label {
  display: block;
  margin-top: 10px;
}

input[type="text"],
input[type="email"],
textarea {
  width: 100%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type="submit"] {
  margin-top: 20px;
  padding: 10px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}


  </style>
  
</head>
<body>
  <div class="container">
    <H1>"SOMOS FERRADA"</H1>
    <h2>Contáctanos</h2>
    <form action="../contactanos.php" method="POST">
      <label for="name">Nombre:</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Correo Electrónico:</label>
      <input type="email" id="email" name="email" required>

      <label for="message">Mensaje:</label>
      <textarea id="message" name="message" required></textarea>

      <input type="submit" value="Enviar">
    </form>
  </div>
</body>
</html>
