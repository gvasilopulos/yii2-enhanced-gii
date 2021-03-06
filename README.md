# yii2-enhanced-gii
Yii2 Gii (generator) with Relation forked from https://github.com/mootensai/yii2-enhanced-gii

Specific for postgres with uuid id's generated from php through ramsey/uuid
Beware! This extension does not use uuid-oosp functions it generates v4 uuid with UUID behaviour 

You have to add this to your configuration db connection setting so it detects uuid column properly

           'schemaMap' => [
            'pgsql'=> [
            'class'=>'gvasilopulos\enhancedgii\db\pgsql\Schema',
            'defaultSchema' => 'public' //specify your schema here
             ],
            ],
You can change the Schema name to whatever you use 

[![Yii2](https://img.shields.io/badge/Powered_by-Yii_Framework-green.svg?style=flat)](http://www.yiiframework.com/)
## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```bash
$ composer require gvasilopulos/yii2-enhanced-gii:dev-master
$ composer require kartik-v/yii2-mpdf:dev-master # if you want to use pdf exporter 
$ composer require kartik-v/yii2-tree-manager:dev-master # if you want to use tree/nested relation table
```

or add

```
"gvasilopulos/yii2-enhanced-gii": "dev-master",
"kartik-v/yii2-mpdf": "dev-master",
"kartik-v/yii2-tree-manager": "dev-master"
```
>add `"kartik-v/yii2-mpdf": "dev-master",` if you want to use pdf exporter 

>add `"kartik-v/yii2-tree-manager": "dev-master",` if you want to use tree/nested relation table

to the `require` section of your `composer.json` file.

> I separate the mpdf & tree-manager because the package is big & not everyone will use it.

Then you must add this code at your config\main.php.

```php
'modules' => [
... //your another module
      'gridview' => [
          'class' => '\kartik\grid\Module',
          // see settings on http://demos.krajee.com/grid#module
      ],
      'datecontrol' => [
          'class' => '\kartik\datecontrol\Module',
          // see settings on http://demos.krajee.com/datecontrol#module
      ],
      // If you use tree table
      'treemanager' =>  [
          'class' => '\kartik\tree\Module',
          // see settings on http://demos.krajee.com/tree-manager#module
      ]
... // your another module
      'dynagrid'=> [
        'class'=>'\kartik\dynagrid\Module',
        // other module settings
      ],
    ],
```
See gridview settings on http://demos.krajee.com/grid#module

See datecontrol settings on http://demos.krajee.com/datecontrol#module

See treemanager settings on http://demos.krajee.com/tree-manager#module (If you use tree/nested relation table)

See dynagrid settings on http://demos.krajee.com/dynagrid if you use mediman crud template!

## Usage :
Go to your gii tools, and notice the new IO Generator for models & CRUD


#Features
## Model :
1. Generate optimistic lock
2. Generate Timestamp Behaviors
3. Generate Blameable Behavior
4. Generate UUID Behavior and uuid's through php (default behavior)

## CRUD :
1. Generate all CRUD with wildcard (*) of table
2. Generate related input output
3. Specify your name/label attribute for foreign keys
4. Set your column to hidden
5. Specify your skipped columns
6. Specify your skipped relations
7. Set pluralize or not
8. PDF Printable view
9. Expandable / collapsible row at index grid view for related data
10. generate dynagrid grid view for index.php if you choose mediman template on crud (you need to add tbl_dynagrid and tbl_dynagrid_dtl 
    tables on your database or set the appropriate tables on module settings as described 
    in http://demos.krajee.com/dynagrid#module 
## Migration Generator :
1. Generate migration from your database structure (based on : https://github.com/deesoft/yii2-gii)

# To Do
1. One-page-CRUD template
2. Implement generator for Soft Delete Behavior (https://github.com/yii2tech/ar-softdelete)

I'm open for any improvement


# Screenshot

## Model Generator

![enhanced gii - model](https://cloud.githubusercontent.com/assets/5844149/13099130/db81fc46-d561-11e5-85ca-a9f3c38e68d8.PNG)

## CRUD Generator

![enhanced gii - crud](https://cloud.githubusercontent.com/assets/5844149/16199521/10efff98-3734-11e6-8bab-2fc6e85c0b38.png)

## Index 
### Grid View
![enhanced gii - index grid](https://cloud.githubusercontent.com/assets/5844149/16200077/0f478092-3736-11e6-9c85-873ea463816d.png)
### List View
![enhanced gii - index list](https://cloud.githubusercontent.com/assets/5844149/16200165/5911c818-3736-11e6-9f85-38b8c0dbc65d.png)

## View
![enhanced gii - view](https://cloud.githubusercontent.com/assets/5844149/16200282/ddf2f1b0-3736-11e6-8792-a541a5571adb.png)

## Form
![enhanced gii - create](https://cloud.githubusercontent.com/assets/5844149/16201809/39ce715c-373d-11e6-86cd-bf80b37fafd6.png)

![enhanced gii - update](https://cloud.githubusercontent.com/assets/5844149/16201857/61b09bd2-373d-11e6-9a46-bb6c82bb183f.png)

## Nested / Tree
![enhanced gii - nested](https://cloud.githubusercontent.com/assets/5844149/16476447/bdae9a1c-3eb1-11e6-8dc3-a20a06a3148b.png)

# Migration Generator
![migration form](https://cloud.githubusercontent.com/assets/5844149/15350030/08ab4d58-1d01-11e6-87b7-4dd621a5bef6.JPG)


# Thanks To
1. Jiwanndaru (jiwanndaru@gmail.com) for creating the tradition
2. kartik-v (https://github.com/kartik-v) for most of widgets
3. schmunk42 (https://github.com/schmunk42) for bootstrap & model base & extension
4. mdmunir (https://github.com/mdmunir) for JsBlock & Migration Generator (from https://github.com/deesoft/yii2-gii)
5. thamtech (https://github.com/thamtech/yii2-uuid) for uuid helpers/validators
6. wartron (https://github.com/wartron/yii2-uuid) UUID behavior 
7. fgh151 (https://github.com/fgh151/yii2-postgresql-array-field) for guidance through schema customization