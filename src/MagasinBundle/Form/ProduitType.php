<?php

namespace MagasinBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProduitType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('libelle')
            ->add('marque')
            ->add('quantite')
            ->add('type')->add('prix')
            ->add('description')
            ->add('photoProduit',FileType ::class)
            ->add('idMagasin',EntityType::class
                ,array('class'=>'MagasinBundle\Entity\Magasin','choice_label'=>'nomMagasin','multiple'=>false,'label'=>'Votre immatriculation'))
            ->add('ajouter',SubmitType::class);

        ;
    }
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MagasinBundle\Entity\Produit'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'magasinbundle_produit';
    }


}
