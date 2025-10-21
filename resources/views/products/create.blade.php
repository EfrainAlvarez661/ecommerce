@extends('layouts.app')
@section('css')
  <link rel="stylesheet" href="{{ asset('css/style1.css') }}">
@endsection
@section('content')
 <!-- 🔹 Topbar -->


  <!-- 🔹 Contenedor -->
  <div class="container1">
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
@endsection

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Formulario Productos</title>
  
</head>
<body>
 
</body>
</html>
