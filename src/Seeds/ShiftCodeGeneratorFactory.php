<?php

namespace ShiftechAfrica\CodeGenerator\Seeds;

use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use ShiftechAfrica\CodeGenerator\Model\ShiftCodeGenerator;
use Webpatser\Uuid\Uuid;

class ShiftCodeGeneratorFactory extends Seeder
{
    /**
     * Run the database Seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run()
    {
        DB::table((new ShiftCodeGenerator())->getTable())->insert([
            'id' => Uuid::generate()->string,
            'name' => config('shift-code-generator.name'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
