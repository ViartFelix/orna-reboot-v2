<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class EquipementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $all_item = include(database_path('all.php'));

        foreach ($all_item as $key => $val_key) {
            if($val_key["type"]!="Curative" || $val_key["type"]!="Other" || $val_key["type"]!="Item" || $val_key["type"]!="Material" || $val_key["type"]!="TBD") {
                DB::table("equipements")->insert([
                    "type"=>$val_key["type"],
                    "name"=>$val_key["name"],
                    "description"=>$val_key["description"],
                    "tier"=>$val_key["tier"],
                    "emplacements"=>$val_key["emplacements"],
                    "icon"=>$val_key["icon"],
                    "element"=>$val_key["element"],
                    "two_hand"=>$val_key["two_hand"],
                    "stats"=>$val_key["stats"],
                ]);
            }
        }
    }
}
