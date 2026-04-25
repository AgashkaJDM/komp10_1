<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $restaurants = [
            ['name'=>'Gaygysyz Market', 
            'address'=>'Parahat 1', 
            'rating'=>4.0, 
            'phone_number'=>'+99365676777'],



            ['name'=>'KUDO', 
            'address'=>'"Arkach" sowda merkezi', 
            'rating'=>4.6, 
            'phone_number'=>'+99362602121'],



            ['name'=>'Melhem Koz doner', 
            'address'=>'4-nji mikrayon', 
            'rating'=>5.0, 
            'phone_number'=>'+99365768778'],



            ['name'=>'Kopetdag Restoran', 
            'address'=>'Ашхабад Багтыярлыкский этрап, проспект Махтумкули 10', 
            'rating'=>4.8, 
            'phone_number'=>'+99365711717'],



            ['name'=>'AlpEt Steakhouse', 
            'address'=>'Ашхабад, Багтыярлыкский этрап', 
            'rating'=>4.9, 
            'phone_number'=>'+99365655645'],



            ['name'=>'Bambuk', 
            'address'=>'ул. Огузхана 74/2', 
            'rating'=>4.7, 
            'phone_number'=>'+99365453423'],



            ['name'=>'Chatma Restoran', 
            'address'=>'Ашхабад, парк Ашхабад', 
            'rating'=>4.7, 
            'phone_number'=>'+99365765643'],



            ['name'=>'MADO', 
            'address'=>'Ашхабад, Arkadagh Park', 
            'rating'=>4.4, 
            'phone_number'=>'+99312212177'],



            ['name'=>'Salam', 
            'address'=>'просп. Атамурата Ниязова, 69', 
            'rating'=>4.1, 
            'phone_number'=>'+99312334333'],



            ['name'=>'Joshgun Restaurant', 
            'address'=>'просп. Битарап Туркменистан, 108', 
            'rating'=>4.5, 
            'phone_number'=>'+99312556775'],



            ['name'=>'Turkmen Tagam', 
            'address'=>'Лебапский велаят, Туркменабад, микрорайон Бахар', 
            'rating'=>4.5, 
            'phone_number'=>'+99365655688'],



            ['name'=>'Maksatly', 
            'address'=>'улица Молланепес', 
            'rating'=>4.1, 
            'phone_number'=>'+99362236606'],



            ['name'=>'Balyk Tagamlary', 
            'address'=>'Ашхабад, Багтыярлыкский этрап', 
            'rating'=>3.8, 
            'phone_number'=>'+99312887667'],



            ['name'=>'Merdem', 
            'address'=>'Ашхабад, 9-й микрорайон', 
            'rating'=>4.3, 
            'phone_number'=>'+99365995699'],



            ['name'=>'Altyn Achar', 
            'address'=>'просп. Махтумкули, 167, Багтыярлыкский этрап', 
            'rating'=>4.2, 
            'phone_number'=>'+99361427444'],



        ];
        foreach ($restaurants as $restaurant) {
            \App\Models\Restaurant::create([
                'name'=> $restaurant['name'],
                'address'=> $restaurant['address'],
                'rating'=> $restaurant['rating'],
                'phone_number'=> $restaurant['phone_number'],

            ]);
        }
        
    }
}
