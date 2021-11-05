<?php

namespace Jezzdk\StatamicGoogleMaps;

use Jezzdk\StatamicGoogleMaps\Helpers\MapHelper;
use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $tags = [
        \Jezzdk\StatamicGoogleMaps\Tags\Map::class,
        \Jezzdk\StatamicGoogleMaps\Tags\MapScript::class,
    ];

    protected $scripts = [
        __DIR__ . '/../dist/js/map.js',
    ];

    protected $fieldtypes = [
        \Jezzdk\StatamicGoogleMaps\Fieldtypes\GoogleMap::class,
    ];

    public function boot()
    {
        $this->externalScripts = [
            MapHelper::googleMapsScriptUrl()
        ];

        $this->publishes([
          __DIR__.'/../config/google_maps.php' => config_path('google_maps.php'),
        ]);

        parent::boot();
    }
}
