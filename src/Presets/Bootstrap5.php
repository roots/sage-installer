<?php

namespace Roots\Sage\Installer\Presets;

class Bootstrap5 extends Preset
{
    /** {@inheritdoc} */
    protected function updatePackagesArray(array $packages)
    {
        $packages['dependencies']['bootstrap'] = 'v5.0.1';
        $packages['dependencies']['@popperjs/core'] = '^2.9.2';
        return $packages;
    }
}
