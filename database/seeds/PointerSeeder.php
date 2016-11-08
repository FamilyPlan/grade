<?php

use Illuminate\Database\Seeder;

class PointerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('points')->insert(['name'=>'是否正常出发','right_score'=>2,'wrong_score'=>0,'item_id'=>1]);

        DB::table('points')->insert(['name'=>'是否完成','right_score'=>2,'wrong_score'=>0,'item_id'=>2]);
        DB::table('points')->insert(['name'=>'是否违章','right_score'=>0,'wrong_score'=>2,'item_id'=>2]);

        DB::table('points')->insert(['name'=>'是否正常通过','right_score'=>2,'wrong_score'=>0,'item_id'=>3]);
        DB::table('points')->insert(['name'=>'是否违章','right_score'=>0,'wrong_score'=>2,'item_id'=>3]);

        DB::table('points')->insert(['name'=>'是否正常通过','right_score'=>2,'wrong_score'=>0,'item_id'=>4]);
        DB::table('points')->insert(['name'=>'是否违章','right_score'=>0,'wrong_score'=>2,'item_id'=>4]);

        DB::table('points')->insert(['name'=>'是否正常通过','right_score'=>2,'wrong_score'=>0,'item_id'=>5]);
        DB::table('points')->insert(['name'=>'是否违章','right_score'=>0,'wrong_score'=>2,'item_id'=>5]);

        DB::table('points')->insert(['name'=>'是否正常通过','right_score'=>2,'wrong_score'=>0,'item_id'=>6]);
        DB::table('points')->insert(['name'=>'是否违章','right_score'=>0,'wrong_score'=>3,'item_id'=>6]);

        DB::table('points')->insert(['name'=>'是否正常通过','right_score'=>2,'wrong_score'=>0,'item_id'=>7]);
        DB::table('points')->insert(['name'=>'是否有碰撞','right_score'=>0,'wrong_score'=>2,'item_id'=>7]);

        DB::table('points')->insert(['name'=>'是否识别场景减速慢行','right_score'=>2,'wrong_score'=>0,'item_id'=>8]);
        DB::table('points')->insert(['name'=>'是否碰撞假人','right_score'=>0,'wrong_score'=>3,'item_id'=>8]);

        DB::table('points')->insert(['name'=>'是否正常通过','right_score'=>2,'wrong_score'=>0,'item_id'=>9]);
        DB::table('points')->insert(['name'=>'是否违章','right_score'=>0,'wrong_score'=>3,'item_id'=>9]);

        DB::table('points')->insert(['name'=>'是否识别场景减速慢行','right_score'=>2,'wrong_score'=>0,'item_id'=>10]);
        DB::table('points')->insert(['name'=>'是否碰撞假人','right_score'=>0,'wrong_score'=>3,'item_id'=>10]);

        DB::table('points')->insert(['name'=>'车辆是否按照车道标线行驶','right_score'=>3,'wrong_score'=>0,'item_id'=>11]);
        DB::table('points')->insert(['name'=>'是否有碰撞障碍物','right_score'=>0,'wrong_score'=>3,'item_id'=>11]);

        DB::table('points')->insert(['name'=>'是否正常通过','right_score'=>2,'wrong_score'=>0,'item_id'=>12]);
        DB::table('points')->insert(['name'=>'是否违章','right_score'=>0,'wrong_score'=>2,'item_id'=>12]);

        DB::table('points')->insert(['name'=>'停车让行','right_score'=>3,'wrong_score'=>0,'item_id'=>13]);
        DB::table('points')->insert(['name'=>'是否有碰撞施工设施','right_score'=>0,'wrong_score'=>1,'item_id'=>13]);
        DB::table('points')->insert(['name'=>'按道路标线指示借道之后返回','right_score'=>2,'wrong_score'=>0,'item_id'=>13]);

        DB::table('points')->insert(['name'=>'是否正常通过','right_score'=>2,'wrong_score'=>0,'item_id'=>14]);
        DB::table('points')->insert(['name'=>'是否违章','right_score'=>0,'wrong_score'=>2,'item_id'=>14]);

        DB::table('points')->insert(['name'=>'是否碰撞作业车辆','right_score'=>3,'wrong_score'=>0,'item_id'=>15]);
        DB::table('points')->insert(['name'=>'避让过程是否遵守路面标线和交通规则','right_score'=>2,'wrong_score'=>0,'item_id'=>15]);

        DB::table('points')->insert(['name'=>'是否正常通过','right_score'=>2,'wrong_score'=>0,'item_id'=>16]);
        DB::table('points')->insert(['name'=>'是否违章','right_score'=>0,'wrong_score'=>2,'item_id'=>16]);

        DB::table('points')->insert(['name'=>'是否正常通过','right_score'=>1,'wrong_score'=>0,'item_id'=>17]);
        DB::table('points')->insert(['name'=>'是否违章','right_score'=>0,'wrong_score'=>2,'item_id'=>17]);

        DB::table('points')->insert(['name'=>'是否正常通过','right_score'=>2,'wrong_score'=>0,'item_id'=>18]);
        DB::table('points')->insert(['name'=>'是否违章','right_score'=>0,'wrong_score'=>2,'item_id'=>18]);

        DB::table('points')->insert(['name'=>'是否正常通过','right_score'=>2,'wrong_score'=>0,'item_id'=>19]);
        DB::table('points')->insert(['name'=>'是否违章','right_score'=>0,'wrong_score'=>2,'item_id'=>19]);

        DB::table('points')->insert(['name'=>'车辆是否行驶在正确车道上','right_score'=>3,'wrong_score'=>0,'item_id'=>20]);
        DB::table('points')->insert(['name'=>'是否无碰障通过该路段','right_score'=>0,'wrong_score'=>2,'item_id'=>20]);

        DB::table('points')->insert(['name'=>'是否正常通过','right_score'=>2,'wrong_score'=>0,'item_id'=>21]);
        DB::table('points')->insert(['name'=>'是否有碰撞','right_score'=>0,'wrong_score'=>2,'item_id'=>21]);

        DB::table('points')->insert(['name'=>'是否按照道路标线正确执行换道','right_score'=>2,'wrong_score'=>0,'item_id'=>22]);
        DB::table('points')->insert(['name'=>'是否按照道路标线正确执行超车','right_score'=>2,'wrong_score'=>0,'item_id'=>22]);
        DB::table('points')->insert(['name'=>'是否是无人车超无人车情况','right_score'=>1,'wrong_score'=>0,'item_id'=>22]);

        DB::table('points')->insert(['name'=>'是否正常通过','right_score'=>1,'wrong_score'=>0,'item_id'=>23]);
        DB::table('points')->insert(['name'=>'是否违章','right_score'=>0,'wrong_score'=>2,'item_id'=>23]);

        DB::table('points')->insert(['name'=>'是否成功停车','right_score'=>2,'wrong_score'=>0,'item_id'=>24]);


        DB::table('points')->insert(['name'=>'是否正常出发','right_score'=>10,'wrong_score'=>0,'item_id'=>25]);

        DB::table('points')->insert(['name'=>'是否减速','right_score'=>10,'wrong_score'=>0,'item_id'=>26]);
        DB::table('points')->insert(['name'=>'是否违章','right_score'=>0,'wrong_score'=>10,'item_id'=>26]);

        DB::table('points')->insert(['name'=>'是否避让','right_score'=>10,'wrong_score'=>0,'item_id'=>27]);
        DB::table('points')->insert(['name'=>'是否违章','right_score'=>0,'wrong_score'=>10,'item_id'=>27]);

        DB::table('points')->insert(['name'=>'是否完成','right_score'=>10,'wrong_score'=>0,'item_id'=>28]);
        DB::table('points')->insert(['name'=>'是否违章','right_score'=>0,'wrong_score'=>10,'item_id'=>28]);

        DB::table('points')->insert(['name'=>'是否避让','right_score'=>10,'wrong_score'=>0,'item_id'=>29]);
        DB::table('points')->insert(['name'=>'是否违章','right_score'=>0,'wrong_score'=>10,'item_id'=>29]);

        DB::table('points')->insert(['name'=>'是否成功停车','right_score'=>10,'wrong_score'=>0,'item_id'=>30]);
    }
}
