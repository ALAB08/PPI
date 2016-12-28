

<?php
/**
	$file = 'partner_images/msods.docx';
	header('Content-type: application/pdf');
	header('Content-Disposition: inline; filename="'. $file .'"');
	header('Content-Transfer-Encoding: binary');
	header('Accept-Ranges: bytes');
	@readfile($file);
	*/

	header('Content-disposition: inline');
header('Content-type: application/msword'); // not sure if this is the correct MIME type
readfile('partner_images/msods.docx');
exit;
?>