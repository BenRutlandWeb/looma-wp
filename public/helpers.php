<?php

namespace Brw\Wp;

function env(string $key, mixed $default = null): mixed
{
    return $_ENV[$key] ?? $default;
}
