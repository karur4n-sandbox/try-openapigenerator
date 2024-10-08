<?php

/**
 * 個人プロジェクト
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 * PHP version 7.2.5
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 *
 * NOTE: This class is auto generated by OpenAPI-Generator
 * https://openapi-generator.tech
 * Do not edit the class manually.
 *
 * Source files are located at:
 *
 * > https://github.com/OpenAPITools/openapi-generator/blob/master/modules/openapi-generator/src/main/resources/php-laravel/
 */


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/**
 * post petPost
 * Summary: ペット情報を作成する
 * Notes: 
 * Output-Formats: [application/json]
 */
Route::post('/pet', 'DefaultController@petPost');
/**
 * put petPut
 * Summary: ペット情報を更新する
 * Notes: 
 * Output-Formats: [application/json]
 */
Route::put('/pet', 'DefaultController@petPut');
/**
 * get petFindByStatusGet
 * Summary: ステータスに基づいてペットリストを検索
 * Notes: 
 * Output-Formats: [application/json]
 */
Route::get('/pet/findByStatus', 'DefaultController@petFindByStatusGet');
/**
 * delete petPetIdDelete
 * Summary: ペット情報を削除する
 * Notes: 
 * Output-Formats: [application/json]
 */
Route::delete('/pet/{petId}', 'DefaultController@petPetIdDelete');
/**
 * get petPetIdGet
 * Summary: ペットの詳細をクエリ
 * Notes: 
 * Output-Formats: [application/json]
 */
Route::get('/pet/{petId}', 'DefaultController@petPetIdGet');
/**
 * get petsIdGet
 * Summary: ペット詳細を取得する
 * Notes: 
 * Output-Formats: [application/json]
 */
Route::get('/pets/{id}', 'DefaultController@petsIdGet');
/**
 * get usersIdGet
 * Summary: ユーザー詳細を取得する
 * Notes: 
 * Output-Formats: [application/json]
 */
Route::get('/users/{id}', 'DefaultController@usersIdGet');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
