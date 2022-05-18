<?php

define('USERNAME_REGEX',    '%[^a-z0-9\-\[\]\.\_=!\$\%\^&*(){}?@#$+\'"\/]+%is');
define('EMAIL_REGEX',        '%[a-z0-9._-]+@[a-z0-9_-]+\.[a-z.]+%i');

//definition du cookie
define('COOKIE_TIMEOUT', (52 * 7 * 60 * 60)); //cookie parametreé à 1ans par defaut

//current time
if (!defined('TIME_NOW'))
    define('TIME_NOW', time());


class UserLogin
{
    // La base de donnée a utiliser
    private $db = $pdo;

    //The user's userinfo in an array
    public $userinfo = NULL;

    //a string holding the cookie prefix
    private $cookie_prefix = '';

    //an entry holding the DB wildcard
    private $table_wildcard = '';

    //user is logged into the system
    private $logged_in = false;

    //user privelige level
    private $user_level = 0;

    //logout hash - used to verify logout requests
    private $logout_hash = '';

    //array to hold all of the errors 
    private $errors = NULL;

    //The various user levels
    // const LEVEL_PENDING = 0; //User is still pending email confirmation
    const LEVEL_USER = 1; //Standard user with normal privaleges
    const LEVEL_MODERATOR = 2; //Special case users with higher privaleges
    const LEVEL_ADMIN = 3; //Administrators with all privaleges

    //Password flags
    const PW_NONE            = 0;    //Password is default unencoded
    const PW_MD5             = 1;    //Password has been ecoded to MD5 already
    const PW_SALT             = 2;    //Password has been salted already

    function __construct($db = $pdo, $cookie_prefix = 'usr', $table_wildcard = '%t')
    {
        //make sure a valid DB was supplied	
        if ($db == NULL)
            throw new Exception('UserLogin: Database object was invalid!');

        $this->cookie_prefix = $cookie_prefix;
        $this->table_wildcard = $table_wildcard;
        $this->db = &$db;
        $this->errors = array();
    }
}
