<?php
//Get blogs view field variables
foreach ($view->result as $field){
//$first_name[] = $field->profile_values_profile_first_name_value;
//$last_name[] = $field->profile_values_profile_last_name_value;
$nid[] = $field->nid;
}
?>

<div id="newslist">
<?php
for ($i=0; $i<sizeof($rows); $i++){
	if ($nid[$i] != $nid[$i-1]){
		print $rows[$i];
	}
}
?>
</div>