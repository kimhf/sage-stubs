<?php

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