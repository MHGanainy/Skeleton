<?php

/**
Fields Summary:
- label [input]
- field [indexFieldSelection]
- scriptPath [input]
- availableRelations [manyToManyRelation]
*/


return Pimcore\Model\DataObject\Fieldcollection\Definition::__set_state(array(
   'dao' => NULL,
   'key' => 'FilterRelation',
   'parentClass' => '\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\Model\\AbstractFilterDefinitionType',
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
         'title' => 'Filter Relation',
         'width' => NULL,
         'height' => NULL,
         'collapsible' => true,
         'collapsed' => false,
         'bodyStyle' => '',
         'datatype' => 'layout',
         'permissions' => '',
         'childs' => 
        array (
          0 => 
          Pimcore\Model\DataObject\ClassDefinition\Layout\Text::__set_state(array(
             'fieldtype' => 'text',
             'html' => '<b>Filter&nbsp;Relation</b><div>Single selection filter for relation fields.<br></div>',
             'renderingClass' => NULL,
             'renderingData' => NULL,
             'border' => false,
             'name' => 'Layout',
             'type' => NULL,
             'region' => NULL,
             'title' => '',
             'width' => NULL,
             'height' => NULL,
             'collapsible' => false,
             'collapsed' => false,
             'bodyStyle' => 'padding: 10px; background-color: #d9edf7; border-color: #bce8f1 !important; color: #31708f;',
             'datatype' => 'layout',
             'permissions' => NULL,
             'childs' => 
            array (
            ),
             'locked' => false,
             'blockedVarsForExport' => 
            array (
            ),
          )),
          1 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
             'fieldtype' => 'input',
             'width' => 400,
             'defaultValue' => NULL,
             'columnLength' => 255,
             'regex' => '',
             'unique' => NULL,
             'showCharCount' => NULL,
             'name' => 'label',
             'title' => 'Label',
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
          2 => 
          Pimcore\Bundle\EcommerceFrameworkBundle\CoreExtensions\ClassDefinition\IndexFieldSelection::__set_state(array(
             'fieldtype' => 'indexFieldSelection',
             'queryColumnType' => 
            array (
              'tenant' => 'varchar(100)',
              'field' => 'varchar(200)',
              'preSelect' => 'text',
            ),
             'columnType' => 
            array (
              'tenant' => 'varchar(100)',
              'field' => 'varchar(200)',
              'preSelect' => 'text',
            ),
             'width' => 400,
             'considerTenants' => true,
             'multiPreSelect' => 'remote_single',
             'filterGroups' => 
            array (
              0 => 'relation',
            ),
             'predefinedPreSelectOptions' => 
            array (
            ),
             'name' => 'field',
             'title' => 'Field',
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
          )),
          3 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
             'fieldtype' => 'input',
             'width' => 400,
             'defaultValue' => NULL,
             'columnLength' => 255,
             'regex' => '',
             'unique' => NULL,
             'showCharCount' => NULL,
             'name' => 'scriptPath',
             'title' => 'Script Path',
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
          4 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyRelation::__set_state(array(
             'fieldtype' => 'manyToManyRelation',
             'width' => '',
             'height' => '',
             'maxItems' => '',
             'assetUploadPath' => '',
             'relationType' => true,
             'objectsAllowed' => true,
             'assetsAllowed' => false,
             'assetTypes' => 
            array (
            ),
             'documentsAllowed' => false,
             'documentTypes' => 
            array (
            ),
             'enableTextSelection' => false,
             'classes' => 
            array (
            ),
             'pathFormatterClass' => NULL,
             'name' => 'availableRelations',
             'title' => 'Available Relations',
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
        ),
         'locked' => false,
         'blockedVarsForExport' => 
        array (
        ),
         'icon' => '',
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