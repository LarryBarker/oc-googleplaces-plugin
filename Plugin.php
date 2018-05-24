<?php namespace LmbDev\GooglePlaces;

use Backend;
use System\Classes\PluginBase;

/**
 * GooglePlaces Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'GooglePlaces',
            'description' => 'Adds Google Places AutoComplete form widget to backend.',
            'author'      => 'LMBdev',
            'icon'        => 'icon-keyboard-o'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'LmbDev\GooglePlaces\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'LmbDev.googleplaces.some_permission' => [
                'tab' => 'GooglePlaces',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'googleplaces' => [
                'label'       => 'GooglePlaces',
                'url'         => Backend::url('LmbDev/googleplaces/mycontroller'),
                'icon'        => 'icon-keyboard-o',
                'permissions' => ['LmbDev.googleplaces.*'],
                'order'       => 500,
            ],
        ];
    }
}
