<?php

namespace Agronautes\PlateformeBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ArticleType extends Articletype
{
	parent::buildForm($builder, $options);
	
    $builder->remove('dateModified');


    /**
     * @return string
     */
    public function getName()
    {
        return 'agronautes_plateformebundle_ajoutarticle';
    }
}
