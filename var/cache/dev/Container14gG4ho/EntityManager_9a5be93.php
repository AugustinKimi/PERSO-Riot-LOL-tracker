<?php

namespace Container14gG4ho;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder451ec = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer9dade = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties13dda = [
        
    ];

    public function getConnection()
    {
        $this->initializer9dade && ($this->initializer9dade->__invoke($valueHolder451ec, $this, 'getConnection', array(), $this->initializer9dade) || 1) && $this->valueHolder451ec = $valueHolder451ec;

        return $this->valueHolder451ec->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer9dade && ($this->initializer9dade->__invoke($valueHolder451ec, $this, 'getMetadataFactory', array(), $this->initializer9dade) || 1) && $this->valueHolder451ec = $valueHolder451ec;

        return $this->valueHolder451ec->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer9dade && ($this->initializer9dade->__invoke($valueHolder451ec, $this, 'getExpressionBuilder', array(), $this->initializer9dade) || 1) && $this->valueHolder451ec = $valueHolder451ec;

        return $this->valueHolder451ec->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer9dade && ($this->initializer9dade->__invoke($valueHolder451ec, $this, 'beginTransaction', array(), $this->initializer9dade) || 1) && $this->valueHolder451ec = $valueHolder451ec;

        return $this->valueHolder451ec->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer9dade && ($this->initializer9dade->__invoke($valueHolder451ec, $this, 'getCache', array(), $this->initializer9dade) || 1) && $this->valueHolder451ec = $valueHolder451ec;

        return $this->valueHolder451ec->getCache();
    }

    public function transactional($func)
    {
        $this->initializer9dade && ($this->initializer9dade->__invoke($valueHolder451ec, $this, 'transactional', array('func' => $func), $this->initializer9dade) || 1) && $this->valueHolder451ec = $valueHolder451ec;

        return $this->valueHolder451ec->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer9dade && ($this->initializer9dade->__invoke($valueHolder451ec, $this, 'wrapInTransaction', array('func' => $func), $this->initializer9dade) || 1) && $this->valueHolder451ec = $valueHolder451ec;

        return $this->valueHolder451ec->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer9dade && ($this->initializer9dade->__invoke($valueHolder451ec, $this, 'commit', array(), $this->initializer9dade) || 1) && $this->valueHolder451ec = $valueHolder451ec;

        return $this->valueHolder451ec->commit();
    }

    public function rollback()
    {
        $this->initializer9dade && ($this->initializer9dade->__invoke($valueHolder451ec, $this, 'rollback', array(), $this->initializer9dade) || 1) && $this->valueHolder451ec = $valueHolder451ec;

        return $this->valueHolder451ec->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer9dade && ($this->initializer9dade->__invoke($valueHolder451ec, $this, 'getClassMetadata', array('className' => $className), $this->initializer9dade) || 1) && $this->valueHolder451ec = $valueHolder451ec;

        return $this->valueHolder451ec->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer9dade && ($this->initializer9dade->__invoke($valueHolder451ec, $this, 'createQuery', array('dql' => $dql), $this->initializer9dade) || 1) && $this->valueHolder451ec = $valueHolder451ec;

        return $this->valueHolder451ec->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer9dade && ($this->initializer9dade->__invoke($valueHolder451ec, $this, 'createNamedQuery', array('name' => $name), $this->initializer9dade) || 1) && $this->valueHolder451ec = $valueHolder451ec;

        return $this->valueHolder451ec->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer9dade && ($this->initializer9dade->__invoke($valueHolder451ec, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer9dade) || 1) && $this->valueHolder451ec = $valueHolder451ec;

        return $this->valueHolder451ec->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer9dade && ($this->initializer9dade->__invoke($valueHolder451ec, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer9dade) || 1) && $this->valueHolder451ec = $valueHolder451ec;

        return $this->valueHolder451ec->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer9dade && ($this->initializer9dade->__invoke($valueHolder451ec, $this, 'createQueryBuilder', array(), $this->initializer9dade) || 1) && $this->valueHolder451ec = $valueHolder451ec;

        return $this->valueHolder451ec->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer9dade && ($this->initializer9dade->__invoke($valueHolder451ec, $this, 'flush', array('entity' => $entity), $this->initializer9dade) || 1) && $this->valueHolder451ec = $valueHolder451ec;

        return $this->valueHolder451ec->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer9dade && ($this->initializer9dade->__invoke($valueHolder451ec, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9dade) || 1) && $this->valueHolder451ec = $valueHolder451ec;

        return $this->valueHolder451ec->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer9dade && ($this->initializer9dade->__invoke($valueHolder451ec, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer9dade) || 1) && $this->valueHolder451ec = $valueHolder451ec;

        return $this->valueHolder451ec->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer9dade && ($this->initializer9dade->__invoke($valueHolder451ec, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer9dade) || 1) && $this->valueHolder451ec = $valueHolder451ec;

        return $this->valueHolder451ec->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer9dade && ($this->initializer9dade->__invoke($valueHolder451ec, $this, 'clear', array('entityName' => $entityName), $this->initializer9dade) || 1) && $this->valueHolder451ec = $valueHolder451ec;

        return $this->valueHolder451ec->clear($entityName);
    }

    public function close()
    {
        $this->initializer9dade && ($this->initializer9dade->__invoke($valueHolder451ec, $this, 'close', array(), $this->initializer9dade) || 1) && $this->valueHolder451ec = $valueHolder451ec;

        return $this->valueHolder451ec->close();
    }

    public function persist($entity)
    {
        $this->initializer9dade && ($this->initializer9dade->__invoke($valueHolder451ec, $this, 'persist', array('entity' => $entity), $this->initializer9dade) || 1) && $this->valueHolder451ec = $valueHolder451ec;

        return $this->valueHolder451ec->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer9dade && ($this->initializer9dade->__invoke($valueHolder451ec, $this, 'remove', array('entity' => $entity), $this->initializer9dade) || 1) && $this->valueHolder451ec = $valueHolder451ec;

        return $this->valueHolder451ec->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer9dade && ($this->initializer9dade->__invoke($valueHolder451ec, $this, 'refresh', array('entity' => $entity), $this->initializer9dade) || 1) && $this->valueHolder451ec = $valueHolder451ec;

        return $this->valueHolder451ec->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer9dade && ($this->initializer9dade->__invoke($valueHolder451ec, $this, 'detach', array('entity' => $entity), $this->initializer9dade) || 1) && $this->valueHolder451ec = $valueHolder451ec;

        return $this->valueHolder451ec->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer9dade && ($this->initializer9dade->__invoke($valueHolder451ec, $this, 'merge', array('entity' => $entity), $this->initializer9dade) || 1) && $this->valueHolder451ec = $valueHolder451ec;

        return $this->valueHolder451ec->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer9dade && ($this->initializer9dade->__invoke($valueHolder451ec, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer9dade) || 1) && $this->valueHolder451ec = $valueHolder451ec;

        return $this->valueHolder451ec->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer9dade && ($this->initializer9dade->__invoke($valueHolder451ec, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9dade) || 1) && $this->valueHolder451ec = $valueHolder451ec;

        return $this->valueHolder451ec->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer9dade && ($this->initializer9dade->__invoke($valueHolder451ec, $this, 'getRepository', array('entityName' => $entityName), $this->initializer9dade) || 1) && $this->valueHolder451ec = $valueHolder451ec;

        return $this->valueHolder451ec->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer9dade && ($this->initializer9dade->__invoke($valueHolder451ec, $this, 'contains', array('entity' => $entity), $this->initializer9dade) || 1) && $this->valueHolder451ec = $valueHolder451ec;

        return $this->valueHolder451ec->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer9dade && ($this->initializer9dade->__invoke($valueHolder451ec, $this, 'getEventManager', array(), $this->initializer9dade) || 1) && $this->valueHolder451ec = $valueHolder451ec;

        return $this->valueHolder451ec->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer9dade && ($this->initializer9dade->__invoke($valueHolder451ec, $this, 'getConfiguration', array(), $this->initializer9dade) || 1) && $this->valueHolder451ec = $valueHolder451ec;

        return $this->valueHolder451ec->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer9dade && ($this->initializer9dade->__invoke($valueHolder451ec, $this, 'isOpen', array(), $this->initializer9dade) || 1) && $this->valueHolder451ec = $valueHolder451ec;

        return $this->valueHolder451ec->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer9dade && ($this->initializer9dade->__invoke($valueHolder451ec, $this, 'getUnitOfWork', array(), $this->initializer9dade) || 1) && $this->valueHolder451ec = $valueHolder451ec;

        return $this->valueHolder451ec->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer9dade && ($this->initializer9dade->__invoke($valueHolder451ec, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9dade) || 1) && $this->valueHolder451ec = $valueHolder451ec;

        return $this->valueHolder451ec->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer9dade && ($this->initializer9dade->__invoke($valueHolder451ec, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9dade) || 1) && $this->valueHolder451ec = $valueHolder451ec;

        return $this->valueHolder451ec->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer9dade && ($this->initializer9dade->__invoke($valueHolder451ec, $this, 'getProxyFactory', array(), $this->initializer9dade) || 1) && $this->valueHolder451ec = $valueHolder451ec;

        return $this->valueHolder451ec->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer9dade && ($this->initializer9dade->__invoke($valueHolder451ec, $this, 'initializeObject', array('obj' => $obj), $this->initializer9dade) || 1) && $this->valueHolder451ec = $valueHolder451ec;

        return $this->valueHolder451ec->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer9dade && ($this->initializer9dade->__invoke($valueHolder451ec, $this, 'getFilters', array(), $this->initializer9dade) || 1) && $this->valueHolder451ec = $valueHolder451ec;

        return $this->valueHolder451ec->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer9dade && ($this->initializer9dade->__invoke($valueHolder451ec, $this, 'isFiltersStateClean', array(), $this->initializer9dade) || 1) && $this->valueHolder451ec = $valueHolder451ec;

        return $this->valueHolder451ec->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer9dade && ($this->initializer9dade->__invoke($valueHolder451ec, $this, 'hasFilters', array(), $this->initializer9dade) || 1) && $this->valueHolder451ec = $valueHolder451ec;

        return $this->valueHolder451ec->hasFilters();
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

        $instance->initializer9dade = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder451ec) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder451ec = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder451ec->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer9dade && ($this->initializer9dade->__invoke($valueHolder451ec, $this, '__get', ['name' => $name], $this->initializer9dade) || 1) && $this->valueHolder451ec = $valueHolder451ec;

        if (isset(self::$publicProperties13dda[$name])) {
            return $this->valueHolder451ec->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder451ec;

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

        $targetObject = $this->valueHolder451ec;
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
        $this->initializer9dade && ($this->initializer9dade->__invoke($valueHolder451ec, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer9dade) || 1) && $this->valueHolder451ec = $valueHolder451ec;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder451ec;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder451ec;
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
        $this->initializer9dade && ($this->initializer9dade->__invoke($valueHolder451ec, $this, '__isset', array('name' => $name), $this->initializer9dade) || 1) && $this->valueHolder451ec = $valueHolder451ec;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder451ec;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder451ec;
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
        $this->initializer9dade && ($this->initializer9dade->__invoke($valueHolder451ec, $this, '__unset', array('name' => $name), $this->initializer9dade) || 1) && $this->valueHolder451ec = $valueHolder451ec;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder451ec;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder451ec;
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
        $this->initializer9dade && ($this->initializer9dade->__invoke($valueHolder451ec, $this, '__clone', array(), $this->initializer9dade) || 1) && $this->valueHolder451ec = $valueHolder451ec;

        $this->valueHolder451ec = clone $this->valueHolder451ec;
    }

    public function __sleep()
    {
        $this->initializer9dade && ($this->initializer9dade->__invoke($valueHolder451ec, $this, '__sleep', array(), $this->initializer9dade) || 1) && $this->valueHolder451ec = $valueHolder451ec;

        return array('valueHolder451ec');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer9dade = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer9dade;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer9dade && ($this->initializer9dade->__invoke($valueHolder451ec, $this, 'initializeProxy', array(), $this->initializer9dade) || 1) && $this->valueHolder451ec = $valueHolder451ec;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder451ec;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder451ec;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
