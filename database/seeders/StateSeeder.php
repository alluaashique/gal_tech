<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('states')->insert([
            ['name' => 'ANDHRA PRADESH','country_id' => 105],
            ['name' => 'ASSAM', 'country_id' => 105],
            ['name' => 'ARUNACHAL PRADESH', 'country_id' => 105],
            ['name' => 'BIHAR', 'country_id' => 105],
            ['name' => 'GUJRAT', 'country_id' => 105],
            ['name' => 'HARYANA', 'country_id' => 105],
            ['name' => 'HIMACHAL PRADESH', 'country_id' => 105],
            ['name' => 'JAMMU & KASHMIR', 'country_id' => 105],
            ['name' => 'KARNATAKA', 'country_id' => 105],
            ['name' => 'KERALA', 'country_id' => 105],
            ['name' => 'MADHYA PRADESH', 'country_id' => 105],
            ['name' => 'MAHARASHTRA', 'country_id' => 105],
            ['name' => 'MANIPUR', 'country_id' => 105],
            ['name' => 'MEGHALAYA', 'country_id' => 105],
            ['name' => 'MIZORAM', 'country_id' => 105],
            ['name' => 'NAGALAND', 'country_id' => 105],
            ['name' => 'ORISSA', 'country_id' => 105],
            ['name' => 'PUNJAB', 'country_id' => 105],
            ['name' => 'RAJASTHAN', 'country_id' => 105],
            ['name' => 'SIKKIM', 'country_id' => 105],
            ['name' => 'TAMIL NADU', 'country_id' => 105],
            ['name' => 'TRIPURA', 'country_id' => 105],
            ['name' => 'UTTAR PRADESH', 'country_id' => 105],
            ['name' => 'WEST BENGAL', 'country_id' => 105],
            ['name' => 'DELHI', 'country_id' => 105],
            ['name' => 'GOA', 'country_id' => 105],
            ['name' => 'PONDICHERY', 'country_id' => 105],
            ['name' => 'LAKSHDWEEP', 'country_id' => 105],
            ['name' => 'DAMAN & DIU', 'country_id' => 105],
            ['name' => 'DADRA & NAGAR', 'country_id' => 105],
            ['name' => 'CHANDIGARH', 'country_id' => 105],
            ['name' => 'ANDAMAN & NICOBAR', 'country_id' => 105],
            ['name' => 'UTTARANCHAL', 'country_id' => 105],
            ['name' => 'JHARKHAND', 'country_id' => 105],
            ['name' => 'CHATTISGARH', 'country_id' => 105]
        ]);
    }
}
