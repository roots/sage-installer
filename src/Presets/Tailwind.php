<?php

namespace Roots\Sage\Installer\Presets;

class Tailwind extends Preset
{
    /** {@inheritdoc} */
    protected function updatePackagesArray(array $packages)
    {
        $packages['devDependencies']['tailwindcss'] = '^1.0.0';

        return $packages;
    }
}
