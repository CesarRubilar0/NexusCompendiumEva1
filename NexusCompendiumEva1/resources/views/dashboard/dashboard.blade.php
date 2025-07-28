@extends('layouts.app')

@section('title', 'Dashboard - Nexus Compendium')

@section('content')
<div class="container">
    <div class="dashboard-header">
        <h1>Dashboard</h1>
        <p class="subtitle">Panel de control de Nexus Compendium</p>
    </div>

    <div class="dashboard-stats">
        <div class="stat-card">
            <div class="stat-icon projects">📋</div>
            <div class="stat-content">
                <h3>12</h3>
                <p>Proyectos Activos</p>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon students">👥</div>
            <div class="stat-content">
                <h3>48</h3>
                <p>Estudiantes Participando</p>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon organizations">🏢</div>
            <div class="stat-content">
                <h3>8</h3>
                <p>Organizaciones Aliadas</p>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon completed">✅</div>
            <div class="stat-content">
                <h3>25</h3>
                <p>Proyectos Completados</p>
            </div>
        </div>
    </div>

    <div class="dashboard-content">
        <div class="main-panel">
            <div class="panel-card">
                <h2>Proyectos Recientes</h2>
                <div class="recent-projects">
                    <div class="project-item">
                        <div class="project-info">
                            <h4>Salud Comunitaria Rural</h4>
                            <p>Última actualización: hace 2 horas</p>
                        </div>
                        <span class="status status-active">Activo</span>
                    </div>
                    <div class="project-item">
                        <div class="project-info">
                            <h4>Capacitación Digital</h4>
                            <p>Última actualización: hace 1 día</p>
                        </div>
                        <span class="status status-planning">Planificación</span>
                    </div>
                    <div class="project-item">
                        <div class="project-info">
                            <h4>Apoyo Nutricional Escolar</h4>
                            <p>Última actualización: hace 3 días</p>
                        </div>
                        <span class="status status-completed">Completado</span>
                    </div>
                </div>
                <a href="/proyectos" class="view-all-link">Ver todos los proyectos →</a>
            </div>

            <div class="panel-card">
                <h2>Actividad Reciente</h2>
                <div class="activity-feed">
                    <div class="activity-item">
                        <div class="activity-icon">📝</div>
                        <div class="activity-content">
                            <p><strong>María González</strong> actualizó el proyecto "Salud Comunitaria"</p>
                            <span class="activity-time">hace 2 horas</span>
                        </div>
                    </div>
                    <div class="activity-item">
                        <div class="activity-icon">👤</div>
                        <div class="activity-content">
                            <p><strong>Carlos López</strong> se unió al proyecto "Capacitación Digital"</p>
                            <span class="activity-time">hace 5 horas</span>
                        </div>
                    </div>
                    <div class="activity-item">
                        <div class="activity-icon">✅</div>
                        <div class="activity-content">
                            <p>Proyecto <strong>"Apoyo Nutricional"</strong> marcado como completado</p>
                            <span class="activity-time">hace 1 día</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="sidebar-panel">
            <div class="panel-card">
                <h3>Acciones Rápidas</h3>
                <div class="quick-actions">
                    <a href="/proyectos/crear" class="action-btn">
                        <span class="action-icon">➕</span>
                        Crear Proyecto
                    </a>
                    <a href="/proyectos" class="action-btn">
                        <span class="action-icon">📋</span>
                        Ver Proyectos
                    </a>
                    <a href="#" class="action-btn">
                        <span class="action-icon">📊</span>
                        Reportes
                    </a>
                    <a href="#" class="action-btn">
                        <span class="action-icon">⚙️</span>
                        Configuración
                    </a>
                </div>
            </div>

            <div class="panel-card">
                <h3>Próximas Fechas</h3>
                <div class="upcoming-dates">
                    <div class="date-item">
                        <div class="date-day">15</div>
                        <div class="date-info">
                            <p><strong>Reunión VcM</strong></p>
                            <span>Abril 2025</span>
                        </div>
                    </div>
                    <div class="date-item">
                        <div class="date-day">22</div>
                        <div class="date-info">
                            <p><strong>Entrega Informe</strong></p>
                            <span>Abril 2025</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .dashboard-header {
        text-align: center;
        margin-bottom: 3rem;
    }

    .dashboard-header h1 {
        font-size: 2.5rem;
        color: var(--dark-blue);
        margin-bottom: 0.5rem;
    }

    .subtitle {
        font-size: 1.1rem;
        color: var(--gray-dark);
        opacity: 0.8;
    }

    .dashboard-stats {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 1.5rem;
        margin-bottom: 3rem;
    }

    .stat-card {
        background: var(--white);
        border-radius: 12px;
        padding: 2rem;
        display: flex;
        align-items: center;
        gap: 1.5rem;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        border-left: 4px solid var(--primary-blue);
        transition: transform 0.3s ease;
    }

    .stat-card:hover {
        transform: translateY(-5px);
    }

    .stat-icon {
        font-size: 2.5rem;
        padding: 1rem;
        border-radius: 12px;
        background: var(--light-green);
    }

    .stat-content h3 {
        font-size: 2rem;
        color: var(--dark-blue);
        margin-bottom: 0.25rem;
    }

    .stat-content p {
        color: var(--gray-dark);
        font-weight: 600;
    }

    .dashboard-content {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 2rem;
    }

    .panel-card {
        background: var(--white);
        border-radius: 12px;
        padding: 2rem;
        margin-bottom: 2rem;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        border-left: 4px solid var(--primary-blue);
    }

    .panel-card h2, .panel-card h3 {
        color: var(--dark-blue);
        margin-bottom: 1.5rem;
    }

    .recent-projects, .activity-feed {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .project-item, .activity-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1rem;
        background: var(--gray-light);
        border-radius: 8px;
    }

    .project-info h4 {
        color: var(--dark-blue);
        margin-bottom: 0.25rem;
    }

    .project-info p {
        color: var(--gray-dark);
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

    .view-all-link {
        display: inline-block;
        margin-top: 1rem;
        color: var(--primary-blue);
        text-decoration: none;
        font-weight: 600;
    }

    .activity-item {
        align-items: flex-start;
    }

    .activity-icon {
        font-size: 1.5rem;
        margin-right: 1rem;
    }

    .activity-content {
        flex: 1;
    }

    .activity-time {
        color: var(--gray-dark);
        font-size: 0.8rem;
    }

    .quick-actions {
        display: flex;
        flex-direction: column;
        gap: 0.75rem;
    }

    .action-btn {
        display: flex;
        align-items: center;
        gap: 1rem;
        padding: 1rem;
        background: var(--gray-light);
        border-radius: 8px;
        text-decoration: none;
        color: var(--dark-blue);
        font-weight: 600;
        transition: background-color 0.3s ease;
    }

    .action-btn:hover {
        background: var(--light-green);
    }

    .action-icon {
        font-size: 1.2rem;
    }

    .upcoming-dates {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .date-item {
        display: flex;
        align-items: center;
        gap: 1rem;
        padding: 1rem;
        background: var(--gray-light);
        border-radius: 8px;
    }

    .date-day {
        font-size: 1.5rem;
        font-weight: bold;
        color: var(--primary-blue);
        background: var(--white);
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .date-info p {
        color: var(--dark-blue);
        margin-bottom: 0.25rem;
    }

    .date-info span {
        color: var(--gray-dark);
        font-size: 0.9rem;
    }

    @media (max-width: 768px) {
        .dashboard-content {
            grid-template-columns: 1fr;
        }

        .dashboard-stats {
            grid-template-columns: 1fr;
        }
    }
</style>
@endsection
