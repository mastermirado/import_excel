<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\NotBlank;

class ImportType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('file', FileType::class, [
            'label' => 'Fichier Excel (XLSX, CSV)',
            'mapped' => false,
            'required' => true,
            'constraints' => [
                new NotBlank(['message' => 'Veuillez sélectionner un fichier.']),
                new File([
                    'mimeTypes' => ['application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'text/csv'],
                    'mimeTypesMessage' => 'Veuillez télécharger un fichier Excel valide (XLSX ou CSV).',
                ])
            ],
        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([]);
    }
}
