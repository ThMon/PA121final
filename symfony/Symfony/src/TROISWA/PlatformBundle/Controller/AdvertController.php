<?php

namespace TROISWA\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use TROISWA\PlatformBundle\Entity\Advert;

class AdvertController extends Controller
{
    public function indexAction($name)
    {

    	
    	$repository = $this->getDoctrine()->getManager()->getRepository('TROISWAPlatformBundle:Advert');
        
        $listAdverts = $repository->findAll();
    	$content = $this->get('templating')->render('TROISWAPlatformBundle:Advert:index.html.twig', ["nom" => $name, 'listAdverts'=> $listAdverts]);


        return new Response($content);

    }

    public function viewAction($id)
  {
    // Ici, on récupérera l'annonce correspondante à l'id $id

    $advert = array(
      'title'   => 'Recherche développpeur Symfony3',
      'id'      => $id,
      'author'  => 'Alexandre',
      'content' => 'Nous recherchons un développeur Symfony2 débutant sur Lyon. Blabla…',
      'date'    => new \Datetime()
    );

    return $this->render('TROISWAPlatformBundle:Advert:view.html.twig', array(
      'advert' => $advert
    ));
  }

  public function addAction(Request $request)
  {
    $advert = new Advert();
    $advert->setTitle('Recherche développeur Symfony.');
    $advert->setAuthor('Alexandre');
    $advert->setContent("Nous recherchons un développeur Symfony débutant sur Lyon. Blabla…");


    $em = $this->getDoctrine()->getManager();

    $em->persist($advert);

    $em->flush();

    return $this->render('TROISWAPlatformBundle:Advert:add.html.twig');
   
  }

  public function editAction($id, Request $request)
  {
	   $advert = array(
	      'title'   => 'Recherche développpeur Symfony',
	      'id'      => $id,
	      'author'  => 'Alexandre',
	      'content' => 'Nous recherchons un développeur Symfony débutant sur Lyon. Blabla…',
	      'date'    => new \Datetime()
	    );

	    return $this->render('TROISWAPlatformBundle:Advert:edit.html.twig', array(
	      'advert' => $advert
	    ));
	   

   
  }

  public function deleteAction($id)
  {
  }
}



?>