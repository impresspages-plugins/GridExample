<?php
/**
 * Created by PhpStorm.
 * User: Marijus
 * Date: 3/20/14
 * Time: 11:22 AM
 */

namespace Plugin\GridExample;


class AdminController extends \Ip\GridController
{
    protected  function config(){
        return array(
            'title' => 'Person list',
            'table' => 'gridExample',
            'deleteWarning' => 'Are you sure?',
            'sortField' => 'personOrder',
            'createPosition' => 'top',
            'pageSize' => 5,
            'fields' => array(
                array(
                    'label' => 'First name',
                    'field' => 'FirstName',
                    'validators' => array('Required')
                ),
                array(
                    'label' => 'Last name',
                    'field' => 'LastName'
                ),
               array(
                   'type' => 'Select',
                   'label' => 'Sex',
                   'field' => 'Sex',
                   'values' => array(
                       array('female', 'Female'),
                       array('male', 'Male')
                   )
                ),
//                array(
//                    'label' => 'Date Modified',
//                    'field' => 'DateModified',
//                ),
                array(
                    'label' => 'Phone',
                    'field' => 'Phone',
                ),
                array(
                    'label' => 'E-mail',
                    'field' => 'Email',
                    'validators' => array('Email')
                ),
                array(
                    'label' => 'Url',
                    'field' => 'Url',
                ),
                array(
                    'label' => 'Comment',
                    'field' => 'Comment',
                ),
                array(
                    'type' => 'Checkbox',
                    'label' => 'Enabled',
                    'showInList' => true,
                    'field' => 'Enabled'
                ),
                array(
                    'type' => 'RepositoryFile',
                    'label' => 'CV',
                    'showInList' => true,
                    'field' => 'cv'
                )

            )
        );
    }

}