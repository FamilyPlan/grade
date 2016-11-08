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
        DB::table('points')->insert(['name'=>'是否正常出发','score'=>2,'item_id'=>1]);

        DB::table('points')->insert(['name'=>'是否完成','score'=>2,'item_id'=>2]);
        DB::table('points')->insert(['name'=>'是否违章','score'=>-2,'item_id'=>2]);

        DB::table('points')->insert(['name'=>'是否正常通过','score'=>2,'item_id'=>3]);
        DB::table('points')->insert(['name'=>'是否违章','score'=>-2,'item_id'=>3]);

        DB::table('points')->insert(['name'=>'是否正常通过','score'=>2,'item_id'=>4]);
        DB::table('points')->insert(['name'=>'是否违章','score'=>-2,'item_id'=>4]);

        DB::table('points')->insert(['name'=>'是否正常通过','score'=>2,'item_id'=>5]);
        DB::table('points')->insert(['name'=>'是否违章','score'=>-2,'item_id'=>5]);

        DB::table('points')->insert(['name'=>'是否正常通过','score'=>2,'item_id'=>6]);
        DB::table('points')->insert(['name'=>'是否违章','score'=>-3,'item_id'=>6]);

        DB::table('points')->insert(['name'=>'是否正常通过','score'=>2,'item_id'=>7]);
        DB::table('points')->insert(['name'=>'是否有碰撞','score'=>-2,'item_id'=>7]);

        DB::table('points')->insert(['name'=>'是否识别场景减速慢行','score'=>2,'item_id'=>8]);
        DB::table('points')->insert(['name'=>'是否碰撞假人','score'=>-3,'item_id'=>8]);

        DB::table('points')->insert(['name'=>'是否正常通过','score'=>2,'item_id'=>9]);
        DB::table('points')->insert(['name'=>'是否违章','score'=>-3,'item_id'=>9]);

        DB::table('points')->insert(['name'=>'是否识别场景减速慢行','score'=>2,'item_id'=>10]);
        DB::table('points')->insert(['name'=>'是否碰撞假人','score'=>-3,'item_id'=>10]);

        DB::table('points')->insert(['name'=>'车辆是否按照车道标线行驶','score'=>3,'item_id'=>11]);
        DB::table('points')->insert(['name'=>'是否有碰撞障碍物','score'=>-3,'item_id'=>11]);

        DB::table('points')->insert(['name'=>'是否正常通过','score'=>2,'item_id'=>12]);
        DB::table('points')->insert(['name'=>'是否违章','score'=>-2,'item_id'=>12]);

        DB::table('points')->insert(['name'=>'停车让行','score'=>3,'item_id'=>13]);
        DB::table('points')->insert(['name'=>'是否有碰撞施工设施','score'=>-1,'item_id'=>13]);
        DB::table('points')->insert(['name'=>'按道路标线指示借道之后返回','score'=>2,'item_id'=>13]);

        DB::table('points')->insert(['name'=>'是否正常通过','score'=>2,'item_id'=>14]);
        DB::table('points')->insert(['name'=>'是否违章','score'=>-2,'item_id'=>14]);

        DB::table('points')->insert(['name'=>'是否碰撞作业车辆','score'=>3,'item_id'=>15]);
        DB::table('points')->insert(['name'=>'避让过程是否遵守路面标线和交通规则','score'=>2,'item_id'=>15]);

        DB::table('points')->insert(['name'=>'是否正常通过','score'=>2,'item_id'=>16]);
        DB::table('points')->insert(['name'=>'是否违章','score'=>-2,'item_id'=>16]);

        DB::table('points')->insert(['name'=>'是否正常通过','score'=>1,'item_id'=>17]);
        DB::table('points')->insert(['name'=>'是否违章','score'=>-2,'item_id'=>17]);

        DB::table('points')->insert(['name'=>'是否正常通过','score'=>2,'item_id'=>18]);
        DB::table('points')->insert(['name'=>'是否违章','score'=>-2,'item_id'=>18]);

        DB::table('points')->insert(['name'=>'是否正常通过','score'=>2,'item_id'=>19]);
        DB::table('points')->insert(['name'=>'是否违章','score'=>-2,'item_id'=>19]);

        DB::table('points')->insert(['name'=>'车辆是否行驶在正确车道上','score'=>3,'item_id'=>20]);
        DB::table('points')->insert(['name'=>'是否无碰障通过该路段','score'=>2,'item_id'=>20]);

        DB::table('points')->insert(['name'=>'是否正常通过','score'=>2,'item_id'=>21]);
        DB::table('points')->insert(['name'=>'是否有碰撞','score'=>-2,'item_id'=>21]);

        DB::table('points')->insert(['name'=>'是否按照道路标线正确执行换道','score'=>2,'item_id'=>22]);
        DB::table('points')->insert(['name'=>'是否按照道路标线正确执行超车','score'=>2,'item_id'=>22]);
        DB::table('points')->insert(['name'=>'是否是无人车超无人车情况','score'=>1,'item_id'=>22]);

        DB::table('points')->insert(['name'=>'是否正常通过','score'=>1,'item_id'=>23]);
        DB::table('points')->insert(['name'=>'是否违章','score'=>-2,'item_id'=>23]);

        DB::table('points')->insert(['name'=>'是否成功停车','score'=>2,'item_id'=>24]);


        DB::table('points')->insert(['name'=>'是否正常出发','score'=>10,'item_id'=>25]);

        DB::table('points')->insert(['name'=>'是否减速','score'=>10,'item_id'=>26]);
        DB::table('points')->insert(['name'=>'是否违章','score'=>-10,'item_id'=>26]);

        DB::table('points')->insert(['name'=>'是否避让','score'=>10,'item_id'=>27]);
        DB::table('points')->insert(['name'=>'是否违章','score'=>-10,'item_id'=>27]);

        DB::table('points')->insert(['name'=>'是否完成','score'=>10,'item_id'=>28]);
        DB::table('points')->insert(['name'=>'是否违章','score'=>-10,'item_id'=>28]);

        DB::table('points')->insert(['name'=>'是否避让','score'=>10,'item_id'=>29]);
        DB::table('points')->insert(['name'=>'是否违章','score'=>-10,'item_id'=>29]);

        DB::table('points')->insert(['name'=>'是否成功停车','score'=>10,'item_id'=>30]);
    }
}
