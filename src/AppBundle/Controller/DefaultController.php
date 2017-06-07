<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use FOS\UserBundle\Entity\UserManager;

class DefaultController extends Controller
{
    /**
     * Lists all article entities.
     *
     * @Route("/", name="homepage")
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $dql   = "SELECT a FROM AppBundle:Article a WHERE a.isDraft = 0 ORDER BY a.id desc";
        $query = $em->createQuery($dql);

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            6/*limit per page*/
            );



        $articles = $em->getRepository('AppBundle:Article')->findAll();
        return $this->render('default/index.html.twig', array(
            'articles' => $articles,
            'pagination' => $pagination,
            ));
    }

    /**
     * Lists all article entities.
     *
     * @Route("/tri/asc", name="asc")
     * @Method("GET")
     */
    public function ascAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $dql   = "SELECT a FROM AppBundle:Article a WHERE a.isDraft = 0 ORDER BY a.id asc";
        $query = $em->createQuery($dql);

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            6/*limit per page*/
            );



        $articles = $em->getRepository('AppBundle:Article')->findAll();
        return $this->render('default/index.html.twig', array(
            'articles' => $articles,
            'pagination' => $pagination,
            ));
    }




         /**
         * @Route(
         *   "/post/{id}.{_format}",
         *    defaults={"_format": "html"},
         *    requirements={
         *      "_format": "html|json",
         *      "id": "\d+"
         *     }
         * , name="post") 
         * @Method("GET")
         */
         public function showAction(Request $request, int $id) {
            $article = $this->getDoctrine()
                ->getRepository('AppBundle:Article') // on récupère le Repository Product
                ->find($id); // on récupère le Produit ayant l'ID passé dans la route

                    if ($article) { // si un Produit a été trouvé dans la base de donnée
                        return $this->render('default/post.html.twig', compact('article')); // afficher la vue Twig avec le produit trouvé dans la base de donnée
                    }
                    else { // sinon si un Produit n'a pas été trouvé
                        throw $this->createNotFoundException('No article found for id '.$id); // on lève une erreur 404
                    }
                }

            /**
            * @Route("/about", name="about")
            */
             public function aboutAction(Request $request)
             {
              

              return $this->render('default/about.html.twig');
             }


            /**
            * @Route("/contact", name="contact")
            */
            public function contactAction(Request $request)
            {
               // replace this example code with whatever you need
               return $this->render('default/contact.html.twig');
            }         


}