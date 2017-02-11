<?php
/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here. You can see a
 * list of the default settings in `vendor/craftcms/cms/src/config/defaults/general.php`.
 */

// Ensure our urls have the right scheme.
define( 'URI_SCHEME', ( isset( $_SERVER['HTTPS'] ) ) ? 'https://' : 'http://' );
// The site url.
define( 'SITE_URL',   URI_SCHEME . $_SERVER['SERVER_NAME'] . '/' );

return [
	'*' => array(
		'defaultWeekStartDay' => 1,
		'omitScriptNameInUrls' => true,
		'generateTransformsBeforePageLoad' => true,
		'environmentVariables' => array(
			'baseAssetsPath' => './uploads/',
			'baseAssetsUrl' => '/uploads/',
		),
		'siteUrl' => SITE_URL,
	),
	'local' => array(
		'devMode' => true,
		'testToEmailAddress' => 'connor.baer@me.com',
	),
	'*.co' => array(
		'devMode' => false,
	),
];