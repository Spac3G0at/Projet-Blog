<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig');
    }


            /**
         * @Route(
         *   "/post/{id}.{_format}",
         *    defaults={"_format": "html"},
         *    requirements={
         *      "_format": "html|json",
         *      "id": "\d+"
         *     }
         * ) 
         * @Method("GET")
         */
        public function showAction(Request $request, int $id) {
            $article = $this->getDoctrine()
                ->getRepository('AppBundle:Article') // on récupère le Repository Product
                ->find($id); // on récupère le Produit ayant l'ID passé dans la route
            switch ($request->getRequestFormat()) { // on switche en fonction du _format passé dans la route
                case "json": // si c'est du json
                    if ($article) { // si un Produit a été trouvé dans la base de donnée
                        return $this->json($article); // afficher le produit au format JSON
                    }
                    else { // sinon si un Produit n'a pas été trouvé
                        return $this->json('Product '.$id.' not found', 404); // renvoyer une erreur au format JSON
                    }
                case "html": // si c'est du html
                    if ($article) { // si un Produit a été trouvé dans la base de donnée
                        return $this->render('default/post.html.twig', compact('article')); // afficher la vue Twig avec le produit trouvé dans la base de donnée
                    }
                    else { // sinon si un Produit n'a pas été trouvé
                        throw $this->createNotFoundException('No article found for id '.$id); // on lève une erreur 404
                    }
            }
        }

}