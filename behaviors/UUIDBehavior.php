<?php
//original credits to wartron/uuid
namespace gvasilopulos\enhancedgii\behaviors;
use yii\base\Behavior;
use yii\db\ActiveRecord;
use gvasilopulos\enhancedgii\helpers\UuidHelper;
class UUIDBehavior extends Behavior
{

     public $column='id';
   // public $uuidStrategy = null;
    public function events()
    {
        return[
            \yii\db\ActiveRecord::EVENT_BEFORE_INSERT => 'beforeCreate',
        ];
    }
    public function beforeCreate()
    {   
        
        if(empty($this->owner->{$this->column}))
        { 
            $this->owner->{$this->column} = $this->createUUID();
        }
    }
    public function createUUID()
    {
        return UuidHelper::uuid();
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

