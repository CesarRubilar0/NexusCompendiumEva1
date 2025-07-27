@extends('layouts.app')

@section('title', 'Login - Nexus Compendium')

@section('content')
<div class="login-container">
    <div class="login-card">
        <div class="login-header">
            <div class="logo">NC</div>
            <h1>Iniciar Sesión</h1>
            <p>Accede a tu cuenta de Nexus Compendium</p>
        </div>

        <form class="login-form" action="/login" method="POST">
            <div class="form-group">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" id="email" name="email" class="form-control" required 
                       placeholder="usuario@ipss.cl">
            </div>

            <div class="form-group">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" id="password" name="password" class="form-control" required 
                       placeholder="••••••••">
            </div>

            <div class="form-options">
                <label class="checkbox-label">
                    <input type="checkbox" name="remember">
                    <span>Recordar sesión</span>
                </label>
                <a href="#" class="forgot-link">¿Olvidaste tu contraseña?</a>
            </div>

            <button type="submit" class="btn btn-primary btn-full">Iniciar Sesión</button>
        </form>

        <div class="login-footer">
            <p>¿No tienes una cuenta? <a href="/registro">Regístrate aquí</a></p>
        </div>
    </div>
</div>

<style>
    .login-container {
        min-height: 100vh;
        background: linear-gradient(135deg, var(--light-green), var(--primary-blue));
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 2rem;
    }

    .login-card {
        background: var(--white);
        border-radius: 16px;
        padding: 3rem;
        box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        width: 100%;
        max-width: 450px;
    }

    .login-header {
        text-align: center;
        margin-bottom: 2rem;
    }

    .login-header .logo {
        width: 60px;
        height: 60px;
        background: var(--bright-green);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        color: var(--dark-blue);
        font-size: 1.5rem;
        margin: 0 auto 1rem;
    }

    .login-header h1 {
        color: var(--dark-blue);
        margin-bottom: 0.5rem;
        font-size: 2rem;
    }

    .login-header p {
        color: var(--gray-dark);
        opacity: 0.8;
    }

    .login-form {
        margin-bottom: 2rem;
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
        padding: 14px;
        border: 2px solid var(--light-green);
        border-radius: 8px;
        font-size: 1rem;
        transition: border-color 0.3s ease;
    }

    .form-control:focus {
        outline: none;
        border-color: var(--primary-blue);
        box-shadow: 0 0 0 3px rgba(98, 144, 195, 0.1);
    }

    .form-options {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 2rem;
        font-size: 0.9rem;
    }

    .checkbox-label {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: var(--gray-dark);
        cursor: pointer;
    }

    .forgot-link {
        color: var(--primary-blue);
        text-decoration: none;
    }

    .forgot-link:hover {
        text-decoration: underline;
    }

    .btn-full {
        width: 100%;
        padding: 14px;
        font-size: 1.1rem;
    }

    .login-footer {
        text-align: center;
        padding-top: 2rem;
        border-top: 1px solid var(--light-green);
    }

    .login-footer a {
        color: var(--primary-blue);
        text-decoration: none;
        font-weight: 600;
    }

    .login-footer a:hover {
        text-decoration: underline;
    }
</style>
@endsection
