<?php

namespace App\Events\Listeners;

use Looma\Events\Priority;

final class BlockCategories
{
    #[Priority(Priority::NORMAL)]
    public function __invoke(array $categories): array
    {
        return array_merge([[
            'slug'  => 'looma',
            'title' => __('Looma'),
        ]], $categories);
    }
}
