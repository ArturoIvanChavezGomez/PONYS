<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'teacher' => [
            'users' => 'c,r,u,d',
            'subjects' => 'c,r,u,d',
            'groups' => 'c,r,u,d',
            'resources' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'student' => [
            'profile' => 'r,u',
        ],
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
