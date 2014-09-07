<?php

namespace Attachmentgenie\ExampleApiV1\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class NoteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('message', 'textarea', array(
            'description' => 'A brief record of points or ideas written down as an aid to memory',
        ));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class'         => 'Attachmentgenie\ExampleApiV1\Model\Note',
            'intention'          => 'note',
            'translation_domain' => 'AttachmentgenieExampleApiV1'
        ));
    }

    public function getName()
    {
        return 'note';
    }
}
