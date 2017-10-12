<?php

return [

	'client_id' => 'Af9GrUo4AMvPKkGyBSelibDuG8anSAP3wOZ2zq5W9oTTUzrX8s-knbE-cBgfZe7f1IVqHw7RXnZ_XA7H',
	'secret'    => 'EAIlQDPG7G8HDZjLuNyhrCtryttJGngACURd0TRQrLW0zmjoCMloZ8G30eH1zcsU7gVAtlAc5SncpZ1W',
	'settings'  => [
			'http.CURLOPT_CONNECTTIMEOUT' => 30,
			// can be set to sandbox / live
			'mode' => 'sandbox',
			'log.LogEnabled' => true,
			'log.FileName'   => storage_path().'/logs/paypal.php',
			'log.LogLevel'   => 'INFO',
	],
	
];