<?php

namespace App\Events\Listeners;

use Looma\Events\Priority;

final class AllowSvgUploads
{
    #[Priority(Priority::NORMAL)]
    public function __invoke(array $mimes): array
    {
        $mimes['svg'] = 'image/svg+xml';

        return $mimes;
    }
}
