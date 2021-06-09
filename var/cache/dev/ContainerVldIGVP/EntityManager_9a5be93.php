<?php

namespace ContainerVldIGVP;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb789c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf8d42 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties8bc35 = [
        
    ];

    public function getConnection()
    {
        $this->initializerf8d42 && ($this->initializerf8d42->__invoke($valueHolderb789c, $this, 'getConnection', array(), $this->initializerf8d42) || 1) && $this->valueHolderb789c = $valueHolderb789c;

        return $this->valueHolderb789c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf8d42 && ($this->initializerf8d42->__invoke($valueHolderb789c, $this, 'getMetadataFactory', array(), $this->initializerf8d42) || 1) && $this->valueHolderb789c = $valueHolderb789c;

        return $this->valueHolderb789c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf8d42 && ($this->initializerf8d42->__invoke($valueHolderb789c, $this, 'getExpressionBuilder', array(), $this->initializerf8d42) || 1) && $this->valueHolderb789c = $valueHolderb789c;

        return $this->valueHolderb789c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf8d42 && ($this->initializerf8d42->__invoke($valueHolderb789c, $this, 'beginTransaction', array(), $this->initializerf8d42) || 1) && $this->valueHolderb789c = $valueHolderb789c;

        return $this->valueHolderb789c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf8d42 && ($this->initializerf8d42->__invoke($valueHolderb789c, $this, 'getCache', array(), $this->initializerf8d42) || 1) && $this->valueHolderb789c = $valueHolderb789c;

        return $this->valueHolderb789c->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf8d42 && ($this->initializerf8d42->__invoke($valueHolderb789c, $this, 'transactional', array('func' => $func), $this->initializerf8d42) || 1) && $this->valueHolderb789c = $valueHolderb789c;

        return $this->valueHolderb789c->transactional($func);
    }

    public function commit()
    {
        $this->initializerf8d42 && ($this->initializerf8d42->__invoke($valueHolderb789c, $this, 'commit', array(), $this->initializerf8d42) || 1) && $this->valueHolderb789c = $valueHolderb789c;

        return $this->valueHolderb789c->commit();
    }

    public function rollback()
    {
        $this->initializerf8d42 && ($this->initializerf8d42->__invoke($valueHolderb789c, $this, 'rollback', array(), $this->initializerf8d42) || 1) && $this->valueHolderb789c = $valueHolderb789c;

        return $this->valueHolderb789c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf8d42 && ($this->initializerf8d42->__invoke($valueHolderb789c, $this, 'getClassMetadata', array('className' => $className), $this->initializerf8d42) || 1) && $this->valueHolderb789c = $valueHolderb789c;

        return $this->valueHolderb789c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf8d42 && ($this->initializerf8d42->__invoke($valueHolderb789c, $this, 'createQuery', array('dql' => $dql), $this->initializerf8d42) || 1) && $this->valueHolderb789c = $valueHolderb789c;

        return $this->valueHolderb789c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf8d42 && ($this->initializerf8d42->__invoke($valueHolderb789c, $this, 'createNamedQuery', array('name' => $name), $this->initializerf8d42) || 1) && $this->valueHolderb789c = $valueHolderb789c;

        return $this->valueHolderb789c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf8d42 && ($this->initializerf8d42->__invoke($valueHolderb789c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf8d42) || 1) && $this->valueHolderb789c = $valueHolderb789c;

        return $this->valueHolderb789c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf8d42 && ($this->initializerf8d42->__invoke($valueHolderb789c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf8d42) || 1) && $this->valueHolderb789c = $valueHolderb789c;

        return $this->valueHolderb789c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf8d42 && ($this->initializerf8d42->__invoke($valueHolderb789c, $this, 'createQueryBuilder', array(), $this->initializerf8d42) || 1) && $this->valueHolderb789c = $valueHolderb789c;

        return $this->valueHolderb789c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf8d42 && ($this->initializerf8d42->__invoke($valueHolderb789c, $this, 'flush', array('entity' => $entity), $this->initializerf8d42) || 1) && $this->valueHolderb789c = $valueHolderb789c;

        return $this->valueHolderb789c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf8d42 && ($this->initializerf8d42->__invoke($valueHolderb789c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf8d42) || 1) && $this->valueHolderb789c = $valueHolderb789c;

        return $this->valueHolderb789c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf8d42 && ($this->initializerf8d42->__invoke($valueHolderb789c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf8d42) || 1) && $this->valueHolderb789c = $valueHolderb789c;

        return $this->valueHolderb789c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf8d42 && ($this->initializerf8d42->__invoke($valueHolderb789c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf8d42) || 1) && $this->valueHolderb789c = $valueHolderb789c;

        return $this->valueHolderb789c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf8d42 && ($this->initializerf8d42->__invoke($valueHolderb789c, $this, 'clear', array('entityName' => $entityName), $this->initializerf8d42) || 1) && $this->valueHolderb789c = $valueHolderb789c;

        return $this->valueHolderb789c->clear($entityName);
    }

    public function close()
    {
        $this->initializerf8d42 && ($this->initializerf8d42->__invoke($valueHolderb789c, $this, 'close', array(), $this->initializerf8d42) || 1) && $this->valueHolderb789c = $valueHolderb789c;

        return $this->valueHolderb789c->close();
    }

    public function persist($entity)
    {
        $this->initializerf8d42 && ($this->initializerf8d42->__invoke($valueHolderb789c, $this, 'persist', array('entity' => $entity), $this->initializerf8d42) || 1) && $this->valueHolderb789c = $valueHolderb789c;

        return $this->valueHolderb789c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf8d42 && ($this->initializerf8d42->__invoke($valueHolderb789c, $this, 'remove', array('entity' => $entity), $this->initializerf8d42) || 1) && $this->valueHolderb789c = $valueHolderb789c;

        return $this->valueHolderb789c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf8d42 && ($this->initializerf8d42->__invoke($valueHolderb789c, $this, 'refresh', array('entity' => $entity), $this->initializerf8d42) || 1) && $this->valueHolderb789c = $valueHolderb789c;

        return $this->valueHolderb789c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf8d42 && ($this->initializerf8d42->__invoke($valueHolderb789c, $this, 'detach', array('entity' => $entity), $this->initializerf8d42) || 1) && $this->valueHolderb789c = $valueHolderb789c;

        return $this->valueHolderb789c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf8d42 && ($this->initializerf8d42->__invoke($valueHolderb789c, $this, 'merge', array('entity' => $entity), $this->initializerf8d42) || 1) && $this->valueHolderb789c = $valueHolderb789c;

        return $this->valueHolderb789c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf8d42 && ($this->initializerf8d42->__invoke($valueHolderb789c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf8d42) || 1) && $this->valueHolderb789c = $valueHolderb789c;

        return $this->valueHolderb789c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf8d42 && ($this->initializerf8d42->__invoke($valueHolderb789c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf8d42) || 1) && $this->valueHolderb789c = $valueHolderb789c;

        return $this->valueHolderb789c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf8d42 && ($this->initializerf8d42->__invoke($valueHolderb789c, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf8d42) || 1) && $this->valueHolderb789c = $valueHolderb789c;

        return $this->valueHolderb789c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf8d42 && ($this->initializerf8d42->__invoke($valueHolderb789c, $this, 'contains', array('entity' => $entity), $this->initializerf8d42) || 1) && $this->valueHolderb789c = $valueHolderb789c;

        return $this->valueHolderb789c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf8d42 && ($this->initializerf8d42->__invoke($valueHolderb789c, $this, 'getEventManager', array(), $this->initializerf8d42) || 1) && $this->valueHolderb789c = $valueHolderb789c;

        return $this->valueHolderb789c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf8d42 && ($this->initializerf8d42->__invoke($valueHolderb789c, $this, 'getConfiguration', array(), $this->initializerf8d42) || 1) && $this->valueHolderb789c = $valueHolderb789c;

        return $this->valueHolderb789c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf8d42 && ($this->initializerf8d42->__invoke($valueHolderb789c, $this, 'isOpen', array(), $this->initializerf8d42) || 1) && $this->valueHolderb789c = $valueHolderb789c;

        return $this->valueHolderb789c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf8d42 && ($this->initializerf8d42->__invoke($valueHolderb789c, $this, 'getUnitOfWork', array(), $this->initializerf8d42) || 1) && $this->valueHolderb789c = $valueHolderb789c;

        return $this->valueHolderb789c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf8d42 && ($this->initializerf8d42->__invoke($valueHolderb789c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf8d42) || 1) && $this->valueHolderb789c = $valueHolderb789c;

        return $this->valueHolderb789c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf8d42 && ($this->initializerf8d42->__invoke($valueHolderb789c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf8d42) || 1) && $this->valueHolderb789c = $valueHolderb789c;

        return $this->valueHolderb789c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf8d42 && ($this->initializerf8d42->__invoke($valueHolderb789c, $this, 'getProxyFactory', array(), $this->initializerf8d42) || 1) && $this->valueHolderb789c = $valueHolderb789c;

        return $this->valueHolderb789c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf8d42 && ($this->initializerf8d42->__invoke($valueHolderb789c, $this, 'initializeObject', array('obj' => $obj), $this->initializerf8d42) || 1) && $this->valueHolderb789c = $valueHolderb789c;

        return $this->valueHolderb789c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf8d42 && ($this->initializerf8d42->__invoke($valueHolderb789c, $this, 'getFilters', array(), $this->initializerf8d42) || 1) && $this->valueHolderb789c = $valueHolderb789c;

        return $this->valueHolderb789c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf8d42 && ($this->initializerf8d42->__invoke($valueHolderb789c, $this, 'isFiltersStateClean', array(), $this->initializerf8d42) || 1) && $this->valueHolderb789c = $valueHolderb789c;

        return $this->valueHolderb789c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf8d42 && ($this->initializerf8d42->__invoke($valueHolderb789c, $this, 'hasFilters', array(), $this->initializerf8d42) || 1) && $this->valueHolderb789c = $valueHolderb789c;

        return $this->valueHolderb789c->hasFilters();
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

        $instance->initializerf8d42 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderb789c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb789c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb789c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf8d42 && ($this->initializerf8d42->__invoke($valueHolderb789c, $this, '__get', ['name' => $name], $this->initializerf8d42) || 1) && $this->valueHolderb789c = $valueHolderb789c;

        if (isset(self::$publicProperties8bc35[$name])) {
            return $this->valueHolderb789c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb789c;

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

        $targetObject = $this->valueHolderb789c;
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
        $this->initializerf8d42 && ($this->initializerf8d42->__invoke($valueHolderb789c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf8d42) || 1) && $this->valueHolderb789c = $valueHolderb789c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb789c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb789c;
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
        $this->initializerf8d42 && ($this->initializerf8d42->__invoke($valueHolderb789c, $this, '__isset', array('name' => $name), $this->initializerf8d42) || 1) && $this->valueHolderb789c = $valueHolderb789c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb789c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb789c;
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
        $this->initializerf8d42 && ($this->initializerf8d42->__invoke($valueHolderb789c, $this, '__unset', array('name' => $name), $this->initializerf8d42) || 1) && $this->valueHolderb789c = $valueHolderb789c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb789c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb789c;
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
        $this->initializerf8d42 && ($this->initializerf8d42->__invoke($valueHolderb789c, $this, '__clone', array(), $this->initializerf8d42) || 1) && $this->valueHolderb789c = $valueHolderb789c;

        $this->valueHolderb789c = clone $this->valueHolderb789c;
    }

    public function __sleep()
    {
        $this->initializerf8d42 && ($this->initializerf8d42->__invoke($valueHolderb789c, $this, '__sleep', array(), $this->initializerf8d42) || 1) && $this->valueHolderb789c = $valueHolderb789c;

        return array('valueHolderb789c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf8d42 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf8d42;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf8d42 && ($this->initializerf8d42->__invoke($valueHolderb789c, $this, 'initializeProxy', array(), $this->initializerf8d42) || 1) && $this->valueHolderb789c = $valueHolderb789c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb789c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb789c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
