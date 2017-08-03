<?php

namespace Roots\Sage\Installer\Presets;

class FontAwesome extends Preset
{
    public $addOn = true;

    /** {@inheritdoc} */
    protected function updatePackagesArray(array $packages)
    {
        $packages['dependencies']['font-awesome'] = '~4.7';
        return $packages;
    }
}
