@extends('layouts.app')

@section('title', 'Crear Usuario - Nexus Compendium')

@section('content')
<div class="container">
    <div class="page-header">
        <div class="header-content">
            <h1>👤 Crear Nuevo Usuario</h1>
            <p class="subtitle">Agregar un nuevo usuario al sistema Nexus Compendium</p>
        </div>
        <a href="/usuarios" class="btn-secondary">
            <span>←</span> Volver a Usuarios
        </a>
    </div>

    <div class="form-container">
        <form class="user-form" action="/usuarios" method="POST">
            <div class="form-sections">
                <!-- Información Personal -->
                <div class="form-section">
                    <h3>📋 Información Personal</h3>
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="nombre">Nombre Completo *</label>
                            <input type="text" id="nombre" name="nombre" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Correo Electrónico *</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="rut">RUT</label>
                            <input type="text" id="rut" name="rut" placeholder="12.345.678-9">
                        </div>
                        
                        <div class="form-group">
                            <label for="telefono">Teléfono</label>
                            <input type="tel" id="telefono" name="telefono" placeholder="+56 9 1234 5678">
                        </div>
                    </div>
                </div>

                <!-- Información Académica/Laboral -->
                <div class="form-section">
                    <h3>🎓 Información Académica/Laboral</h3>
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="rol">Rol *</label>
                            <select id="rol" name="rol" required>
                                <option value="">Seleccionar rol...</option>
                                <option value="estudiante">Estudiante</option>
                                <option value="docente">Docente</option>
                                <option value="coordinador">Coordinador VcM</option>
                                <option value="organizacion">Organización Externa</option>
                                <option value="admin">Administrador</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="instituto">Instituto/Organización</label>
                            <select id="instituto" name="instituto">
                                <option value="">Seleccionar...</option>
                                <option value="ipss">Instituto Profesional San Sebastián</option>
                                <option value="municipalidad">Municipalidad Local</option>
                                <option value="fundacion">Fundación Social</option>
                                <option value="empresa">Empresa Privada</option>
                                <option value="otro">Otro</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="carrera">Carrera/Departamento</label>
                            <input type="text" id="carrera" name="carrera" placeholder="Ej: Trabajo Social, Enfermería...">
                        </div>
                        
                        <div class="form-group">
                            <label for="ano_ingreso">Año de Ingreso</label>
                            <input type="number" id="ano_ingreso" name="ano_ingreso" min="2020" max="2025" placeholder="2024">
                        </div>
                    </div>
                </div>

                <!-- Configuración de Acceso -->
                <div class="form-section">
                    <h3>🔐 Configuración de Acceso</h3>
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="password">Contraseña *</label>
                            <input type="password" id="password" name="password" required>
                            <small>Mínimo 8 caracteres</small>
                        </div>
                        
                        <div class="form-group">
                            <label for="password_confirmation">Confirmar Contraseña *</label>
                            <input type="password" id="password_confirmation" name="password_confirmation" required>
                        </div>
                        
                        <div class="form-group checkbox-group">
                            <label class="checkbox-label">
                                <input type="checkbox" name="activo" checked>
                                <span class="checkmark"></span>
                                Usuario activo
                            </label>
                        </div>
                        
                        <div class="form-group checkbox-group">
                            <label class="checkbox-label">
                                <input type="checkbox" name="notificaciones" checked>
                                <span class="checkmark"></span>
                                Recibir notificaciones por email
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Intereses y Especialidades -->
                <div class="form-section">
                    <h3>💡 Intereses y Especialidades</h3>
                    <div class="form-group full-width">
                        <label for="especialidades">Áreas de Interés</label>
                        <div class="checkbox-grid">
                            <label class="checkbox-label">
                                <input type="checkbox" name="especialidades[]" value="salud">
                                <span class="checkmark"></span>
                                Salud Comunitaria
                            </label>
                            <label class="checkbox-label">
                                <input type="checkbox" name="especialidades[]" value="educacion">
                                <span class="checkmark"></span>
                                Educación
                            </label>
                            <label class="checkbox-label">
                                <input type="checkbox" name="especialidades[]" value="medio_ambiente">
                                <span class="checkmark"></span>
                                Medio Ambiente
                            </label>
                            <label class="checkbox-label">
                                <input type="checkbox" name="especialidades[]" value="desarrollo_social">
                                <span class="checkmark"></span>
                                Desarrollo Social
                            </label>
                            <label class="checkbox-label">
                                <input type="checkbox" name="especialidades[]" value="tecnologia">
                                <span class="checkmark"></span>
                                Tecnología Social
                            </label>
                            <label class="checkbox-label">
                                <input type="checkbox" name="especialidades[]" value="emprendimiento">
                                <span class="checkmark"></span>
                                Emprendimiento
                            </label>
                        </div>
                    </div>
                    
                    <div class="form-group full-width">
                        <label for="biografia">Biografía/Descripción</label>
                        <textarea id="biografia" name="biografia" rows="4" placeholder="Cuéntanos sobre tu experiencia, motivaciones y objetivos en vinculación con el medio..."></textarea>
                    </div>
                </div>
            </div>

            <div class="form-actions">
                <button type="button" class="btn-secondary" onclick="history.back()">
                    Cancelar
                </button>
                <button type="submit" class="btn-primary">
                    <span>✓</span> Crear Usuario
                </button>
            </div>
        </form>
    </div>
