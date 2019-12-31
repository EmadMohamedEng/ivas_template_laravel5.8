<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        \DB::table('settings')->insert(
            array(
                array (
                    'key' => 'Home Page Logo',
                    'value' => 'setting-image/settings_images/5e0b352e9f0e8.png',
                    'created_at' => '2019-12-31 10:50:04',
                    'updated_at' => '2019-12-31 08:54:06',
                    'type_id' => 3,
                ),
                array (
                    'key' => 'Header Logo',
                    'value' => 'setting-image/settings_images/5e0b3547b4ecc.png',
                    'created_at' => '2019-12-31 10:50:04',
                    'updated_at' => '2019-12-31 08:54:06',
                    'type_id' => 3,
                ),
                array (
                    'key' => 'Loading Image',
                    'value' => 'setting-image/settings_images/5e0b352e9f0e8.png',
                    'created_at' => '2019-12-31 10:50:04',
                    'updated_at' => '2019-12-31 08:54:06',
                    'type_id' => 3,
                ),
                array (
                    'key' => 'Title',
                    'value' => 'Services General',
                    'created_at' => '2019-12-31 10:50:04',
                    'updated_at' => '2019-12-31 08:54:06',
                    'type_id' => 2,
                ),
                array (
                    'key' => 'fav icon',
                    'value' => 'setting-image/settings_images/5e0b3547b4ecc.png',
                    'created_at' => '2019-12-31 10:50:04',
                    'updated_at' => '2019-12-31 08:54:06',
                    'type_id' => 3,
                ),
                array (
                    'key' => 'meta description',
                    'value' => 'هذه الاية تسلية للنبى ﷺ
                    ومواساة ربانية لقلبك حين تشغل بالك بأقوال الآخرين وتنسى أن الله سبحانه وتعالى معك ويشعر بك
                    اللهم انك تعلم سرنا وعلانيتنا فأقـبل معـذرتنا وتعلم حاجتنا فاعطـنا سؤالنا وتعـلم ما في نفـوسنا فاغـفِـر لنا',
                    'created_at' => '2019-12-31 10:50:04',
                    'updated_at' => '2019-12-31 08:54:06',
                    'type_id' => 2,
                ),
                array (
                    'key' => 'copy rights',
                    'value' => 'Copyright © 2019 Ooredoo Qatar Services',
                    'created_at' => '2019-12-31 10:50:04',
                    'updated_at' => '2019-12-31 08:54:06',
                    'type_id' => 2,
                ),
                array (
                    'key' => 'Backgound Body',
                    'value' => 'setting-image/settings_images/5e0b353fd6b0a.jpg',
                    'created_at' => '2019-12-31 10:50:04',
                    'updated_at' => '2019-12-31 08:54:06',
                    'type_id' => 3,
                ),
                array (
                    'key' => 'Default Image',
                    'value' => 'setting-image/settings_images/5e0b3547b4ecc.png',
                    'created_at' => '2019-12-31 10:50:04',
                    'updated_at' => '2019-12-31 08:54:06',
                    'type_id' => 3,
                ),
                array (
                    'key' => 'Socail Enable',
                    'value' => '1',
                    'created_at' => '2019-12-31 10:50:04',
                    'updated_at' => '2019-12-31 08:54:06',
                    'type_id' => 7,
                ),
                array (
                    'key' => 'facebook',
                    'value' => 'https://www.facebook.com/',
                    'created_at' => '2019-12-31 10:50:04',
                    'updated_at' => '2019-12-31 08:54:06',
                    'type_id' => 2,
                ),
                array (
                    'key' => 'youtube',
                    'value' => 'https://www.youtube.com/watch?v=E555uAaczvo',
                    'created_at' => '2019-12-31 10:50:04',
                    'updated_at' => '2019-12-31 08:54:06',
                    'type_id' => 2,
                ),
                array (
                    'key' => 'Home Page video',
                    'value' => 'setting-image/settings_videos/5e0b355413d3a.mp4',
                    'created_at' => '2019-12-31 10:50:04',
                    'updated_at' => '2019-12-31 08:54:06',
                    'type_id' => 4,
                ),
                array (
                    'key' => 'header',
                    'value' => '#80ff00',
                    'created_at' => '2019-12-31 10:50:04',
                    'updated_at' => '2019-12-31 08:54:06',
                    'type_id' => 8,
                ),
                array (
                    'key' => 'footer',
                    'value' => '#ff0080',
                    'created_at' => '2019-12-31 10:50:04',
                    'updated_at' => '2019-12-31 08:54:06',
                    'type_id' => 8,
                ),
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
