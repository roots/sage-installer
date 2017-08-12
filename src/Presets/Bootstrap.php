<?php

namespace Roots\Sage\Installer\Presets;

class Bootstrap extends Preset
{
    /** {@inheritdoc} */
    protected function updatePackagesArray(array $packages)
    {
        $packages['dependencies']['bootstrap'] = '^4.0.0-beta';
        $packages['dependencies']['popper.js'] = '~1.11';
        return $packages;
    }
}
