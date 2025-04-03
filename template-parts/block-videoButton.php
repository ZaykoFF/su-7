<?php
/**
 * Template part for displaying videoButton block
 *
 * @package SU-7
 */

?>

<?php
	global $post;
	$slug = $post->post_name;
	$post_type = $post->post_type;
	if($slug == 'visotka-na-borovoy' OR $post_type == 'borovaya-rooms') {
	    $video_link = get_field('видео', 23);
	}
	if($slug == 'kommunar') {
	    $video_link = get_field('видео', 1233);
	}
	if($slug == 'dinastia') {
	    $video_link = get_field('видео', 1370);
	}
	if($slug == 'bit') {
	    $video_link = get_field('видео', 1480);
	}
	if($slug == 'prityashenie'){
		$video_link = get_field('видео', 1024);
	}
?>

<div class="videoButton">
    <span class="videoButton-text">Смотри</span>
    <span class="videoButton-text">видео</span>
</div>

<div class="videoContainer">
    <div class="videoContainer-content">
	<div>
		<video class="see-preview" controls width="100%">
		<source src="<?php echo $video_link; ?>" type="video/mp4" />
		</video>
	</div>
    </div>
</div>
