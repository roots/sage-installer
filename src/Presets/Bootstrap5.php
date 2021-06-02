<?php

namespace Roots\Sage\Installer\Presets;

class Bootstrap5 extends Preset
{
    /** {@inheritdoc} */
    protected function updatePackagesArray(array $packages)
    {
        $packages['dependencies']['bootstrap'] = 'v5.0.1';
        // (popper.js already included)

        return $packages;
    }
}
