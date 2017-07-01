<?php

namespace Roots\Sage\Installer\Presets;

class Foundation extends Preset
{
    /** {@inheritdoc} */
    protected function updatePackagesArray(array $packages)
    {
        unset(
            $packages['dependencies']['bootstrap'],
            $packages['dependencies']['tachyons-sass']
        );
        $packages['dependencies']['foundation-sites'] = '^6.4.0';
        return $packages;
    }
}
