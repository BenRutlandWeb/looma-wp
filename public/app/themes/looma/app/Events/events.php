<?php

return [
    'admin_menu' => [
        \App\Events\Listeners\RemoveAcfMenu::class,
        \App\Events\Listeners\RemoveSiteEditorMenu::class,
    ],
    'after_setup_theme' => [
        \App\Events\Listeners\ThemeSupport::class,
    ],
    'block_categories_all' => [
        \App\Events\Listeners\BlockCategories::class,
    ],
    'wp_enqueue_scripts' => [
        \App\Events\Listeners\EnqueueScripts::class,
    ],
    'admin_enqueue_scripts' => [
        \App\Events\Listeners\EnqueueScripts::class,
    ],
    'upload_mimes' => [
        \App\Events\Listeners\AllowSvgUploads::class,
    ],
];
