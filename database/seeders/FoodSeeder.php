<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $foods =[
            ['category_id'=>1, 
            'restaurant_id'=>1,
            'name'=>'брускетта с томатами и базиликом', 
            'price'=>'280',
            'code'=>9365016,
            'like_count'=>500],



            ['category_id'=>2, 
            'restaurant_id'=>2,
            'name'=>'жареные креветки в панировке', 
            'price'=>'480',
            'code'=>9366516,
            'like_count'=>100],



            ['category_id'=>3, 
            'restaurant_id'=>3,
            'name'=>'греческий салат', 
            'price'=>'380',
            'code'=>9365043,
            'like_count'=>400],



            ['category_id'=>4, 
            'restaurant_id'=>4,
            'name'=>'борщ с говядиной и сметаной', 
            'price'=>'320',
            'code'=>0065016,
            'like_count'=>450],



            ['category_id'=>5, 
            'restaurant_id'=>5,
            'name'=>'спагетти Болоньезе', 
            'price'=>'420',
            'code'=>9366716,
            'like_count'=>810],


            
            ['category_id'=>6, 
            'restaurant_id'=>6,
            'name'=>'Пепперони', 
            'price'=>'490',
            'code'=>9365326,
            'like_count'=>650],


            ['category_id'=>7, 
            'restaurant_id'=>7,
            'name'=>'котлеты по‑киевски', 
            'price'=>'520',
            'code'=>9785016,
            'like_count'=>430],


            ['category_id'=>8, 
            'restaurant_id'=>8,
            'name'=>'треска в лимонно‑травяном соусе', 
            'price'=>'720',
            'code'=>9365216,
            'like_count'=>260],


            ['category_id'=>9, 
            'restaurant_id'=>9,
            'name'=>'картофель фри', 
            'price'=>'160',
            'code'=>9005016,
            'like_count'=>870],


            ['category_id'=>10, 
            'restaurant_id'=>10,
            'name'=>'вегетарианский бургер', 
            'price'=>'450',
            'code'=>9365006,
            'like_count'=>590],


            ['category_id'=>11, 
            'restaurant_id'=>11,
            'name'=>'фруктовая тарелка', 
            'price'=>'400',
            'code'=>9367016,
            'like_count'=>690],


            ['category_id'=>12, 
            'restaurant_id'=>12,
            'name'=>'чай', 
            'price'=>'150',
            'code'=>9365996,
            'like_count'=>900],


            ['category_id'=>13, 
            'restaurant_id'=>13,
            'name'=>'куриные наггетсы с картофелем фри', 
            'price'=>'320',
            'code'=>9355016,
            'like_count'=>500],


            ['category_id'=>14, 
            'restaurant_id'=>14,
            'name'=>'мороженое с сезонными ягодами', 
            'price'=>'280',
            'code'=>9365019,
            'like_count'=>509],


            ['category_id'=>15, 
            'restaurant_id'=>15,
            'name'=>'Омлет с ветчиной и сыром', 
            'price'=>'420',
            'code'=>9377016,
            'like_count'=>590],



        ];
        foreach ($foods as $food) {
            \App\Models\Food::create([
                'category_id' => $food['category_id'],
                'restaurant_id' => $food['restaurant_id'],
                'name'=> $food['name'],
                'price'=> $food['price'],
                'code'=> $food['code'],
                'like_count'=> $food['like_count'],
            ]);
            
        }
    }
}
