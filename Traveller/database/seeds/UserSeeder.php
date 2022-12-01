<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Tsuchiyama' ,
            'email' => 'tsuchiyama530@example.co.jp' ,
            'password' => Hash::make('TsuchiyamaTsuchiyama'),
            'image_at' => 'user_icon_sample_1.png' ,
            ]);
            
            
            User::create([
            'name' => 'Shimomura' ,
            'email' => 'shimomura_1230@example.jp' ,
            'password' => Hash::make('ShimomuraShimomura'),
            'image_at' => 'user_icon_sample_2.png' ,
            ]);
            
            
            User::create([
            'name' => 'Kanazawa' ,
            'email' => 'kanazawa_116@example.ne.jp' ,
            'password' => Hash::make('KanazawaKanazawa'),
            'image_at' => 'user_icon_sample_3.png' ,
            ]);
            
            
            User::create([
            'name' => 'Kimura' ,
            'email' => 'kimurakenichi@example.ne.jp' ,
            'password' => Hash::make('KimuraKimura'),
            'image_at' => 'user_icon_sample_4.png' ,
            ]);
            
            
            User::create([
            'name' => 'Beppu' ,
            'email' => 'beppu78@example.co.jp' ,
            'password' => Hash::make('BeppuBeppu'),
            'image_at' => 'user_icon_sample_5.png' ,
            ]);
            
            
            User::create([
            'name' => 'Murata' ,
            'email' => 'jun_murata@example.org' ,
            'password' => Hash::make('MurataMurata'),
            'image_at' => 'user_icon_sample_6.png' ,
            ]);
            
            
            User::create([
            'name' => 'Yoshida' ,
            'email' => 'yoshida113@example.org' ,
            'password' => Hash::make('YoshidaYoshida'),
            'image_at' => 'user_icon_sample_7.png' ,
            ]);
            
            
            User::create([
            'name' => 'Nakagawa' ,
            'email' => 'nakagawa_129@example.net' ,
            'password' => Hash::make('NakagawaNakagawa'),
            'image_at' => 'user_icon_sample_8.png' ,
            ]);
            
            
            User::create([
            'name' => 'Suzuki' ,
            'email' => 'yasushisuzuki@example.org' ,
            'password' => Hash::make('SuzukiSuzuki'),
            'image_at' => 'user_icon_sample_9.png' ,
            ]);
            
            
            User::create([
            'name' => 'Suwa' ,
            'email' => 'azusasuwa@example.com' ,
            'password' => Hash::make('SuwaSuwa'),
            'image_at' => 'user_icon_sample_10.png' ,
            ]);
            
            
            User::create([
            'name' => 'Morine' ,
            'email' => 'takuomorine@example.co.jp' ,
            'password' => Hash::make('MorineMorine'),
            'image_at' => 'user_icon_sample_11.png' ,
            ]);
            
            
            User::create([
            'name' => 'Hano' ,
            'email' => 'hano625@example.jp' ,
            'password' => Hash::make('HanoHano'),
            'image_at' => 'user_icon_sample_12.png' ,
            ]);
            
            
            User::create([
            'name' => 'Mori' ,
            'email' => 'yousukemori@example.jp' ,
            'password' => Hash::make('MoriMori'),
            'image_at' => 'user_icon_sample_13.png' ,
            ]);
            
            
            User::create([
            'name' => 'Umezawa' ,
            'email' => 'umezawa_yukiko@example.com' ,
            'password' => Hash::make('UmezawaUmezawa'),
            'image_at' => 'user_icon_sample_14.png' ,
            ]);
            
            
            
    }
}
/*
ダミーデータ

name,email,password
Tsuchiyama,tsuchiyama530@example.co.jp,TsuchiyamaTsuchiyama
Shimomura,shimomura_1230@example.jp,ShimomuraShimomura
Kanazawa,kanazawa_116@example.ne.jp,KanazawaKanazawa
Kimura,kimurakenichi@example.ne.jp,KimuraKimura
Beppu,beppu78@example.co.jp,BeppuBeppu
Murata,jun_murata@example.org,MurataMurata
Yoshida,yoshida113@example.org,YoshidaYoshida
Nakagawa,nakagawa_129@example.net,NakagawaNakagawa
Suzuki,yasushisuzuki@example.org,SuzukiSuzuki
Suwa,azusasuwa@example.com,SuwaSuwa
Morine,takuomorine@example.co.jp,MorineMorine
Hano,hano625@example.jp,HanoHano
Mori,yousukemori@example.jp,MoriMori
Umezawa,umezawa_yukiko@example.com,UmezawaUmezawa


*/