<?php
// src/Agronautes/PlateformeBundle/Form/ArticleEditType.php

namespace Agronautes\PlateformeBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ajouterArticleType extends ArticleType // Ici, on hérite de ArticleType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    // On fait appel à la méthode buildForm du parent, qui va ajouter tous les champs à $builder
    parent::buildForm($builder, $options);

    $builder->remove('dateCreated');
    $builder->remove('dateModified');
  }

  // On modifie cette méthode car les deux formulaires doivent avoir un nom différent
  public function getName()
  {
    return 'agronautes_plateformebundle_ajouterarticletype';
  }
}