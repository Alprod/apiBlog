<?php

namespace ContainerFs7vz0n;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder5af70 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer59c88 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties72769 = [
        
    ];

    public function getConnection()
    {
        $this->initializer59c88 && ($this->initializer59c88->__invoke($valueHolder5af70, $this, 'getConnection', array(), $this->initializer59c88) || 1) && $this->valueHolder5af70 = $valueHolder5af70;

        return $this->valueHolder5af70->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer59c88 && ($this->initializer59c88->__invoke($valueHolder5af70, $this, 'getMetadataFactory', array(), $this->initializer59c88) || 1) && $this->valueHolder5af70 = $valueHolder5af70;

        return $this->valueHolder5af70->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer59c88 && ($this->initializer59c88->__invoke($valueHolder5af70, $this, 'getExpressionBuilder', array(), $this->initializer59c88) || 1) && $this->valueHolder5af70 = $valueHolder5af70;

        return $this->valueHolder5af70->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer59c88 && ($this->initializer59c88->__invoke($valueHolder5af70, $this, 'beginTransaction', array(), $this->initializer59c88) || 1) && $this->valueHolder5af70 = $valueHolder5af70;

        return $this->valueHolder5af70->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer59c88 && ($this->initializer59c88->__invoke($valueHolder5af70, $this, 'getCache', array(), $this->initializer59c88) || 1) && $this->valueHolder5af70 = $valueHolder5af70;

        return $this->valueHolder5af70->getCache();
    }

    public function transactional($func)
    {
        $this->initializer59c88 && ($this->initializer59c88->__invoke($valueHolder5af70, $this, 'transactional', array('func' => $func), $this->initializer59c88) || 1) && $this->valueHolder5af70 = $valueHolder5af70;

        return $this->valueHolder5af70->transactional($func);
    }

    public function commit()
    {
        $this->initializer59c88 && ($this->initializer59c88->__invoke($valueHolder5af70, $this, 'commit', array(), $this->initializer59c88) || 1) && $this->valueHolder5af70 = $valueHolder5af70;

        return $this->valueHolder5af70->commit();
    }

    public function rollback()
    {
        $this->initializer59c88 && ($this->initializer59c88->__invoke($valueHolder5af70, $this, 'rollback', array(), $this->initializer59c88) || 1) && $this->valueHolder5af70 = $valueHolder5af70;

        return $this->valueHolder5af70->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer59c88 && ($this->initializer59c88->__invoke($valueHolder5af70, $this, 'getClassMetadata', array('className' => $className), $this->initializer59c88) || 1) && $this->valueHolder5af70 = $valueHolder5af70;

        return $this->valueHolder5af70->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer59c88 && ($this->initializer59c88->__invoke($valueHolder5af70, $this, 'createQuery', array('dql' => $dql), $this->initializer59c88) || 1) && $this->valueHolder5af70 = $valueHolder5af70;

        return $this->valueHolder5af70->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer59c88 && ($this->initializer59c88->__invoke($valueHolder5af70, $this, 'createNamedQuery', array('name' => $name), $this->initializer59c88) || 1) && $this->valueHolder5af70 = $valueHolder5af70;

        return $this->valueHolder5af70->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer59c88 && ($this->initializer59c88->__invoke($valueHolder5af70, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer59c88) || 1) && $this->valueHolder5af70 = $valueHolder5af70;

        return $this->valueHolder5af70->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer59c88 && ($this->initializer59c88->__invoke($valueHolder5af70, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer59c88) || 1) && $this->valueHolder5af70 = $valueHolder5af70;

        return $this->valueHolder5af70->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer59c88 && ($this->initializer59c88->__invoke($valueHolder5af70, $this, 'createQueryBuilder', array(), $this->initializer59c88) || 1) && $this->valueHolder5af70 = $valueHolder5af70;

        return $this->valueHolder5af70->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer59c88 && ($this->initializer59c88->__invoke($valueHolder5af70, $this, 'flush', array('entity' => $entity), $this->initializer59c88) || 1) && $this->valueHolder5af70 = $valueHolder5af70;

        return $this->valueHolder5af70->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer59c88 && ($this->initializer59c88->__invoke($valueHolder5af70, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer59c88) || 1) && $this->valueHolder5af70 = $valueHolder5af70;

        return $this->valueHolder5af70->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer59c88 && ($this->initializer59c88->__invoke($valueHolder5af70, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer59c88) || 1) && $this->valueHolder5af70 = $valueHolder5af70;

        return $this->valueHolder5af70->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer59c88 && ($this->initializer59c88->__invoke($valueHolder5af70, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer59c88) || 1) && $this->valueHolder5af70 = $valueHolder5af70;

        return $this->valueHolder5af70->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer59c88 && ($this->initializer59c88->__invoke($valueHolder5af70, $this, 'clear', array('entityName' => $entityName), $this->initializer59c88) || 1) && $this->valueHolder5af70 = $valueHolder5af70;

        return $this->valueHolder5af70->clear($entityName);
    }

    public function close()
    {
        $this->initializer59c88 && ($this->initializer59c88->__invoke($valueHolder5af70, $this, 'close', array(), $this->initializer59c88) || 1) && $this->valueHolder5af70 = $valueHolder5af70;

        return $this->valueHolder5af70->close();
    }

    public function persist($entity)
    {
        $this->initializer59c88 && ($this->initializer59c88->__invoke($valueHolder5af70, $this, 'persist', array('entity' => $entity), $this->initializer59c88) || 1) && $this->valueHolder5af70 = $valueHolder5af70;

        return $this->valueHolder5af70->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer59c88 && ($this->initializer59c88->__invoke($valueHolder5af70, $this, 'remove', array('entity' => $entity), $this->initializer59c88) || 1) && $this->valueHolder5af70 = $valueHolder5af70;

        return $this->valueHolder5af70->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer59c88 && ($this->initializer59c88->__invoke($valueHolder5af70, $this, 'refresh', array('entity' => $entity), $this->initializer59c88) || 1) && $this->valueHolder5af70 = $valueHolder5af70;

        return $this->valueHolder5af70->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer59c88 && ($this->initializer59c88->__invoke($valueHolder5af70, $this, 'detach', array('entity' => $entity), $this->initializer59c88) || 1) && $this->valueHolder5af70 = $valueHolder5af70;

        return $this->valueHolder5af70->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer59c88 && ($this->initializer59c88->__invoke($valueHolder5af70, $this, 'merge', array('entity' => $entity), $this->initializer59c88) || 1) && $this->valueHolder5af70 = $valueHolder5af70;

        return $this->valueHolder5af70->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer59c88 && ($this->initializer59c88->__invoke($valueHolder5af70, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer59c88) || 1) && $this->valueHolder5af70 = $valueHolder5af70;

        return $this->valueHolder5af70->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer59c88 && ($this->initializer59c88->__invoke($valueHolder5af70, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer59c88) || 1) && $this->valueHolder5af70 = $valueHolder5af70;

        return $this->valueHolder5af70->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer59c88 && ($this->initializer59c88->__invoke($valueHolder5af70, $this, 'getRepository', array('entityName' => $entityName), $this->initializer59c88) || 1) && $this->valueHolder5af70 = $valueHolder5af70;

        return $this->valueHolder5af70->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer59c88 && ($this->initializer59c88->__invoke($valueHolder5af70, $this, 'contains', array('entity' => $entity), $this->initializer59c88) || 1) && $this->valueHolder5af70 = $valueHolder5af70;

        return $this->valueHolder5af70->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer59c88 && ($this->initializer59c88->__invoke($valueHolder5af70, $this, 'getEventManager', array(), $this->initializer59c88) || 1) && $this->valueHolder5af70 = $valueHolder5af70;

        return $this->valueHolder5af70->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer59c88 && ($this->initializer59c88->__invoke($valueHolder5af70, $this, 'getConfiguration', array(), $this->initializer59c88) || 1) && $this->valueHolder5af70 = $valueHolder5af70;

        return $this->valueHolder5af70->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer59c88 && ($this->initializer59c88->__invoke($valueHolder5af70, $this, 'isOpen', array(), $this->initializer59c88) || 1) && $this->valueHolder5af70 = $valueHolder5af70;

        return $this->valueHolder5af70->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer59c88 && ($this->initializer59c88->__invoke($valueHolder5af70, $this, 'getUnitOfWork', array(), $this->initializer59c88) || 1) && $this->valueHolder5af70 = $valueHolder5af70;

        return $this->valueHolder5af70->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer59c88 && ($this->initializer59c88->__invoke($valueHolder5af70, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer59c88) || 1) && $this->valueHolder5af70 = $valueHolder5af70;

        return $this->valueHolder5af70->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer59c88 && ($this->initializer59c88->__invoke($valueHolder5af70, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer59c88) || 1) && $this->valueHolder5af70 = $valueHolder5af70;

        return $this->valueHolder5af70->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer59c88 && ($this->initializer59c88->__invoke($valueHolder5af70, $this, 'getProxyFactory', array(), $this->initializer59c88) || 1) && $this->valueHolder5af70 = $valueHolder5af70;

        return $this->valueHolder5af70->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer59c88 && ($this->initializer59c88->__invoke($valueHolder5af70, $this, 'initializeObject', array('obj' => $obj), $this->initializer59c88) || 1) && $this->valueHolder5af70 = $valueHolder5af70;

        return $this->valueHolder5af70->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer59c88 && ($this->initializer59c88->__invoke($valueHolder5af70, $this, 'getFilters', array(), $this->initializer59c88) || 1) && $this->valueHolder5af70 = $valueHolder5af70;

        return $this->valueHolder5af70->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer59c88 && ($this->initializer59c88->__invoke($valueHolder5af70, $this, 'isFiltersStateClean', array(), $this->initializer59c88) || 1) && $this->valueHolder5af70 = $valueHolder5af70;

        return $this->valueHolder5af70->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer59c88 && ($this->initializer59c88->__invoke($valueHolder5af70, $this, 'hasFilters', array(), $this->initializer59c88) || 1) && $this->valueHolder5af70 = $valueHolder5af70;

        return $this->valueHolder5af70->hasFilters();
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

        $instance->initializer59c88 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder5af70) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5af70 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder5af70->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer59c88 && ($this->initializer59c88->__invoke($valueHolder5af70, $this, '__get', ['name' => $name], $this->initializer59c88) || 1) && $this->valueHolder5af70 = $valueHolder5af70;

        if (isset(self::$publicProperties72769[$name])) {
            return $this->valueHolder5af70->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5af70;

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

        $targetObject = $this->valueHolder5af70;
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
        $this->initializer59c88 && ($this->initializer59c88->__invoke($valueHolder5af70, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer59c88) || 1) && $this->valueHolder5af70 = $valueHolder5af70;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5af70;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5af70;
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
        $this->initializer59c88 && ($this->initializer59c88->__invoke($valueHolder5af70, $this, '__isset', array('name' => $name), $this->initializer59c88) || 1) && $this->valueHolder5af70 = $valueHolder5af70;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5af70;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder5af70;
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
        $this->initializer59c88 && ($this->initializer59c88->__invoke($valueHolder5af70, $this, '__unset', array('name' => $name), $this->initializer59c88) || 1) && $this->valueHolder5af70 = $valueHolder5af70;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5af70;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder5af70;
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
        $this->initializer59c88 && ($this->initializer59c88->__invoke($valueHolder5af70, $this, '__clone', array(), $this->initializer59c88) || 1) && $this->valueHolder5af70 = $valueHolder5af70;

        $this->valueHolder5af70 = clone $this->valueHolder5af70;
    }

    public function __sleep()
    {
        $this->initializer59c88 && ($this->initializer59c88->__invoke($valueHolder5af70, $this, '__sleep', array(), $this->initializer59c88) || 1) && $this->valueHolder5af70 = $valueHolder5af70;

        return array('valueHolder5af70');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer59c88 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer59c88;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer59c88 && ($this->initializer59c88->__invoke($valueHolder5af70, $this, 'initializeProxy', array(), $this->initializer59c88) || 1) && $this->valueHolder5af70 = $valueHolder5af70;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5af70;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5af70;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
