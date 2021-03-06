<?php
/* For licensing terms, see /license.txt */

namespace Chamilo\CoreBundle\Settings;

use Sylius\Bundle\SettingsBundle\Schema\SchemaInterface;
use Sylius\Bundle\SettingsBundle\Schema\SettingsBuilderInterface;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Class GradebookSettingsSchema
 * @package Chamilo\CoreBundle\Settings
 */
class GradebookSettingsSchema implements SchemaInterface
{
    /**
     * {@inheritdoc}
     */
    public function buildSettings(SettingsBuilderInterface $builder)
    {
        $builder
            ->setDefaults(array(
                'gradebook_enable' => '',
                'gradebook_score_display_coloring' => '',
                'gradebook_score_display_custom' => '',
                'gradebook_score_display_colorsplit' => '',
                'gradebook_score_display_upperlimit' => '',
                'gradebook_number_decimals' => '0',
                'allow_hr_skills_management' => '',
                'teachers_can_change_score_settings' => '',
                'teachers_can_change_grade_model_settings' => '',
                'gradebook_enable_grade_model' => '',
                'gradebook_default_weight' => '100',
                'gradebook_locking_enabled' => '',
                'gradebook_default_grade_model_id' => '',
                'gradebook_show_percentage_in_rep' => '' // ?
            ))
            ->setAllowedTypes(array(
                'gradebook_enable' => array('string'),
                'gradebook_number_decimals' => array('string'),
                'gradebook_default_weight' => array('string'),

            ))
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder)
    {
        $builder
            ->add('gradebook_enable', 'yes_no')
            ->add('gradebook_score_display_coloring', 'yes_no')
            ->add('gradebook_score_display_custom', 'yes_no')
            ->add('gradebook_score_display_colorspl')
            ->add('gradebook_score_display_upperlim', 'yes_no')
            ->add('gradebook_number_decimals')
            ->add('allow_hr_skills_management', 'yes_no')
            ->add('teachers_can_change_score_settin', 'yes_no')
            ->add('gradebook_enable_grade_model', 'yes_no')
            ->add('teachers_can_change_grade_model_', 'yes_no')
            ->add('gradebook_default_weight')
            ->add('gradebook_locking_enabled', 'yes_no')
            ->add('gradebook_default_grade_model_id')
            ->add('gradebook_show_percentage_in_rep')
        ;
    }
}
