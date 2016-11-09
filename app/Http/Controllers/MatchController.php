<?php

namespace App\Http\Controllers;

use App\Car;
use App\Match;
use App\Score;
use Illuminate\Http\Request;
use League\Flysystem\Exception;

class MatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $match = new Match;
        $match->car_id = $request->car_id;
        $match->start_time = date('Y-m-d H:i:s');
        $match->group = $request->group;
        $match->status = 0;
        $result = $match->save();
        return json_encode($result);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response|string
     */
    public function update(Request $request, $id)
    {
        try {
            $match = Match::where('group', $request->group)->where('car_id', $id)->firstOrFail();
            $match->status = $request->flag;
            $match->end_time = date('Y-m-d H:i:s');
            $scores = Score::where('match_id', $match->id)->get();
            $sum = 0;
            foreach ($scores as $score) {
                $sum += $score->score;
            }
            $match->score = $sum;
        } catch (Exception $e) {
            return $e->getMessage();
        }
//        try {
//
//            }else{
//                $match->traffic_accident_num=$request->traffic_accident_num;
//                $match->intervention_num=$request->intervention_num;
//                $match->foul_num=$request->foul_num;
//            }
//            $result=$match->save();
//            return json_encode($result);
//        } catch (Exception $e)
//        {
//            return json_encode($e->getMessage());
//        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public
    function destroy($id)
    {
        //
    }

    /**
     * 获取车辆列表
     * @param $type 0为已经完成了比赛，1为还没有开始比赛
     * @return string 列表json
     */
    public function get_list($type)
    {
        if ($type == 0) {
            $car_list = Match::with('car')->where('end_time', '<>', null)->get();
        } elseif ($type == 1) {
            $car_list = Car::doesntHave('matches')->get();
        }
        return json_encode($car_list);
    }
}
