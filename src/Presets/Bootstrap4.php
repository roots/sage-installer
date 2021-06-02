<?php

namespace Roots\Sage\Installer\Presets;

class Bootstrap4 extends Preset
{
    /** {@inheritdoc} */
    protected function updatePackagesArray(array $packages)
    {
        $packages['dependencies']['bootstrap'] = 'v4.6.0';
        $packages['dependencies']['popper.js'] = '^1.16.1';
        return $packages;
    }
}
