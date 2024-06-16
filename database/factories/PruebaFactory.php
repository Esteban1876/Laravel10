<?php

namespace Database\Factories;

use App\Models\Prueba;
use Illuminate\Database\Eloquent\Factories\Factory;


class PruebaFactory extends Factory
{

   protected $model = Prueba::class;

   public function definition(): array
   {
      return [
         'nombre' => $this->faker->sentence(),
         'descripcion'=> $this->faker->paragraph(2),
         'aprobada'=> $this->faker->randomElement([true, false])
      ];
   }
}