</div>

<style>
    .page-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 2rem;
        padding-bottom: 1rem;
        border-bottom: 2px solid var(--gray-light);
    }

    .header-content h1 {
        color: var(--dark-blue);
        margin-bottom: 0.5rem;
        font-size: 2.2rem;
    }

    .subtitle {
        color: var(--gray-dark);
        font-size: 1.1rem;
    }

    .form-container {
        background: var(--white);
        border-radius: 12px;
        padding: 2rem;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        border-left: 4px solid var(--primary-blue);
    }

    .form-sections {
        display: flex;
        flex-direction: column;
        gap: 2rem;
    }

    .form-section {
        background: var(--gray-light);
        border-radius: 8px;
        padding: 1.5rem;
    }

    .form-section h3 {
        color: var(--dark-blue);
        margin-bottom: 1.5rem;
        font-size: 1.3rem;
        border-bottom: 2px solid var(--primary-blue);
        padding-bottom: 0.5rem;
    }

    .form-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 1.5rem;
    }

    .form-group {
        display: flex;
        flex-direction: column;
    }

    .form-group.full-width {
        grid-column: 1 / -1;
    }

    .form-group label {
        font-weight: 600;
        color: var(--dark-blue);
        margin-bottom: 0.5rem;
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
        padding: 0.75rem;
        border: 2px solid var(--gray-light);
        border-radius: 6px;
        font-size: 1rem;
        transition: border-color 0.3s ease;
        background: var(--white);
    }

    .form-group input:focus,
    .form-group select:focus,
    .form-group textarea:focus {
        outline: none;
        border-color: var(--primary-blue);
        box-shadow: 0 0 0 3px rgba(52, 144, 220, 0.1);
    }

    .form-group small {
        color: var(--gray-dark);
        font-size: 0.85rem;
        margin-top: 0.25rem;
    }

    .checkbox-group {
        flex-direction: row;
        align-items: center;
        gap: 0.5rem;
    }

    .checkbox-label {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        cursor: pointer;
        font-weight: 500 !important;
        margin-bottom: 0 !important;
    }

    .checkbox-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 1rem;
        margin-top: 0.5rem;
    }

    .checkbox-label input[type="checkbox"] {
        width: 18px;
        height: 18px;
        margin: 0;
    }

    .checkmark {
        font-weight: 500;
    }

    .form-actions {
        display: flex;
        gap: 1rem;
        justify-content: flex-end;
        margin-top: 2rem;
        padding-top: 2rem;
        border-top: 2px solid var(--gray-light);
    }

    .btn-primary,
    .btn-secondary {
        padding: 0.75rem 2rem;
        border-radius: 6px;
        font-weight: 600;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        cursor: pointer;
        border: none;
        font-size: 1rem;
        transition: all 0.3s ease;
    }

    .btn-primary {
        background: var(--primary-blue);
        color: var(--white);
    }

    .btn-primary:hover {
        background: var(--dark-blue);
        transform: translateY(-2px);
    }

    .btn-secondary {
        background: var(--gray-light);
        color: var(--dark-blue);
        border: 2px solid var(--gray-dark);
    }

    .btn-secondary:hover {
        background: var(--gray-dark);
        color: var(--white);
    }

    @media (max-width: 768px) {
        .page-header {
            flex-direction: column;
            gap: 1rem;
            align-items: flex-start;
        }

        .form-grid {
            grid-template-columns: 1fr;
        }

        .form-actions {
            flex-direction: column;
        }

        .checkbox-grid {
            grid-template-columns: 1fr;
        }
    }

    /* Mejorar la apariencia de los checkboxes */
    input[type="checkbox"] {
        accent-color: var(--primary-blue);
    }

    /* Animaciones suaves */
    .form-section {
        transition: transform 0.3s ease;
    }

    .form-section:hover {
        transform: translateY(-2px);
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Validación de contraseña
    const password = document.getElementById('password');
    const confirmPassword = document.getElementById('password_confirmation');
    
    function validatePassword() {
        if (password.value !== confirmPassword.value) {
            confirmPassword.setCustomValidity('Las contraseñas no coinciden');
        } else {
            confirmPassword.setCustomValidity('');
        }
    }
    
    password.addEventListener('input', validatePassword);
    confirmPassword.addEventListener('input', validatePassword);
    
    // Formato RUT
    const rutInput = document.getElementById('rut');
    rutInput.addEventListener('input', function(e) {
        let value = e.target.value.replace(/[^\d]/g, '');
        if (value.length > 1) {
            value = value.slice(0, -1).replace(/\B(?=(\d{3})+(?!\d))/g, '.') + '-' + value.slice(-1);
        }
        e.target.value = value;
    });
    
    // Mostrar/ocultar campos según el rol
    const rolSelect = document.getElementById('rol');
    const carreraGroup = document.querySelector('[for="carrera"]').parentElement;
    const anoIngresoGroup = document.querySelector('[for="ano_ingreso"]').parentElement;
    
    rolSelect.addEventListener('change', function() {
        if (this.value === 'estudiante' || this.value === 'docente') {
            carreraGroup.style.display = 'flex';
            anoIngresoGroup.style.display = 'flex';
        } else {
            carreraGroup.style.display = 'none';
            anoIngresoGroup.style.display = 'none';
        }
    });
});
</script>
@endsection
