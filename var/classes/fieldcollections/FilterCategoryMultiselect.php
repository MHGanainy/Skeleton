<?php

/**
Fields Summary:
- label [input]
- preSelect [manyToManyObjectRelation]
- useAndCondition [checkbox]
- includeParentCategories [checkbox]
- scriptPath [input]
- availableCategories [manyToManyObjectRelation]
*/


return Pimcore\Model\DataObject\Fieldcollection\Definition::__set_state(array(
   'dao' => NULL,
   'key' => 'FilterCategoryMultiselect',
   'parentClass' => '\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\Model\\CategoryFilterDefinitionType',
   'implementsInterfaces' => '',
   'title' => '',
   'group' => 'FilterTypes',
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
         'title' => 'Filter Category MultiSelect',
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
          Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
             'fieldtype' => 'input',
             'width' => 300,
             'defaultValue' => NULL,
             'columnLength' => '255',
             'regex' => '',
             'unique' => NULL,
             'showCharCount' => NULL,
             'name' => 'label',
             'title' => 'Label',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => '',
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
          Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
             'fieldtype' => 'manyToManyObjectRelation',
             'width' => '',
             'height' => '',
             'maxItems' => '',
             'relationType' => true,
             'visibleFields' => NULL,
             'allowToCreateNewObject' => true,
             'optimizedAdminLoading' => false,
             'enableTextSelection' => false,
             'visibleFieldDefinitions' => 
            array (
            ),
             'classes' => 
            array (
              0 => 
              array (
                'classes' => 'ProductCategory',
              ),
            ),
             'pathFormatterClass' => NULL,
             'name' => 'preSelect',
             'title' => 'Pre Select',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
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
          )),
          2 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Checkbox::__set_state(array(
             'fieldtype' => 'checkbox',
             'defaultValue' => 0,
             'name' => 'useAndCondition',
             'title' => 'Use And Condition',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
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
          3 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Checkbox::__set_state(array(
             'fieldtype' => 'checkbox',
             'defaultValue' => 0,
             'name' => 'includeParentCategories',
             'title' => 'Include SubCategories',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
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
          4 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
             'fieldtype' => 'input',
             'width' => 300,
             'defaultValue' => NULL,
             'columnLength' => '255',
             'regex' => '',
             'unique' => NULL,
             'showCharCount' => NULL,
             'name' => 'scriptPath',
             'title' => 'Script Path',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => '',
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
          5 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
             'fieldtype' => 'manyToManyObjectRelation',
             'width' => '',
             'height' => '',
             'maxItems' => '',
             'relationType' => true,
             'visibleFields' => NULL,
             'allowToCreateNewObject' => true,
             'optimizedAdminLoading' => false,
             'enableTextSelection' => false,
             'visibleFieldDefinitions' => 
            array (
            ),
             'classes' => 
            array (
              0 => 
              array (
                'classes' => 'ProductCategory',
              ),
            ),
             'pathFormatterClass' => NULL,
             'name' => 'availableCategories',
             'title' => 'Available Categories',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'invisible' => true,
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
          )),
        ),
         'locked' => false,
         'blockedVarsForExport' => 
        array (
        ),
         'icon' => NULL,
         'labelWidth' => 200,
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
