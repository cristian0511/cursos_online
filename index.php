<?php 
// Integración modular de bloques reutilizables (Cabecera y Menú de navegación)
include_once 'includes/header.php'; 
include_once 'includes/navbar.php'; 
?>

<!-- Encabezado Principal (Hero Banner con Imagen de Fondo y Mejoras UX/UI) -->
<header class="hero-banner d-flex align-items-center">
    <div class="container">
        <div class="row align-items-center g-5">
            
            <!-- Columna Izquierda: Información de Valor y Propuesta Visual -->
            <div class="col-lg-7 text-start">
                <h1 class="hero-title mb-3">
                    Impulsa tu carrera con<br>cursos especializados
                </h1>
                <p class="hero-subtitle mb-4">
                    Aprende con proyectos reales y obtén certificación oficial en áreas de alta demanda laboral.
                </p>
                <div class="d-flex gap-3">
                    <a href="#cursos" class="btn btn-light-custom shadow-sm">Ver Cursos</a>
                    <a href="#inscripcion" class="btn btn-outline-custom">Inscribirme</a>
                </div>
            </div>

            <!-- Columna Derecha: Tarjeta de Formulario de Inscripción Rápida -->
            <div class="col-lg-5" id="inscripcion">
                <div class="card-registration">
                    <h3 class="fw-bold fs-4 text-dark mb-1">Inscripción Rápida</h3>
                    <p class="text-muted small mb-4">Reserva tu cupo en menos de un minuto.</p>
                    
                    <form action="#" method="POST">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre Completo</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ej. Juan Pérez" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="juan@ejemplo.com" required>
                        </div>
                        
                        <div class="mb-4">
                            <label for="curso" class="form-label">Seleccionar Curso</label>
                            <select class="form-select" id="curso" name="curso_id" required>
                                <option value="" selected disabled>Elige un curso...</option>
                                <option value="1">Desarrollo Web con PHP y MySQL</option>
                                <option value="2">Arquitectura de Software y APIs</option>
                                <option value="3">Bases de Datos Relacionales</option>
                            </select>
                        </div>
                        
                        <button type="submit" class="btn btn-primary w-100 py-2.5 fw-bold rounded-3 shadow-sm">
                            Registrarme Ahora
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</header>

<!-- Cuerpo Principal: Sección Estándar de Cursos -->
<main class="container my-5 py-4" id="cursos">
    <h2 class="text-center fw-bold mb-4">Cursos Disponibles</h2>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm rounded-4">
                <div class="card-body p-4">
                    <span class="badge bg-primary-subtle text-primary mb-2">Programación</span>
                    <h5 class="card-title fw-bold">Desarrollo Web con PHP</h5>
                    <p class="card-text text-muted">Aprende a construir aplicaciones dinámicas utilizando sintaxis PHP pura sin frameworks.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm rounded-4">
                <div class="card-body p-4">
                    <span class="badge bg-success-subtle text-success mb-2">Backend</span>
                    <h5 class="card-title fw-bold">Bases de Datos MySQL</h5>
                    <p class="card-text text-muted">Diseño relacional, consultas SQL optimizadas y conexión PDO de alta seguridad.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm rounded-4">
                <div class="card-body p-4">
                    <span class="badge bg-warning-subtle text-warning mb-2">Git & GitHub</span>
                    <h5 class="card-title fw-bold">Trabajo Colaborativo</h5>
                    <p class="card-text text-muted">Manejo de ramas (branch), fusiones (merge) y resolución ágil de conflictos.</p>
                </div>
            </div>
        </div>
    </div>
</main>

<?php 
// Integración modular de bloques reutilizables (Pie de página)
include_once 'includes/footer.php'; 
?>