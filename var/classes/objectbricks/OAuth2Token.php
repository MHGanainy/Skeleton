<?php

/**
Fields Summary:
- accessToken [textarea]
- tokenType [input]
- expiresAt [input]
- refreshToken [textarea]
- scope [input]
*/


return Pimcore\Model\DataObject\Objectbrick\Definition::__set_state(array(
   'classDefinitions' => 
  array (
    0 => 
    array (
      'classname' => 'SsoIdentity',
      'fieldname' => 'credentials',
    ),
  ),
   'dao' => NULL,
   'key' => 'OAuth2Token',
   'parentClass' => 'CustomerManagementFrameworkBundle\\Model\\Objectbrick\\AbstractOAuth2Token',
   'implementsInterfaces' => NULL,
   'title' => NULL,
   'group' => NULL,
   'layoutDefinitions' => 
  Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
     'fieldtype' => 'panel',
     'layout' => NULL,
     'border' => false,
     'name' => NULL,
     'type' => NULL,
     'region' => NULL,
     'title' => NULL,
     'width' => NULL,
     'height' => NULL,
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
         'layout' => NULL,
         'border' => false,
         'name' => 'Layout',
         'type' => NULL,
         'region' => NULL,
         'title' => '',
         'width' => NULL,
         'height' => NULL,
         'collapsible' => false,
         'collapsed' => false,
         'bodyStyle' => '',
         'datatype' => 'layout',
         'permissions' => NULL,
         'childs' => 
        array (
          0 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Textarea::__set_state(array(
             'fieldtype' => 'textarea',
             'width' => '',
             'height' => '',
             'maxLength' => NULL,
             'showCharCount' => NULL,
             'excludeFromSearchIndex' => false,
             'name' => 'accessToken',
             'title' => 'accessToken',
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
          1 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
             'fieldtype' => 'input',
             'width' => NULL,
             'defaultValue' => NULL,
             'columnLength' => 190,
             'regex' => '',
             'unique' => NULL,
             'showCharCount' => NULL,
             'name' => 'tokenType',
             'title' => 'tokenType',
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
          2 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
             'fieldtype' => 'input',
             'width' => NULL,
             'defaultValue' => NULL,
             'columnLength' => 190,
             'regex' => '',
             'unique' => NULL,
             'showCharCount' => NULL,
             'name' => 'expiresAt',
             'title' => 'expiresAt',
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
          Pimcore\Model\DataObject\ClassDefinition\Data\Textarea::__set_state(array(
             'fieldtype' => 'textarea',
             'width' => '',
             'height' => '',
             'maxLength' => NULL,
             'showCharCount' => NULL,
             'excludeFromSearchIndex' => false,
             'name' => 'refreshToken',
             'title' => 'refreshToken',
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
          4 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
             'fieldtype' => 'input',
             'width' => NULL,
             'defaultValue' => NULL,
             'columnLength' => 190,
             'regex' => '',
             'unique' => NULL,
             'showCharCount' => NULL,
             'name' => 'scope',
             'title' => 'scope',
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
   'generateTypeDeclarations' => false,
   'blockedVarsForExport' => 
  array (
  ),
));
