<?php

return [
    [
        'many_collection'         => 'gallery_files',
        'many_field'              => 'directus_files_id',
        'one_collection'          => 'directus_files',
        'one_field'               => null,
        'one_collection_field'    => null,
        'one_allowed_collections' => null,
        'junction_field'          => 'gallery_id',
        'sort_field'              => null,
        'one_deselect_action'     => 'nullify',
    ],
    [
        'many_collection'         => 'gallery_files',
        'many_field'              => 'gallery_id',
        'one_collection'          => 'gallery',
        'one_field'               => null,
        'one_collection_field'    => null,
        'one_allowed_collections' => null,
        'junction_field'          => 'directus_files_id',
        'sort_field'              => null,
        'one_deselect_action'     => 'nullify',
    ],
    [
        'many_collection'         => 'project_management',
        'many_field'              => 'project_status',
        'one_collection'          => 'project_status',
        'one_field'               => null,
        'one_collection_field'    => null,
        'one_allowed_collections' => null,
        'junction_field'          => null,
        'sort_field'              => null,
        'one_deselect_action'     => 'nullify',
    ],
    [
        'many_collection'         => 'project_management',
        'many_field'              => 'project_type',
        'one_collection'          => 'project_type',
        'one_field'               => null,
        'one_collection_field'    => null,
        'one_allowed_collections' => null,
        'junction_field'          => null,
        'sort_field'              => null,
        'one_deselect_action'     => 'nullify',
    ],
    [
        'many_collection'         => 'project_management',
        'many_field'              => 'project_gallery',
        'one_collection'          => 'gallery',
        'one_field'               => null,
        'one_collection_field'    => null,
        'one_allowed_collections' => null,
        'junction_field'          => null,
        'sort_field'              => null,
        'one_deselect_action'     => 'nullify',
    ],
    [
        'many_collection'         => 'project_management_building_layout',
        'many_field'              => 'building_layout_id',
        'one_collection'          => 'building_layout',
        'one_field'               => null,
        'one_collection_field'    => null,
        'one_allowed_collections' => null,
        'junction_field'          => 'project_management_id',
        'sort_field'              => null,
        'one_deselect_action'     => 'nullify',
    ],
    [
        'many_collection'         => 'project_management_building_layout',
        'many_field'              => 'project_management_id',
        'one_collection'          => 'project_management',
        'one_field'               => null,
        'one_collection_field'    => null,
        'one_allowed_collections' => null,
        'junction_field'          => 'building_layout_id',
        'sort_field'              => null,
        'one_deselect_action'     => 'nullify',
    ],
    [
        'many_collection'         => 'floor_layout',
        'many_field'              => 'building_layout_link',
        'one_collection'          => 'building_layout',
        'one_field'               => null,
        'one_collection_field'    => null,
        'one_allowed_collections' => null,
        'junction_field'          => null,
        'sort_field'              => null,
        'one_deselect_action'     => 'nullify',
    ],
    [
        'many_collection'         => 'project_management_floor_layout',
        'many_field'              => 'floor_layout_id',
        'one_collection'          => 'floor_layout',
        'one_field'               => null,
        'one_collection_field'    => null,
        'one_allowed_collections' => null,
        'junction_field'          => 'project_management_id',
        'sort_field'              => null,
        'one_deselect_action'     => 'nullify',
    ],
    [
        'many_collection'         => 'project_management_floor_layout',
        'many_field'              => 'project_management_id',
        'one_collection'          => 'project_management',
        'one_field'               => null,
        'one_collection_field'    => null,
        'one_allowed_collections' => null,
        'junction_field'          => 'floor_layout_id',
        'sort_field'              => null,
        'one_deselect_action'     => 'nullify',
    ],
    [
        'many_collection'         => 'project_management_unit_layout',
        'many_field'              => 'unit_layout_id',
        'one_collection'          => 'unit_layout',
        'one_field'               => null,
        'one_collection_field'    => null,
        'one_allowed_collections' => null,
        'junction_field'          => 'project_management_id',
        'sort_field'              => null,
        'one_deselect_action'     => 'nullify',
    ],
    [
        'many_collection'         => 'project_management_unit_layout',
        'many_field'              => 'project_management_id',
        'one_collection'          => 'project_management',
        'one_field'               => null,
        'one_collection_field'    => null,
        'one_allowed_collections' => null,
        'junction_field'          => 'unit_layout_id',
        'sort_field'              => null,
        'one_deselect_action'     => 'nullify',
    ],
    [
        'many_collection'         => 'unit_layout',
        'many_field'              => 'floor_layout_link',
        'one_collection'          => 'unit_layout',
        'one_field'               => null,
        'one_collection_field'    => null,
        'one_allowed_collections' => null,
        'junction_field'          => null,
        'sort_field'              => null,
        'one_deselect_action'     => 'nullify',
    ],
    [
        'many_collection'         => 'project_management',
        'many_field'              => 'building_layout',
        'one_collection'          => 'building_layout',
        'one_field'               => null,
        'one_collection_field'    => null,
        'one_allowed_collections' => null,
        'junction_field'          => null,
        'sort_field'              => null,
        'one_deselect_action'     => 'nullify',
    ],
    [
        'many_collection'         => 'project_management',
        'many_field'              => 'floor_layout',
        'one_collection'          => 'floor_layout',
        'one_field'               => null,
        'one_collection_field'    => null,
        'one_allowed_collections' => null,
        'junction_field'          => null,
        'sort_field'              => null,
        'one_deselect_action'     => 'nullify',
    ],
    [
        'many_collection'         => 'project_management',
        'many_field'              => 'unit_layout',
        'one_collection'          => 'unit_layout',
        'one_field'               => null,
        'one_collection_field'    => null,
        'one_allowed_collections' => null,
        'junction_field'          => null,
        'sort_field'              => null,
        'one_deselect_action'     => 'nullify',
    ],
];