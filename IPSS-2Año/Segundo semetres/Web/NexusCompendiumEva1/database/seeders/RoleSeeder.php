
<?php

require_once __DIR__ . '/../../bootstrap.php';

use App\Models\Role;

class RoleSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        // Roles del sistema IPSS según UserFactory
        $roles = [
            [
                'id' => 1,
                'name' => 'Administrador',
                'description' => 'Usuario administrador del sistema con acceso completo'
            ],
            [
                'id' => 2,
                'name' => 'Coordinador',
                'description' => 'Coordinador académico del instituto'
            ],
            [
                'id' => 3,
                'name' => 'Docente',
                'description' => 'Profesor o docente del instituto'
            ],
            [
                'id' => 4,
                'name' => 'Tutor',
                'description' => 'Tutor académico de estudiantes'
            ],
            [
                'id' => 5,
                'name' => 'Estudiante',
                'description' => 'Estudiante del instituto'
            ]
        ];

        foreach ($roles as $roleData) {
            $role = new Role($roleData);
            echo "✅ Rol creado: {$role->name} (ID: {$role->id})\n";
        }
        
        echo "🎯 Total de roles creados: " . count($roles) . "\n";
    }
}
