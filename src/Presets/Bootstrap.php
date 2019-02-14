<?php

namespace Roots\Sage\Installer\Presets;

class Bootstrap extends Preset
{
    /** {@inheritdoc} */
    protected function updatePackagesArray(array $packages)
    {
        $packages['dependencies']['bootstrap'] = 'v4.3.1';
        $packages['dependencies']['popper.js'] = '^1.14.7';
        return $packages;
    }
}
