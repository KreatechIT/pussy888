<?php

return [
    'version' => [
        'tiny' => '8.0.2',
        'language' => [
            // https://cdn.jsdelivr.net/npm/tinymce-i18n@latest/
            'version' => '25.8.4',
            'package' => 'langs8',
        ],
        'licence_key' => env('TINY_LICENSE_KEY', 'no-api-key'),
    ],
    'provider' => 'cloud', // cloud|vendor
    // 'direction' => 'rtl',

    /**
     * change darkMode: 'auto'|'force'|'class'|'media'|false|'custom'
     */
    'darkMode' => 'auto',

    /** cutsom */
    'skins' => [
        // oxide, oxide-dark, tinymce-5, tinymce-5-dark
        'ui' => 'oxide',

        // dark, default, document, tinymce-5, tinymce-5-dark, writer
        'content' => 'default'
    ],

    'profiles' => [
        'default' => [
            'plugins' => 'accordion autoresize codesample directionality advlist link image lists preview pagebreak searchreplace wordcount code fullscreen insertdatetime media table emoticons',
            'toolbar' => 'undo redo removeformat bold italic underline image link | alignjustify alignleft aligncenter alignright | fontsizeinput font_size_formats styles | numlist bullist outdent indent | forecolor backcolor fullscreen| blockquote table toc hr | media codesample emoticons | wordcount',
            'upload_directory' => null,
            //| fontfamily fontsize fontsizeinput font_size_formats styles |
            'custom_configs' => [
                // shows "Rel" dropdown inside Insert/Edit Link
                'link_rel_list' => [
                    ['title' => '— None (dofollow)', 'value' => ''], // dofollow = no rel
                    ['title' => 'nofollow',             'value' => 'nofollow'],
                    ['title' => 'sponsored',            'value' => 'sponsored'],
                    ['title' => 'UGC',                  'value' => 'ugc'],
                    ['title' => 'nofollow + sponsored', 'value' => 'nofollow sponsored'],
                ],

                // shows "Open link in..." dropdown
                'link_target_list' => [
                    ['title' => 'Same tab', 'value' => ''],
                    ['title' => 'New tab',  'value' => '_blank'],
                ],

                // default target (still changeable in the dialog)
                'link_default_target' => '_blank',   // (not default_link_target)

                // optional default rel (you can include nofollow if you want)
                'link_default_rel' => 'noopener noreferrer',

                // keep attributes on <a>
                'extended_valid_elements' => 'a[href|target|rel|class|title]',
            ],
        ],

        'simple' => [
            'plugins' => 'autoresize directionality emoticons link wordcount',
            'toolbar' => 'removeformat | bold italic | rtl ltr | numlist bullist | link emoticons',
            'upload_directory' => null,
        ],

        'minimal' => [
            'plugins' => 'link wordcount',
            'toolbar' => 'bold italic link numlist bullist',
            'upload_directory' => null,
        ],

        'full' => [
            'plugins' => 'accordion autoresize codesample directionality advlist autolink link image lists charmap preview anchor pagebreak searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media table emoticons help',
            'toolbar' => 'undo redo removeformat | fontfamily fontsize fontsizeinput font_size_formats styles | bold italic underline | rtl ltr | alignjustify alignright aligncenter alignleft | numlist bullist outdent indent accordion | forecolor backcolor | blockquote table toc hr | image link anchor media codesample emoticons | visualblocks print preview wordcount fullscreen help',
            'upload_directory' => null,
        ],
    ],

    /**
     * this option will load optional language file based on you app locale
     * example:
     * languages => [
     *      'fa' => 'https://cdn.jsdelivr.net/npm/tinymce-i18n@25.8.4/langs7/fa.min.js',
     *      'es' => 'https://cdn.jsdelivr.net/npm/tinymce-i18n@25.8.4/langs7/es.min.js',
     *      'ja' => asset('assets/ja.min.js')
     * ]
     */
    'languages' => [],

    'extra' => [
        'toolbar' => [
            // 'fontsize' => '10px 12px 13px 14px 16px 18px 20px',
            // 'fontfamily' => 'Tahoma=tahoma,arial,helvetica,sans-serif;',
        ]
    ]
];
