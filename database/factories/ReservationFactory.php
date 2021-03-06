<?php

namespace Database\Factories;

use App\Models\Reservation;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Country;
use App\Models\Operator;
use App\Models\Regime;
use App\Models\Room;


class ReservationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reservation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {


        /* ============ SISTEMA DE FORÁNEA DE COUNTRY ============ */


        $allCountry = Country::all(); // Recogemos todos los registros

        $array_country = array(); // Creaunmos un Array vacío donde irán todos los Id

        foreach ($allCountry as $country) {
            array_push($array_country, $country["id"]); // Introducimos todos los ID en el array anterior, el cual estaba vacío
        }

        $id_country = $array_country[array_rand($array_country, 1)]; // Obtenemos un ID aleatorio, entre todos los registros



        /* ============ SISTEMA DE FORÁNEA DE OPERADORES ============ */

        $allOperator = Operator::all();

        $array_operador = array();

        foreach ($allOperator as $operador) {
            array_push($array_operador, $operador["id"]);
        }

        $id_operator = $array_operador[array_rand($array_operador, 1)];



        /* ============ SISTEMA DE FORÁNEA DE REGIMENES ============ */

        $allRegime = Regime::all();

        $array_regimen = array();

        foreach ($allRegime as $regimen) {
            array_push($array_regimen, $regimen["id"]);
        }

        $id_regime =  $array_regimen[array_rand($array_regimen, 1)];


        /* ============ SISTEMA DE FORÁNEA DE ROOMS ============ */

        $allRoom = Room::all();

        $array_room = array();

        foreach ($allRoom as $room) {
            array_push($array_room, $room["number"]);
        }

        $numero_apartamento = $array_room[array_rand($array_room, 1)];


        /* ============ SISTEMA DE PRECIOS ============ */

        $precio_total = $this->faker->randomFloat(3, 0, 1000); // Obtenemos un Precio para la Reserva

        $numero_azar = rand(0, 1);

        if ($numero_azar == 0) {
            $prepago = $precio_total; // Reserva Pagada
        } else {
            $prepago = 0; // Reserva no pagada
        }


        /* ============ SISTEMA DE FECHAS ============ */

        $timestamp = mt_rand(1, time()); // Obtenemos una Fecha al Azar

        $bookd_day = date("Y/m/d", $timestamp);


        $fecha_entrada = date('Y/m/d', strtotime($bookd_day . "+ 7 days")); // Fecha de Entrada siempre será 7 días más que BookDay
        $numero_azar_dias = rand(1, 30); // Numero al Azar
        $fecha_salida = date('Y/m/d', strtotime($fecha_entrada . "+ " . $numero_azar_dias . "days")); // Fecha_Salida = Fecha_Entrada + x Días

        return [
            'reservastionNumber' => $this->faker->randomDigit,
            'bookDay' => $bookd_day,
            'checkIn' => $fecha_entrada,
            'checkOut' => $fecha_salida,
            'adults' => $this->faker->randomElement([1, 2, 3]),
            'children' => $this->faker->randomElement([0, 1, 2]),
            'pets' => $this->faker->randomElement([0, 1, 2]),
            'name' => $this->faker->name,
            'surname' => $this->faker->streetName,
            'phone' =>  $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'pricePaid' => $prepago,
            'totalPrice' => $precio_total,
            'comment' => $this->faker->text(),
            'confirmed' => $this->faker->randomElement([0, 1]),
            'id_Country' => $id_country,
            'id_Operator' => $id_operator,
            'id_Regime' => $id_regime,
            'N_Apartament' => $numero_apartamento

        ];
    }
}
