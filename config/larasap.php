<?php

return [

    'telegram' => [
        'api_token' => '',
        'bot_username' => '',
        'channel_username' => '', // Channel username to send message
        'channel_signature' => '', // This will be assigned in the footer of message
        'proxy' => false,   // True => Proxy is On | False => Proxy Off
    ],

    'twitter' => [
        'consurmer_key' => '',
        'consurmer_secret' => '',
        'access_token' => '',
        'access_token_secret' => ''
    ],

    'facebook' => [
        'app_id' => '272488550862776',
        'app_secret' => '3654db98020e49e85815f13f994dd4ac',
        'default_graph_version' => 'v8.0',
        'page_access_token' => 'EAAD3069Hj7gBAAOtiBbQuU3hTphtY0iyOMU01ZAqBD91BfuLDRS9n0QCt0VucTNAEWjZCaCDFYXNtI9jZB14cp9QxDbYsgZB5qLYXp39d52cFJoPCTXR8uBSI3mSwDo5yUidJVngIwiI2Lhgav3OCRC1aocQH7HsrcuDeZBz37QZDZD'
    ],

    // Set Proxy for Servers that can not Access Social Networks due to Sanctions or ...
    'proxy' => [
        'type' => '',   // 7 for Socks5
        'hostname' => '', // localhost
        'port' => '' , // 9050
        'username' => '', // Optional
        'password' => '', // Optional
    ]
];
