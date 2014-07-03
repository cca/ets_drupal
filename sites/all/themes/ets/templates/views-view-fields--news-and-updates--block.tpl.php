<?php
$news_cat = $fields['name']->content;
$cat_url = str_replace(' ', '-', strtolower($news_cat));
print '<a href="/news/'.$cat_url.'">'.$news_cat.'</a>';
?>