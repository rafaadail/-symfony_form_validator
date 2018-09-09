<?php

namespace App\Form;

use App\Entity\Endereco;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EnderecoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('rua', TextType::class, [
                'label' => 'Logradouro'
            ])
            ->add('numero', TextType::class, [
                'label' => 'Número'
            ])
            ->add('bairro', TextType::class, [
                'label' => 'Bairro'
            ])
            ->add('cidade', TextType::class, [
                'label' => 'Cidade'
            ])
            ->add('estado', TextType::class, [
                'label' => 'Estado'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Endereco::class,
        ]);
    }
}
