<?php

use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert(['name'=>'起点','type'=>0]);
        DB::table('items')->insert(['name'=>'执行U-TURN','type'=>0]);
        DB::table('items')->insert(['name'=>'有信号丁字路口直行','type'=>0]);
        DB::table('items')->insert(['name'=>'两相位信号灯十字路口直行','type'=>0]);
        DB::table('items')->insert(['name'=>'无信号灯丁字路口右转','type'=>0]);
        DB::table('items')->insert(['name'=>'四相位信号灯十字路口右转','type'=>0]);
        DB::table('items')->insert(['name'=>'十字路口掉头行驶','type'=>0]);
        DB::table('items')->insert(['name'=>'模拟行人检测与避让','type'=>0]);
        DB::table('items')->insert(['name'=>'四相位信号灯十字路口右转','type'=>0]);
        DB::table('items')->insert(['name'=>'移动假人检测与避让','type'=>0]);
        DB::table('items')->insert(['name'=>'隧道与悬浮障碍物','type'=>0]);
        DB::table('items')->insert(['name'=>'无信号灯十字路口左转','type'=>0]);
        DB::table('items')->insert(['name'=>'借道行驶','type'=>0]);
        DB::table('items')->insert(['name'=>'无信号灯十字路口左转','type'=>0]);
        DB::table('items')->insert(['name'=>'避让作业车辆','type'=>0]);
        DB::table('items')->insert(['name'=>'四相位信号灯十字路口右转','type'=>0]);
        DB::table('items')->insert(['name'=>'无信号灯丁字路口右转','type'=>0]);
        DB::table('items')->insert(['name'=>'无信号灯丁字路口直行','type'=>0]);
        DB::table('items')->insert(['name'=>'无信号灯十字路口左转','type'=>0]);
        DB::table('items')->insert(['name'=>'积水路段','type'=>0]);
        DB::table('items')->insert(['name'=>'无信号灯十字路口掉头','type'=>0]);
        DB::table('items')->insert(['name'=>'换道超车','type'=>0]);
        DB::table('items')->insert(['name'=>'封闭十字路口右转','type'=>0]);
        DB::table('items')->insert(['name'=>'终点停车','type'=>0]);

        DB::table('items')->insert(['name'=>'起点','type'=>1]);
        DB::table('items')->insert(['name'=>'通过收费站','type'=>1]);
        DB::table('items')->insert(['name'=>'障碍车检测(去程)','type'=>1]);
        DB::table('items')->insert(['name'=>'执行 U-TURN','type'=>1]);
        DB::table('items')->insert(['name'=>'障碍车检测(回程)','type'=>1]);
        DB::table('items')->insert(['name'=>'任务终点停车','type'=>1]);
    }
}
