<?php
/**
 * Created by PhpStorm.
 * User: adil
 * Date: 11/12/18
 * Time: 07:28
 */

namespace OC\PlatformBundle\purger;


use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class purgerAdvert
{


    private $entityManager;

    /**
     * @return EntityManager
     */
    public function getEntityManager()
    {
        return $this->entityManager;
    }

    /**
     * @param EntityManager $entityManager
     */
    public function setEntityManager($entityManager)
    {
        $this->entityManager = $entityManager;
    }




    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;

    }





    public function purge($days){

        //on recupere la liste des adverts dont la date de modification est plus vieille que $days jours et qui n'ayant pas de candidature

        $listAdverts = $this->getEntityManager()->getRepository('OC\PlatformBundle\Entity\Advert')->getAdvertByDays($days);


        //message d'erreur si la liste est vide


        if (null == $listAdverts) {
           print (" Aucune publication trouvée.");
        }



        //on supprime les annances

       foreach ($listAdverts as $advert) {

           $this->getEntityManager()->remove($advert);
           $this->getEntityManager()->flush();

        }


       return new Response("les adverts bien étés supprimer.");

    }

}