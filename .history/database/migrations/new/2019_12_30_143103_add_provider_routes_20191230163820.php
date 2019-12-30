<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProviderRoutes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        \DB::table('routes')->insert(

            array (
                'method' => 'get',
                'route' => 'provider',
                'controller_name' => 'ProviderController',
                'created_at' => '2019-02-14 13:01:13',
                'updated_at' => '2019-02-14 13:01:13',
                'function_name' => 'index',
            ),

            array (
                'method' => 'get',
                'route' => 'provider/create',
                'controller_name' => 'ProviderController',
                'created_at' => '2019-02-14 13:01:13',
                'updated_at' => '2019-02-14 13:01:13',
                'function_name' => 'create',
            ),

            array (
                'method' => 'post',
                'route' => 'provider',
                'controller_name' => 'ProviderController',
                'created_at' => '2019-02-14 13:01:13',
                'updated_at' => '2019-02-14 13:01:13',
                'function_name' => 'store',
            ),

            array (
                'id' => 123,
                'method' => 'get',
                'route' => 'provider/{id}',
                'controller_name' => 'ProviderController',
                'created_at' => '2019-02-14 13:01:13',
                'updated_at' => '2019-02-14 13:01:13',
                'function_name' => 'show',
            ),

            array (
                'id' => 124,
                'method' => 'get',
                'route' => 'provider/{id}/edit',
                'controller_name' => 'ProviderController',
                'created_at' => '2019-02-14 13:01:13',
                'updated_at' => '2019-02-14 13:01:13',
                'function_name' => 'edit',
            ),

            array (
                'id' => 125,
                'method' => 'patch',
                'route' => 'provider/{id}',
                'controller_name' => 'ProviderController',
                'created_at' => '2019-02-14 13:01:13',
                'updated_at' => '2019-02-14 13:01:13',
                'function_name' => 'update',
            ),

            array (
                'id' => 126,
                'method' => 'get',
                'route' => 'provider/{id}/delete',
                'controller_name' => 'ProviderController',
                'created_at' => '2019-02-14 13:01:13',
                'updated_at' => '2019-02-14 13:01:13',
                'function_name' => 'destroy',
            )
            );
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
