<?php

namespace Revonia\ThrowExceptionBlog\Services;


use PhpXmlRpc\Client;
use Revonia\ThrowExceptionBlog\Contract\Service;
use function DI\create;
use function DI\get;



class CnBlogs implements Service
{
    /**
     * @var Client
     */
    protected $client;

    protected $certs;

    public function __construct($client, $certs, array $options = [])
    {
        $this->client = $client;
    }

    public function create($id, $data)
    {

    }

    public function get($id)
    {

    }

    public function update($id, $data)
    {

    }

    public function delete($id)
    {

    }

    public static function boot()
    {

    }
}
