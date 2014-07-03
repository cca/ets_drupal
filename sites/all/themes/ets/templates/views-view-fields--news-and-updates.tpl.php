<?php
//Pull in views content
$news_title = $fields['title']->content;
$news_teaser = $fields['teaser']->content;
$news_cat = $fields['name']->content;
$node_link = $fields['view_node']->content;
$nid = $fields['nid']->content;
//$author = $fields['name']->content;
$date = $fields['created']->content;
$image_url = $fields['field_image_fid']->content;
$embed = $fields['field_embed_code_value']->content;
//$first = $fields['value']->content;
//$last = $fields['value_1']->content;
//$user = $first . ' ' . $last;

// scale down embedded media to fit in our template 400 x 300
if (eregi('youtube', $embed)) {
  $embed = ets_embed_youtube($embed, 400, 300);
}

print '<h1><a href="'.url("node/{$nid}").'">'.$news_title.' </a></h1><p class="newsdate">'.$date.'</p>';
//print '<p>by <a href="/about/news/user/'.$author.'">'.$user.'</a> on '.$date.'</p>';

if ($image_url) {
	// add image preset logic
	// constrain whichever dimension is largest
	$image_size = getimagesize($image_url);
	if ($image_size[0] > $image_size[1]) {
		print '<p><a href="'.url("node/{$nid}").'">' . theme('imagecache', '400wide', $image_url) . '</a></p>';
	} 
	else {
		print '<p><span style="float:left;margin: 2px 10px 5px 0;"><a href="'.url("node/{$nid}").'">' . theme('imagecache', '200wide',$image_url) . '</a></span></p>';
	}
}
elseif ($embed) {
  	print '<p>' . $embed . '</p>';
}

print $news_teaser;

$sql = "SELECT * FROM node WHERE nid = '$nid'";
$result = db_fetch_object(db_query($sql));
print '<p class="tags">Tags: ' . ets_get_tags($result, 'news') . '</p>';

print '<p class="readmore">'.$node_link.'</p><br>';
print '<hr />';

?>