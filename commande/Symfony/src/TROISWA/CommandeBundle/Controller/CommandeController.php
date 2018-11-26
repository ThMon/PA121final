<?php

namespace TROISWA\CommandeBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CommandeController extends Controller
{
    public function indexAction()
    {
    	$repository = $this->getDoctrine()->getManager()->getRepository('TROISWACommandeBundle:Orders');
        
        $orders = $repository->findAll();

        

        return $this->render('TROISWACommandeBundle:Commande:index.html.twig', ['orders' => $orders]);
    }

    public function recapAction($id)
    {
    	$database = $this->container->get('troiswa_commande.sql');

        $order = $database->selectOneInSql('SELECT * FROM orders WHERE orderNumber = ?', [$id]);

        var_dump($order);

        return $this->render('TROISWACommandeBundle:Commande:recap.html.twig');
    }
}
