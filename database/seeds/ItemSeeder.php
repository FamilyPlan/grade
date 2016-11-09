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
        DB::table('items')->insert(['name'=>'（1）起点得分情况（2分）','type'=>0,'score'=>2]);
        DB::table('items')->insert(['name'=>'（2）执行U-TURN得分情况（4分）','type'=>0,'score'=>4]);
        DB::table('items')->insert(['name'=>'（3）有信号丁字路口直行得分情况（4分）','type'=>0,'score'=>4]);
        DB::table('items')->insert(['name'=>'（4）两相位信号灯十字路口直行（4分）','type'=>0,'score'=>4]);
        DB::table('items')->insert(['name'=>'（5）无信号灯丁字路口右转（4分）','type'=>0,'score'=>4]);
        DB::table('items')->insert(['name'=>'（6）四相位信号灯十字路口右转（5分）','type'=>0,'score'=>5]);
        DB::table('items')->insert(['name'=>'（7）十字路口掉头行驶（4分）','type'=>0,'score'=>4]);
        DB::table('items')->insert(['name'=>'（8）模拟行人检测与避让（5分）','type'=>0,'score'=>5]);
        DB::table('items')->insert(['name'=>'（9）四相位信号灯十字路口右转（5分）','type'=>0,'score'=>5]);
        DB::table('items')->insert(['name'=>'（10）移动假人检测与避让（5分）','type'=>0,'score'=>5]);
        DB::table('items')->insert(['name'=>'（11）隧道与悬浮障碍物（6分）','type'=>0,'score'=>6]);
        DB::table('items')->insert(['name'=>'（12）无信号灯十字路口左转（4分）','type'=>0,'score'=>4]);
        DB::table('items')->insert(['name'=>'（13）借道行驶得分（6分）','type'=>0,'score'=>6]);
        DB::table('items')->insert(['name'=>'（14）无信号灯十字路口左转（4分）','type'=>0,'score'=>4]);
        DB::table('items')->insert(['name'=>'（15）避让作业车辆（5分）','type'=>0,'score'=>5]);
        DB::table('items')->insert(['name'=>'（16）四相位信号灯十字路口右转（4分）','type'=>0,'score'=>4]);
        DB::table('items')->insert(['name'=>'（17）无信号灯丁字路口右转（3分）','type'=>0,'score'=>3]);
        DB::table('items')->insert(['name'=>'（18）无信号灯丁字路口直行（4分）','type'=>0,'score'=>4]);
        DB::table('items')->insert(['name'=>'（19）无信号灯十字路口左转（4分）','type'=>0,'score'=>4]);
        DB::table('items')->insert(['name'=>'（20）积水路段得分（5分）','type'=>0,'score'=>5]);
        DB::table('items')->insert(['name'=>'（21）无信号灯十字路口掉头（4分）','type'=>0,'score'=>4]);
        DB::table('items')->insert(['name'=>'（22）换道超车得分（5分）','type'=>0,'score'=>5]);
        DB::table('items')->insert(['name'=>'（23）封闭十字路口右转（3分）','type'=>0,'score'=>3]);
        DB::table('items')->insert(['name'=>'（24）终点停车得分（2分）','type'=>0,'score'=>2]);

        DB::table('items')->insert(['name'=>'（1）起点得分情况（10分）','type'=>1,'score'=>10]);
        DB::table('items')->insert(['name'=>'（2）通过收费站得分（20分）','type'=>1,'score'=>20]);
        DB::table('items')->insert(['name'=>'（3）障碍车检测(去程)（20分）','type'=>1,'score'=>20]);
        DB::table('items')->insert(['name'=>'（4）执行 U-TURN得分情况（20分）','type'=>1,'score'=>20]);
        DB::table('items')->insert(['name'=>'（5）障碍车检测(回程)得分（20分）','type'=>1,'score'=>20]);
        DB::table('items')->insert(['name'=>'（6）任务终点停车（10分）','type'=>1,'score'=>10]);
    }
}
