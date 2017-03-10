<?php
    /**
     * Your Twitter App Info
     */
    
    // Consumer Key
    define('CONSUMER_KEY', 'XXXXXXXX');
    define('CONSUMER_SECRET', 'XXXXXXXX');

    // User Access Token
    define('ACCESS_TOKEN', 'XXXXXXXX');
    define('ACCESS_SECRET', 'XXXXXXXX');
	
	// Cache Settings
	define('CACHE_ENABLED', false);
	define('CACHE_LIFETIME', 3600); // in seconds
	define('HASH_SALT', md5(dirname(__FILE__)));