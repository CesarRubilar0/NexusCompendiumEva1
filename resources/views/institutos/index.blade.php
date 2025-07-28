@extends('layouts.app')

@section('title', 'Institutos - Nexus Compendium')

@section('content')
<div class="container">
    <div class="page-header">
        <h1>🏢 Gestión de Institutos</h1>
        <p class="subtitle">Administra las instituciones aliadas y colaboradoras</p>
    </div>

    <div class="actions-bar">
        <a href="/institutos/crear" class="btn btn-primary">+ Agregar Instituto</a>
    </div>

    <div class="institutes-grid">
        <div class="institute-card">
            <h3>Hospital Regional de Santiago</h3>
            <p class="institute-type">Institución de Salud</p>
            <p class="institute-description">Centro médico principal para proyectos de salud comunitaria y programas de prevención.</p>
            <div class="institute-meta">
                <span class="badge active">Activo</span>
                <span class="badge">5 Proyectos</span>
            </div>
        </div>

        <div class="institute-card">
            <h3>Municipalidad de Providencia</h3>
            <p class="institute-type">Institución Gubernamental</p>
            <p class="institute-description">Alianza estratégica para desarrollo de programas sociales y culturales en la comuna.</p>
            <div class="institute-meta">
                <span class="badge active">Activo</span>
                <span class="badge">3 Proyectos</span>
            </div>
        </div>

        <div class="institute-card">
            <h3>Fundación Educación para Todos</h3>
            <p class="institute-type">Organización Sin Fines de Lucro</p>
            <p class="institute-description">Colaboración en programas educativos y alfabetización digital para comunidades vulnerables.</p>
            <div class="institute-meta">
                <span class="badge active">Activo</span>
                <span class="badge">2 Proyectos</span>
            </div>
        </div>
    </div>
</div>

<style>
.institutes-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    gap: 1.5rem;
    margin-top: 2rem;
}

.institute-card {
    background: white;
    border-radius: 8px;
    padding: 1.5rem;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    border-left: 4px solid var(--bright-green);
}

.institute-card h3 {
    margin: 0 0 0.5rem 0;
    color: var(--dark-blue);
}

.institute-type {
    color: var(--bright-green);
    font-weight: bold;
    margin-bottom: 0.5rem;
}

.institute-description {
    color: #666;
    margin-bottom: 1rem;
    line-height: 1.5;
}

.institute-meta {
    display: flex;
    gap: 0.5rem;
    flex-wrap: wrap;
}

.badge {
    background: var(--gray-light);
    color: var(--dark-blue);
    padding: 0.25rem 0.5rem;
    border-radius: 4px;
    font-size: 0.8rem;
    font-weight: bold;
}

.badge.active {
    background: var(--bright-green);
}
</style>
@endsection
