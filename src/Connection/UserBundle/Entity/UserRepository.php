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

    public function getLatest($limit)
    {
        return $this->createQueryBuilder('u')
            ->select('u')
            ->join('u.profile', 'p')
            ->orderBy('u.createdAt')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    public function countAll()
    {
        return $this->createQueryBuilder('u')
            ->select('COUNT(u.id) AS total')
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function search($filter, $limit = false, $offset = false)
    {
        $qb = $this->createQueryBuilder('u')
            ->join('u.profile', 'p');

        //  Filter By Country
        if ( !empty($filter['country']) ) {
            $qb->join('p.country', 'c')->andWhere('c.id = :country')->setParameter('country', $filter['country']);
        }

        //  Filter By State
        if ( !empty($filter['state']) ) {
            $qb->join('p.state', 'st')->andWhere('st.id = :state')->setParameter('state', $filter['state']);
        }

        //  Found person should seek for searcher gender
        if ( !empty($filter['gender']) ) {
            $qb->join('p.seek', 's')->andWhere('s.id = :gender')->setParameter('gender', $filter['gender']);
        }

        //  Found person gender should be equal to searcher seek
        if ( !empty($filter['seek']) ) {
            $qb->join('p.gender', 'g')->andWhere('g.id = :seek')->setParameter('seek', $filter['seek']);
        }

        //  Filter By LookingFor
        if ( !empty($filter['lookingFor']) ) {
            $qb->join('p.lookingFor', 'lf')->andWhere('lf.id = :looking_for')->setParameter('looking_for', $filter['lookingFor']);
        }

        //  Filter By ageFrom
        if ( !empty($filter['ageFrom'])) {
            $from = new \DateTime("-{$filter['ageFrom']} years");
            $qb->andWhere('p.birthdate <= :age_from')->setParameter('age_from', $from);
        }

        //  Filter By ageTo
        if ( !empty($filter['ageTo'])) {
            $to = new \DateTime("-{$filter['ageTo']} years");
            $qb->andWhere('p.birthdate >= :age_to')->setParameter('age_to', $to);
        }

        //  Filter By languages
        if ( !empty($filter['languages']) && !$filter['languages']->isEmpty()) {
            $langs = $filter['languages']->toArray();
            $qb->join('p.languages', 'l')->andWhere('l.id IN (:languages)')->setParameter('languages', $filter['languages']->toArray());
        }

        //  Filter By education
        if ( !empty($filter['education'])) {
            $qb->andWhere('p.education = :education')->setParameter('education', $filter['education']);
        }

        //  Filter By profession
        if ( !empty($filter['profession'])) {
            $qb->andWhere('p.profession = :profession')->setParameter('profession', $filter['profession']);
        }

        //  Filter By income
        if ( !empty($filter['income'])) {
            $qb->andWhere('p.income >= :income')->setParameter('income', $filter['income']);
        }

        //  Filter By religion
        if ( !empty($filter['religion'])) {
            $qb->andWhere('p.religion = :religion')->setParameter('religion', $filter['religion']);
        }

        //  Filter By maritalStatus
        if ( !empty($filter['maritalStatus'])) {
            $qb->andWhere('p.maritalStatus = :maritalStatus')->setParameter('maritalStatus', $filter['maritalStatus']);
        }

        //  Filter By heightFrom
        if ( !empty($filter['minimumHeight'])) {
            $qb->andWhere('p.height >= :minimumHeight')->setParameter('minimumHeight', $filter['minimumHeight']);
        }

        //  Filter By heightTo
        if ( !empty($filter['maximumHeight'])) {
            $qb->andWhere('p.height <= :maximumHeight')->setParameter('maximumHeight', $filter['maximumHeight']);
        }

        //  Filter By weightFrom
        if ( !empty($filter['minimumWeight'])) {
            $qb->andWhere('p.weight >= :minimumWeight')->setParameter('minimumWeight', $filter['minimumWeight']);
        }

        //  Filter By weightTo
        if ( !empty($filter['maximumWeight'])) {
            $qb->andWhere('p.weight <= :maximumWeight')->setParameter('maximumWeight', $filter['maximumWeight']);
        }

        //  Filter By eyeColor
        if ( !empty($filter['eyeColor'])) {
            $qb->andWhere('p.eyeColor = :eyeColor')->setParameter('eyeColor', $filter['eyeColor']);
        }

        //  Filter By hairColor
        if ( !empty($filter['hairColor'])) {
            $qb->andWhere('p.hairColor = :hairColor')->setParameter('hairColor', $filter['hairColor']);
        }

        //  Filter By smoking
        if ( !empty($filter['smoking'])) {
            $qb->andWhere('p.smoking = :smoking')->setParameter('smoking', $filter['smoking']);
        }

        //  Filter By drinking
        if ( !empty($filter['drinking'])) {
            $qb->andWhere('p.drinking = :drinking')->setParameter('drinking', $filter['drinking']);
        }

        //  Filter By haveChildren
        if ( !empty($filter['haveChildren'])) {
            $qb->andWhere('p.haveChildren = :haveChildren')->setParameter('haveChildren', $filter['haveChildren']);
        }

        //  Filter By wantChildren
        if ( !empty($filter['wantChildren'])) {
            $qb->andWhere('p.wantChildren = :wantChildren')->setParameter('wantChildren', $filter['wantChildren']);
        }

        //  Filter By livesWithChildren
        if ( !empty($filter['livesWithChildren'])) {
            $qb->andWhere('p.livesWithChildren = :livesWithChildren')->setParameter('livesWithChildren', $filter['livesWithChildren']);
        }

        //  Filter By openToPersonWithKids
        if ( !empty($filter['openToPersonWithKids'])) {
            $qb->andWhere('p.openToPersonWithKids = :openToPersonWithKids')->setParameter('openToPersonWithKids', $filter['openToPersonWithKids']);
        }

        //  Filter By etnicity
        if ( !empty($filter['etnicity'])) {
            $qb->andWhere('p.etnicity = :etnicity')->setParameter('etnicity', $filter['etnicity']);
        }

        //  Filter By zodiac
        if ( !empty($filter['zodiacSign'])) {
            $qb->andWhere('p.zodiac = :zodiacSign')->setParameter('zodiacSign', $filter['zodiacSign']);
        }


        if($limit){
            $qb->setMaxResults($limit);
        }

        if($offset){
            $qb->setFirstResult($offset);
        }

        return $qb->getQuery()->getResult();
    }
}
