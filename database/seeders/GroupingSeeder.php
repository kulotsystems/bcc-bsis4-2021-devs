<?php

namespace Database\Seeders;

use App\Models\Grouping;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Grouping::insert([
            [
                'group_id'   => '1',
                'student_id' => '2',
                'role'       => 'Leader'
            ],
            [
                'group_id'   => '1',
                'student_id' => '1',
                'role'       => 'Developer'
            ],
            [
                'group_id'   => '1',
                'student_id' => '3',
                'role'       => 'Researcher'
            ],
            [
                'group_id'   => '1',
                'student_id' => '4',
                'role'       => 'Researcher'
            ],
            [
                'group_id'   => '2',
                'student_id' => '5',
                'role'       => 'Developer'
            ],
            [
                'group_id'   => '2',
                'student_id' => '6',
                'role'       => 'Leader'
            ],
            [
                'group_id'   => '2',
                'student_id' => '8',
                'role'       => 'Researcher'
            ],
            [
                'group_id'   => '2',
                'student_id' => '7',
                'role'       => 'Researcher'
            ],
            [
                'group_id'   => '3',
                'student_id' => '10',
                'role'       => 'Leader'
            ],
            [
                'group_id'   => '3',
                'student_id' => '9',
                'role'       => 'Developer'
            ],
            [
                'group_id'   => '3',
                'student_id' => '11',
                'role'       => 'Researcher'
            ],
            [
                'group_id'   => '3',
                'student_id' => '12',
                'role'       => 'Researcher'
            ],
            [
                'group_id'   => '4',
                'student_id' => '13',
                'role'       => 'Developer'
            ],
            [
                'group_id'   => '4',
                'student_id' => '15',
                'role'       => 'Leader'
            ],
            [
                'group_id'   => '4',
                'student_id' => '14',
                'role'       => 'Researcher'
            ],
            [
                'group_id'   => '4',
                'student_id' => '16',
                'role'       => 'Researcher'
            ],
            [
                'group_id'   => '5',
                'student_id' => '17',
                'role'       => 'Developer'
            ],
            [
                'group_id'   => '5',
                'student_id' => '20',
                'role'       => 'Leader'
            ],
            [
                'group_id'   => '5',
                'student_id' => '19',
                'role'       => 'Researcher'
            ],
            [
                'group_id'   => '5',
                'student_id' => '18',
                'role'       => 'Developer'
            ],
            [
                'group_id'   => '5',
                'student_id' => '21',
                'role'       => 'Researcher'
            ],
            [
                'group_id'   => '6',
                'student_id' => '22',
                'role'       => 'Developer'
            ],
            [
                'group_id'   => '6',
                'student_id' => '25',
                'role'       => 'Leader'
            ],
            [
                'group_id'   => '6',
                'student_id' => '23',
                'role'       => 'Researcher'
            ],
            [
                'group_id'   => '6',
                'student_id' => '24',
                'role'       => 'Researcher'
            ],
            [
                'group_id'   => '7',
                'student_id' => '26',
                'role'       => 'Leader'
            ],
            [
                'group_id'   => '7',
                'student_id' => '27',
                'role'       => 'Developer'
            ],
            [
                'group_id'   => '7',
                'student_id' => '28',
                'role'       => 'Researcher'
            ],
            [
                'group_id'   => '7',
                'student_id' => '29',
                'role'       => 'Researcher'
            ],
            [
                'group_id'   => '8',
                'student_id' => '30',
                'role'       => 'Leader'
            ],
            [
                'group_id'   => '8',
                'student_id' => '31',
                'role'       => 'Researcher'
            ],
            [
                'group_id'   => '8',
                'student_id' => '32',
                'role'       => 'Developer'
            ],
            [
                'group_id'   => '8',
                'student_id' => '33',
                'role'       => 'Researcher'
            ],
            [
                'group_id'   => '9',
                'student_id' => '34',
                'role'       => 'Developer'
            ],
            [
                'group_id'   => '9',
                'student_id' => '35',
                'role'       => 'Researcher'
            ],
            [
                'group_id'   => '9',
                'student_id' => '36',
                'role'       => 'Researcher'
            ],
            [
                'group_id'   => '9',
                'student_id' => '37',
                'role'       => 'Researcher'
            ],
            [
                'group_id'   => '9',
                'student_id' => '34',
                'role'       => 'Leader'
            ]
        ]);
    }
}
