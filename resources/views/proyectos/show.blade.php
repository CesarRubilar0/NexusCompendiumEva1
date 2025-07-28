@extends('layouts.app')

@section('title', 'Detalle del Proyecto - Nexus Compendium')

@section('content')
<div class="container">
    <div class="project-header">
        <div class="breadcrumb">
            <a href="/proyectos">Proyectos</a> / <span>Proyecto #{{ $id }}</span>
        </div>
        <h1>Proyecto de Salud Comunitaria</h1>
        <div class="project-status">
            <span class="status status-active">Activo</span>
        </div>
    </div>

    <div class="project-content">
        <div class="main-info">
            <div class="info-card">
                <h2>Descripción del Proyecto</h2>
                <p>Este proyecto tiene como objetivo implementar un programa integral de salud preventiva en comunidades rurales de la región. El enfoque principal es mejorar el acceso a servicios de salud básicos y promover hábitos saludables entre la población.</p>
                
                <h3>Objetivos Principales</h3>
                <ul>
                    <li>Establecer puntos de atención básica en salud</li>
                    <li>Capacitar a promotores de salud comunitarios</li>
                    <li>Implementar programas de educación nutricional</li>
                    <li>Desarrollar campañas de prevención de enfermedades</li>
                </ul>
            </div>

            <div class="info-card">
                <h2>Progreso del Proyecto</h2>
                <div class="progress-container">
                    <div class="progress-bar">
                        <div class="progress-fill" style="width: 65%"></div>
                    </div>
                    <span class="progress-text">65% Completado</span>
                </div>

                <div class="milestones">
                    <div class="milestone completed">
                        <span class="milestone-icon">✓</span>
                        <span>Diagnóstico comunitario</span>
                    </div>
                    <div class="milestone completed">
                        <span class="milestone-icon">✓</span>
                        <span>Capacitación de promotores</span>
                    </div>
                    <div class="milestone active">
                        <span class="milestone-icon">◐</span>
                        <span>Implementación de servicios</span>
                    </div>
                    <div class="milestone pending">
                        <span class="milestone-icon">○</span>
                        <span>Evaluación de resultados</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="sidebar-info">
            <div class="info-card">
                <h3>Información del Proyecto</h3>
                <div class="project-details">
                    <div class="detail-row">
                        <strong>ID del Proyecto:</strong>
                        <span>{{ $id }}</span>
                    </div>
                    <div class="detail-row">
                        <strong>Fecha de Inicio:</strong>
                        <span>15 de Marzo, 2025</span>
                    </div>
                    <div class="detail-row">
                        <strong>Fecha de Finalización:</strong>
                        <span>15 de Noviembre, 2025</span>
                    </div>
                    <div class="detail-row">
                        <strong>Responsable:</strong>
                        <span>Dr. María González</span>
                    </div>
                    <div class="detail-row">
                        <strong>Organización:</strong>
                        <span>Centro de Salud Rural</span>
                    </div>
                </div>
            </div>

            <div class="info-card">
                <h3>Equipo de Trabajo</h3>
                <div class="team-members">
                    <div class="member">
                        <div class="member-avatar">MG</div>
                        <div class="member-info">
                            <strong>María González</strong>
                            <span>Coordinadora</span>
                        </div>
                    </div>
                    <div class="member">
                        <div class="member-avatar">CL</div>
                        <div class="member-info">
                            <strong>Carlos López</strong>
                            <span>Estudiante VcM</span>
                        </div>
                    </div>
                    <div class="member">
                        <div class="member-avatar">AF</div>
                        <div class="member-info">
                            <strong>Ana Fernández</strong>
                            <span>Estudiante VcM</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="action-buttons">
                <button class="btn btn-primary">Editar Proyecto</button>
                <button class="btn btn-secondary">Generar Reporte</button>
            </div>
        </div>
    </div>
</div>

<style>
    .project-header {
        margin-bottom: 2rem;
        padding-bottom: 1rem;
        border-bottom: 2px solid var(--light-green);
    }

    .breadcrumb {
        margin-bottom: 1rem;
        color: var(--gray-dark);
    }

    .breadcrumb a {
        color: var(--primary-blue);
        text-decoration: none;
    }

    .project-header h1 {
        font-size: 2.5rem;
        color: var(--dark-blue);
        margin-bottom: 0.5rem;
    }

    .project-status {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .status {
        padding: 0.5rem 1rem;
        border-radius: 20px;
        font-weight: 600;
        text-transform: uppercase;
        font-size: 0.8rem;
    }

    .status-active {
        background-color: var(--bright-green);
        color: var(--dark-blue);
    }

    .project-content {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 2rem;
    }

    .info-card {
        background: var(--white);
        border-radius: 12px;
        padding: 2rem;
        margin-bottom: 2rem;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        border-left: 4px solid var(--primary-blue);
    }

    .info-card h2, .info-card h3 {
        color: var(--dark-blue);
        margin-bottom: 1rem;
    }

    .info-card p, .info-card li {
        line-height: 1.6;
        color: var(--gray-dark);
    }

    .info-card ul {
        margin-left: 2rem;
    }

    .progress-container {
        margin: 1rem 0;
    }

    .progress-bar {
        width: 100%;
        height: 12px;
        background-color: var(--light-green);
        border-radius: 6px;
        overflow: hidden;
        margin-bottom: 0.5rem;
    }

    .progress-fill {
        height: 100%;
        background: linear-gradient(90deg, var(--primary-blue), var(--bright-green));
        transition: width 0.3s ease;
    }

    .progress-text {
        font-weight: 600;
        color: var(--dark-blue);
    }

    .milestones {
        margin-top: 1.5rem;
    }

    .milestone {
        display: flex;
        align-items: center;
        gap: 1rem;
        padding: 0.5rem 0;
        color: var(--gray-dark);
    }

    .milestone.completed {
        color: var(--dark-blue);
    }

    .milestone.active {
        color: var(--primary-blue);
        font-weight: 600;
    }

    .milestone-icon {
        width: 24px;
        height: 24px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
    }

    .milestone.completed .milestone-icon {
        background-color: var(--bright-green);
        color: var(--dark-blue);
    }

    .milestone.active .milestone-icon {
        background-color: var(--primary-blue);
        color: var(--white);
    }

    .project-details {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .detail-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-bottom: 0.5rem;
        border-bottom: 1px solid var(--light-green);
    }

    .team-members {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .member {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .member-avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background-color: var(--primary-blue);
        color: var(--white);
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
    }

    .member-info {
        display: flex;
        flex-direction: column;
    }

    .member-info span {
        font-size: 0.9rem;
        color: var(--gray-dark);
    }

    .action-buttons {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    @media (max-width: 768px) {
        .project-content {
            grid-template-columns: 1fr;
        }

        .project-header h1 {
            font-size: 2rem;
        }
    }
</style>
@endsection
