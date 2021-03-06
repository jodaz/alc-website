<?php
/**
 * @see https://github.com/artesaos/seotools
 */

use Illuminate\Http\Request;

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => "", // set false to total remove
            'titleBefore'  => false, // Put defaults.title before page title, like 'It's Over 9000! - Dashboard'
            'description'  => '', // set false to total remove
            'separator'    => ' - ',
            'keywords'     => [],
            'canonical'    => null, // Set null for using Url::current(), set false to total remove
            'robots'       => 'all', // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => null, // set false to total remove
            'description' => null, // set false to total remove
            'url'         => null, // Set null for using Url::current(), set false to total remove
            'type'        => null,
            'site_name'   => 'Alcaldía de Bermúdez',
            'images'      => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            'card'        => 'summary',
            'title'       => null,
            'site'        => null,
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => '', // set false to total remove
            'description' => '', // set false to total remove
            'url'         => null, // Set null for using Url::current(), set false to total remove
            'type'        => '',
            'images'      => [],
        ],
    ],
];
