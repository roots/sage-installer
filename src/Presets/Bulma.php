<?php

namespace Roots\Sage\Installer\Presets;

class Bulma extends Preset
{
    /** {@inheritdoc} */
    protected function updatePackagesArray(array $packages)
    {
        $packages['dependencies']['bulma'] = '^0.4.2';
        return $packages;
    }
}
