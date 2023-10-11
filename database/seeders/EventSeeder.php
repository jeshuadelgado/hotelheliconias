<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $events = [
            [
                'event' => 'Reserva #1',
                'start_date' => '2023-10-12 08:00',
                'end_date' => '20223-10-12 11:00',
            ],
            [
                'event' => 'Reserva #2',
                'start_date' => '2023-10-12 08:00',
                'end_date' => '20223-10-13 11:00',
            ],
            [
                'event' => 'Reserva #3',
                'start_date' => '2023-10-12 08:00',
                'end_date' => '20223-10-14 11:00',
            ],
            [
                'event' => 'Reserva #4',
                'start_date' => '2023-10-12 08:00',
                'end_date' => '20223-10-15 11:00',
            ],
        ];
    foreach ($events as $event) {
        Event::create($event);
    }
    }
}
