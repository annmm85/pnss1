<?php
return [
    //Класс аутентификации
    'auth' => \Src\Auth\Auth::class,
    //Клас пользователя
    'identity' => \Model\User::class,
    //Классы для middleware
    'routeMiddleware' => [
        'auth' => \Middlewares\AuthMiddleware::class,
        'sotrudnik' => \Middlewares\SotrudnikMiddleware::class,
        'admin' => \Middlewares\AdminMiddleware::class,
        'noAuth' => \Middlewares\NoAuthMiddleware::class,
    ],
    'validators' => [
        'required' => \Validators\RequireValidator::class,
        'unique' => \Validators\UniqueValidator::class,
        'number' => \Validators\NumberValidator::class,
        'language' => \Validators\LanguageValidator::class,
        'dater' => \Validators\DaterValidator::class,
    ],
    'routeAppMiddleware' => [
        'csrf' => \Middlewares\CSRFMiddleware::class,
        'trim' => \Middlewares\TrimMiddleware::class,
        'specialChars' => \Middlewares\SpecialCharsMiddleware::class,
    ],
];
