<?php
namespace Arillo\Alpine;

use SilverStripe\Admin\LeftAndMainExtension;
use SilverStripe\Core\Extension;
use SilverStripe\View\Requirements;

// class CMSMainExtension extends LeftAndMainExtension
class AlpineExtension extends Extension
{
    public function init()
    {
        Requirements::javascript(
            'arillo/silverstripe-cms-alpine: client/alpinejs@3.12.3_dist_cdn.min.js',
            ['defer' => true]
        );
    }
}
