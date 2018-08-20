<?php
/**
 * Boots the rest API service provider.
 */

namespace OWC\PDC\InternalProducts\RestAPI;

use OWC\PDC\Base\Foundation\ServiceProvider;

/**
 * Boots the rest API service provider.
 */
class RestAPIServiceProvider extends ServiceProvider
{

    /**
     * Endpoint of the rest API.
     *
     * @var string $namespace;
     */
    private $namespace = 'owc/pdc/v1';

    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->plugin->loader->addAction('rest_api_init', $this, 'registerRoutes');
        $this->plugin->loader->addFilter('owc/pdc/rest-api/items/query', new FilterDefaultItems, 'filter', 10, 1);
    }

    /**
     * Register REST routes.
     *
     * @link https://{url}/wp-json/owc/pdc/v1/items/internal
     */
    public function registerRoutes()
    {
        register_rest_route($this->namespace, 'items/internal', [
            'methods' => 'GET',
            'callback' => [new InternalItemsController($this->plugin), 'getItems'],
        ]);
    }
}
