<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'firstName' => $this->faker->name(),
            'lastName' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone'=>$this->faker->phoneNumber,
            'created_by'=>1,
            'company_id'=>Company::inRandomOrder()->first()->id,
        ];
    }
}
