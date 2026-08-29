<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduCursos - Plataforma de Inscripción</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Estilos Internos del Sitio -->
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fa;
        }

        /* Encabezado Principal (Hero Section) */
        .hero-section {
            background: #0d6efd;
            background: linear-gradient(135deg, #0d6efd 0%, #0a58ca 100%);
            color: white;
            padding: 70px 0 90px 0;
        }

        .hero-title {
            font-size: 2.75rem;
            font-weight: 800;
            line-height: 1.2;
        }

        .hero-subtitle {
            font-size: 1.1rem;
            color: rgba(255, 255, 255, 0.88);
            max-width: 500px;
        }

        /* Tarjeta del Formulario de Inscripción */
        .card-registration {
            background: #ffffff;
            border: none;
            border-radius: 16px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
            padding: 32px;
            color: #333333;
        }

        .card-registration label {
            font-size: 0.85rem;
            font-weight: 700;
            color: #495057;
            margin-bottom: 6px;
        }

        .card-registration .form-control,
        .card-registration .form-select {
            padding: 10px 14px;
            border-radius: 8px;
            border: 1px solid #dee2e6;
            font-size: 0.95rem;
        }

        .card-registration .form-control:focus,
        .card-registration .form-select:focus {
            border-color: #0d6efd;
            box-shadow: 0 0 0 3px rgba(13, 110, 253, 0.2);
        }

        /* Botones personalizados */
        .btn-light-custom {
            background-color: #ffffff;
            color: #0d6efd;
            font-weight: 700;
            border-radius: 8px;
            padding: 10px 24px;
            text-decoration: none;
        }

        .btn-light-custom:hover {
            background-color: #f1f5f9;
            color: #0a58ca;
        }

        .btn-outline-custom {
            border: 1.5px solid rgba(255, 255, 255, 0.7);
            color: #ffffff;
            font-weight: 600;
            border-radius: 8px;
            padding: 10px 24px;
            text-decoration: none;
        }

        .btn-outline-custom:hover {
            background-color: rgba(255, 255, 255, 0.1);
            color: #ffffff;
        }
    </style>
</head>
<body>