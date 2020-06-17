<?php
/**
 * @package Test_alvi
 * @version 1.1
 */
/*
Plugin Name: Test_alvi

Description: This is not just a plugin, it is hope
Version: 1.1
*/


require __DIR__ . '/appsero/src/Client.php';



/**
 * Initialize the plugin tracker
 *
 * @return void
 */

 /**
  * Initialize the plugin tracker
  *
  * @return void
  */

 /**
  * Initialize the plugin tracker
  *
  * @return void
  */

 /**
  * Initialize the plugin tracker
  *
  * @return void
  */

 /**
  * Initialize the plugin tracker
  *
  * @return void
  */

 /**
  * Initialize the plugin tracker
  *
  * @return void
  */

 /**
  * Initialize the plugin tracker
  *
  * @return void
  */
 function appsero_init_tracker_test_new_connect() {

     if ( ! class_exists( 'Appsero\Client' ) ) {
       require_once __DIR__ . '/appsero/src/Client.php';
     }

     $client = new Appsero\Client( 'eac606ed-6303-4fa2-82e1-ec7282c11c6b', 'Test_new_connect', __FILE__ );

     // Active insights
     $client->insights()->init();

     // Active automatic updater
     $client->updater();

     // Active license page and checker
     $args = array(
         'type'       => 'options',
         'menu_title' => 'Test_new_connect',
         'page_title' => 'Test_new_connect Settings',
         'menu_slug'  => 'test_new_connect_settings',
     );
     $client->license()->add_settings_page( $args );

 }

 appsero_init_tracker_test_new_connect();


function hello_dolly_get_lyric() {
	/** These are the lyrics to Hello Dolly */
	$lyrics = "I have nothing left to give
I have found the perfect end
You were made to make it hurt
Disappear into the dirt
Carry me to heaven's arms
Light the way and let me go
Take the time to take my breath
I will end where I began
And I will find the enemy within
'Cause I can feel it crawl beneath my skin
Dear Agony
Just let go of me
Suffer slowly
Is this the way it's got to be?
Dear Agony
Suddenly
The lights go out
Let forever
Drag me down
I will fight for one last breath
I will fight until the end
And I will find the enemy within
'Cause I can feel it crawl beneath my skin
Dear Agony
Just let go of me
Suffer slowly
Is this the way it's got to be?
Don't bury me
Faceless enemy
I'm so sorry
Is this the way it's gotta be?
Dear Agony";

	// Here we split it into lines.
	$lyrics = explode( "\n", $lyrics );

	// And then randomly choose a line.
	return wptexturize( $lyrics[ mt_rand( 0, count( $lyrics ) - 1 ) ] );
}

// This just echoes the chosen line, we'll position it later.
function hello_dolly() {
	$chosen = hello_dolly_get_lyric();
	$lang   = '';
	if ( 'en_' !== substr( get_user_locale(), 0, 3 ) ) {
		$lang = ' lang="en"';
	}

	printf(
		'<p id="dolly"><span class="screen-reader-text">%s </span><span dir="ltr"%s>%s</span></p>',
		__( 'Quote from Hello Dolly song, by Jerry Herman:', 'hello-dolly' ),
		$lang,
		$chosen
	);
}

// Now we set that function up to execute when the admin_notices action is called.
add_action( 'admin_notices', 'hello_dolly' );

// We need some CSS to position the paragraph.
function dolly_css() {
	echo "
	<style type='text/css'>
	#dolly {
		float: right;
		padding: 5px 10px;
		margin: 0;
		font-size: 12px;
		line-height: 1.6666;
	}
	.rtl #dolly {
		float: left;
	}
	.block-editor-page #dolly {
		display: none;
	}
	@media screen and (max-width: 782px) {
		#dolly,
		.rtl #dolly {
			float: none;
			padding-left: 0;
			padding-right: 0;
		}
	}
	</style>
	";
}

add_action( 'admin_head', 'dolly_css' );
