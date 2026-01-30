<?php

namespace App\Events\Listeners;

use Looma\Events\Priority;

final class ThemeSupport
{
    #[Priority(Priority::NORMAL)]
    public function __invoke(): void
    {
        // prevent third-party pattern library
        remove_theme_support('core-block-patterns');

        // prevent third-party block library
        remove_action('enqueue_block_editor_assets', 'wp_enqueue_editor_block_directory_assets');

        add_theme_support('block-patterns');
    }
}
