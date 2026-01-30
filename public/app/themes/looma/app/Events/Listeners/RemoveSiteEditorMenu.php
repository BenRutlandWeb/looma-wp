<?php

namespace App\Events\Listeners;

use Looma\Events\Priority;
use Looma\Foundation\Environment;

final class RemoveSiteEditorMenu
{
    public function __construct(public Environment $environment)
    {
        //
    }

    #[Priority(Priority::LOW)]
    public function __invoke(): void
    {
        if (!$this->environment->isLocal()) {
            remove_submenu_page('themes.php', 'site-editor.php');
        }
    }
}
