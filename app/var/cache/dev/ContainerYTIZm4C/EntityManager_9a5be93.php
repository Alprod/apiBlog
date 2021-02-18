<?php

namespace ContainerYTIZm4C;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder84161 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer418c0 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties760b6 = [
        
    ];

    public function getConnection()
    {
        $this->initializer418c0 && ($this->initializer418c0->__invoke($valueHolder84161, $this, 'getConnection', array(), $this->initializer418c0) || 1) && $this->valueHolder84161 = $valueHolder84161;

        return $this->valueHolder84161->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer418c0 && ($this->initializer418c0->__invoke($valueHolder84161, $this, 'getMetadataFactory', array(), $this->initializer418c0) || 1) && $this->valueHolder84161 = $valueHolder84161;

        return $this->valueHolder84161->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer418c0 && ($this->initializer418c0->__invoke($valueHolder84161, $this, 'getExpressionBuilder', array(), $this->initializer418c0) || 1) && $this->valueHolder84161 = $valueHolder84161;

        return $this->valueHolder84161->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer418c0 && ($this->initializer418c0->__invoke($valueHolder84161, $this, 'beginTransaction', array(), $this->initializer418c0) || 1) && $this->valueHolder84161 = $valueHolder84161;

        return $this->valueHolder84161->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer418c0 && ($this->initializer418c0->__invoke($valueHolder84161, $this, 'getCache', array(), $this->initializer418c0) || 1) && $this->valueHolder84161 = $valueHolder84161;

        return $this->valueHolder84161->getCache();
    }

    public function transactional($func)
    {
        $this->initializer418c0 && ($this->initializer418c0->__invoke($valueHolder84161, $this, 'transactional', array('func' => $func), $this->initializer418c0) || 1) && $this->valueHolder84161 = $valueHolder84161;

        return $this->valueHolder84161->transactional($func);
    }

    public function commit()
    {
        $this->initializer418c0 && ($this->initializer418c0->__invoke($valueHolder84161, $this, 'commit', array(), $this->initializer418c0) || 1) && $this->valueHolder84161 = $valueHolder84161;

        return $this->valueHolder84161->commit();
    }

    public function rollback()
    {
        $this->initializer418c0 && ($this->initializer418c0->__invoke($valueHolder84161, $this, 'rollback', array(), $this->initializer418c0) || 1) && $this->valueHolder84161 = $valueHolder84161;

        return $this->valueHolder84161->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer418c0 && ($this->initializer418c0->__invoke($valueHolder84161, $this, 'getClassMetadata', array('className' => $className), $this->initializer418c0) || 1) && $this->valueHolder84161 = $valueHolder84161;

        return $this->valueHolder84161->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer418c0 && ($this->initializer418c0->__invoke($valueHolder84161, $this, 'createQuery', array('dql' => $dql), $this->initializer418c0) || 1) && $this->valueHolder84161 = $valueHolder84161;

        return $this->valueHolder84161->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer418c0 && ($this->initializer418c0->__invoke($valueHolder84161, $this, 'createNamedQuery', array('name' => $name), $this->initializer418c0) || 1) && $this->valueHolder84161 = $valueHolder84161;

        return $this->valueHolder84161->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer418c0 && ($this->initializer418c0->__invoke($valueHolder84161, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer418c0) || 1) && $this->valueHolder84161 = $valueHolder84161;

        return $this->valueHolder84161->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer418c0 && ($this->initializer418c0->__invoke($valueHolder84161, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer418c0) || 1) && $this->valueHolder84161 = $valueHolder84161;

        return $this->valueHolder84161->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer418c0 && ($this->initializer418c0->__invoke($valueHolder84161, $this, 'createQueryBuilder', array(), $this->initializer418c0) || 1) && $this->valueHolder84161 = $valueHolder84161;

        return $this->valueHolder84161->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer418c0 && ($this->initializer418c0->__invoke($valueHolder84161, $this, 'flush', array('entity' => $entity), $this->initializer418c0) || 1) && $this->valueHolder84161 = $valueHolder84161;

        return $this->valueHolder84161->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer418c0 && ($this->initializer418c0->__invoke($valueHolder84161, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer418c0) || 1) && $this->valueHolder84161 = $valueHolder84161;

        return $this->valueHolder84161->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer418c0 && ($this->initializer418c0->__invoke($valueHolder84161, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer418c0) || 1) && $this->valueHolder84161 = $valueHolder84161;

        return $this->valueHolder84161->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer418c0 && ($this->initializer418c0->__invoke($valueHolder84161, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer418c0) || 1) && $this->valueHolder84161 = $valueHolder84161;

        return $this->valueHolder84161->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer418c0 && ($this->initializer418c0->__invoke($valueHolder84161, $this, 'clear', array('entityName' => $entityName), $this->initializer418c0) || 1) && $this->valueHolder84161 = $valueHolder84161;

        return $this->valueHolder84161->clear($entityName);
    }

    public function close()
    {
        $this->initializer418c0 && ($this->initializer418c0->__invoke($valueHolder84161, $this, 'close', array(), $this->initializer418c0) || 1) && $this->valueHolder84161 = $valueHolder84161;

        return $this->valueHolder84161->close();
    }

    public function persist($entity)
    {
        $this->initializer418c0 && ($this->initializer418c0->__invoke($valueHolder84161, $this, 'persist', array('entity' => $entity), $this->initializer418c0) || 1) && $this->valueHolder84161 = $valueHolder84161;

        return $this->valueHolder84161->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer418c0 && ($this->initializer418c0->__invoke($valueHolder84161, $this, 'remove', array('entity' => $entity), $this->initializer418c0) || 1) && $this->valueHolder84161 = $valueHolder84161;

        return $this->valueHolder84161->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer418c0 && ($this->initializer418c0->__invoke($valueHolder84161, $this, 'refresh', array('entity' => $entity), $this->initializer418c0) || 1) && $this->valueHolder84161 = $valueHolder84161;

        return $this->valueHolder84161->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer418c0 && ($this->initializer418c0->__invoke($valueHolder84161, $this, 'detach', array('entity' => $entity), $this->initializer418c0) || 1) && $this->valueHolder84161 = $valueHolder84161;

        return $this->valueHolder84161->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer418c0 && ($this->initializer418c0->__invoke($valueHolder84161, $this, 'merge', array('entity' => $entity), $this->initializer418c0) || 1) && $this->valueHolder84161 = $valueHolder84161;

        return $this->valueHolder84161->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer418c0 && ($this->initializer418c0->__invoke($valueHolder84161, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer418c0) || 1) && $this->valueHolder84161 = $valueHolder84161;

        return $this->valueHolder84161->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer418c0 && ($this->initializer418c0->__invoke($valueHolder84161, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer418c0) || 1) && $this->valueHolder84161 = $valueHolder84161;

        return $this->valueHolder84161->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer418c0 && ($this->initializer418c0->__invoke($valueHolder84161, $this, 'getRepository', array('entityName' => $entityName), $this->initializer418c0) || 1) && $this->valueHolder84161 = $valueHolder84161;

        return $this->valueHolder84161->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer418c0 && ($this->initializer418c0->__invoke($valueHolder84161, $this, 'contains', array('entity' => $entity), $this->initializer418c0) || 1) && $this->valueHolder84161 = $valueHolder84161;

        return $this->valueHolder84161->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer418c0 && ($this->initializer418c0->__invoke($valueHolder84161, $this, 'getEventManager', array(), $this->initializer418c0) || 1) && $this->valueHolder84161 = $valueHolder84161;

        return $this->valueHolder84161->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer418c0 && ($this->initializer418c0->__invoke($valueHolder84161, $this, 'getConfiguration', array(), $this->initializer418c0) || 1) && $this->valueHolder84161 = $valueHolder84161;

        return $this->valueHolder84161->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer418c0 && ($this->initializer418c0->__invoke($valueHolder84161, $this, 'isOpen', array(), $this->initializer418c0) || 1) && $this->valueHolder84161 = $valueHolder84161;

        return $this->valueHolder84161->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer418c0 && ($this->initializer418c0->__invoke($valueHolder84161, $this, 'getUnitOfWork', array(), $this->initializer418c0) || 1) && $this->valueHolder84161 = $valueHolder84161;

        return $this->valueHolder84161->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer418c0 && ($this->initializer418c0->__invoke($valueHolder84161, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer418c0) || 1) && $this->valueHolder84161 = $valueHolder84161;

        return $this->valueHolder84161->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer418c0 && ($this->initializer418c0->__invoke($valueHolder84161, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer418c0) || 1) && $this->valueHolder84161 = $valueHolder84161;

        return $this->valueHolder84161->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer418c0 && ($this->initializer418c0->__invoke($valueHolder84161, $this, 'getProxyFactory', array(), $this->initializer418c0) || 1) && $this->valueHolder84161 = $valueHolder84161;

        return $this->valueHolder84161->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer418c0 && ($this->initializer418c0->__invoke($valueHolder84161, $this, 'initializeObject', array('obj' => $obj), $this->initializer418c0) || 1) && $this->valueHolder84161 = $valueHolder84161;

        return $this->valueHolder84161->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer418c0 && ($this->initializer418c0->__invoke($valueHolder84161, $this, 'getFilters', array(), $this->initializer418c0) || 1) && $this->valueHolder84161 = $valueHolder84161;

        return $this->valueHolder84161->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer418c0 && ($this->initializer418c0->__invoke($valueHolder84161, $this, 'isFiltersStateClean', array(), $this->initializer418c0) || 1) && $this->valueHolder84161 = $valueHolder84161;

        return $this->valueHolder84161->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer418c0 && ($this->initializer418c0->__invoke($valueHolder84161, $this, 'hasFilters', array(), $this->initializer418c0) || 1) && $this->valueHolder84161 = $valueHolder84161;

        return $this->valueHolder84161->hasFilters();
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

        $instance->initializer418c0 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder84161) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder84161 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder84161->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer418c0 && ($this->initializer418c0->__invoke($valueHolder84161, $this, '__get', ['name' => $name], $this->initializer418c0) || 1) && $this->valueHolder84161 = $valueHolder84161;

        if (isset(self::$publicProperties760b6[$name])) {
            return $this->valueHolder84161->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder84161;

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

        $targetObject = $this->valueHolder84161;
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
        $this->initializer418c0 && ($this->initializer418c0->__invoke($valueHolder84161, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer418c0) || 1) && $this->valueHolder84161 = $valueHolder84161;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder84161;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder84161;
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
        $this->initializer418c0 && ($this->initializer418c0->__invoke($valueHolder84161, $this, '__isset', array('name' => $name), $this->initializer418c0) || 1) && $this->valueHolder84161 = $valueHolder84161;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder84161;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder84161;
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
        $this->initializer418c0 && ($this->initializer418c0->__invoke($valueHolder84161, $this, '__unset', array('name' => $name), $this->initializer418c0) || 1) && $this->valueHolder84161 = $valueHolder84161;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder84161;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder84161;
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
        $this->initializer418c0 && ($this->initializer418c0->__invoke($valueHolder84161, $this, '__clone', array(), $this->initializer418c0) || 1) && $this->valueHolder84161 = $valueHolder84161;

        $this->valueHolder84161 = clone $this->valueHolder84161;
    }

    public function __sleep()
    {
        $this->initializer418c0 && ($this->initializer418c0->__invoke($valueHolder84161, $this, '__sleep', array(), $this->initializer418c0) || 1) && $this->valueHolder84161 = $valueHolder84161;

        return array('valueHolder84161');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer418c0 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer418c0;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer418c0 && ($this->initializer418c0->__invoke($valueHolder84161, $this, 'initializeProxy', array(), $this->initializer418c0) || 1) && $this->valueHolder84161 = $valueHolder84161;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder84161;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder84161;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
