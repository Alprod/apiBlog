<?php

namespace ContainerHsq23Xx;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder03414 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer542ed = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties27956 = [
        
    ];

    public function getConnection()
    {
        $this->initializer542ed && ($this->initializer542ed->__invoke($valueHolder03414, $this, 'getConnection', array(), $this->initializer542ed) || 1) && $this->valueHolder03414 = $valueHolder03414;

        return $this->valueHolder03414->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer542ed && ($this->initializer542ed->__invoke($valueHolder03414, $this, 'getMetadataFactory', array(), $this->initializer542ed) || 1) && $this->valueHolder03414 = $valueHolder03414;

        return $this->valueHolder03414->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer542ed && ($this->initializer542ed->__invoke($valueHolder03414, $this, 'getExpressionBuilder', array(), $this->initializer542ed) || 1) && $this->valueHolder03414 = $valueHolder03414;

        return $this->valueHolder03414->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer542ed && ($this->initializer542ed->__invoke($valueHolder03414, $this, 'beginTransaction', array(), $this->initializer542ed) || 1) && $this->valueHolder03414 = $valueHolder03414;

        return $this->valueHolder03414->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer542ed && ($this->initializer542ed->__invoke($valueHolder03414, $this, 'getCache', array(), $this->initializer542ed) || 1) && $this->valueHolder03414 = $valueHolder03414;

        return $this->valueHolder03414->getCache();
    }

    public function transactional($func)
    {
        $this->initializer542ed && ($this->initializer542ed->__invoke($valueHolder03414, $this, 'transactional', array('func' => $func), $this->initializer542ed) || 1) && $this->valueHolder03414 = $valueHolder03414;

        return $this->valueHolder03414->transactional($func);
    }

    public function commit()
    {
        $this->initializer542ed && ($this->initializer542ed->__invoke($valueHolder03414, $this, 'commit', array(), $this->initializer542ed) || 1) && $this->valueHolder03414 = $valueHolder03414;

        return $this->valueHolder03414->commit();
    }

    public function rollback()
    {
        $this->initializer542ed && ($this->initializer542ed->__invoke($valueHolder03414, $this, 'rollback', array(), $this->initializer542ed) || 1) && $this->valueHolder03414 = $valueHolder03414;

        return $this->valueHolder03414->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer542ed && ($this->initializer542ed->__invoke($valueHolder03414, $this, 'getClassMetadata', array('className' => $className), $this->initializer542ed) || 1) && $this->valueHolder03414 = $valueHolder03414;

        return $this->valueHolder03414->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer542ed && ($this->initializer542ed->__invoke($valueHolder03414, $this, 'createQuery', array('dql' => $dql), $this->initializer542ed) || 1) && $this->valueHolder03414 = $valueHolder03414;

        return $this->valueHolder03414->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer542ed && ($this->initializer542ed->__invoke($valueHolder03414, $this, 'createNamedQuery', array('name' => $name), $this->initializer542ed) || 1) && $this->valueHolder03414 = $valueHolder03414;

        return $this->valueHolder03414->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer542ed && ($this->initializer542ed->__invoke($valueHolder03414, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer542ed) || 1) && $this->valueHolder03414 = $valueHolder03414;

        return $this->valueHolder03414->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer542ed && ($this->initializer542ed->__invoke($valueHolder03414, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer542ed) || 1) && $this->valueHolder03414 = $valueHolder03414;

        return $this->valueHolder03414->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer542ed && ($this->initializer542ed->__invoke($valueHolder03414, $this, 'createQueryBuilder', array(), $this->initializer542ed) || 1) && $this->valueHolder03414 = $valueHolder03414;

        return $this->valueHolder03414->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer542ed && ($this->initializer542ed->__invoke($valueHolder03414, $this, 'flush', array('entity' => $entity), $this->initializer542ed) || 1) && $this->valueHolder03414 = $valueHolder03414;

        return $this->valueHolder03414->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer542ed && ($this->initializer542ed->__invoke($valueHolder03414, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer542ed) || 1) && $this->valueHolder03414 = $valueHolder03414;

        return $this->valueHolder03414->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer542ed && ($this->initializer542ed->__invoke($valueHolder03414, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer542ed) || 1) && $this->valueHolder03414 = $valueHolder03414;

        return $this->valueHolder03414->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer542ed && ($this->initializer542ed->__invoke($valueHolder03414, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer542ed) || 1) && $this->valueHolder03414 = $valueHolder03414;

        return $this->valueHolder03414->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer542ed && ($this->initializer542ed->__invoke($valueHolder03414, $this, 'clear', array('entityName' => $entityName), $this->initializer542ed) || 1) && $this->valueHolder03414 = $valueHolder03414;

        return $this->valueHolder03414->clear($entityName);
    }

    public function close()
    {
        $this->initializer542ed && ($this->initializer542ed->__invoke($valueHolder03414, $this, 'close', array(), $this->initializer542ed) || 1) && $this->valueHolder03414 = $valueHolder03414;

        return $this->valueHolder03414->close();
    }

    public function persist($entity)
    {
        $this->initializer542ed && ($this->initializer542ed->__invoke($valueHolder03414, $this, 'persist', array('entity' => $entity), $this->initializer542ed) || 1) && $this->valueHolder03414 = $valueHolder03414;

        return $this->valueHolder03414->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer542ed && ($this->initializer542ed->__invoke($valueHolder03414, $this, 'remove', array('entity' => $entity), $this->initializer542ed) || 1) && $this->valueHolder03414 = $valueHolder03414;

        return $this->valueHolder03414->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer542ed && ($this->initializer542ed->__invoke($valueHolder03414, $this, 'refresh', array('entity' => $entity), $this->initializer542ed) || 1) && $this->valueHolder03414 = $valueHolder03414;

        return $this->valueHolder03414->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer542ed && ($this->initializer542ed->__invoke($valueHolder03414, $this, 'detach', array('entity' => $entity), $this->initializer542ed) || 1) && $this->valueHolder03414 = $valueHolder03414;

        return $this->valueHolder03414->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer542ed && ($this->initializer542ed->__invoke($valueHolder03414, $this, 'merge', array('entity' => $entity), $this->initializer542ed) || 1) && $this->valueHolder03414 = $valueHolder03414;

        return $this->valueHolder03414->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer542ed && ($this->initializer542ed->__invoke($valueHolder03414, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer542ed) || 1) && $this->valueHolder03414 = $valueHolder03414;

        return $this->valueHolder03414->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer542ed && ($this->initializer542ed->__invoke($valueHolder03414, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer542ed) || 1) && $this->valueHolder03414 = $valueHolder03414;

        return $this->valueHolder03414->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer542ed && ($this->initializer542ed->__invoke($valueHolder03414, $this, 'getRepository', array('entityName' => $entityName), $this->initializer542ed) || 1) && $this->valueHolder03414 = $valueHolder03414;

        return $this->valueHolder03414->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer542ed && ($this->initializer542ed->__invoke($valueHolder03414, $this, 'contains', array('entity' => $entity), $this->initializer542ed) || 1) && $this->valueHolder03414 = $valueHolder03414;

        return $this->valueHolder03414->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer542ed && ($this->initializer542ed->__invoke($valueHolder03414, $this, 'getEventManager', array(), $this->initializer542ed) || 1) && $this->valueHolder03414 = $valueHolder03414;

        return $this->valueHolder03414->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer542ed && ($this->initializer542ed->__invoke($valueHolder03414, $this, 'getConfiguration', array(), $this->initializer542ed) || 1) && $this->valueHolder03414 = $valueHolder03414;

        return $this->valueHolder03414->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer542ed && ($this->initializer542ed->__invoke($valueHolder03414, $this, 'isOpen', array(), $this->initializer542ed) || 1) && $this->valueHolder03414 = $valueHolder03414;

        return $this->valueHolder03414->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer542ed && ($this->initializer542ed->__invoke($valueHolder03414, $this, 'getUnitOfWork', array(), $this->initializer542ed) || 1) && $this->valueHolder03414 = $valueHolder03414;

        return $this->valueHolder03414->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer542ed && ($this->initializer542ed->__invoke($valueHolder03414, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer542ed) || 1) && $this->valueHolder03414 = $valueHolder03414;

        return $this->valueHolder03414->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer542ed && ($this->initializer542ed->__invoke($valueHolder03414, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer542ed) || 1) && $this->valueHolder03414 = $valueHolder03414;

        return $this->valueHolder03414->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer542ed && ($this->initializer542ed->__invoke($valueHolder03414, $this, 'getProxyFactory', array(), $this->initializer542ed) || 1) && $this->valueHolder03414 = $valueHolder03414;

        return $this->valueHolder03414->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer542ed && ($this->initializer542ed->__invoke($valueHolder03414, $this, 'initializeObject', array('obj' => $obj), $this->initializer542ed) || 1) && $this->valueHolder03414 = $valueHolder03414;

        return $this->valueHolder03414->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer542ed && ($this->initializer542ed->__invoke($valueHolder03414, $this, 'getFilters', array(), $this->initializer542ed) || 1) && $this->valueHolder03414 = $valueHolder03414;

        return $this->valueHolder03414->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer542ed && ($this->initializer542ed->__invoke($valueHolder03414, $this, 'isFiltersStateClean', array(), $this->initializer542ed) || 1) && $this->valueHolder03414 = $valueHolder03414;

        return $this->valueHolder03414->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer542ed && ($this->initializer542ed->__invoke($valueHolder03414, $this, 'hasFilters', array(), $this->initializer542ed) || 1) && $this->valueHolder03414 = $valueHolder03414;

        return $this->valueHolder03414->hasFilters();
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

        $instance->initializer542ed = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder03414) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder03414 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder03414->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer542ed && ($this->initializer542ed->__invoke($valueHolder03414, $this, '__get', ['name' => $name], $this->initializer542ed) || 1) && $this->valueHolder03414 = $valueHolder03414;

        if (isset(self::$publicProperties27956[$name])) {
            return $this->valueHolder03414->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder03414;

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

        $targetObject = $this->valueHolder03414;
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
        $this->initializer542ed && ($this->initializer542ed->__invoke($valueHolder03414, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer542ed) || 1) && $this->valueHolder03414 = $valueHolder03414;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder03414;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder03414;
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
        $this->initializer542ed && ($this->initializer542ed->__invoke($valueHolder03414, $this, '__isset', array('name' => $name), $this->initializer542ed) || 1) && $this->valueHolder03414 = $valueHolder03414;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder03414;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder03414;
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
        $this->initializer542ed && ($this->initializer542ed->__invoke($valueHolder03414, $this, '__unset', array('name' => $name), $this->initializer542ed) || 1) && $this->valueHolder03414 = $valueHolder03414;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder03414;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder03414;
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
        $this->initializer542ed && ($this->initializer542ed->__invoke($valueHolder03414, $this, '__clone', array(), $this->initializer542ed) || 1) && $this->valueHolder03414 = $valueHolder03414;

        $this->valueHolder03414 = clone $this->valueHolder03414;
    }

    public function __sleep()
    {
        $this->initializer542ed && ($this->initializer542ed->__invoke($valueHolder03414, $this, '__sleep', array(), $this->initializer542ed) || 1) && $this->valueHolder03414 = $valueHolder03414;

        return array('valueHolder03414');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer542ed = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer542ed;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer542ed && ($this->initializer542ed->__invoke($valueHolder03414, $this, 'initializeProxy', array(), $this->initializer542ed) || 1) && $this->valueHolder03414 = $valueHolder03414;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder03414;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder03414;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
