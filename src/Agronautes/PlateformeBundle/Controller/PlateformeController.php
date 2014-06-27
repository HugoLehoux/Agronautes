<?php

namespace Agronautes\PlateformeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PlateformeController extends Controller
{
    public function indexAction()
    {
        return $this->render('AgronautesPlateformeBundle:Plateforme:index.html.twig');
    }
	
	public function lireArticleAction()
    {
        return $this->render('AgronautesPlateformeBundle:Plateforme:lireArticle.html.twig');
    }
	
	public function ajouterArticleAction()
    {
		if( $this->get('request')->getMethod() == 'POST' ){      
      $this->get('session')->getFlashBag()->add('notice', 'Votre article a bien été enregistré !');
       return $this->redirect( $this->generateUrl('pf_lire_article', array('id' => 5)) );
    }
        return $this->render('AgronautesPlateformeBundle:Plateforme:ajouterArticle.html.twig');
    }
	
	public function modifierArticleAction()
    {
        return $this->render('AgronautesPlateformeBundle:Plateforme:modifierArticle.html.twig');
    }
	
	public function supprimerArticleAction()
    {
        return $this->render('AgronautesPlateformeBundle:Plateforme:supprimerArticle.html.twig');
    }
	
}
