<?php

namespace OpenAAC\Framework\Foundation\Bootstrap;

use Illuminate\Support\Str;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Foundation\Bootstrap\LoadConfiguration as BaseConfiguration;

class LoadConfiguration extends BaseConfiguration
{
    /**
     * Get all of the configuration files for the application.
     *
     * @param  \Illuminate\Contracts\Foundation\Application  $app
     * @return array
     */
    protected function getConfigurationFiles(Application $app)
    {
        $files = parent::getConfigurationFiles($app);

        list ($prefix, $framework) = [ 'framework.', [] ];

        foreach ($files as $key => $file) {
            if (! Str::startsWith($key, $prefix)) {
                continue;
            }

            $framework[Str::substr($key, strlen($prefix))] = $file;

            unset($files[$key]);
        }

        return array_merge($files, $framework);
    }
}
