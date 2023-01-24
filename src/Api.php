<?php

namespace Ismaelet\Google\Analytics;

use \View;

class Api {

	private const DEBUGGING = false;

	public static function initialize() {
		if (!in_array($_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1']) || self::DEBUGGING) {
			$googleMeasurementId = vendorConfig('google-analytics-measurement-id');

			View::$headInlineScripts[] =
				'<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=' . $googleMeasurementId . '"></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag(\'js\', new Date());

	gtag(\'config\', \'' . $googleMeasurementId . '\');
</script>';
		}
	}
}
