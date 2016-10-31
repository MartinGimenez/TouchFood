<?php

return [

'multi' => [
    'user' => [
        'driver' => 'eloquent',
        'model'  => App\User::class,
        'table'  => 'mesas'
    ],
    'admin' => [
        'driver' => 'eloquent',
        'model'  => App\Admin::class,
        'table'  => 'oferente'
    ]
 ],
];
