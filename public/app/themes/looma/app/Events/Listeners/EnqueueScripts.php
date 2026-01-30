<?php

namespace App\Events\Listeners;

use Looma\Events\Priority;

final class EnqueueScripts
{
    #[Priority(Priority::NORMAL)]
    public function __invoke(): void
    {
        wp_enqueue_style('style', get_stylesheet_uri(), []);
    }
}
