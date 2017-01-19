<?php


class TuserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Tuser::create(array('name'=>'nizam','email'=>'nizam@gmail.com'));
    }
}


?>