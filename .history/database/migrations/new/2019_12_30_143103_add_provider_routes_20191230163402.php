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
        DB::table('routes')->insert(

            array (
                'id' => 120,
                'method' => 'get',
                'route' => 'category',
                'controller_name' => 'CategoryController',
                'created_at' => '2019-02-14 13:01:13',
                'updated_at' => '2019-02-14 13:01:13',
                'function_name' => 'index',
            ),

            array (
                'id' => 121,
                'method' => 'get',
                'route' => 'category/create',
                'controller_name' => 'CategoryController',
                'created_at' => '2019-02-14 13:01:13',
                'updated_at' => '2019-02-14 13:01:13',
                'function_name' => 'create',
            ),
           
            array (
                'id' => 122,
                'method' => 'post',
                'route' => 'category',
                'controller_name' => 'CategoryController',
                'created_at' => '2019-02-14 13:01:13',
                'updated_at' => '2019-02-14 13:01:13',
                'function_name' => 'store',
            ),
            74 =>
            array (
                'id' => 123,
                'method' => 'get',
                'route' => 'category/{id}',
                'controller_name' => 'CategoryController',
                'created_at' => '2019-02-14 13:01:13',
                'updated_at' => '2019-02-14 13:01:13',
                'function_name' => 'show',
            ),
            75 =>
            array (
                'id' => 124,
                'method' => 'get',
                'route' => 'category/{id}/edit',
                'controller_name' => 'CategoryController',
                'created_at' => '2019-02-14 13:01:13',
                'updated_at' => '2019-02-14 13:01:13',
                'function_name' => 'edit',
            ),
            76 =>
            array (
                'id' => 125,
                'method' => 'patch',
                'route' => 'category/{id}',
                'controller_name' => 'CategoryController',
                'created_at' => '2019-02-14 13:01:13',
                'updated_at' => '2019-02-14 13:01:13',
                'function_name' => 'update',
            ),
            77 =>
            array (
                'id' => 126,
                'method' => 'get',
                'route' => 'category/{id}/delete',
                'controller_name' => 'CategoryController',
                'created_at' => '2019-02-14 13:01:13',
                'updated_at' => '2019-02-14 13:01:13',
                'function_name' => 'destroy',
            ),
        )
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
