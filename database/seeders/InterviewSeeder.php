<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InterviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('interview')->insert([
            'interviewer' => 'Riddle',
            'interviewee' => 'Larry',
            'skill' => 'PHP',
            'date' => '2021/01/01'
        ]);

        DB::table('interview')->insert([
            'interviewer' => 'Hugh',
            'interviewee' => 'Kuro',
            'skill' => 'ReactJs',
            'date' => '2021/01/02'
        ]);

        DB::table('interview')->insert([
            'interviewer' => 'Hugh',
            'interviewee' => 'Kusa',
            'skill' => 'PHP',
            'date' => '2021/01/03'
        ]);

        DB::table('interview')->insert([
            'interviewer' => 'Riddle',
            'interviewee' => 'Fuku',
            'skill' => 'PHP',
            'date' => '2021/01/01'

        ]);

        DB::table('interview')->insert([
            'interviewer' => 'Hugh',
            'interviewee' => 'Kevin',
            'skill' => 'PHP',
            'date' => '2021/01/03'

        ]);

        DB::table('interview')->insert([
            'interviewer' => 'Will',
            'interviewee' => 'Neko',
            'skill' => 'Ruby',
            'date' => '2021/01/01'

        ]);
    }
}
