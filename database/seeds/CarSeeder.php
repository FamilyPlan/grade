<?php

use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert(['name'=>'清华睿龙','order'=>1,'college_name'=>'清华大学']);
        DB::table('cars')->insert(['name'=>'途灵TiEV','order'=>2,'college_name'=>'同济大学']);
        DB::table('cars')->insert(['name'=>'夸父一号','order'=>3,'college_name'=>'西安交通大学']);
        DB::table('cars')->insert(['name'=>'北京锐动','order'=>4,'college_name'=>'北京理工大学']);
        DB::table('cars')->insert(['name'=>'军交猛师1号','order'=>5,'college_name'=>'军事交通学院']);
        DB::table('cars')->insert(['name'=>'军交猛师2号','order'=>6,'college_name'=>'军事交通学院']);
        DB::table('cars')->insert(['name'=>'清华猛师1号','order'=>7,'college_name'=>'清华大学总参61所中国科学院微电子所']);
        DB::table('cars')->insert(['name'=>'清华猛师2号','order'=>8,'college_name'=>'清华大学空军预警学院总参61所']);
        DB::table('cars')->insert(['name'=>'智能车','order'=>9,'college_name'=>'长安大学']);
        DB::table('cars')->insert(['name'=>'The Danger','order'=>10,'college_name'=>'同济大学']);
        DB::table('cars')->insert(['name'=>'途智号','order'=>11,'college_name'=>'武汉大学']);
        DB::table('cars')->insert(['name'=>'途e号','order'=>12,'college_name'=>'武汉大学']);
        DB::table('cars')->insert(['name'=>'京龙1号','order'=>13,'college_name'=>'北京联合大学']);
        DB::table('cars')->insert(['name'=>'京龙3号','order'=>14,'college_name'=>'北京联合大学']);
        DB::table('cars')->insert(['name'=>'发现号','order'=>15,'college_name'=>'西安交通大学广汽汽车工程研究院']);
        DB::table('cars')->insert(['name'=>'红旗二代','order'=>16,'college_name'=>'国防科学技术大学中南大学吉林大学']);
        DB::table('cars')->insert(['name'=>'Cyber Tiggo','order'=>17,'college_name'=>'上海交通大学']);
        DB::table('cars')->insert(['name'=>'智能先锋号','order'=>18,'college_name'=>'中国科学院合肥物质科学研究院']);
        DB::table('cars')->insert(['name'=>'秦勇','order'=>19,'college_name'=>'长安大学']);
        DB::table('cars')->insert(['name'=>'北京飞鸽队','order'=>20,'college_name'=>'北京航空航天大学北京踏歌智行科技有限公司']);
        DB::table('cars')->insert(['name'=>'无人车队','order'=>21,'college_name'=>'中山大学']);
        DB::table('cars')->insert(['name'=>'特立笃行队','order'=>22,'college_name'=>'北京理工大学']);
        DB::table('cars')->insert(['name'=>'PAVE','order'=>23,'college_name'=>'苏州派瑞雷尔智能科技有限公司']);
    }
}
