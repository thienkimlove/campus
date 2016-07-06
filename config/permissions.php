<?php

return [
    1 => [
        'label' => 'Manager',
        'permission' => [
            'HomeController@index',

            'CategoriesController@index',
            'CategoriesController@create',
            'CategoriesController@edit',
            'CategoriesController@destroy',
            'CategoriesController@update',
            'CategoriesController@store',

            'PostsController@index',
            'PostsController@create',
            'PostsController@edit',
            'PostsController@destroy',
            'PostsController@update',
            'PostsController@store',

            'ClientsController@index',
            'ClientsController@create',
            'ClientsController@edit',
            'ClientsController@destroy',
            'ClientsController@update',
            'ClientsController@store',

            'QuestionsController@index',
            'QuestionsController@create',
            'QuestionsController@edit',
            'QuestionsController@destroy',
            'QuestionsController@update',
            'QuestionsController@store',
        ]
    ],

    2 => [
        'label' => 'Editor',
        'permission' => [
            'HomeController@index',

            'CategoriesController@index',
            'CategoriesController@create',
            'CategoriesController@edit',
            'CategoriesController@destroy',
            'CategoriesController@update',
            'CategoriesController@store',

            'PostsController@index',
            'PostsController@create',
            'PostsController@edit',
            'PostsController@destroy',
            'PostsController@update',
            'PostsController@store',

            'ClientsController@index',
            'ClientsController@create',
            'ClientsController@edit',
            'ClientsController@destroy',
            'ClientsController@update',
            'ClientsController@store',

            'QuestionsController@index',
            'QuestionsController@create',
            'QuestionsController@edit',
            'QuestionsController@destroy',
            'QuestionsController@update',
            'QuestionsController@store',
        ]
    ]
];