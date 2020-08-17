<?php

return [
    /**
     * If favorites are enabled, migrations and routes for this feature
     * will be enabled as well. Defaults to false
     */
    'search_favorites_enabled' => env('SEARCH_FAVORITES_ENABLED', false) === true,
];
