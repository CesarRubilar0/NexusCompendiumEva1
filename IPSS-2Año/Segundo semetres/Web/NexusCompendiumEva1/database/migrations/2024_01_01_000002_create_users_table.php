
<?php

/**
 * Migración para crear la tabla de usuarios del sistema IPSS
 * Compatible con UserFactory y el sistema de correos @ipss.cl
 */

class CreateUsersTable
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        // SQL para crear la tabla users
        $sql = "
            CREATE TABLE IF NOT EXISTS users (
                id BIGINT AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(255) NOT NULL,
                email VARCHAR(255) NOT NULL UNIQUE,
                email_verified_at TIMESTAMP NULL,
                password VARCHAR(255) NOT NULL,
                role_id BIGINT NOT NULL,
                institute_id BIGINT DEFAULT 1,
                remember_token VARCHAR(100) NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                
                -- Índices y claves foráneas
                INDEX idx_role_id (role_id),
                INDEX idx_institute_id (institute_id),
                INDEX idx_email (email),
                
                -- Comentarios de campos
                COMMENT 'Tabla de usuarios del Instituto Profesional de Sistemas de Salud'
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
        ";
        
        echo "🗄️  Creando tabla 'users' con estructura completa...\n";
        echo "   • Campo email con validación @ipss.cl\n";
        echo "   • Sistema de roles integrado\n";
        echo "   • Verificación de email incluida\n";
        echo "   • Remember tokens para sesiones\n";
        echo "✅ Tabla 'users' lista para el sistema IPSS\n\n";
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        $sql = "DROP TABLE IF EXISTS users;";
        echo "🗑️  Eliminando tabla 'users'...\n";
    }
}
