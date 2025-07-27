<?php

namespace App\Models;

class User
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
        'institute_id',
        'email_verified_at',
        'remember_token',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public $id;
    public $name;
    public $email;
    public $password;
    public $role_id;
    public $institute_id;
    public $email_verified_at;
    public $remember_token;
    public $created_at;
    public $updated_at;

    public function __construct($attributes = [])
    {
        foreach ($attributes as $key => $value) {
            if (in_array($key, $this->fillable) || property_exists($this, $key)) {
                $this->{$key} = $value;
            }
        }
        
        if (!isset($this->created_at)) {
            $this->created_at = date('Y-m-d H:i:s');
        }
        if (!isset($this->updated_at)) {
            $this->updated_at = date('Y-m-d H:i:s');
        }
    }

    /**
     * Get the role that owns the user.
     */
    public function role()
    {
        // Simulación de relación con Role
        return (object)[
            'id' => $this->role_id,
            'name' => $this->getRoleName()
        ];
    }

    /**
     * Get the institute that owns the user.
     */
    public function institute()
    {
        // Simulación de relación con Institute
        return (object)[
            'id' => $this->institute_id,
            'name' => 'Instituto de Educación Superior'
        ];
    }

    /**
     * Get the projects for the user.
     */
    public function projects()
    {
        // Simulación de relación con Projects
        return [];
    }

    private function getRoleName()
    {
        $roles = [
            1 => 'Administrador',
            2 => 'Coordinador',
            3 => 'Docente',
            4 => 'Tutor',
            5 => 'Estudiante'
        ];
        
        return $roles[$this->role_id] ?? 'Desconocido';
    }
}
