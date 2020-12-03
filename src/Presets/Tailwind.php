<?php

namespace Roots\Sage\Installer\Presets;

class Tailwind extends Preset
{
    /** {@inheritdoc} */
    protected function updatePackagesArray(array $packages)
    {
        $packages['devDependencies']['tailwindcss'] = '^2.0.1';

        return $packages;
    }
}
