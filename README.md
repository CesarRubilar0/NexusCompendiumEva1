# Nexus Compendium

Proyecto académico desarrollado para el **Instituto Profesional San Sebastián** como parte de la evaluación del curso de Desarrollo Web.

## 👥 Equipo de Desarrollo

- **César Andrés Rubilar Sanhueza**
- **Frank Oliver Moisés Bustamante Reyes**
- **Sofía Magdalena Gómez Orellana**
- **Pablo Nicolás Sandoval Soto**
- **Eduardo Alejandro Johnson Guerrero**

## 🎯 Descripción del Proyecto

Nexus Compendium es una plataforma web que simula la arquitectura Laravel para la gestión de proyectos académicos y usuarios institucionales. El proyecto implementa un sistema completo de vistas Blade con diseño responsive y una identidad visual corporativa específica.

## ✨ Características Implementadas

### 🎨 Identidad Visual
- **Logo corporativo**: Imagen PNG personalizada (`/public/images/logo.png`)
- **Paleta de colores institucional**: 
  - Azul Principal: `#6290C3`
  - Verde Claro: `#C2E7DA` 
  - Azul Marino: `#1A1B41`
  - Verde Brillante: `#BAFF29`

### 📱 Vistas y Funcionalidades
- **Vista principal** (`/` y `/bienvenidos`) - Página de bienvenida con hero section
- **Dashboard** (`/dashboard`) - Panel de control administrativo
- **Gestión de proyectos** (`/proyectos`) - Listado e índice de proyectos
- **Gestión de usuarios** (`/usuarios`) - Administración de usuarios
- **Gestión de institutos** (`/institutos`) - Instituciones aliadas
- **Reportes** (`/reportes`) - Sistema de reportes y estadísticas
- **Autenticación** (`/login`) - Sistema de acceso

### 🏗️ Arquitectura Técnica
- **Simulación Laravel**: Sistema de routing y vistas Blade sin framework completo
- **Templating**: Sistema de vistas Blade con layout maestro
- **Routing**: Archivo `public/index.php` con array de rutas y helper functions
- **Base de datos**: Migraciones y seeders (estructura preparada)
- **Modelos**: User, Role, Institute, Project con relaciones definidas

## 📁 Estructura del Proyecto

```
NexusCompendiumEva1/
├── app/
│   ├── Factories/UserFactory.php      # Generador de usuarios institucionales
│   ├── Models/                        # Modelos: User, Role, Institute, Project
│   └── Support/Facades/Route.php      # Sistema de routing personalizado
├── database/
│   ├── migrations/                    # Estructura de BD (4 tablas principales)
│   └── seeders/                       # Datos iniciales institucionales
├── public/
│   ├── index.php                      # Punto de entrada principal con routing
│   ├── images/logo.png                # Logo corporativo del proyecto
│   └── css/styles.css                 # Estilos CSS principales
├── resources/views/                   # Sistema de vistas Blade
│   ├── layouts/app.blade.php          # Layout maestro con navegación
│   ├── welcome.blade.php              # Página principal de bienvenida
│   ├── auth/login.blade.php           # Vista de autenticación
│   ├── dashboard/dashboard.blade.php  # Panel de control
│   ├── proyectos/                     # Gestión de proyectos
│   │   ├── index.blade.php            # Listado de proyectos
│   │   ├── create.blade.php           # Formulario de creación
│   │   └── show.blade.php             # Detalle de proyecto
│   ├── usuarios/index.blade.php       # Gestión de usuarios
│   ├── institutos/index.blade.php     # Gestión de institutos
│   └── reportes/index.blade.php       # Sistema de reportes
├── routes/web.php                     # Helper functions y lógica de vistas
├── index.php                          # Redireccionador a public/
├── BRANDING.md                        # Justificación de identidad visual
└── README.md                          # Esta documentación
```

## 🚀 Instalación y Uso

### Requisitos
- PHP 8.0 o superior
- Servidor web (Apache/Nginx) - Recomendado: Laragon para Windows
- Navegador web moderno

### Pasos de instalación
1. Clonar el repositorio:
   ```bash
   git clone https://github.com/CesarRubilar0/NexusCompendiumEva1.git
   cd NexusCompendiumEva1
   ```

2. **Opción A - Con Laragon (Recomendado):**
   - Copiar proyecto a `C:\laragon\www\`
   - Configurar virtual host: `nexuscompendiumeva1.test`
   - Abrir: `http://nexuscompendiumeva1.test`

3. **Opción B - Servidor PHP integrado:**
   ```bash
   php -S localhost:8000 -t public/
   ```
   - Abrir: `http://localhost:8000`

### Navegación por el sitio
- **Página principal**: `/` o `/bienvenidos`
- **Dashboard**: `/dashboard`
- **Proyectos**: `/proyectos`
- **Usuarios**: `/usuarios`
- **Institutos**: `/institutos`
- **Reportes**: `/reportes`
- **Login**: `/login`

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

- ✅ **7+ vistas Blade implementadas** (welcome, dashboard, proyectos, usuarios, institutos, reportes, login)
- ✅ **Layout maestro** con herencia de plantillas (`layouts/app.blade.php`)
- ✅ **Sistema de routing funcional** (public/index.php con array de rutas)
- ✅ **Helper functions** para procesamiento de vistas Blade (routes/web.php)
- ✅ **Identidad visual completa** con logo y paleta de colores institucional
- ✅ **Diseño responsive** con navegación móvil
- ✅ **Estructura Laravel** simulada funcionalmente
- ✅ **Documentación técnica completa** y actualizada

## 🛠️ Detalles Técnicos

### Sistema de Routing
El proyecto utiliza un sistema de routing personalizado en `public/index.php` que:
- Mapea URLs a vistas Blade específicas
- Incluye manejo de errores 404
- Soporta tanto parámetros GET como URL rewriting
- Registra debug logs para depuración

### Procesamiento de Vistas Blade
En `routes/web.php` se implementan funciones helper que:
- Procesan directivas Blade (@extends, @section, @yield)
- Manejan la herencia de plantillas
- Renderizan contenido dinámico

## 📄 Documentación Adicional

- **BRANDING.md**: Justificación completa de la identidad visual y paleta de colores
- **Código fuente**: Comentado y documentado según estándares académicos
- **Migraciones**: Estructura de base de datos institucional (4 tablas principales)
- **Debug logs**: Sistema de logging en `public/debug.log` para seguimiento de rutas

## 📞 Contacto

Para consultas sobre este proyecto académico, contactar a cualquier miembro del equipo de desarrollo a través de los canales institucionales del Instituto Profesional San Sebastián.

---

**© 2025 Nexus Compendium - Proyecto Académico Instituto Profesional San Sebastián**
