<?php

use Illuminate\Database\Seeder;

use App\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'user_id' => '1',
            'country_name' => 'Australia',
            'caption' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'image_1' => 'BzvLc3jq92mQ1wPmeLFN.png',
            'image_2' => 'DGDl79X2BVCgGaHNzDg5.png',
            'image_3' => 'FLqrGNTkv69bqy6t9qM3.png',
        ]);
        Post::create([
            'user_id' => '1',
            'country_name' => 'Brasil',
            'caption' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'image_1' => 'KOSphasqGuVWI5PcELqW.png',
            'image_2' => 'mbxVzFFNLpwVfBeojv2y.png',
            'image_3' => 'SYHF2ZyxTDWgmMDMSHOu.png',
            'image_4' => 'qtbyt88EzudKAqwd5eeL.png',
        ]);
        Post::create([
            'user_id' => '1',
            'country_name' => 'Taiwan',
            'caption' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'image_1' => 'F1Gi1jw9w6QC6XaHPet2.png',
            'image_2' => 'EVNittfSMLUPL9S1W8r3.png',
            'image_3' => 'lff3i3Qlg12QdHIdC4Pn.png',
            'image_4' => 'pvinvGLMbyruHbFtp6iQ.png',
        ]);
        Post::create([
            'user_id' => '2',
            'country_name' => 'Canada',
            'caption' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'image_1' => 'JmJkPBgfLG78huAk6YJC.png',
            'image_2' => 'znhsEURGUgKdAKKoJM8s.png',
            'image_3' => '0rWq1OZJpx2RrgstwHRA.png',
            'image_4' => 'tpuNR7tpsvW1yjKLq5e7.png',
        ]);
        Post::create([
            'user_id' => '2',
            'country_name' => 'France',
            'caption' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'image_1' => '4ELmP5S8r8CERLY4rZQP.png',
            'image_2' => 'hVkDmyTzFuJmNUY2wrYU.png',
            'image_3' => 'LSZXiYhfFRn2O0192UTk.png',
            'image_4' => 'Z658nsAcxcFwbDOiVYio.png',
            'image_5' => 'IgTePyZQCo6a90BA4K0T.png',
        ]);
        Post::create([
            'user_id' => '2',
            'country_name' => 'India',
            'caption' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'image_1' => 'QS93QBPNLrRFziXkDI1N.png',
            'image_2' => 'WsWnr1XV56F9qpI9Z5oH.png',
            'image_3' => 'DfsyQZNsBhfOxUVJGz9M.png',
            'image_4' => 'IgTePyZQCo6a90BA4K0T.png',
        ]);
        Post::create([
            'user_id' => '3',
            'country_name' => 'Spain',
            'caption' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'image_1' => 'avldApOltWBfFRycmhwp.png',
            'image_2' => 'dIndCN8dBGOQqjWH09Un.png',
            'image_3' => 'Qj8n0IGHtnsWg3M8oOuc.png',
        ]);
        Post::create([
            'user_id' => '3',
            'country_name' => 'England',
            'caption' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'image_1' => 'XBFN2Pt5J4GvTT5hKvLZ.png',
            'image_2' => 'fhUv9MIGyxfc3U28xabu.png',
            'image_3' => 'V8X6WTYB1DcbonXCWvO3.png',
        ]);
        Post::create([
            'user_id' => '3',
            'country_name' => 'Italy',
            'caption' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'image_1' => 'QW2vy7m4diUHQhaHuz5V.png',
            'image_2' => 'sI978zAK1lvm1TMDw7o9.png',
            'image_3' => 'qhBl6r80PvP0I1sXUQCk.png',
            'image_4' => 'kXSmFm1oGSmZpEfufdGv.png',
            'image_5' => '2jB4GVDD6lxegRcdCgci.png',
        ]);
        Post::create([
            'user_id' => '4',
            'country_name' => 'Japan',
            'caption' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'image_1' => 'wVKP1pDJMtD8O75CJ3uy.png',
            'image_2' => 'saslngBjae6mPTScprLy.png',
            'image_3' => '7xdJ6huQWQE29RZ6huHU.png',
            'image_4' => 'RJ4RsGn2Hk91QYMDuyPp.png',
            'image_5' => '0zM6me4ARjZedPbNZQjS.png',
        ]);
        Post::create([
            'user_id' => '4',
            'country_name' => 'Philippine',
            'caption' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'image_1' => '0fqmR6n1X6RNr26ggI0u.png',
            'image_2' => 'jDD2FJ9EyJ3O7KFTfS3V.png',
            'image_3' => 'fkymbGn7SdM6hptAl4wr.png',
            'image_4' => 'nZyttFFZbhal4L917w2M.png',
        ]);
        Post::create([
            'user_id' => '4',
            'country_name' => 'Egypt',
            'caption' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'image_1' => 'YPeBAuMcQKf9r4e7IACS.png',
            'image_2' => 'QYiljsYCs1VCPK56rGml.png',
            'image_3' => '5CQYUJxHLnNL4ifnxu7U.png',
        ]);
        Post::create([
            'user_id' => '5',
            'country_name' => 'Singapore',
            'caption' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'image_1' => '6tkWxMaOzGd5wqxq9EXN.png',
            'image_2' => 'Nk6iQdbj5eqZ1BcOlalM.png',
            'image_3' => 'QAjJ4MMoeY8vhlVWRnX8.png',
        ]);
        Post::create([
            'user_id' => '5',
            'country_name' => 'Thailand',
            'caption' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'image_1' => 'gpt0lUXuAhK5uJxWa10w.png',
            'image_2' => 'qPse1EksWNnTdv32DhQN.png',
            'image_3' => 'DarVTmuC4fEvf2BF3Pb7.png',
        ]);
        Post::create([
            'user_id' => '5',
            'country_name' => 'Mexico',
            'caption' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'image_1' => 'VwbTcKOu4pPq6meooGnW.png',
            'image_2' => 'mvjUGdZNnxKDMC7Og9q6.png',
        ]);
        
