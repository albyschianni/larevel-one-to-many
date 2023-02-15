<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Person;
use App\Models\PersonDetail;

class PersonDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Person :: all() -> each(function($p) {

            $personDetail = PersonDetail :: factory() -> make();
            $personDetail -> person() -> associate($p);

            $personDetail -> save();
        });
    }
}
