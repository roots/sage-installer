<?php

namespace Roots\Sage\Installer\Presets;

class Tailwind extends Preset
{
    /** {@inheritdoc} */
    protected function updatePackagesArray(array $packages)
    {
        $packages['devDependencies']['tailwindcss'] = '^2.0.1';
        $packages['devDependencies']['postcss'] = '^8.0.9';
        $packages['devDependencies']['autoprefixer'] = '^10.0.2';

        return $packages;
    }
}
