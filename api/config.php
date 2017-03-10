<?php
    /**
     * Your Twitter App Info
     */
    
    // Consumer Key
    define('CONSUMER_KEY', 'XXXXXXX');
    define('CONSUMER_SECRET', 'XXXXXXX');

    // User Access Token
    define('ACCESS_TOKEN', 'XXXXXXX');
    define('ACCESS_SECRET', 'XXXXXXX');
	
	// Cache Settings
	define('CACHE_ENABLED', false);
	define('CACHE_LIFETIME', 3600); // in seconds
	define('HASH_SALT', md5(dirname(__FILE__)));