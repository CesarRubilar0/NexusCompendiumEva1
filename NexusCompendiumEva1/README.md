# Nexus Compendium

Proyecto Laravel académico desarrollado para el **Instituto Profesional San Sebastián** como parte de la evaluación del curso de Desarrollo Web.

## 👥 Equipo de Desarrollo

- **César Andrés Rubilar Sanhueza**
- **Frank Oliver Moisés Bustamante Reyes**
- **Sofía Magdalena Gómez Orellana**
- **Pablo Nicolás Sandoval Soto**
- **Eduardo Alejandro Johnson Guerrero**

## 🎯 Descripción del Proyecto

Nexus Compendium es una plataforma web desarrollada en Laravel que permite la gestión de proyectos académicos y usuarios institucionales. El proyecto implementa un sistema completo de vistas Blade con diseño responsive y una identidad visual corporativa específica.

## ✨ Características Implementadas

### 🎨 Identidad Visual
- **Logo corporativo**: Imagen PNG personalizada
- **Paleta de colores institucional**: 
  - Violeta Principal: `#6290C3`
  - Verde Menta: `#C2E7DA` 
  - Azul Marino: `#1A1B41`
  - Verde Lima: `#BAFF29`

### 📱 Vistas y Funcionalidades
- **Vista principal** (`/`) - Página de bienvenida con branding
- **Gestión de proyectos** (`/proyectos`) - Listado e índice
- **Creación de proyectos** (`/proyectos/crear`) - Formulario de registro
- **Detalle de proyecto** (`/proyectos/{id}`) - Vista individual
- **Autenticación** (`/login`) - Sistema de acceso
- **Dashboard** (`/dashboard`) - Panel de control

### 🏗️ Arquitectura Técnica
- **Framework**: Laravel (simulado para entorno académico)
- **Templating**: Blade con layout maestro
- **Routing**: Sistema de rutas con funciones de clausura
- **Base de datos**: Migraciones y seeders institucionales
- **Modelos**: User, Role, Institute, Project con relaciones

## 📁 Estructura del Proyecto

```
NexusCompendium/
├── app/
│   ├── Factories/UserFactory.php      # Generador de usuarios institucionales
│   ├── Models/                        # Modelos de datos
│   └── Support/Facades/Route.php      # Sistema de routing
├── database/
│   ├── migrations/                    # Estructura de BD
│   └── seeders/                       # Datos iniciales institucionales
├── public/images/logo.png             # Logo corporativo
├── resources/views/                   # 6 vistas Blade requeridas
├── routes/web.php                     # Rutas con clausuras
├── BRANDING.md                        # Justificación de identidad visual
└── README.md                          # Este archivo
```

## 🚀 Instalación y Uso

### Requisitos
- PHP 8.0 o superior
- Servidor web (Apache/Nginx) o PHP built-in server

### Pasos de instalación
1. Clonar el repositorio:
   ```bash
   git clone [URL_DEL_REPOSITORIO]
   cd NexusCompendium
   ```

2. Ejecutar el proyecto:
   ```bash
   php -S localhost:8000 -t public/
   ```

3. Abrir en navegador:
   ```
   http://localhost:8000
   ```

### Navegación por el sitio
- **Página principal**: `/`
- **Proyectos**: `/proyectos`
- **Crear proyecto**: `/proyectos/crear`
- **Login**: `/login`
- **Dashboard**: `/dashboard`

## 📊 Datos de Prueba

El sistema incluye un generador de usuarios institucionales con correos del instituto:

- **Administradores**: Gestión completa del sistema
- **Coordinadores**: Supervisión de proyectos
- **Docentes**: Creación y seguimiento de proyectos
- **Tutores**: Apoyo en proyectos específicos
- **Estudiantes**: Participación en proyectos asignados

## 🎓 Contexto Académico

Este proyecto fue desarrollado como parte de la evaluación del curso de **Desarrollo Web** en el **Instituto Profesional San Sebastián**.

### 👨‍🏫 Información del Curso
- **Profesor**: Vicente Alfonso Zapata Concha
- **Asignatura**: Desarrollo Web
- **Institución**: Instituto Profesional San Sebastián
- **Año**: 2025

### ✅ Cumplimiento de Rúbrica
El proyecto cumple con todos los requisitos especificados en la rúbrica académica:

- ✅ Implementación de 6 vistas Blade
- ✅ Sistema de rutas con funciones de clausura  
- ✅ Layout maestro con herencia de plantillas
- ✅ Identidad visual completa con justificación
- ✅ Estructura Laravel funcional
- ✅ Documentación técnica completa

## 📄 Documentación Adicional

- **BRANDING.md**: Justificación completa de la identidad visual
- **Código fuente**: Comentado y documentado según estándares académicos
- **Migraciones**: Estructura de base de datos institucional

## 📞 Contacto

Para consultas sobre este proyecto académico, contactar a cualquier miembro del equipo de desarrollo a través de los canales institucionales del Instituto Profesional San Sebastián.

---

**© 2025 Nexus Compendium - Proyecto Académico Instituto Profesional San Sebastián**
