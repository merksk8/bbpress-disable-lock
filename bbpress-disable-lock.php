<?php

/*
 Code by Merksk8
 GitHub=> https://github.com/merksk8/
 Website=> https://codecomas.com
 */

function bbp_disable_lock($retval, $cur_time, $lock_time, $post_date_gmt){

	return false;

}

add_filter( 'bbp_past_edit_lock', 'bbp_disable_lock', 1, 4);

?>