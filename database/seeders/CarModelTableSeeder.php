<?php

namespace Database\Seeders;

use App\Models\carModel;
use App\Models\Maker;
use Illuminate\Database\Seeder;

class CarModelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $f = fopen("cars.csv", "r");
        fgetcsv($f, 1000, ',');
        fgetcsv($f, 1000, ',');
        $adatok = array();
        while (($data = fgetcsv($f, 1000, ',')) !== FALSE) {
            if(!in_array($data[2].";".$data[1],$adatok)){
                array_push($adatok, $data[2].";".$data[1]);
            }
        }
        fclose($f);

        $this->command->getOutput()->progressStart(count($adatok));

        foreach($adatok as $adat)
        {
            $makerId = Maker::where('name', explode(';', $adat)[1])->first()->id;
            $model_name=explode(';', $adat)[0];

            $enttity=new carModel();
            $enttity->maker_id =$makerId;
            $enttity->name=$model_name;
            $enttity->save();

            $this->command->getOutput()->progressAdvance();
        }
        $this->command->getOutput()->progressFinish();
    }
}
