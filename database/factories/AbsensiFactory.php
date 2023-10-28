<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class AbsensiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tanggal' => $this->faker->dateTimeBetween(Carbon::yesterday()->subMonth(1), 'now'),
            'jam_masuk' => $this->randomStartEndTime(6, 8),
            'jam_keluar' => $this->randomStartEndTime(16, 18),
            'keterangan' => $this->faker->text(20),
        ];
    }

    private function randomStartEndTime($fromHour, $toHour)
    {
        $startTime = Carbon::today()->setHour($fromHour)->setMinute(0)->setSecond(0);
        $endTime = Carbon::today()->setHour($toHour)->setMinute(0)->setSecond(0);
        return $this->faker->dateTimeBetween($startTime, $endTime)->format('H:i:s');
    }
}
