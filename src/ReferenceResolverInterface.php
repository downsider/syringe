<?php

namespace Silktide\Syringe;

use Pimple\Container;

/**
 *
 */
interface ReferenceResolverInterface {

    /**
     * Checks if $arg is a a service reference and loads it from the container
     *
     * @param $arg
     * @param Container $container
     * @return mixed
     */
    public function resolveService($arg, Container $container, $alias = "");

    /**
     * inserts parameters references into $arg, recursively if required
     *
     * @param $arg
     * @param Container $container
     * @return mixed
     */
    public function resolveParameter($arg, Container $container, $alias = "");

    /**
     * @param string $key
     * @param string $alias
     * @return string
     */
    public function aliasThisKey($key, $alias);

} 