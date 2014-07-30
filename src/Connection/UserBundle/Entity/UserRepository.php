<?php

namespace Connection\UserBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * eventRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UserRepository extends EntityRepository
{
    public function findByFbId($id)
    {
        return $this->createQueryBuilder('u')
                    ->select('u')
                    ->join('u.profile', 'p')
                    ->where('p.facebookId = :facebook_id')
                    ->setParameter('facebook_id', $id)
                    ->getQuery()
                    ->getOneOrNullResult();
    }

    public function findByTwitterId($id)
    {
        return $this->createQueryBuilder('u')
                    ->select('u')
                    ->join('u.profile', 'p')
                    ->where('p.twitterId = :twitter_id')
                    ->setParameter('twitter_id', $id)
                    ->getQuery()
                    ->getOneOrNullResult();
    }
}
