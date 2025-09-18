<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Detalle del Producto</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding-top: 70px; /* espacio para la topbar */
      background: #f2f2f2; /* Fondo yeso */
    }

    /* 🔹 Topbar reutilizada */
    .topbar {
      width: 100%;
      background: #28a745; /* Verde */
      color: white;
      padding: 15px 25px;
      font-size: 18px;
      font-weight: bold;
      position: fixed;
      top: 0;
      left: 0;
      z-index: 1000;
      box-shadow: 0 3px 8px rgba(0,0,0,0.2);
      text-align: left;
    }

    /* 🔹 Layout principal */
    .container {
      max-width: 1200px;
      margin: 40px auto;
      background: #fff;
      border-radius: 12px;
      padding: 30px;
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 40px;
      box-shadow: 0 10px 25px rgba(40, 167, 69, 0.25); /* Sombra verde */
    }

    /* 🔹 Imagen */
    .product-image {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .product-image img {
      width: 100%;
      max-width: 500px;
      border-radius: 12px;
      object-fit: cover;
      box-shadow: 0 6px 20px rgba(40, 167, 69, 0.3); /* Sombra verde */
    }

    /* 🔹 Detalles */
    .product-details {
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .product-details h1 {
      font-size: 32px;
      margin: 0 0 15px;
      color: #333;
    }

    .description {
      font-size: 15px;
      color: #555;
      line-height: 1.6;
      margin-bottom: 20px;
    }

    .price {
      font-size: 24px;
      font-weight: bold;
      color: #28a745; /* Verde */
      margin-bottom: 20px;
    }

    h3 {
      font-size: 18px;
      margin-bottom: 10px;
      color: #333;
    }

    .features {
      list-style: none;
      padding: 0;
      margin: 0 0 20px;
    }

    .features li {
      margin-bottom: 10px;
      padding-left: 20px;
      position: relative;
      font-size: 15px;
      color: #444;
    }

    .features li::before {
      content: "✔";
      color: #28a745; /* Verde */
      position: absolute;
      left: 0;
      font-size: 14px;
    }

    /* 🔹 Botones */
    .actions {
      margin-top: 20px;
    }

    .btn {
      display: inline-block;
      padding: 12px 20px;
      margin-right: 12px;
      background: #28a745; /* Verde */
      color: #fff;
      border-radius: 6px;
      text-decoration: none;
      font-size: 16px;
      font-weight: bold;
      transition: background 0.3s ease, transform 0.2s ease;
    }

    .btn:hover {
      background: #218838; /* Verde más oscuro */
      transform: scale(1.05);
    }

    .btn-secondary {
      background: #6c757d;
    }

    .btn-secondary:hover {
      background: #565e64;
    }
  </style>
</head>
<body>
  <!-- 🔹 Topbar -->
  <div class="topbar">
    Gestión de Productos
  </div>

  <!-- 🔹 Contenido del producto -->
  <div class="container">
    <div class="product-image">
      <img src="https://picsum.photos/600/600?random=31" alt="Producto destacado">
    </div>
    <div class="product-details">
      <h1>Producto Premium</h1>
      <p class="description">
        Este producto combina la mejor tecnología con un diseño elegante y moderno. 
        Es ideal para quienes buscan estilo y funcionalidad, ofreciendo un rendimiento superior 
        y materiales de la más alta calidad.
      </p>
      <div class="price">$250.00</div>

      <h3>Características principales:</h3>
      <ul class="features">
        <li>Marca: PremiumX</li>
        <li>Material: Aluminio anodizado y vidrio templado</li>
        <li>Dimensiones: 30cm x 20cm x 12cm</li>
        <li>Peso: 1.5 kg</li>
        <li>Garantía: 3 años</li>
      </ul>

      <div class="actions">
        <a href="#" class="btn">Agregar al carrito</a>
        <a href="#" class="btn btn-secondary">Volver al listado</a>
      </div>
    </div>
  </div>
</body>
</html>
