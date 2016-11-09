<?php

namespace App\Http\Controllers;

use App\Match;
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
        $match->save();
        return json_encode($match->id);
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
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $match = Match::findOrFail($id);
            if($request->flag==0){
                $match->end_time=date('Y-m-d H:i:s');
            }else{
                $match->traffic_accident_num=$request->traffic_accident_num;
                $match->intervention_num=$request->intervention_num;
                $match->foul_num=$request->foul_num;
            }
            $result=$match->save();
            return json_encode($result);
        } catch (Exception $e)
        {
            return json_encode($e->getMessage());
        }
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
}
