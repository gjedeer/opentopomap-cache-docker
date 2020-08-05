<?php

# Define supported layers, the first being a fallback
$layers = array (
	'opentopo'	=> 'https://{s}.tile.opentopomap.org',		// e.g. https://a.tile.openstreetmap.org/16/32752/21788.png
	'refuges' => 'https://maps.refuges.info/otm',
);

## Other parameters

# How long tiles are kept before being considered stale
$expiryDays = 14;

# The hour (out of 24) in which clearout of stale tiles from the cache can be triggered
$garbageCollectionHour = 3;

# User agent
$userAgent = "CycleStreets tilecache at http://{$_SERVER['SERVER_NAME']}/ Contact: http://www.cyclestreets.net/contacts/";

# Fallback handling - if omitted, the first $layer will be used
$fallback = array (
        // 'from' => 'to',
	'opentopo' => 'refuges',
);

# Timeout for tile requests before fallback is tried
$timeout = 10;

# Supported scales
$scales = array (1, 1.5, 2, 3, );

# Servers supporting native retina tiles
$nativeRetinaTiles = array (
	'opencyclemap'	=> array (2, ),	// e.g. https://a.tile.thunderforest.com/cycle/18/128676/81699@2x.png
	'outdoors'	=> array (2, ),	// e.g. https://a.tile.thunderforest.com/outdoors/18/128676/81699@2x.png
);

# API key parameters
$thunderforestApiKeyString = 'apikey=' . 'YOUR_API_KEY';
$apiKeyParameters = array (
	'opencyclemap'	=> $thunderforestApiKeyString,
	'outdoors'	=> $thunderforestApiKeyString,
);

