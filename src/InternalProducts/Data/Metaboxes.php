<?php
/**
 * Registers the metabox field.
 */

namespace OWC\PDC\InternalProducts\Data;

use OWC\PDC\Base\Foundation\Plugin;

/**
 * Registers the metabox field.
 *
 * This is achieved based on the config key "metaboxes.internaldata".
 */
class Metaboxes
{

    /**
     * Instance of the Plugin.
     *
     * @var Plugin
     */
    private $plugin;

    /**
     * Dependency injection of the plugin, for future use.
     *
     * @param Plugin $plugin
     */
    public function __construct(Plugin $plugin)
    {
        $this->plugin = $plugin;
    }

    /**
     * Register metaboxes for internal data into pdc-base plugin.
     *
     * @param Plugin $basePlugin
     */
    public function register(Plugin $basePlugin)
    {
        $basePlugin->config->set('metaboxes.internaldata', $this->plugin->config->get('metaboxes.internaldata'));
    }
}
