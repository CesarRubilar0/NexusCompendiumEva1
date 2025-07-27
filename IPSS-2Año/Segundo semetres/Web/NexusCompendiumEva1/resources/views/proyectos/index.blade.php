@extends('layouts.app')

@section('title', 'Proyectos - Nexus Compendium')

@section('content')
<div class="container">
    <div class="page-header">
        <h1>Gestión de Proyectos</h1>
        <p class="subtitle">Administra todos los proyectos de Vinculación con el Medio</p>
    </div>

    <div class="actions-bar">
        <a href="/proyectos/crear" class="btn btn-primary">+ Crear Nuevo Proyecto</a>
    </div>

    <div class="projects-grid">
        <div class="project-card">
            <h3>Proyecto de Salud Comunitaria</h3>
            <p class="project-description">Implementación de programa de salud preventiva en comunidades rurales</p>
            <div class="project-meta">
                <span class="status status-active">Activo</span>
                <span class="date">Inicio: 15/03/2025</span>
            </div>
            <div class="project-actions">
                <a href="/proyectos/1" class="btn btn-secondary">Ver Detalles</a>
            </div>
        </div>

        <div class="project-card">
            <h3>Capacitación Digital</h3>
            <p class="project-description">Programa de alfabetización digital para adultos mayores</p>
            <div class="project-meta">
                <span class="status status-planning">En Planificación</span>
                <span class="date">Inicio: 01/04/2025</span>
            </div>
            <div class="project-actions">
                <a href="/proyectos/2" class="btn btn-secondary">Ver Detalles</a>
            </div>
        </div>

        <div class="project-card">
            <h3>Apoyo Nutricional Escolar</h3>
            <p class="project-description">Evaluación nutricional y educación alimentaria en escuelas vulnerables</p>
            <div class="project-meta">
                <span class="status status-completed">Completado</span>
                <span class="date">Finalizado: 20/12/2024</span>
            </div>
            <div class="project-actions">
                <a href="/proyectos/3" class="btn btn-secondary">Ver Detalles</a>
            </div>
        </div>
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

    .actions-bar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 2rem;
        padding: 1rem;
        background: var(--white);
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    .projects-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 2rem;
    }

    .project-card {
        background: var(--white);
        border-radius: 12px;
        padding: 2rem;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        border-left: 4px solid var(--primary-blue);
        transition: transform 0.3s ease;
    }

    .project-card:hover {
        transform: translateY(-5px);
    }

    .project-card h3 {
        color: var(--dark-blue);
        margin-bottom: 1rem;
        font-size: 1.3rem;
    }

    .project-description {
        color: var(--gray-dark);
        margin-bottom: 1.5rem;
        line-height: 1.6;
    }

    .project-meta {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1rem;
        font-size: 0.9rem;
    }

    .status {
        padding: 0.25rem 0.75rem;
        border-radius: 20px;
        font-weight: 600;
        text-transform: uppercase;
        font-size: 0.8rem;
    }

    .status-active {
        background-color: var(--bright-green);
        color: var(--dark-blue);
    }

    .status-planning {
        background-color: var(--primary-blue);
        color: var(--white);
    }

    .status-completed {
        background-color: var(--light-green);
        color: var(--dark-blue);
    }

    .date {
        color: var(--gray-dark);
    }

    .project-actions {
        text-align: right;
    }
</style>
@endsection
