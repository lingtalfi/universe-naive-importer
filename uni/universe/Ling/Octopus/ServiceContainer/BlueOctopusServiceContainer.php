<?php

namespace Ling\Octopus\ServiceContainer;


use Ling\Octopus\Exception\OctopusServiceErrorException;

/**
 *
 *
 * The BlueOctopusServiceContainer represents a blue octopus.
 *
 *
 * A blue octopus is composed of two classes acting together as a cold (aka static) service container.
 *
 * The two parts are the following:
 *
 * - light part (this class): this is the parent class, which contains the "get" method implementing the OctopusServiceContainerInterface.
 * - dark part (a class to be generated): this is the child class, which contains all the methods (one method per service).
 *
 *
 * The dark part can be generated by a class like the Octopus\ServiceContainerBuilder\DarkBlueOctopusServiceContainerBuilder for instance.
 *
 *
 *
 * //--------------------------------------------
 * SYNOPSIS
 * //--------------------------------------------
 * So here is a schematic representation of how it works:
 *
 *
 * // preparation
 * - LightClass (this class)
 *      - get (service)
 *
 * - DarkClass extends LightClass
 *      - service1 ()
 *          return new Service1();
 *      - service2 ()
 *          return new Service2();
 *
 *
 * // client code
 * serviceContainer = new DarkClass()
 * serviceContainer->get(service1)
 *
 *
 *
 */
class BlueOctopusServiceContainer implements OctopusServiceContainerInterface
{


    /**
     * This property holds the cached instances of this service container.
     *
     * @var array
     */
    private $cachedInstances;


    /**
     * Builds the service container.
     *
     * BlueOctopusServiceContainer constructor.
     */
    public function __construct()
    {
        $this->cachedInstances = [];
    }

    /**
     * @implementation
     */
    public function get(string $service)
    {

        // cache available?
        if (array_key_exists($service, $this->cachedInstances)) {
            return $this->cachedInstances[$service];
        }


        $methodName = self::getMethodName($service);
        if (is_callable(get_called_class(), $methodName)) {
            try {
                $instance = $this->$methodName();
                $this->cachedInstances[$service] = $instance;
                return $instance;
            } catch (\Exception $e) {
                throw new OctopusServiceErrorException($e->getMessage(), 0, $e);
            }
        } else {
            throw new OctopusServiceErrorException("Service not found: $service");
        }
    }

    /**
     *
     * @implementation
     */
    public function has(string $service): bool
    {
        $methodName = self::getMethodName($service);
        return method_exists($this, $methodName);
    }


    /**
     * @implementation
     */
    public function all(): array
    {
        $methods = get_class_methods($this);
        $ownMethods = $this->getOwnMethods();

        $methods = array_filter($methods, function ($method) use ($ownMethods) {
            return (false === in_array($method, $ownMethods, true));
        });


        return array_map(function ($method) {
            return self::getServiceName($method);
        }, $methods);
    }


    /**
     * Converts the given service name into a method name (the name of the method in charge of returning the service).
     *
     *
     *
     * @param string $serviceName
     * @return string
     */
    public static function getMethodName(string $serviceName)
    {
        return str_replace('.', '__', $serviceName);
    }


    /**
     * Returns the service name from the given method name.
     *
     *
     *
     * @param string $methodName
     * @return string
     */
    public static function getServiceName(string $methodName)
    {
        return str_replace('__', '.', $methodName);
    }



    //--------------------------------------------
    //
    //--------------------------------------------
    /**
     * Returns an array of the methods defined in this class, which are not services.
     * @return array
     */
    protected function getOwnMethods(): array
    {
        return [
            "__construct",
            "get",
            "has",
            "all",
            "getOwnMethods",
            "getMethodName",
            "getServiceName",
        ];
    }
}