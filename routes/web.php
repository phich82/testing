<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Comment;

Route::get('/', function () {
    return view('welcome');
});

Route::get('test', function () {
    $ppbf = [
        [
            'unit_id' => '137000',
            'responses' => [
                [
                    'booking_fields_id' => '117000',
                    'response' => [
                        'Test1'
                    ]
                ],
                [
                    'booking_fields_id' => '117000',
                    'response' => [
                        'Test2'
                    ]
                ],
                [
                    'booking_fields_id' => '117591',
                    'gid' => 0,
                    'response' => [
                        null
                    ]
                ],
                [
                    'booking_fields_id' => '117591',
                    'gid' => 1,
                    'response' => [
                        null
                    ]
                ]
            ]
        ],
        [
            'unit_id' => '137002',
            'responses' => [
                [
                    'booking_fields_id' => '117000',
                    'response' => [
                        'Test3'
                    ]
                ],
                [
                    'booking_fields_id' => '117000',
                    'response' => [
                        'Test4'
                    ]
                ]
            ]
        ]
    ];
    $paginator = Comment::paginate(1);
    return view('test', compact('paginator'));
});
