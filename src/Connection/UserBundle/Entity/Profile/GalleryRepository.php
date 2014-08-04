<?php

namespace Connection\UserBundle\Entity\Profile;

use Doctrine\ORM\EntityRepository;

/**
 * eventRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class GalleryRepository extends EntityRepository
{
    public function getGalleryByIdOrDefault( $userId, $id = false )
    {
        $qb = $this->createQueryBuilder('g')
                   ->join('g.user', 'u')
                   ->where('u.id = :user_id')
                   ->setParameter('user_id', $userId);
        if ($id) {
            $qb->andWhere('g.id = :gallery_id')->setParameter('gallery_id', $id);
        } else {
            $qb->andWhere('g.default = :default')->setParameter('default', 1);
        }
        return $qb->getQuery()->getSingleResult();
    }
}
