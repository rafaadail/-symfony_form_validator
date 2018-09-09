<?php

namespace App\Form;

use App\Entity\HistoricoProfissional;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HistoricoProfissionalType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nome_empresa', TextType::class, [
                'label' => 'Empresa'
            ])
            ->add('data_entrada', DateType::class, [
                'label' => 'Data Entrada',
                'widget' => 'choice',
                'format' => 'dd/MM/yyyy',
            ])
            ->add('data_saida', DateType::class, [
                'label' => 'Data Saída',
                'widget' => 'choice',
                'format' => 'dd/MM/yyyy',
            ])
            ->add('emprego_atual', CheckboxType::class, [
                'label' => 'Emprego Atual'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => HistoricoProfissional::class,
        ]);
    }
}
