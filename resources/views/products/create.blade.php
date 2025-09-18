<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Formulario Productos</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      height: 100vh;
      background: #f2f2f2;
      display: flex;
      flex-direction: column;
    }

    /* 🔹 Topbar */
    .topbar {
      width: 100%;
      background: #28a745; /* Verde */
      color: white;
      padding: 20px 30px;
      font-size: 20px;
      font-weight: bold;
      position: fixed;
      top: 0;
      left: 0;
      z-index: 1000;
      box-shadow: 0 3px 8px rgba(0,0,0,0.2);
      text-align: left;
    }

    /* 🔹 Contenedor principal para centrar */
    .container {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      padding-top: 80px; /* Espacio para el topbar */
    }

    form {
      background: #fff;
      padding: 3rem;
      border-radius: 15px;
      width: 100%;
      max-width: 550px;
      box-shadow: 0 12px 30px rgba(40, 167, 69, 0.4); /* Sombra verde */
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    form:hover {
      transform: translateY(-6px);
      box-shadow: 0 16px 40px rgba(40, 167, 69, 0.6); /* Sombra verde */
    }

    h2 {
      text-align: center;
      margin-bottom: 2rem;
      font-size: 24px;
      color: #333;
    }

    label {
      display: block;
      margin-bottom: 0.5rem;
      font-weight: 600;
      font-size: 15px;
      color: #444;
    }

    input[type="text"],
    textarea,
    select {
      width: 100%;
      padding: 12px;
      margin-bottom: 1.3rem;
      border: 1px solid #ddd;
      border-radius: 8px;
      font-size: 14px;
      transition: border 0.3s ease;
    }

    input[type="text"]:focus,
    textarea:focus,
    select:focus {
      border-color: #28a745; /* Verde */
      outline: none;
    }

    textarea {
      resize: none;
      height: 90px;
    }

    /* Ocultar input file nativo */
    input[type="file"] {
      display: none;
    }

    /* Botón personalizado para imagen */
    .file-label {
      display: inline-block;
      background: #28a745; /* Verde */
      color: #fff;
      padding: 10px 18px;
      border-radius: 8px;
      cursor: pointer;
      font-size: 14px;
      font-weight: bold;
      margin-bottom: 1.3rem;
      transition: background 0.3s ease, transform 0.2s ease;
    }

    .file-label:hover {
      background: #218838; /* Verde más oscuro */
      transform: scale(1.03);
    }

    button {
      width: 100%;
      padding: 14px;
      background: #28a745; /* Verde */
      border: none;
      border-radius: 8px;
      color: #fff;
      font-size: 17px;
      font-weight: bold;
      cursor: pointer;
      transition: background 0.3s ease, transform 0.2s ease;
    }

    button:hover {
      background: #218838; /* Verde más oscuro */
      transform: scale(1.03);
    }
  </style>
</head>
<body>
  <!-- 🔹 Topbar -->
  <div class="topbar">
    Gestión de Productos
  </div>

  <!-- 🔹 Contenedor -->
  <div class="container">
    <form action="" method="post" enctype="multipart/form-data">
      <h2>Registrar Producto</h2>

      <label for="name">Name</label>
      <input type="text" name="name" id="name">

      <label for="description">Description</label>
      <textarea name="description" id="description"></textarea>

      <label for="price">Price</label>
      <input type="text" name="price" id="price">

      <label for="image">Image</label>
      <label for="image" class="file-label">📂 Seleccionar Imagen</label>
      <input type="file" name="image" id="image">

      <label for="brand">Brand</label>
      <input type="text" name="brand" id="brand">

      <label for="category">Categoría</label>
      <select name="category" id="category">
        <option value="tech">Tecnología</option>
        <option value="fashion">Moda</option>
        <option value="home">Hogar</option>
      </select>

      <button type="submit">Guardar Producto</button>
    </form>
  </div>
</body>
</html>
