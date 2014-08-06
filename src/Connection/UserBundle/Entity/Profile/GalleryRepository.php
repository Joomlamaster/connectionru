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
    public function getGalleryByIdOrDefault( $userId, $id = 0 )
    {
            $gallery = $this->createQueryBuilder('g')
                ->join('g.user', 'u')
                ->where('u.id = :user_id')
                ->setParameter('user_id', $userId)
                ->andWhere('g.id = :gallery_id')->setParameter('gallery_id', $id)
                ->getQuery()->getOneOrNullResult();

            if (!$gallery) {
                $gallery = $this->createQueryBuilder('g')
                    ->join('g.user', 'u')
                    ->where('u.id = :user_id')
                    ->setParameter('user_id', $userId)
                    ->andWhere('g.isDefault = :is_default')->setParameter('is_default', 1)
                    ->getQuery()->getOneOrNullResult();
            }

        return $gallery;
    }
}
