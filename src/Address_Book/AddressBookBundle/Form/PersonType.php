<?php

namespace Address_Book\AddressBookBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class PersonType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('name')
                ->add('surname')
                ->add('description')
                ->add('groups', EntityType::class, array('class' => 'ABBundle:Groups', 'choice_label' => 'person'))
                ->add('address', EntityType::class, array('class' => 'ABBundle:Address', 'choice_label' => 'person'));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Address_Book\AddressBookBundle\Entity\Person'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix() {
        return 'address_book_addressbookbundle_person';
    }

}
