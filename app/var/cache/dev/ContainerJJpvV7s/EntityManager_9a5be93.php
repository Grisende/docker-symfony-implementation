<?php

namespace ContainerJJpvV7s;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder2015e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerdd360 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5c929 = [
        
    ];

    public function getConnection()
    {
        $this->initializerdd360 && ($this->initializerdd360->__invoke($valueHolder2015e, $this, 'getConnection', array(), $this->initializerdd360) || 1) && $this->valueHolder2015e = $valueHolder2015e;

        return $this->valueHolder2015e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerdd360 && ($this->initializerdd360->__invoke($valueHolder2015e, $this, 'getMetadataFactory', array(), $this->initializerdd360) || 1) && $this->valueHolder2015e = $valueHolder2015e;

        return $this->valueHolder2015e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerdd360 && ($this->initializerdd360->__invoke($valueHolder2015e, $this, 'getExpressionBuilder', array(), $this->initializerdd360) || 1) && $this->valueHolder2015e = $valueHolder2015e;

        return $this->valueHolder2015e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerdd360 && ($this->initializerdd360->__invoke($valueHolder2015e, $this, 'beginTransaction', array(), $this->initializerdd360) || 1) && $this->valueHolder2015e = $valueHolder2015e;

        return $this->valueHolder2015e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerdd360 && ($this->initializerdd360->__invoke($valueHolder2015e, $this, 'getCache', array(), $this->initializerdd360) || 1) && $this->valueHolder2015e = $valueHolder2015e;

        return $this->valueHolder2015e->getCache();
    }

    public function transactional($func)
    {
        $this->initializerdd360 && ($this->initializerdd360->__invoke($valueHolder2015e, $this, 'transactional', array('func' => $func), $this->initializerdd360) || 1) && $this->valueHolder2015e = $valueHolder2015e;

        return $this->valueHolder2015e->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerdd360 && ($this->initializerdd360->__invoke($valueHolder2015e, $this, 'wrapInTransaction', array('func' => $func), $this->initializerdd360) || 1) && $this->valueHolder2015e = $valueHolder2015e;

        return $this->valueHolder2015e->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerdd360 && ($this->initializerdd360->__invoke($valueHolder2015e, $this, 'commit', array(), $this->initializerdd360) || 1) && $this->valueHolder2015e = $valueHolder2015e;

        return $this->valueHolder2015e->commit();
    }

    public function rollback()
    {
        $this->initializerdd360 && ($this->initializerdd360->__invoke($valueHolder2015e, $this, 'rollback', array(), $this->initializerdd360) || 1) && $this->valueHolder2015e = $valueHolder2015e;

        return $this->valueHolder2015e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerdd360 && ($this->initializerdd360->__invoke($valueHolder2015e, $this, 'getClassMetadata', array('className' => $className), $this->initializerdd360) || 1) && $this->valueHolder2015e = $valueHolder2015e;

        return $this->valueHolder2015e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerdd360 && ($this->initializerdd360->__invoke($valueHolder2015e, $this, 'createQuery', array('dql' => $dql), $this->initializerdd360) || 1) && $this->valueHolder2015e = $valueHolder2015e;

        return $this->valueHolder2015e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerdd360 && ($this->initializerdd360->__invoke($valueHolder2015e, $this, 'createNamedQuery', array('name' => $name), $this->initializerdd360) || 1) && $this->valueHolder2015e = $valueHolder2015e;

        return $this->valueHolder2015e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerdd360 && ($this->initializerdd360->__invoke($valueHolder2015e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerdd360) || 1) && $this->valueHolder2015e = $valueHolder2015e;

        return $this->valueHolder2015e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerdd360 && ($this->initializerdd360->__invoke($valueHolder2015e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerdd360) || 1) && $this->valueHolder2015e = $valueHolder2015e;

        return $this->valueHolder2015e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerdd360 && ($this->initializerdd360->__invoke($valueHolder2015e, $this, 'createQueryBuilder', array(), $this->initializerdd360) || 1) && $this->valueHolder2015e = $valueHolder2015e;

        return $this->valueHolder2015e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerdd360 && ($this->initializerdd360->__invoke($valueHolder2015e, $this, 'flush', array('entity' => $entity), $this->initializerdd360) || 1) && $this->valueHolder2015e = $valueHolder2015e;

        return $this->valueHolder2015e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerdd360 && ($this->initializerdd360->__invoke($valueHolder2015e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdd360) || 1) && $this->valueHolder2015e = $valueHolder2015e;

        return $this->valueHolder2015e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerdd360 && ($this->initializerdd360->__invoke($valueHolder2015e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerdd360) || 1) && $this->valueHolder2015e = $valueHolder2015e;

        return $this->valueHolder2015e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerdd360 && ($this->initializerdd360->__invoke($valueHolder2015e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerdd360) || 1) && $this->valueHolder2015e = $valueHolder2015e;

        return $this->valueHolder2015e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerdd360 && ($this->initializerdd360->__invoke($valueHolder2015e, $this, 'clear', array('entityName' => $entityName), $this->initializerdd360) || 1) && $this->valueHolder2015e = $valueHolder2015e;

        return $this->valueHolder2015e->clear($entityName);
    }

    public function close()
    {
        $this->initializerdd360 && ($this->initializerdd360->__invoke($valueHolder2015e, $this, 'close', array(), $this->initializerdd360) || 1) && $this->valueHolder2015e = $valueHolder2015e;

        return $this->valueHolder2015e->close();
    }

    public function persist($entity)
    {
        $this->initializerdd360 && ($this->initializerdd360->__invoke($valueHolder2015e, $this, 'persist', array('entity' => $entity), $this->initializerdd360) || 1) && $this->valueHolder2015e = $valueHolder2015e;

        return $this->valueHolder2015e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerdd360 && ($this->initializerdd360->__invoke($valueHolder2015e, $this, 'remove', array('entity' => $entity), $this->initializerdd360) || 1) && $this->valueHolder2015e = $valueHolder2015e;

        return $this->valueHolder2015e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerdd360 && ($this->initializerdd360->__invoke($valueHolder2015e, $this, 'refresh', array('entity' => $entity), $this->initializerdd360) || 1) && $this->valueHolder2015e = $valueHolder2015e;

        return $this->valueHolder2015e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerdd360 && ($this->initializerdd360->__invoke($valueHolder2015e, $this, 'detach', array('entity' => $entity), $this->initializerdd360) || 1) && $this->valueHolder2015e = $valueHolder2015e;

        return $this->valueHolder2015e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerdd360 && ($this->initializerdd360->__invoke($valueHolder2015e, $this, 'merge', array('entity' => $entity), $this->initializerdd360) || 1) && $this->valueHolder2015e = $valueHolder2015e;

        return $this->valueHolder2015e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerdd360 && ($this->initializerdd360->__invoke($valueHolder2015e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerdd360) || 1) && $this->valueHolder2015e = $valueHolder2015e;

        return $this->valueHolder2015e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerdd360 && ($this->initializerdd360->__invoke($valueHolder2015e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdd360) || 1) && $this->valueHolder2015e = $valueHolder2015e;

        return $this->valueHolder2015e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerdd360 && ($this->initializerdd360->__invoke($valueHolder2015e, $this, 'getRepository', array('entityName' => $entityName), $this->initializerdd360) || 1) && $this->valueHolder2015e = $valueHolder2015e;

        return $this->valueHolder2015e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerdd360 && ($this->initializerdd360->__invoke($valueHolder2015e, $this, 'contains', array('entity' => $entity), $this->initializerdd360) || 1) && $this->valueHolder2015e = $valueHolder2015e;

        return $this->valueHolder2015e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerdd360 && ($this->initializerdd360->__invoke($valueHolder2015e, $this, 'getEventManager', array(), $this->initializerdd360) || 1) && $this->valueHolder2015e = $valueHolder2015e;

        return $this->valueHolder2015e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerdd360 && ($this->initializerdd360->__invoke($valueHolder2015e, $this, 'getConfiguration', array(), $this->initializerdd360) || 1) && $this->valueHolder2015e = $valueHolder2015e;

        return $this->valueHolder2015e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerdd360 && ($this->initializerdd360->__invoke($valueHolder2015e, $this, 'isOpen', array(), $this->initializerdd360) || 1) && $this->valueHolder2015e = $valueHolder2015e;

        return $this->valueHolder2015e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerdd360 && ($this->initializerdd360->__invoke($valueHolder2015e, $this, 'getUnitOfWork', array(), $this->initializerdd360) || 1) && $this->valueHolder2015e = $valueHolder2015e;

        return $this->valueHolder2015e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerdd360 && ($this->initializerdd360->__invoke($valueHolder2015e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdd360) || 1) && $this->valueHolder2015e = $valueHolder2015e;

        return $this->valueHolder2015e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerdd360 && ($this->initializerdd360->__invoke($valueHolder2015e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdd360) || 1) && $this->valueHolder2015e = $valueHolder2015e;

        return $this->valueHolder2015e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerdd360 && ($this->initializerdd360->__invoke($valueHolder2015e, $this, 'getProxyFactory', array(), $this->initializerdd360) || 1) && $this->valueHolder2015e = $valueHolder2015e;

        return $this->valueHolder2015e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerdd360 && ($this->initializerdd360->__invoke($valueHolder2015e, $this, 'initializeObject', array('obj' => $obj), $this->initializerdd360) || 1) && $this->valueHolder2015e = $valueHolder2015e;

        return $this->valueHolder2015e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerdd360 && ($this->initializerdd360->__invoke($valueHolder2015e, $this, 'getFilters', array(), $this->initializerdd360) || 1) && $this->valueHolder2015e = $valueHolder2015e;

        return $this->valueHolder2015e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerdd360 && ($this->initializerdd360->__invoke($valueHolder2015e, $this, 'isFiltersStateClean', array(), $this->initializerdd360) || 1) && $this->valueHolder2015e = $valueHolder2015e;

        return $this->valueHolder2015e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerdd360 && ($this->initializerdd360->__invoke($valueHolder2015e, $this, 'hasFilters', array(), $this->initializerdd360) || 1) && $this->valueHolder2015e = $valueHolder2015e;

        return $this->valueHolder2015e->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerdd360 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder2015e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder2015e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder2015e->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerdd360 && ($this->initializerdd360->__invoke($valueHolder2015e, $this, '__get', ['name' => $name], $this->initializerdd360) || 1) && $this->valueHolder2015e = $valueHolder2015e;

        if (isset(self::$publicProperties5c929[$name])) {
            return $this->valueHolder2015e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2015e;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder2015e;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerdd360 && ($this->initializerdd360->__invoke($valueHolder2015e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerdd360) || 1) && $this->valueHolder2015e = $valueHolder2015e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2015e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder2015e;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerdd360 && ($this->initializerdd360->__invoke($valueHolder2015e, $this, '__isset', array('name' => $name), $this->initializerdd360) || 1) && $this->valueHolder2015e = $valueHolder2015e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2015e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder2015e;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerdd360 && ($this->initializerdd360->__invoke($valueHolder2015e, $this, '__unset', array('name' => $name), $this->initializerdd360) || 1) && $this->valueHolder2015e = $valueHolder2015e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2015e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder2015e;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerdd360 && ($this->initializerdd360->__invoke($valueHolder2015e, $this, '__clone', array(), $this->initializerdd360) || 1) && $this->valueHolder2015e = $valueHolder2015e;

        $this->valueHolder2015e = clone $this->valueHolder2015e;
    }

    public function __sleep()
    {
        $this->initializerdd360 && ($this->initializerdd360->__invoke($valueHolder2015e, $this, '__sleep', array(), $this->initializerdd360) || 1) && $this->valueHolder2015e = $valueHolder2015e;

        return array('valueHolder2015e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerdd360 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerdd360;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerdd360 && ($this->initializerdd360->__invoke($valueHolder2015e, $this, 'initializeProxy', array(), $this->initializerdd360) || 1) && $this->valueHolder2015e = $valueHolder2015e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2015e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2015e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
