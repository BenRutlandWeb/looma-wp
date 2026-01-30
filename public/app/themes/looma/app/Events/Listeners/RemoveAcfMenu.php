<?php

namespace App\Events\Listeners;

use Looma\Events\Priority;
use Looma\Foundation\Environment;

final class RemoveAcfMenu
{
    public function __construct(public Environment $environment)
    {
        //
    }

    #[Priority(Priority::LOW)]
    public function __invoke(): void
    {
        if (!$this->environment->isLocal()) {
            remove_menu_page('edit.php?post_type=acf-field-group');
        }
    }
}
