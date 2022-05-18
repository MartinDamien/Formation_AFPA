<?php
define( 'USERNAME_REGEX',	'%[^a-z0-9\-\[\]\.\_=!\$\%\^&*(){}?@#$+\'"\/]+%is' );
define( 'EMAIL_REGEX',		'%[a-z0-9._-]+@[a-z0-9_-]+\.[a-z.]+%i' );

//definition du cookie
define( 'COOKIE_TIMEOUT', (52*7*60*60) ); //cookie parametreé à 1ans par defaut

//current time
if( !defined( 'TIME_NOW' ) )
	define( 'TIME_NOW', time() );
