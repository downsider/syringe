<?php

namespace Silktide\Syringe;

use Silktide\Syringe\Exception\ReferenceException;

class TagCollection
{

    /**
     * @var array 
     */
    protected $services = [];

    /**
     * @param string $serviceName
     * @param string|int $key
     */
    public function addService($serviceName, $key = null)
    {
        if (!is_string($key) || empty($key)) {
            $key = count($this->services);
        }
        $this->services[$key] = $serviceName;
    }

    /**
     * @return array
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * @param $key
     * @return mixed
     * @throws ReferenceException
     */
    public function getService($key)
    {
        if (empty($this->services[$key])) {
            throw new ReferenceException("No service with the key '$key' was found in this tag");
        }
        return $this->services[$key];
    }


}
