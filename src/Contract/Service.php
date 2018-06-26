<?php

namespace Revonia\ThrowExceptionBlog\Contract;

interface Service
{
    public function create($id, $data);

    public function get($id);

    public function update($id, $data);

    public function delete($id);
}