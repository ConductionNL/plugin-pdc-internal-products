<?php

return [

    /**
     * Service Providers.
     */
    'providers'    => [
        /**
         * Global providers.
         */
        OWC\PDC\InternalProducts\RestAPI\RestAPIServiceProvider::class,
        OWC\PDC\InternalProducts\Taxonomy\TaxonomyServiceProvider::class,

        /**
         * Providers specific to the admin.
         */
        'admin' => [
        ]

    ],

    /**
     * Dependencies upon which the plugin relies.
     *
     * Should contain: label, version, file.
     */
    'dependencies' => [
        [
            'label'   => 'OpenPDC Base',
            'file'    => 'pdc-base/pdc-base.php',
            'version' => '2.0.0'
        ]
    ]

];