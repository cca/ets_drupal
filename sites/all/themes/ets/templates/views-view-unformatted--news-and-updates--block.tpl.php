<?php
//Get news view field variables
foreach ($view->result as $field){
$news_cat[] = $field->term_data_name;
}

for ($i=0; $i<sizeof($rows); $i++){
	if ($news_cat[$i] != $news_cat[$i-1]){
		print $rows[$i];
	}
}
?>