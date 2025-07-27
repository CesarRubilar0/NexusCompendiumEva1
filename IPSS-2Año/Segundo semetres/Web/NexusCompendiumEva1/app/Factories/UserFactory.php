<?php

namespace App\Factories;

use App\Models\User;

/**
 * Factory para crear usuarios del Instituto Profesional de Sistemas de Salud
 * Compatible con el sistema IPSS y correos institucionales @ipss.cl
 * 
 * @extends Factory<\App\Models\User>
 */
class UserFactory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Role ID personalizable para el factory
     *
     * @var int
     */
    protected $roleId = 5; // Estudiante por defecto

    /**
     * Estado de verificación de email
     *
     * @var bool
     */
    protected $emailVerified = true;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(), // Genera correos @ipss.cl
            'email_verified_at' => $this->emailVerified ? now() : null,
            'password' => \Hash::make('password'), // Contraseña por defecto
            'role_id' => $this->roleId,
            'institute_id' => 1, // Instituto IPSS por defecto
            'remember_token' => \Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified(): static
    {
        $this->emailVerified = false;
        return $this;
    }

    /**
     * Create a single user instance
     *
     * @return User
     */
    public function make(): User
    {
        $attributes = $this->definition();
        return new User($attributes);
    }

    /**
     * Create multiple user instances
     *
     * @param int $count
     * @return array<User>
     */
    public function count(int $count): array
    {
        $users = [];
        for ($i = 0; $i < $count; $i++) {
            $users[] = $this->make();
        }
        return $users;
    }

    /**
     * Set a specific role for the user
     *
     * @param int $roleId
     * @return static
     */
    public function withRole(int $roleId): static
    {
        $this->roleId = $roleId;
        return $this;
    }

    /**
     * Create a student user (role_id = 5)
     *
     * @return static
     */
    public function student(): static
    {
        return $this->withRole(5);
    }

    /**
     * Create a teacher user (role_id = 3)
     *
     * @return static
     */
    public function teacher(): static
    {
        return $this->withRole(3);
    }

    /**
     * Create an admin user (role_id = 1)
     *
     * @return static
     */
    public function admin(): static
    {
        return $this->withRole(1);
    }

    /**
     * Create a coordinator user (role_id = 2)
     *
     * @return static
     */
    public function coordinator(): static
    {
        return $this->withRole(2);
    }

    /**
     * Create a tutor user (role_id = 4)
     *
     * @return static
     */
    public function tutor(): static
    {
        return $this->withRole(4);
    }

    /**
     * Create a user with verified email
     *
     * @return static
     */
    public function verified(): static
    {
        $this->emailVerified = true;
        return $this;
    }
}
