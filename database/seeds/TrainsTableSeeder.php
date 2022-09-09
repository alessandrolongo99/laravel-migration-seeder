<?php

use App\Train;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = [
            [
                'agency' => 'trenitalia',
                'departure_station' => 'bologna',
                'arrival_station' => 'padova',
                'departure_time' => '14:00:00',
                'arrival_time' => '15:00:00',
                'train_code' => '4583',
                'number_of_carriages' => '6',
                'in_time' => '1',
                'deleted' => '0',
            ],
            [
                'agency' => 'trenitalia',
                'departure_station' => 'ferrara',
                'arrival_station' => 'venezia',
                'departure_time' => '06:00:00',
                'arrival_time' => '07:30:00',
                'train_code' => '8230',
                'number_of_carriages' => '6',
                'in_time' => '1',
                'deleted' => '0',
            ],
            [
                'agency' => 'tper',
                'departure_station' => 'bondeno',
                'arrival_station' => 'ferrara',
                'departure_time' => '13:00:00',
                'arrival_time' => '13:20:00',
                'train_code' => '6937',
                'number_of_carriages' => '3',
                'in_time' => '0',
                'deleted' => '0',
            ],
        ];

        foreach($trains as $train){
            $newTrain = new Train();
            $newTrain->agency = $train['agency'];
            $newTrain->departure_station = $train['departure_station'];
            $newTrain->arrival_station = $train['arrival_station'];
            $newTrain->departure_time = $train['departure_time'];
            $newTrain->arrival_time = $train['arrival_time'];
            $newTrain->train_code = $train['train_code'];
            $newTrain->number_of_carriages = $train['number_of_carriages'];
            $newTrain->in_time = $train['in_time'];
            $newTrain->deleted = $train['deleted'];
            $newTrain->save();
        }
    }
}
