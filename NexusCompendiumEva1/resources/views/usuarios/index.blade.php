@extends('layouts.app')

@section('title', 'Usuarios - Nexus Compendium')

@section('content')
<div class="container">
    <div class="page-header">
        <h1>👥 Gestión de Usuarios</h1>
        <p class="subtitle">Administra los usuarios del sistema Nexus Compendium</p>
    </div>

    <div class="actions-bar">
        <a href="/usuarios/crear" class="btn btn-primary">+ Crear Nuevo Usuario</a>
    </div>

    <div class="users-grid">
        <div class="user-card">
            <h3>Dr. María González</h3>
            <p class="user-role">Coordinadora de Vinculación</p>
            <div class="user-meta">
                <span class="badge">Activo</span>
                <span class="badge">Admin</span>
            </div>
        </div>

        <div class="user-card">
            <h3>Ing. Carlos Rodríguez</h3>
            <p class="user-role">Director de Proyectos</p>
            <div class="user-meta">
                <span class="badge">Activo</span>
                <span class="badge">Gestor</span>
            </div>
        </div>

        <div class="user-card">
            <h3>Psic. Ana Morales</h3>
            <p class="user-role">Coordinadora Social</p>
            <div class="user-meta">
                <span class="badge">Activo</span>
                <span class="badge">Colaborador</span>
            </div>
        </div>
    </div>
</div>

<style>
.users-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 1.5rem;
    margin-top: 2rem;
}

.user-card {
    background: white;
    border-radius: 8px;
    padding: 1.5rem;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    border-left: 4px solid var(--bright-green);
}

.user-card h3 {
    margin: 0 0 0.5rem 0;
    color: var(--dark-blue);
}

.user-role {
    color: #666;
    margin-bottom: 1rem;
}

.user-meta {
    display: flex;
    gap: 0.5rem;
    flex-wrap: wrap;
}

.badge {
    background: var(--bright-green);
    color: var(--dark-blue);
    padding: 0.25rem 0.5rem;
    border-radius: 4px;
    font-size: 0.8rem;
    font-weight: bold;
}
</style>
@endsection
