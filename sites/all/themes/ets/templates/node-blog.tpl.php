<?php
// node content
$body = $node->content['body']['#value'];
$image = $node->field_image[0];
$embed = $node->field_embed_code[0]['value'];
$node_path = $_GET['q'];
$node_id = explode("/", $node_path);
$node_id = $node_id[1];
$sql = "SELECT * FROM term_node WHERE nid = '$node_id'";
$term_id = db_fetch_object(db_query($sql))->tid;
$sql2 = "SELECT * FROM term_data WHERE tid = '$term_id'";
$term_name = db_fetch_object(db_query($sql2))->name;
/*$sql3 = "SELECT * FROM users WHERE uid = '$uid'";
$user_name = db_fetch_object(db_query($sql3))->name;*/

// formatting
$date = date('F j, Y g:i a', $node->created);
//$user = user_load(array('name'=>$node->name));
//$user =	$user->profile_first_name . ' ' . $user->profile_last_name;

// scale down embedded media to fit in our template 400 x 300
if (eregi('youtube', $embed)) {
  $embed = ets_embed_youtube($embed, 400, 300);
}
?>
<div id="newslist">

<?php
print '<p class="newsdate">'.$date.'</p>';

// images 
if ($image['filepath']) {
	// add image preset logic
    // constrain whichever dimension is largest
	$image_size = getimagesize($image['filepath']);
	if ($image_size[0] > $image_size[1]) {
  		print '<p>'.theme('imagecache', '400wide', $image['filepath']).'</p>';
  	}
  	else{
  		print '<p><span style="float:left;margin: 2px 10px 5px 0;">' . theme('imagecache', '200wide',$image['filepath']) . '</span></p>';
  	}
} elseif ($embed) {
  print '<p>' . $embed . '</p>';
}

print $body;
print '<hr style="margin: 10px 0 0 5px; clear: both;"/>';

if (taxonomy_node_get_terms($node)) {
  print '<p class="tags">Tags: ' . ets_get_tags($node, 'news') . '</p>';
}
?>
</div>