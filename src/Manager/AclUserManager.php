<?php
namespace App\Manager;
use Sonata\AdminBundle\Util\AdminAclUserManagerInterface;
use Doctrine\ORM\EntityManagerInterface;
use Sonata\AdminBundle\Model\ModelManagerInterface;
class AclUserManager implements AdminAclUserManagerInterface {
    /**
     * @var EntityManagerInterface
     */
    protected $entityManager;

    /**
     * @var ModelManagerInterface
     */
    protected $userManager;

    /**
     * AclUserManager constructor.
     * @param EntityManagerInterface $entityManager
     * @param ModelManagerInterface $userManager
     */
    public function __construct(EntityManagerInterface $entityManager, ModelManagerInterface $userManager)
    {
        $this->entityManager = $entityManager;
        $this->userManager = $userManager;
    }

    /**
     * @inheritDoc
     */
    public function findUsers() : iterable
    {
        return $this->userManager->findBy(
            \App\Entity\User\User::class, // Replace with the fully qualified class name of your user entity
            array('id' => 'ASC')
        );
    }
}