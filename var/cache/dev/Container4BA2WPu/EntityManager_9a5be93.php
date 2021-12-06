<?php

namespace Container4BA2WPu;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb8e6e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer8d6d8 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesdb9eb = [
        
    ];

    public function getConnection()
    {
        $this->initializer8d6d8 && ($this->initializer8d6d8->__invoke($valueHolderb8e6e, $this, 'getConnection', array(), $this->initializer8d6d8) || 1) && $this->valueHolderb8e6e = $valueHolderb8e6e;

        return $this->valueHolderb8e6e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer8d6d8 && ($this->initializer8d6d8->__invoke($valueHolderb8e6e, $this, 'getMetadataFactory', array(), $this->initializer8d6d8) || 1) && $this->valueHolderb8e6e = $valueHolderb8e6e;

        return $this->valueHolderb8e6e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer8d6d8 && ($this->initializer8d6d8->__invoke($valueHolderb8e6e, $this, 'getExpressionBuilder', array(), $this->initializer8d6d8) || 1) && $this->valueHolderb8e6e = $valueHolderb8e6e;

        return $this->valueHolderb8e6e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer8d6d8 && ($this->initializer8d6d8->__invoke($valueHolderb8e6e, $this, 'beginTransaction', array(), $this->initializer8d6d8) || 1) && $this->valueHolderb8e6e = $valueHolderb8e6e;

        return $this->valueHolderb8e6e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer8d6d8 && ($this->initializer8d6d8->__invoke($valueHolderb8e6e, $this, 'getCache', array(), $this->initializer8d6d8) || 1) && $this->valueHolderb8e6e = $valueHolderb8e6e;

        return $this->valueHolderb8e6e->getCache();
    }

    public function transactional($func)
    {
        $this->initializer8d6d8 && ($this->initializer8d6d8->__invoke($valueHolderb8e6e, $this, 'transactional', array('func' => $func), $this->initializer8d6d8) || 1) && $this->valueHolderb8e6e = $valueHolderb8e6e;

        return $this->valueHolderb8e6e->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer8d6d8 && ($this->initializer8d6d8->__invoke($valueHolderb8e6e, $this, 'wrapInTransaction', array('func' => $func), $this->initializer8d6d8) || 1) && $this->valueHolderb8e6e = $valueHolderb8e6e;

        return $this->valueHolderb8e6e->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer8d6d8 && ($this->initializer8d6d8->__invoke($valueHolderb8e6e, $this, 'commit', array(), $this->initializer8d6d8) || 1) && $this->valueHolderb8e6e = $valueHolderb8e6e;

        return $this->valueHolderb8e6e->commit();
    }

    public function rollback()
    {
        $this->initializer8d6d8 && ($this->initializer8d6d8->__invoke($valueHolderb8e6e, $this, 'rollback', array(), $this->initializer8d6d8) || 1) && $this->valueHolderb8e6e = $valueHolderb8e6e;

        return $this->valueHolderb8e6e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer8d6d8 && ($this->initializer8d6d8->__invoke($valueHolderb8e6e, $this, 'getClassMetadata', array('className' => $className), $this->initializer8d6d8) || 1) && $this->valueHolderb8e6e = $valueHolderb8e6e;

        return $this->valueHolderb8e6e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer8d6d8 && ($this->initializer8d6d8->__invoke($valueHolderb8e6e, $this, 'createQuery', array('dql' => $dql), $this->initializer8d6d8) || 1) && $this->valueHolderb8e6e = $valueHolderb8e6e;

        return $this->valueHolderb8e6e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer8d6d8 && ($this->initializer8d6d8->__invoke($valueHolderb8e6e, $this, 'createNamedQuery', array('name' => $name), $this->initializer8d6d8) || 1) && $this->valueHolderb8e6e = $valueHolderb8e6e;

        return $this->valueHolderb8e6e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer8d6d8 && ($this->initializer8d6d8->__invoke($valueHolderb8e6e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer8d6d8) || 1) && $this->valueHolderb8e6e = $valueHolderb8e6e;

        return $this->valueHolderb8e6e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer8d6d8 && ($this->initializer8d6d8->__invoke($valueHolderb8e6e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer8d6d8) || 1) && $this->valueHolderb8e6e = $valueHolderb8e6e;

        return $this->valueHolderb8e6e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer8d6d8 && ($this->initializer8d6d8->__invoke($valueHolderb8e6e, $this, 'createQueryBuilder', array(), $this->initializer8d6d8) || 1) && $this->valueHolderb8e6e = $valueHolderb8e6e;

        return $this->valueHolderb8e6e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer8d6d8 && ($this->initializer8d6d8->__invoke($valueHolderb8e6e, $this, 'flush', array('entity' => $entity), $this->initializer8d6d8) || 1) && $this->valueHolderb8e6e = $valueHolderb8e6e;

        return $this->valueHolderb8e6e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer8d6d8 && ($this->initializer8d6d8->__invoke($valueHolderb8e6e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8d6d8) || 1) && $this->valueHolderb8e6e = $valueHolderb8e6e;

        return $this->valueHolderb8e6e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer8d6d8 && ($this->initializer8d6d8->__invoke($valueHolderb8e6e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer8d6d8) || 1) && $this->valueHolderb8e6e = $valueHolderb8e6e;

        return $this->valueHolderb8e6e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer8d6d8 && ($this->initializer8d6d8->__invoke($valueHolderb8e6e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer8d6d8) || 1) && $this->valueHolderb8e6e = $valueHolderb8e6e;

        return $this->valueHolderb8e6e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer8d6d8 && ($this->initializer8d6d8->__invoke($valueHolderb8e6e, $this, 'clear', array('entityName' => $entityName), $this->initializer8d6d8) || 1) && $this->valueHolderb8e6e = $valueHolderb8e6e;

        return $this->valueHolderb8e6e->clear($entityName);
    }

    public function close()
    {
        $this->initializer8d6d8 && ($this->initializer8d6d8->__invoke($valueHolderb8e6e, $this, 'close', array(), $this->initializer8d6d8) || 1) && $this->valueHolderb8e6e = $valueHolderb8e6e;

        return $this->valueHolderb8e6e->close();
    }

    public function persist($entity)
    {
        $this->initializer8d6d8 && ($this->initializer8d6d8->__invoke($valueHolderb8e6e, $this, 'persist', array('entity' => $entity), $this->initializer8d6d8) || 1) && $this->valueHolderb8e6e = $valueHolderb8e6e;

        return $this->valueHolderb8e6e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer8d6d8 && ($this->initializer8d6d8->__invoke($valueHolderb8e6e, $this, 'remove', array('entity' => $entity), $this->initializer8d6d8) || 1) && $this->valueHolderb8e6e = $valueHolderb8e6e;

        return $this->valueHolderb8e6e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer8d6d8 && ($this->initializer8d6d8->__invoke($valueHolderb8e6e, $this, 'refresh', array('entity' => $entity), $this->initializer8d6d8) || 1) && $this->valueHolderb8e6e = $valueHolderb8e6e;

        return $this->valueHolderb8e6e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer8d6d8 && ($this->initializer8d6d8->__invoke($valueHolderb8e6e, $this, 'detach', array('entity' => $entity), $this->initializer8d6d8) || 1) && $this->valueHolderb8e6e = $valueHolderb8e6e;

        return $this->valueHolderb8e6e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer8d6d8 && ($this->initializer8d6d8->__invoke($valueHolderb8e6e, $this, 'merge', array('entity' => $entity), $this->initializer8d6d8) || 1) && $this->valueHolderb8e6e = $valueHolderb8e6e;

        return $this->valueHolderb8e6e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer8d6d8 && ($this->initializer8d6d8->__invoke($valueHolderb8e6e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer8d6d8) || 1) && $this->valueHolderb8e6e = $valueHolderb8e6e;

        return $this->valueHolderb8e6e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer8d6d8 && ($this->initializer8d6d8->__invoke($valueHolderb8e6e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8d6d8) || 1) && $this->valueHolderb8e6e = $valueHolderb8e6e;

        return $this->valueHolderb8e6e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer8d6d8 && ($this->initializer8d6d8->__invoke($valueHolderb8e6e, $this, 'getRepository', array('entityName' => $entityName), $this->initializer8d6d8) || 1) && $this->valueHolderb8e6e = $valueHolderb8e6e;

        return $this->valueHolderb8e6e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer8d6d8 && ($this->initializer8d6d8->__invoke($valueHolderb8e6e, $this, 'contains', array('entity' => $entity), $this->initializer8d6d8) || 1) && $this->valueHolderb8e6e = $valueHolderb8e6e;

        return $this->valueHolderb8e6e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer8d6d8 && ($this->initializer8d6d8->__invoke($valueHolderb8e6e, $this, 'getEventManager', array(), $this->initializer8d6d8) || 1) && $this->valueHolderb8e6e = $valueHolderb8e6e;

        return $this->valueHolderb8e6e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer8d6d8 && ($this->initializer8d6d8->__invoke($valueHolderb8e6e, $this, 'getConfiguration', array(), $this->initializer8d6d8) || 1) && $this->valueHolderb8e6e = $valueHolderb8e6e;

        return $this->valueHolderb8e6e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer8d6d8 && ($this->initializer8d6d8->__invoke($valueHolderb8e6e, $this, 'isOpen', array(), $this->initializer8d6d8) || 1) && $this->valueHolderb8e6e = $valueHolderb8e6e;

        return $this->valueHolderb8e6e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer8d6d8 && ($this->initializer8d6d8->__invoke($valueHolderb8e6e, $this, 'getUnitOfWork', array(), $this->initializer8d6d8) || 1) && $this->valueHolderb8e6e = $valueHolderb8e6e;

        return $this->valueHolderb8e6e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer8d6d8 && ($this->initializer8d6d8->__invoke($valueHolderb8e6e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8d6d8) || 1) && $this->valueHolderb8e6e = $valueHolderb8e6e;

        return $this->valueHolderb8e6e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer8d6d8 && ($this->initializer8d6d8->__invoke($valueHolderb8e6e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8d6d8) || 1) && $this->valueHolderb8e6e = $valueHolderb8e6e;

        return $this->valueHolderb8e6e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer8d6d8 && ($this->initializer8d6d8->__invoke($valueHolderb8e6e, $this, 'getProxyFactory', array(), $this->initializer8d6d8) || 1) && $this->valueHolderb8e6e = $valueHolderb8e6e;

        return $this->valueHolderb8e6e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer8d6d8 && ($this->initializer8d6d8->__invoke($valueHolderb8e6e, $this, 'initializeObject', array('obj' => $obj), $this->initializer8d6d8) || 1) && $this->valueHolderb8e6e = $valueHolderb8e6e;

        return $this->valueHolderb8e6e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer8d6d8 && ($this->initializer8d6d8->__invoke($valueHolderb8e6e, $this, 'getFilters', array(), $this->initializer8d6d8) || 1) && $this->valueHolderb8e6e = $valueHolderb8e6e;

        return $this->valueHolderb8e6e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer8d6d8 && ($this->initializer8d6d8->__invoke($valueHolderb8e6e, $this, 'isFiltersStateClean', array(), $this->initializer8d6d8) || 1) && $this->valueHolderb8e6e = $valueHolderb8e6e;

        return $this->valueHolderb8e6e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer8d6d8 && ($this->initializer8d6d8->__invoke($valueHolderb8e6e, $this, 'hasFilters', array(), $this->initializer8d6d8) || 1) && $this->valueHolderb8e6e = $valueHolderb8e6e;

        return $this->valueHolderb8e6e->hasFilters();
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

        $instance->initializer8d6d8 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderb8e6e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb8e6e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb8e6e->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer8d6d8 && ($this->initializer8d6d8->__invoke($valueHolderb8e6e, $this, '__get', ['name' => $name], $this->initializer8d6d8) || 1) && $this->valueHolderb8e6e = $valueHolderb8e6e;

        if (isset(self::$publicPropertiesdb9eb[$name])) {
            return $this->valueHolderb8e6e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb8e6e;

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

        $targetObject = $this->valueHolderb8e6e;
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
        $this->initializer8d6d8 && ($this->initializer8d6d8->__invoke($valueHolderb8e6e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8d6d8) || 1) && $this->valueHolderb8e6e = $valueHolderb8e6e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb8e6e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb8e6e;
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
        $this->initializer8d6d8 && ($this->initializer8d6d8->__invoke($valueHolderb8e6e, $this, '__isset', array('name' => $name), $this->initializer8d6d8) || 1) && $this->valueHolderb8e6e = $valueHolderb8e6e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb8e6e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb8e6e;
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
        $this->initializer8d6d8 && ($this->initializer8d6d8->__invoke($valueHolderb8e6e, $this, '__unset', array('name' => $name), $this->initializer8d6d8) || 1) && $this->valueHolderb8e6e = $valueHolderb8e6e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb8e6e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb8e6e;
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
        $this->initializer8d6d8 && ($this->initializer8d6d8->__invoke($valueHolderb8e6e, $this, '__clone', array(), $this->initializer8d6d8) || 1) && $this->valueHolderb8e6e = $valueHolderb8e6e;

        $this->valueHolderb8e6e = clone $this->valueHolderb8e6e;
    }

    public function __sleep()
    {
        $this->initializer8d6d8 && ($this->initializer8d6d8->__invoke($valueHolderb8e6e, $this, '__sleep', array(), $this->initializer8d6d8) || 1) && $this->valueHolderb8e6e = $valueHolderb8e6e;

        return array('valueHolderb8e6e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer8d6d8 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8d6d8;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer8d6d8 && ($this->initializer8d6d8->__invoke($valueHolderb8e6e, $this, 'initializeProxy', array(), $this->initializer8d6d8) || 1) && $this->valueHolderb8e6e = $valueHolderb8e6e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb8e6e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb8e6e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
