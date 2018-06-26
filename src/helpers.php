<?php

namespace Revonia\ThrowExceptionBlog;

function env($name, $default = null)
{
    return getenv($name) ?? $default;
}