<?php

namespace Ismaelet\Google\Analytics;

use \DB;
use \HttpResponse;

class Api {
	public static function initialize() {
		$googleMeasurementId = vendorConfig('google-analytics-measurement-id');

		View::$inlineScripts[] =
			'<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=' . $googleMeasurementId . '"></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag(\'js\', new Date());

	gtag(\'config\', ' . $googleMeasurementId . ');
</script>';
	}
}
