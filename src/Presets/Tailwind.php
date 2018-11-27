<?php

namespace Roots\Sage\Installer\Presets;

class Tailwind extends Preset
{
    /** {@inheritdoc} */
    protected function updatePackagesArray(array $packages)
    {
        $packages['devDependencies']['tailwindcss'] = '^0.6.5';

        return $packages;
    }
}
