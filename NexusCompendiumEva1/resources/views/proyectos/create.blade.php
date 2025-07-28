@extends('layouts.app')

@section('title', 'Crear Proyecto - Nexus Compendium')

@section('content')
<div class="container">
    <div class="page-header">
        <h1>Crear Nuevo Proyecto</h1>
        <p class="subtitle">Completa la información para registrar un nuevo proyecto de VcM</p>
    </div>

    <div class="form-container">
        <form class="project-form" action="/proyectos" method="POST">
            <div class="form-section">
                <h2>Información Básica</h2>
                
                <div class="form-group">
                    <label for="titulo" class="form-label">Título del Proyecto *</label>
                    <input type="text" id="titulo" name="titulo" class="form-control" required 
                           placeholder="Ingresa el título del proyecto">
                </div>

                <div class="form-group">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <textarea id="descripcion" name="descripcion" class="form-control" rows="4"
                              placeholder="Describe los objetivos y alcance del proyecto"></textarea>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="fecha_inicio" class="form-label">Fecha de Inicio</label>
                        <input type="date" id="fecha_inicio" name="fecha_inicio" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="fecha_fin" class="form-label">Fecha de Finalización</label>
                        <input type="date" id="fecha_fin" name="fecha_fin" class="form-control">
                    </div>
                </div>
            </div>

            <div class="form-section">
                <h2>Información de Contacto</h2>
                
                <div class="form-group">
                    <label for="responsable" class="form-label">Responsable del Proyecto</label>
                    <input type="text" id="responsable" name="responsable" class="form-control"
                           placeholder="Nombre del responsable">
                </div>

                <div class="form-group">
                    <label for="organizacion" class="form-label">Organización Externa</label>
                    <input type="text" id="organizacion" name="organizacion" class="form-control"
                           placeholder="Nombre de la organización colaboradora">
                </div>
            </div>

            <div class="form-actions">
                <a href="/proyectos" class="btn btn-secondary">Cancelar</a>
                <button type="submit" class="btn btn-primary">Crear Proyecto</button>
            </div>
        </form>
    </div>
</div>

<style>
    .page-header {
        text-align: center;
        margin-bottom: 3rem;
    }

    .page-header h1 {
        font-size: 2.5rem;
        color: var(--dark-blue);
        margin-bottom: 0.5rem;
    }

    .subtitle {
        font-size: 1.1rem;
        color: var(--gray-dark);
        opacity: 0.8;
    }

    .form-container {
        max-width: 800px;
        margin: 0 auto;
    }

    .project-form {
        background: var(--white);
        border-radius: 12px;
        padding: 2rem;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    .form-section {
        margin-bottom: 2rem;
        padding-bottom: 2rem;
        border-bottom: 2px solid var(--light-green);
    }

    .form-section:last-of-type {
        border-bottom: none;
    }

    .form-section h2 {
        color: var(--dark-blue);
        margin-bottom: 1.5rem;
        font-size: 1.5rem;
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    .form-label {
        display: block;
        margin-bottom: 0.5rem;
        font-weight: 600;
        color: var(--dark-blue);
    }

    .form-control {
        width: 100%;
        padding: 12px;
        border: 2px solid var(--light-green);
        border-radius: 6px;
        font-size: 1rem;
        transition: border-color 0.3s ease;
    }

    .form-control:focus {
        outline: none;
        border-color: var(--primary-blue);
        box-shadow: 0 0 0 3px rgba(98, 144, 195, 0.1);
    }

    .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1rem;
    }

    .form-actions {
        display: flex;
        justify-content: space-between;
        margin-top: 2rem;
        padding-top: 2rem;
        border-top: 2px solid var(--light-green);
    }

    @media (max-width: 768px) {
        .form-row {
            grid-template-columns: 1fr;
        }

        .form-actions {
            flex-direction: column;
            gap: 1rem;
        }
    }
</style>
@endsection