/////////////////// ↑発表用  ↓仮       ////////////////////

        // Post::create([
        //     'user_id' => 11,
        //     'country_name' => 'Moldova',
        //     'caption' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        //     'image_1' => 'country_image_sample_0.png',
        // ]);
        // Post::create([
        //     'user_id' => 12,
        //     'country_name' => 'Germany',
        //     'caption' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        //     'image_1' => 'country_image_sample_1.png',
        // ]);
        // Post::create([
        //     'user_id' => 11,
        //     'country_name' => 'Turkmenistan',
        //     'caption' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        //     'image_1' => 'country_image_sample_2.png',
        // ]);
        // Post::create([
        //     'user_id' => 13,
        //     'country_name' => 'El Salvador',
        //     'caption' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        //     'image_1' => 'country_image_sample_3.png',
        // ]);
        // Post::create([
        //     'user_id' => 12,
        //     'country_name' => 'Belize',
        //     'caption' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        //     'image_1' => 'country_image_sample_4.png',
        // ]);
        // Post::create([
        //     'user_id' => 8,
        //     'country_name' => 'Netherlands',
        //     'caption' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        //     'image_1' => 'country_image_sample_5.png',
        // ]);
        // Post::create([
        //     'user_id' => 6,
        //     'country_name' => 'Portugal',
        //     'caption' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        //     'image_1' => 'country_image_sample_6.png',
        // ]);
        // Post::create([
        //     'user_id' => 10,
        //     'country_name' => 'Martinique',
        //     'caption' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        //     'image_1' => 'country_image_sample_7.png',
        // ]);
        // Post::create([
        //     'user_id' => 9,
        //     'country_name' => 'Czech Republic',
        //     'caption' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        //     'image_1' => 'country_image_sample_8.png',
        // ]);
        // Post::create([
        //     'user_id' => 9,
        //     'country_name' => 'Myanmar',
        //     'caption' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        //     'image_1' => 'country_image_sample_9.png',
        // ]);
        // Post::create([
        //     'user_id' => 8,
        //     'country_name' => 'Mongolia',
        //     'caption' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        //     'image_1' => 'country_image_sample_10.png',
        // ]);
        // Post::create([
        //     'user_id' => 5,
        //     'country_name' => 'Bosnia and Herzegovina',
        //     'caption' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        //     'image_1' => 'country_image_sample_11.png',
        // ]);
        // Post::create([
        //     'user_id' => 1,
        //     'country_name' => 'Western Sahara',
        //     'caption' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        //     'image_1' => 'country_image_sample_12.png',
        // ]);
        // Post::create([
        //     'user_id' => 3,
        //     'country_name' => 'Portugal',
        //     'caption' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        //     'image_1' => 'country_image_sample_13.png',
        // ]);
        // Post::create([
        //     'user_id' => 12,
        //     'country_name' => 'Djibouti',
        //     'caption' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        //     'image_1' => 'country_image_sample_14.png',
        // ]);
        // Post::create([
        //     'user_id' => 9,
        //     'country_name' => 'Cameroon',
        //     'caption' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        //     'image_1' => 'country_image_sample_15.png',
        // ]);
        // Post::create([
        //     'user_id' => 12,
        //     'country_name' => 'Qatar',
        //     'caption' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        //     'image_1' => 'country_image_sample_16.png',
        // ]);
        // Post::create([
        //     'user_id' => 14,
        //     'country_name' => 'Saint-Barthﾃｩlemy',
        //     'caption' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        //     'image_1' => 'country_image_sample_17.png',
        // ]);
        // Post::create([
        //     'user_id' => 2,
        //     'country_name' => 'South Sudan',
        //     'caption' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        //     'image_1' => 'country_image_sample_18.png',
        // ]);
        // Post::create([
        //     'user_id' => 10,
        //     'country_name' => 'Mayotte',
        //     'caption' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        //     'image_1' => 'country_image_sample_19.png',
        // ]);
        // Post::create([
        //     'user_id' => 9,
        //     'country_name' => 'Tunisia',
        //     'caption' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        //     'image_1' => 'country_image_sample_20.png',
        // ]);
        // Post::create([
        //     'user_id' => 4,
        //     'country_name' => 'Democratic Republic of the Congo',
        //     'caption' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        //     'image_1' => 'country_image_sample_21.png',
        // ]);
        // Post::create([
        //     'user_id' => 2,
        //     'country_name' => 'Vietnam',
        //     'caption' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        //     'image_1' => 'country_image_sample_22.png',
        // ]);
        // Post::create([
        //     'user_id' => 9,
        //     'country_name' => 'Burkina Faso',
        //     'caption' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        //     'image_1' => 'country_image_sample_23.png',
        // ]);
        // Post::create([
        //     'user_id' => 5,
        //     'country_name' => 'Palau',
        //     'caption' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        //     'image_1' => 'country_image_sample_24.png',
        // ]);
        // Post::create([
        //     'user_id' => 3,
        //     'country_name' => 'Georgia',
        //     'caption' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        //     'image_1' => 'country_image_sample_25.png',
        // ]);
        // Post::create([
        //     'user_id' => 6,
        //     'country_name' => 'Togo',
        //     'caption' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        //     'image_1' => 'country_image_sample_26.png',
        // ]);
        // Post::create([
        //     'user_id' => 8,
        //     'country_name' => 'Estonia',
        //     'caption' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        //     'image_1' => 'country_image_sample_27.png',
        // ]);
        // Post::create([
        //     'user_id' => 7,
        //     'country_name' => 'Peru',
        //     'caption' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        //     'image_1' => 'country_image_sample_28.png',
        // ]);
        // Post::create([
        //     'user_id' => 12,
        //     'country_name' => 'Iceland',
        //     'caption' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        //     'image_1' => 'country_image_sample_29.png',
        // ]);
        // Post::create([
        //     'user_id' => 11,
        //     'country_name' => 'Bangladesh',
        //     'caption' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        //     'image_1' => 'country_image_sample_30.png',
        // ]);
        // Post::create([
        //     'user_id' => 13,
        //     'country_name' => 'Greenland',
        //     'caption' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        //     'image_1' => 'country_image_sample_31.png',
        // ]);
        // Post::create([
        //     'user_id' => 2,
        //     'country_name' => 'Mayotte',
        //     'caption' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        //     'image_1' => 'country_image_sample_32.png',
        // ]);
        // Post::create([
        //     'user_id' => 7,
        //     'country_name' => 'Mauritania',
        //     'caption' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        //     'image_1' => 'country_image_sample_33.png',
        // ]);
        // Post::create([
        //     'user_id' => 12,
        //     'country_name' => 'Botswana',
        //     'caption' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        //     'image_1' => 'country_image_sample_34.png',
        // ]);
        // Post::create([
        //     'user_id' => 2,
        //     'country_name' => 'El Salvador',
        //     'caption' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        //     'image_1' => 'country_image_sample_35.png',
        // ]);
        // Post::create([
        //     'user_id' => 10,
        //     'country_name' => 'Myanmar',
        //     'caption' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        //     'image_1' => 'country_image_sample_36.png',
        // ]);
        // Post::create([
        //     'user_id' => 3,
        //     'country_name' => 'Saudi Arabia',
        //     'caption' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        //     'image_1' => 'country_image_sample_37.png',
        // ]);
        // Post::create([
        //     'user_id' => 8,
        //     'country_name' => 'Libya',
        //     'caption' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        //     'image_1' => 'country_image_sample_38.png',
        // ]);
        // Post::create([
        //     'user_id' => 6,
        //     'country_name' => 'Ecuador',
        //     'caption' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        //     'image_1' => 'country_image_sample_39.png',
        // ]);
        // Post::create([
        //     'user_id' => 1,
        //     'country_name' => 'French Guiana',
        //     'caption' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        //     'image_1' => 'country_image_sample_40.png',
        // ]);
        // Post::create([
        //     'user_id' => 5,
        //     'country_name' => 'Czech Republic',
        //     'caption' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        //     'image_1' => 'country_image_sample_41.png',
        // ]);
        // Post::create([
        //     'user_id' => 7,
        //     'country_name' => 'El Salvador',
        //     'caption' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        //     'image_1' => 'country_image_sample_42.png',
        // ]);
        // Post::create([
        //     'user_id' => 1,
        //     'country_name' => 'Liberia',
        //     'caption' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        //     'image_1' => 'country_image_sample_43.png',
        // ]);
        // Post::create([
        //     'user_id' => 5,
        //     'country_name' => 'Guinea-Bissau',
        //     'caption' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        //     'image_1' => 'country_image_sample_44.png',
        // ]);
        // 追加分
        // Post::create([
        //     'user_id' => 1,
        //     'country_name' => 'Ecuador',
        //     'caption' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        //     'image_1' => 'country_image_sample_45.png',
        // ]);
        // Post::create([
        //     'user_id' => 1,
        //     'country_name' => 'French Guiana',
        //     'caption' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        //     'image_1' => 'country_image_sample_46.png',
        // ]);
        // Post::create([
        //     'user_id' => 1,
        //     'country_name' => 'Czech Republic',
        //     'caption' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        //     'image_1' => 'country_image_sample_47.png',
        // ]);
        // Post::create([
        //     'user_id' => 1,
        //     'country_name' => 'El Salvador',
        //     'caption' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        //     'image_1' => 'country_image_sample_48.png',
        // ]);
        // Post::create([
        //     'user_id' => 1,
        //     'country_name' => 'Guinea-Bissau',
        //     'caption' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        //     'image_1' => 'country_image_sample_49.png',
        // ]);
    }
}
