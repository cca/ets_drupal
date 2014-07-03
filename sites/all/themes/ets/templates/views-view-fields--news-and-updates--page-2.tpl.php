<?php
//Pull in views content
$news_title = $fields['title']->content;
$news_teaser = $fields['teaser']->content;
$image_url = $fields['field_image_fid']->content;
$nid = $fields['nid']->content;

print '<span id="front-news">';
print '<p class="front-image">' . theme('imagecache', '130wide', $image_url) . '</p>';

print '<span class="front-text">';
print '<h3><a href="'.url("node/{$nid}").'">'.$news_title.' </a></h3>';
print strip_tags($news_teaser);
print '</span></span>';

?>