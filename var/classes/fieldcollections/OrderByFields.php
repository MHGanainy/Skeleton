<?php

/**
Fields Summary:
- field [indexFieldSelectionCombo]
- direction [select]
*/


return Pimcore\Model\DataObject\Fieldcollection\Definition::__set_state(array(
   'dao' => NULL,
   'key' => 'OrderByFields',
   'parentClass' => '',
   'implementsInterfaces' => '',
   'title' => '',
   'group' => 'Filter Definition',
   'layoutDefinitions' => 
  Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
     'fieldtype' => 'panel',
     'layout' => NULL,
     'border' => false,
     'name' => NULL,
     'type' => NULL,
     'region' => NULL,
     'title' => NULL,
     'width' => 0,
     'height' => 0,
     'collapsible' => false,
     'collapsed' => false,
     'bodyStyle' => NULL,
     'datatype' => 'layout',
     'permissions' => NULL,
     'childs' => 
    array (
      0 => 
      Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
         'fieldtype' => 'panel',
         'layout' => '',
         'border' => false,
         'name' => 'Layout',
         'type' => '',
         'region' => '',
         'title' => '',
         'width' => '',
         'height' => '',
         'collapsible' => false,
         'collapsed' => false,
         'bodyStyle' => '',
         'datatype' => 'layout',
         'permissions' => '',
         'childs' => 
        array (
          0 => 
          Pimcore\Bundle\EcommerceFrameworkBundle\CoreExtensions\ClassDefinition\IndexFieldSelectionCombo::__set_state(array(
             'fieldtype' => 'indexFieldSelectionCombo',
             'specificPriceField' => false,
             'showAllFields' => false,
             'considerTenants' => true,
             'options' => 
            array (
              0 => 
              array (
                'key' => 'categoryIds',
                'value' => 'categoryIds',
              ),
              1 => 
              array (
                'key' => 'name',
                'value' => 'name',
              ),
              2 => 
              array (
                'key' => 'seoname',
                'value' => 'seoname',
              ),
              3 => 
              array (
                'key' => 'description',
                'value' => 'description',
              ),
              4 => 
              array (
                'key' => 'ean',
                'value' => 'ean',
              ),
              5 => 
              array (
                'key' => 'artno',
                'value' => 'artno',
              ),
              6 => 
              array (
                'key' => 'gender',
                'value' => 'gender',
              ),
              7 => 
              array (
                'key' => 'color',
                'value' => 'color',
              ),
              8 => 
              array (
                'key' => 'size',
                'value' => 'size',
              ),
              9 => 
              array (
                'key' => 'price',
                'value' => 'price',
              ),
              10 => 
              array (
                'key' => 'foottype',
                'value' => 'foottype',
              ),
              11 => 
              array (
                'key' => 'gaittype',
                'value' => 'gaittype',
              ),
              12 => 
              array (
                'key' => 'fittings',
                'value' => 'fittings',
              ),
              13 => 
              array (
                'key' => 'zips',
                'value' => 'zips',
              ),
              14 => 
              array (
                'key' => 'approvals',
                'value' => 'approvals',
              ),
              15 => 
              array (
                'key' => 'rating',
                'value' => 'rating',
              ),
              16 => 
              array (
                'key' => 'features',
                'value' => 'features',
              ),
              17 => 
              array (
                'key' => 'attributes',
                'value' => 'attributes',
              ),
              18 => 
              array (
                'key' => 'technologies',
                'value' => 'technologies',
              ),
            ),
             'width' => 300,
             'defaultValue' => NULL,
             'optionsProviderClass' => NULL,
             'optionsProviderData' => NULL,
             'columnLength' => 190,
             'dynamicOptions' => false,
             'name' => 'field',
             'title' => 'Field',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => '',
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'forbiddenNames' => 
            array (
              0 => 'id',
              1 => 'key',
              2 => 'path',
              3 => 'type',
              4 => 'index',
              5 => 'classname',
              6 => 'creationdate',
              7 => 'userowner',
              8 => 'value',
              9 => 'class',
              10 => 'list',
              11 => 'fullpath',
              12 => 'childs',
              13 => 'values',
              14 => 'cachetag',
              15 => 'cachetags',
              16 => 'parent',
              17 => 'published',
              18 => 'valuefromparent',
              19 => 'userpermissions',
              20 => 'dependencies',
              21 => 'modificationdate',
              22 => 'usermodification',
              23 => 'byid',
              24 => 'bypath',
              25 => 'data',
              26 => 'versions',
              27 => 'properties',
              28 => 'permissions',
              29 => 'permissionsforuser',
              30 => 'childamount',
              31 => 'apipluginbroker',
              32 => 'resource',
              33 => 'parentClass',
              34 => 'definition',
              35 => 'locked',
              36 => 'language',
              37 => 'omitmandatorycheck',
              38 => 'idpath',
              39 => 'object',
              40 => 'fieldname',
              41 => 'property',
              42 => 'parentid',
              43 => 'children',
              44 => 'scheduledtasks',
            ),
             'blockedVarsForExport' => 
            array (
            ),
             'defaultValueGenerator' => '',
          )),
          1 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Select::__set_state(array(
             'fieldtype' => 'select',
             'options' => 
            array (
              0 => 
              array (
                'key' => 'asc',
                'value' => 'asc',
              ),
              1 => 
              array (
                'key' => 'desc',
                'value' => 'desc',
              ),
            ),
             'width' => 500,
             'defaultValue' => '',
             'optionsProviderClass' => NULL,
             'optionsProviderData' => NULL,
             'columnLength' => 190,
             'dynamicOptions' => false,
             'name' => 'direction',
             'title' => 'Direction',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => '',
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'forbiddenNames' => 
            array (
              0 => 'id',
              1 => 'key',
              2 => 'path',
              3 => 'type',
              4 => 'index',
              5 => 'classname',
              6 => 'creationdate',
              7 => 'userowner',
              8 => 'value',
              9 => 'class',
              10 => 'list',
              11 => 'fullpath',
              12 => 'childs',
              13 => 'values',
              14 => 'cachetag',
              15 => 'cachetags',
              16 => 'parent',
              17 => 'published',
              18 => 'valuefromparent',
              19 => 'userpermissions',
              20 => 'dependencies',
              21 => 'modificationdate',
              22 => 'usermodification',
              23 => 'byid',
              24 => 'bypath',
              25 => 'data',
              26 => 'versions',
              27 => 'properties',
              28 => 'permissions',
              29 => 'permissionsforuser',
              30 => 'childamount',
              31 => 'apipluginbroker',
              32 => 'resource',
              33 => 'parentClass',
              34 => 'definition',
              35 => 'locked',
              36 => 'language',
              37 => 'omitmandatorycheck',
              38 => 'idpath',
              39 => 'object',
              40 => 'fieldname',
              41 => 'property',
              42 => 'parentid',
              43 => 'children',
              44 => 'scheduledtasks',
            ),
             'blockedVarsForExport' => 
            array (
            ),
             'defaultValueGenerator' => '',
          )),
        ),
         'locked' => false,
         'blockedVarsForExport' => 
        array (
        ),
         'icon' => NULL,
         'labelWidth' => 100,
         'labelAlign' => 'left',
      )),
    ),
     'locked' => false,
     'blockedVarsForExport' => 
    array (
    ),
     'icon' => NULL,
     'labelWidth' => 100,
     'labelAlign' => 'left',
  )),
   'generateTypeDeclarations' => true,
   'blockedVarsForExport' => 
  array (
  ),
));
