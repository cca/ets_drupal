(function ($) {

  // This is the shortened form of $(document).ready().
  $(function() {

    // help desk form campus building and lab options
  	$oakBuildingOptions = $('.webform-component--oakland-building-options').hide();
    $oakLabOptions = $('.webform-component--oakland-lab-options').hide();
  	$sfBuildingOptions = $('.webform-component--sf-building-options').hide();
    $sfLabOptions = $('.webform-component--sf-lab-options').hide();
  	$labCheck = $('.webform-component--lab-check').hide();

  	$('.webform-component--campus, .webform-component--lab-check').change(function() {

			var campusValue = $( "input:radio:checked" ).val();
      var labValue = $(".webform-component--lab-check input:radio:checked").val();

			$labCheck.show();

			if (campusValue == 'Oakland') {
				$sfBuildingOptions.hide();
        $sfLabOptions.hide();
				$oakBuildingOptions.show();
        $labOptions = $oakLabOptions;
			} else {
				$oakBuildingOptions.hide();
        $oakLabOptions.hide();
				$sfBuildingOptions.show();
        $labOptions = $sfLabOptions;
			}

      if (labValue == 'yes') {
        $labOptions.show();
      } else {
        $labOptions.hide();
      }

  	});

  });
})(jQuery);
