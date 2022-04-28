<?php

namespace config;

/*
|--------------------------------------------------------------------------
| Data table rules
|--------------------------------------------------------------------------
|
| Contains rules for pagination limits and sortby (orderby).
|
| Limit          => Default option value for pagination limit
| Limits         => Option values used for pagination limit select filter
| Sortby         => Default column to orderby
| Direction      => Sortby direction (asc / desc)
| searchFields   => List of searching column names
| fulltextSearch => Search by fulltext index flag ( true / false )
| layout         => Default layout (grid / list)
|
| Additional rules can be added for a particular view where
| the defaults are not suitable.
|
*/

return [
    'default'   => [
        'limit'          => 10,
        'limits'         => [ 10, 25, 50, 100 ],
        'sortby'         => 'id',
        'direction'      => 'asc',
        'searchFields'   => [ 'title' ],
        'fulltextSearch' => true,
    ],
    'project'   => [
        'limit'          => 9,
        'limits'         => [ 9, 18, 24, 32 ],
        'sortby'         => 'id',
        'searchFields'   => [ 'title_english', 'title_thai' ],
        'fulltextSearch' => false,
    ],
    'promotion' => [
        'limit'          => 9,
        'limits'         => [ 9, 18, 24, 32 ],
        'sortby'         => 'id',
        'searchFields'   => [ 'title_english', 'title_thai' ],
        'fulltextSearch' => false,
    ],
    'faq'       => [
        'limit'          => 6,
        'limits'         => [ 6, 12, 18, 25 ],
        'sortby'         => 'id',
        'searchFields'   => [ 'name_english', 'name_thai' ],
        'fulltextSearch' => false,
    ],

];
