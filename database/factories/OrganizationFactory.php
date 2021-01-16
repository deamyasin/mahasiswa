<?php

namespace Database\Factories;

use App\Models\Organization;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrganizationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Organization::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_org' => $this->faker->name,
            'jabatan' => $this->faker->randomElement(['ketua', 'sekretaris', 'bendahara']),
            'periode' => $this->faker->randomElement(['diktator', 'sosialis', 'liberalis']),
            'wali' => $this->faker->randomElement(['pak nur', 'bu rahmi', 'pak alam']),
            'alamat' => $this->faker->address,
            'email' => $this->faker->email,
        ];
    }
}
