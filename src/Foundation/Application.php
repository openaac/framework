<?php

namespace pandaac\Framework\Foundation;

use Illuminate\Foundation\Application as BaseApplication;

class Application extends BaseApplication
{
    /**
     * Bind all of the application paths in the container.
     *
     * @return void
     */
    protected function bindPathsInContainer()
    {
        parent::bindPathsInContainer();

        $this->instance('path.routes', $this->routesPath());
    }

    /**
     * Get the path to the application "app" directory.
     *
     * @param  string  $path Optionally, a path to append to the app path
     * @return string
     */
    public function path($path = '')
    {
        $path = ($path ? DIRECTORY_SEPARATOR.$path : $path);

        return $this->basePath.DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR.'app'.$path;
    }

    /**
     * Get the path to the application routes files.
     *
     * @param  string  $path Optionally, a path to append to the config path
     * @return string
     */
    public function routesPath($path = '')
    {
        $path = ($path ? DIRECTORY_SEPARATOR.$path : $path);

        return $this->basePath.DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR.'routes'.$path;
    }

    /**
     * Get the path to the application configuration files.
     *
     * @param  string  $path Optionally, a path to append to the config path
     * @return string
     */
    public function configPath($path = '')
    {
        $path = ($path ? DIRECTORY_SEPARATOR.$path : $path);

        return $this->basePath.DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR.'config'.$path;
    }

    /**
     * Get the path to the bootstrap cache directory.
     *
     * @param  string  $path Optionally, a path to append to the bootstrap path
     * @return string
     */
    public function bootstrapCachePath($path = '')
    {
        $path = ($path ? DIRECTORY_SEPARATOR.$path : $path);
        
        return $this->storagePath().DIRECTORY_SEPARATOR.'bootstrap'.$path;
    }

    /**
     * Get the path to the cached services.php file.
     *
     * @return string
     */
    public function getCachedServicesPath()
    {
        return $this->bootstrapCachePath('services.php');
    }

    /**
     * Get the path to the cached packages.php file.
     *
     * @return string
     */
    public function getCachedPackagesPath()
    {
        return $this->bootstrapCachePath('packages.php');
    }

    /**
     * Get the path to the configuration cache file.
     *
     * @return string
     */
    public function getCachedConfigPath()
    {
        return $this->bootstrapCachePath('config.php');
    }

    /**
     * Get the path to the routes cache file.
     *
     * @return string
     */
    public function getCachedRoutesPath()
    {
        return $this->bootstrapCachePath('routes.php');
    }
}
