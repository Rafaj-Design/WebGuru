<script type="text/javascript">

function verifyLink(id) {
	
}

function switchUploadTab(id) {
	for (var i = 0; i < 3; i++) {
		//alert(id + ' - ' + i);
		var liName = '#popupUploadSelectorLi' + i;
		var fieldName = '#fieldSet' + i;
		//alert(liName);
		if (i == id) {
			$(liName).addClass('active');
			$(fieldName).show();
		}
		else {
			$(liName).removeClass('active');
			$(fieldName).hide();
		}
	}
}

function toggleEdit(element) {
	$('#' + element).toggle("fast", function() {
		
	});
	return false;
}

function clickUploadButton() {
	$('#ipaFile').click();
	return false;
}

function startUploadingApp() {
	$('#uploadIpaFileBuildSelectBox').hide();
	$('#uploadIpaFileButton').hide();
	$('#infoText').show();
	$('#infoTextProgressBar').show();
	$('#submitAppDataButton').click();
}

function togglePopupWindow() {
	$('.popupWindowShadow').toggle("slow", function() {
		if ($('.popupWindowShadow').is(':visible') == true) {
			$('.popupWindow').fadeIn("slow", function() {
			
			});
		}
		else {
			$('.popupWindow').fadeOut("fast", function() {
			
			});
		}
	});
	return false;
}

</script>