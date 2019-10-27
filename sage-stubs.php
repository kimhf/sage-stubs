<?php

namespace App\Controllers {
    class App extends \Sober\Controller\Controller
    {
        public function siteName()
        {
        }
        public static function title()
        {
        }
    }
    class FrontPage extends \Sober\Controller\Controller
    {
    }
}
namespace Roots\Sage\Assets {
    /**
     * Interface ManifestInterface
     * @package Roots\Sage
     * @author QWp6t
     */
    interface ManifestInterface
    {
        /**
         * Get the cache-busted filename
         *
         * If the manifest does not have an entry for $asset, then return $asset
         *
         * @param string $asset The original name of the file before cache-busting
         * @return string
         */
        public function get($asset);
        /**
         * Get the cache-busted URI
         *
         * If the manifest does not have an entry for $asset, then return URI for $asset
         *
         * @param string $asset The original name of the file before cache-busting
         * @return string
         */
        public function getUri($asset);
    }
    /**
     * Class JsonManifest
     * @package Roots\Sage
     * @author QWp6t
     */
    class JsonManifest implements \Roots\Sage\Assets\ManifestInterface
    {
        /** @var array */
        public $manifest;
        /** @var string */
        public $dist;
        /**
         * JsonManifest constructor
         *
         * @param string $manifestPath Local filesystem path to JSON-encoded manifest
         * @param string $distUri Remote URI to assets root
         */
        public function __construct($manifestPath, $distUri)
        {
        }
        /** @inheritdoc */
        public function get($asset)
        {
        }
        /** @inheritdoc */
        public function getUri($asset)
        {
        }
    }
}
namespace Roots\Sage {
    class Config extends \Illuminate\Config\Repository
    {
        protected static $instance;
    }
    class Container extends \Illuminate\Container\Container
    {
    }
}
namespace Roots\Sage\Template {
    /**
     * Class BladeProvider
     *
     * @method bool exists(string $view) Determine if a given view exists.
     * @method mixed share(array|string $key, mixed $value = null)
     * @method array creator(array|string $views, \Closure|string $callback)
     * @method array composer(array|string $views, \Closure|string $callback)
     * @method \Illuminate\View\View file(string $file, array $data = [], array $mergeData = [])
     * @method \Illuminate\View\View make(string $file, array $data = [], array $mergeData = [])
     * @method \Illuminate\View\View addNamespace(string $namespace, string|array $hints)
     * @method \Illuminate\View\View replaceNamespace(string $namespace, string|array $hints)
     * @method \Illuminate\Contracts\Container\Container getContainer()
     */
    class Blade
    {
        /** @var Factory */
        protected $env;
        public function __construct(\Illuminate\Contracts\View\Factory $env)
        {
        }
        /**
         * Get the compiler
         *
         * @return \Illuminate\View\Compilers\BladeCompiler
         */
        public function compiler()
        {
        }
        /**
         * @param string $view
         * @param array  $data
         * @param array  $mergeData
         * @return string
         */
        public function render($view, $data = [], $mergeData = [])
        {
        }
        /**
         * @param string $file
         * @param array  $data
         * @param array  $mergeData
         * @return string
         */
        public function compiledPath($file, $data = [], $mergeData = [])
        {
        }
        /**
         * @param string $file
         * @return string
         */
        public function normalizeViewPath($file)
        {
        }
        /**
         * Convert path to view namespace
         *
         * @param string $path
         * @return string
         */
        public function applyNamespaceToPath($path)
        {
        }
        /**
         * Pass any method to the view Factory instance.
         *
         * @param  string $method
         * @param  array  $params
         * @return mixed
         */
        public function __call($method, $params)
        {
        }
    }
    /**
     * Class BladeProvider
     */
    class BladeProvider extends \Illuminate\View\ViewServiceProvider
    {
        /**
         * @param ContainerContract $container
         * @param array             $config
         * @SuppressWarnings(PHPMD.StaticAccess)
         */
        public function __construct(\Illuminate\Contracts\Container\Container $container = null, $config = [])
        {
        }
        /**
         * Bind required instances for the service provider.
         */
        public function register()
        {
        }
        /**
         * Register Filesystem
         */
        public function registerFilesystem()
        {
        }
        /**
         * Register the events dispatcher
         */
        public function registerEvents()
        {
        }
        /**
         * Register the view finder implementation.
         */
        public function registerViewFinder()
        {
        }
    }
    class FileViewFinder extends \Illuminate\View\FileViewFinder
    {
        const FALLBACK_PARTS_DELIMITER = '-';
        /**
         * Get an array of possible view files from a single file name.
         *
         * @param  string  $name
         * @return array
         */
        public function getPossibleViewFiles($name)
        {
        }
        /**
         * Get an array of possible view files from an array of templates
         *
         * @param array $templates
         * @return array
         */
        public function getPossibleViewFilesFromTemplates($templates)
        {
        }
    }
}
namespace App {
    /**
     * Get the sage container.
     *
     * @param string $abstract
     * @param array  $parameters
     * @param Container $container
     * @return Container|mixed
     */
    function sage($abstract = null, $parameters = [], \Roots\Sage\Container $container = null)
    {
    }
    /**
     * Get / set the specified configuration value.
     *
     * If an array is passed as the key, we will assume you want to set an array of values.
     *
     * @param array|string $key
     * @param mixed $default
     * @return mixed|\Roots\Sage\Config
     * @copyright Taylor Otwell
     * @link https://github.com/laravel/framework/blob/c0970285/src/Illuminate/Foundation/helpers.php#L254-L265
     */
    function config($key = null, $default = null)
    {
    }
    /**
     * @param string $file
     * @param array $data
     * @return string
     */
    function template($file, $data = [])
    {
    }
    /**
     * Retrieve path to a compiled blade view
     * @param $file
     * @param array $data
     * @return string
     */
    function template_path($file, $data = [])
    {
    }
    /**
     * @param $asset
     * @return string
     */
    function asset_path($asset)
    {
    }
    /**
     * @param string|string[] $templates Possible template files
     * @return array
     */
    function filter_templates($templates)
    {
    }
    /**
     * @param string|string[] $templates Relative path to possible template files
     * @return string Location of the template
     */
    function locate_template($templates)
    {
    }
    /**
     * Determine whether to show the sidebar
     * @return bool
     */
    function display_sidebar()
    {
    }
}
namespace {
    /**
     * Helper function for prettying up errors
     * @param string $message
     * @param string $subtitle
     * @param string $title
     */
    $sage_error = \null;
}