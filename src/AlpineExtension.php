<?php

namespace Arillo\Alpine;

use SilverStripe\Core\Extension;
use SilverStripe\View\Requirements;

/**
 * Extension to inject Alpine.js into SilverStripe CMS
 */
class AlpineExtension extends Extension
{
    public function onBeforeInit()
    {
        Requirements::javascript(
            'arillo/silverstripe-cms-alpine:client/alpinejs@3.12.3_dist_cdn.min.js',
            ['defer' => true]
        );
    }
}
