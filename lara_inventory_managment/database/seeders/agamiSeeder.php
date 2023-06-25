<?php

namespace Database\Seeders;

use App\Models\Agami;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class agamiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $agamiSales = collect(
            [
                [
                    'pro_name'=>'SPICY MANGO',
                    'jar'=>'2',
                    'poly'=>'0',
                    'amount'=>'456',
                    'month'=>'June',
                    'year'=>'2023',
                    'date'=>'13/06/23',
                ],
                [
                    'pro_name'=>'SPICY MANGO',
                    'jar'=>'1',
                    'poly'=>'0',
                    'amount'=>'228',
                    'month'=>'June',
                    'year'=>'2023',
                    'date'=>'08/06/23',

                ],
                [
                    'pro_name'=>'SPICY MANGO',
                    'jar'=>'1',
                    'poly'=>'0',
                    'amount'=>'228',
                    'month'=>'June',
                    'year'=>'2023',
                    'date'=>'07/06/23',
                ],
                [
                    'pro_name'=>'SPICY MANGO',
                    'jar'=>'1',
                    'poly'=>'0',
                    'amount'=>'228',
                    'month'=>'June',
                    'year'=>'2023',
                    'date'=>'06/06/23',
                ],
            ]
        );

        $agamiSales->each(function($agamiSale){
            Agami::insert($agamiSale);
        });



        // Agami::create([
        //     'pro_name'=>'SPICY MANGO',
        //     'jar'=>'4',
        //     'poly'=>'0',
        //     'amount'=>'912',
        //     'month'=>'June',
        //     'year'=>'2023',
        //     'date'=>'22/06/23',
        // ]);
    }
}