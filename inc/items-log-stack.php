<?php
/* SETUP CHILD BE | 1.0.0 | 201215 | inc/items-log-stack.php
---------------------------------------------------------------------------------------------------- */
/**
 * Items-Log-Stack
 *
 * @package      Setup Child
 * @author       Mark Corpuz
 * @since        1.0.0
 * @license      GPL-2.0+
**/

/**
 * NOTE: To see the constantly evolving structure, visit the link below
 * https://www.dropbox.com/s/rl5rogga8aip9kl/SETUP_layout-structure-overview.svg?dl=0
 */


// OVERVIEW OF HTML STRUCTURE
// 
// DATE
// <div class="item log date"></div>


/**
 * DATE
 *
 */

function setup_child_log_stack_date() {
	$log_date = get_field( 'log_date' );
	if( !empty( $log_date ) )
		return '<div class="item log date">' . date( 'd M Y', strtotime( $log_date ) ) . '</div>';	
}


/**
 * TIME
 *
 */

function setup_child_log_stack_time() {
	$log_time = get_field( 'log_time' );
	if( !empty( $log_time ) )
		return '<div class="item log code">' . date( 'd M Y', strtotime( $log_time ) ) . '</div>';	
}


/**
 * CODE
 *
 */

function setup_child_log_stack_code() {
	$log_code = get_field( 'log_code' );
	if( !empty( $log_code ) )
		return '<div class="item log code">' . $log_code . '</div>';
}


/**
 * LABEL
 *
 */

function setup_child_log_stack_label() {
	$log_label = get_field( 'log_label' );
	if( !empty( $log_label ) )
		return '<div class="item log label">' . $log_label . '</div>';
}


/**
 * TITLE
 *
 */

function setup_child_log_stack_title() {
	$log_title = get_field( 'log_title' );
	if( !empty( $log_title ) )
		return '<div class="item log title">' . $log_title . '</div>';
}


/**
 * SUMMARY
 *
 */

function setup_child_log_stack_summary() {
	$log_summary = get_field( 'log_summary' );
	if( !empty( $log_summary ) )
		return '<div class="item log summary">' . $log_summary . '</div>';
}


/**
 * INFO
 *
 */

function setup_child_log_stack_info() {
	$log_info = get_field( 'log_info' );
	if( !empty( $log_info ) )
		return '<div class="item log info">' . $log_info . '</div>';
}


/**
 * CTA
 *
 */

function setup_child_log_stack_cta() {
	$log_cta = get_field( 'log_cta' );
	if( !empty( $log_cta ) )
		return '<div class="item log cta">' . $log_cta . '</div>';
}


/**
 * USER
 *
 */

function setup_child_log_stack_user() {
	$log_user = get_field( 'log_user' );
	if( !empty( $log_user ) )
		return '<div class="item log user">' . $log_user . '</div>';
}


/**
 * LINK-EXTERNAL (URL)
 *
 */

function setup_child_log_stack_link_ext_url() {
	// EXTERNAL LINK
	$log_link_external = get_field( 'log_link' );
	if( !empty( $log_link_external ) )
		return '<a href="' . $log_link_external . '" class="item log link">' . $log_link_external . '</a>';
}

/**
 * LINK INTERNAL (URL)
 *
 */

function setup_child_log_stack_link_int_url() {
	// INTERNAL LINK
	$log_link_internal = get_field( 'log_link_internal' );
	if( is_array( $log_link_internal ) ) {

		if( count( $log_link_internal ) > 1 ) {
			return '<div>Error: Limit Log Link to 1 entry</div>';
		} else {
			foreach( $log_link_internal as $val ) {
				return '<a href="' . get_the_permalink( $val ) . '" class="item log link">' . get_the_permalink( $val ) . '</a>';
			}
		}
	}
}




















/**
 * LINK (NO TITLE)
 *
 */

function setup_child_log_link() {
	// EXTERNAL LINK
	$log_link = get_field( 'log_link' );
	if( !empty( $log_link ) )
		return '<a href="' . $log_link . '" class="item log link">LINK</a>';
}


/**
 * LINK (DYNAMIC TITLE)
 *
 */

function setup_child_log_link_dynamic() {
	// EXTERNAL LINK
	$log_link = get_field( 'log_link' );
	if( !empty( $log_link ) )
		return '<a class="item log link" href="' . $log_link . '">'.get_the_title( $val ).'</a>';
}


/**
 * LINK EXTERNAL (NO TITLE)
 *
 */

function setup_child_log_link_external() {
	// INTERNAL LINK
	$internal_link = get_field( 'log_link_internal' );
	if( is_array( $internal_link ) ) {

		if( count( $internal_link ) > 1 ) {
			return '<div>Error: Log Link Internal should only have 1 entry.</div>';
		} else {
			foreach( $internal_link as $val ) {
				return '<a href="'.get_the_permalink( $val ).'" class="item log link">LINK</a>';
			}
		}
	}
}


/**
 * LINK (DYNAMIC TITLE)
 *
 */

function setup_child_log_link_external_dynamic() {
	// INTERNAL LINK
	$internal_link = get_field( 'log_link_internal' );
	if( is_array( $internal_link ) ) {

		if( count( $internal_link ) > 1 ) {
			return '<div>Log Link Internal should only have 1 entry.</div>';
		} else {
			foreach( $internal_link as $val ) {
				return '<a class="item log link" href="'.get_the_permalink( $val ).'">'.get_the_title( $val ).'</a>';
			}
		}	
	}
}