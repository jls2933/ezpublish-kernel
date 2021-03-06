<?php

return array(
    'ezurlalias_ml' => array(
        0 => array(
            'action' => 'eznode:2',
            'action_type' => 'eznode',
            'alias_redirects' => '1',
            'id' => '1',
            'is_alias' => '0',
            'is_original' => '1',
            'lang_mask' => '3',
            'link' => '1',
            'parent' => '0',
            'text' => '',
            'text_md5' => 'd41d8cd98f00b204e9800998ecf8427e',
        ),
        1 => array(
            'action' => 'eznode:314',
            'action_type' => 'eznode',
            'alias_redirects' => '0',
            'id' => '2',
            'is_alias' => '0',
            'is_original' => '1',
            'lang_mask' => '3',
            'link' => '2',
            'parent' => '0',
            'text' => 'path314',
            'text_md5' => 'fdbbfa1e24e78ef56cb16ba4482c7771',
        ),
        2 => array(
            'action' => 'eznode:315',
            'action_type' => 'eznode',
            'alias_redirects' => '0',
            'id' => '3',
            'is_alias' => '0',
            'is_original' => '1',
            'lang_mask' => '4',
            'link' => '3',
            'parent' => '2',
            'text' => 'path315',
            'text_md5' => 'afbe70de5f03a22e867723655a995279',
        ),
    ),
    'ezurlalias_ml_incr' => array(
        0 => array(
            'id' => '1',
        ),
        1 => array(
            'id' => '2',
        ),
        2 => array(
            'id' => '3',
        ),
    ),
    'ezcontent_language' => array(
        0 => array(
            'disabled' => 0,
            'id' => 2,
            'locale' => 'cro-HR',
            'name' => 'Croatian (Hrvatski)'
        ),
        1 => array(
            'disabled' => 0,
            'id' => 4,
            'locale' => 'eng-GB',
            'name' => 'English (United Kingdom)'
        ),
        2 => array(
            'disabled' => 0,
            'id' => 8,
            'locale' => 'ger-DE',
            'name' => 'German'
        ),
        3 => array(
            'disabled' => 0,
            'id' => 16,
            'locale' => 'kli-KR',
            'name' => 'Klingon (Kronos)'
        ),
    ),
    'ezcontentobject_tree' => array(
        0 => array(
            'node_id' => 1,
            'parent_node_id' => 1,
            'path_string' => '',
            'path_identification_string' => '',
            'remote_id' => '',
        ),
        1 => array(
            'node_id' => 2,
            'parent_node_id' => 1,
            'path_string' => '',
            'path_identification_string' => '',
            'remote_id' => '',
        ),
        2 => array(
            'node_id' => 314,
            'parent_node_id' => 2,
            'path_string' => '',
            'path_identification_string' => 'path314',
            'remote_id' => '',
        ),
        3 => array(
            'node_id' => 315,
            'parent_node_id' => 314,
            'path_string' => '',
            'path_identification_string' => 'path314/path315',
            'remote_id' => '',
        ),
        4 => array(
            'node_id' => 316,
            'parent_node_id' => 315,
            'path_string' => '',
            'path_identification_string' => 'path314/path315/path316',
            'remote_id' => '',
        ),
    ),
);
