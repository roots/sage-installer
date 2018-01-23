<?php

namespace Roots\Sage\Installer\Presets;

class Bootstrap extends Preset
{
    /** {@inheritdoc} */
    protected function updatePackagesArray(array $packages)
    {
        $packages['dependencies']['bootstrap'] = 'v4.0.0';
        $packages['dependencies']['popper.js'] = '^1.12.9';
        return $packages;
    }
}
