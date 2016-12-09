<?php
/*
 * Copyright (C) 2015 Thamtech, LLC
 *
 * This software is copyrighted. No part of this work may be
 * reproduced in whole or in part in any manner without the
 * permission of the Copyright owner, unless specifically authorized
 * by a license obtained from the Copyright owner.
**/

namespace gvasilopulos\enhancedgii\validators;

use yii\validators\RegularExpressionValidator;

/**
 * UuidValidator validates that the attribute value matches the pattern of
 * a canonical format UUID, i.e. 25769c6c-d34d-4bfe-ba98-e0ee856f3e7a.
 * The comparison is case insensitive.
 *
 * @author Tyler Ham <tyler@thamtech.com>
 */
class UuidValidator extends RegularExpressionValidator
{
    /**
     * @inheritdoc
     */
    //public $pattern = '/^[0-9A-F]{8}-[0-9A-F]{4}-4[0-9A-F]{3}-[0-9A-F]{4}-[0-9A-F]{12}$/i';
   //public $pattern = '/^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[1-4][a-fA-F0-9]{3}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/i';
   public $pattern = '/^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[1-5][a-fA-F0-9]{3}-[89aAbB][a-fA-F0-9]{3}-[a-fA-F0-9]{12}$/i';
   
}
