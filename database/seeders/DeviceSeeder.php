<?php

namespace Database\Seeders;

use App\Models\Device;
use Illuminate\Database\Seeder;

class DeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $device = new Device();

        $device->mac = "AA:AA:AA:AA:AA:01";
        $device->employee_id = "1";

        $device->save();


        $device = new Device();

        $device->mac = "AA:AA:AA:AA:AA:02";
        $device->employee_id = "2";

        $device->save();


        $device = new Device();

        $device->mac = "AA:AA:AA:AA:AA:03";
        $device->employee_id = "3";

        $device->save();


        $device = new Device();

        $device->mac = "AA:AA:AA:AA:AA:04";
        $device->employee_id = "4";

        $device->save();


        $device = new Device();

        $device->mac = "AA:AA:AA:AA:AA:05";
        $device->employee_id = "5";

        $device->save();


        $device = new Device();

        $device->mac = "AA:AA:AA:AA:AA:06";
        $device->employee_id = "6";

        $device->save();


        $device = new Device();

        $device->mac = "AA:AA:AA:AA:AA:07";
        $device->employee_id = "7";

        $device->save();


        $device = new Device();

        $device->mac = "AA:AA:AA:AA:AA:08";
        $device->employee_id = "8";

        $device->save();


        $device = new Device();

        $device->mac = "AA:AA:AA:AA:AA:09";
        $device->employee_id = "9";

        $device->save();


        $device = new Device();

        $device->mac = "AA:AA:AA:AA:AA:10";
        $device->employee_id = "10";

        $device->save();
    }
}
