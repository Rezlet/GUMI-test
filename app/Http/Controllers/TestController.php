<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Interview;
use App\Models\UserGame;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function test_1()
    {
        $interviews = Interview::all();
        $arrayDayInterview = [];
        foreach ($interviews as $interview) {
            $interviewArray = $interview->attributesToArray();
            $date = $interview["date"];
            $skill = $interview["skill"];
            unset($interviewArray["date"]);

            if (array_key_exists($date, $arrayDayInterview)) {
                if (array_key_exists($skill, $arrayDayInterview[$date])) {
                    array_push($arrayDayInterview[$date][$skill], $interviewArray);
                } else {
                    $arrayDayInterview[$date][$skill] = [$interviewArray];
                }
            } else {
                $arrayDayInterview[$date][$skill] = [$interviewArray];
            }
        }
        dd($arrayDayInterview);
    }


    public function test_2()
    {
        $array = [1, 2, 5, 15, 9, 10, 20];
        $array1 = [5, 12, 1, 10, 9, 11, 3, 8];
        $result = [];
        $flag = 0;
        foreach ($array as $item) {
            foreach ($array1 as $item1) {
                if ($item == $item1) {
                    $flag++;
                    break;
                }
            }
            if ($flag == 0) {
                array_push($result, $item);
            } else {
                $flag = 0;
            }
        }

        foreach ($array1 as $item) {
            foreach ($array as $item1) {
                if ($item == $item1) {
                    $flag++;
                    break;
                }
            }
            if ($flag == 0) {
                array_push($result, $item);
            } else {
                $flag = 0;
            }
        }

        dd($result);
    }
    public function test_3()
    {
        $getHighestScore = UserGame::select('game_id', DB::raw('MAX(score) as highestScore'))->groupBy("game_id")->get();
        $array = [];
        foreach ($getHighestScore as $ScoreIndex) {
            $getList = UserGame::where("game_id", $ScoreIndex->game_id)->where("score", $ScoreIndex->highestScore)->first();

            array_push($array, $getList);
        }

        return view("test_3", [
            "topGamePlayers" => $array
        ]);
    }
}
