<?php

namespace Agronautes\PlateformeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

// Mes entités
use Agronautes\PlateformeBundle\Entity\Article;

// Mes formulaires types
use Agronautes\PlateformeBundle\Form\ArticleType;
use Agronautes\PlateformeBundle\Form\ajouterArticleType;



class PlateformeController extends Controller
{




    public function indexAction()
    {
        return $this->render('AgronautesPlateformeBundle:Plateforme:index.html.twig');
    }
	
	
	
	
	
	
	
	
	
	
	
	
	
	public function lireArticleAction(Article $article)
    {
		
        return $this->render('AgronautesPlateformeBundle:Plateforme:lireArticle.html.twig', 
		array('article' => $article)
		);
    }
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	public function ajouterArticleAction()
    {	
		$article = new Article;
		$form = $this->createForm(new ajouterArticleType, $article);
	
		$request = $this->get('request');
		if ($request->getMethod() == 'POST') {
			$form->bind($request);

			if ($form->isValid()) {
			  $em = $this->getDoctrine()->getManager();
			  $em->persist($article);
			  $em->flush();

			  // A changer pour l'adresse de l'article
			return $this->redirect($this->generateUrl('pf_accueil'));
			}
		  }
		  
		return $this->render('AgronautesPlateformeBundle:Plateforme:ajouterArticle.html.twig', array(
			'form' => $form->createView(),
			));

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
