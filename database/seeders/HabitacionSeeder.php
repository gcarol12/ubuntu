<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HabitacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         /** Casa Principal, 110 */    
    
        Habitacions::create([ "name" => '101', "casa_id" =>1 ]);
        Habitacions::create([ "name" => '102', "casa_id" =>1 ]);
        Habitacions::create([ "name" => '103', "casa_id" =>1 ]);
        Habitacions::create([ "name" => '201', "casa_id" =>1 ]);
        Habitacions::create([ "name" => '202', "casa_id" =>1 ]);
        Habitacions::create([ "name" => '203', "casa_id" =>1 ]);
        Habitacions::create([ "name" => '301', "casa_id" =>1 ]);
        Habitacions::create([ "name" => '302', "casa_id" =>1 ]);
        Habitacions::create([ "name" => '401', "casa_id" =>1 ]);
        Habitacions::create([ "name" => '402', "casa_id" =>1 ]);
        Habitacions::create([ "name" => '501', "casa_id" =>1 ]);
        Habitacions::create([ "name" => 'apartamento', "casa_id" =>1 ]);

         /** Casa Mary, 302 */

        Habitacions::create([ "name" => '101', "casa_id" =>2 ]);
        Habitacions::create([ "name" => '201', "casa_id" =>2 ]);
        Habitacions::create([ "name" => '202', "casa_id" =>2 ]);
        Habitacions::create([ "name" => '203', "casa_id" =>2 ]);
        Habitacions::create([ "name" => '301', "casa_id" =>2 ]);
        Habitacions::create([ "name" => '302', "casa_id" =>2 ]);
        Habitacions::create([ "name" => '303', "casa_id" =>2 ]);
        Habitacions::create([ "name" => '401', "casa_id" =>2 ]);
        Habitacions::create([ "name" => '402', "casa_id" =>2 ]);                
    } 

}