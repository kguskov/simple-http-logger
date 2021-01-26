<?php
return [
    /*
     * Enable/disable logging
     */
    'enable' => true,

    /*
     * Filter out body fields which will never be logged.
     */
    'except' => [
        'password',
        'confirmation',
        'token'
    ],

];
