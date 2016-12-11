<?php
/**
 * @link http://www.diemeisterei.de/
 * @copyright Copyright (c) 2014 diemeisterei GmbH, Stuttgart
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace gvasilopulos\enhancedgii;

use yii\base\Application;
use yii\base\BootstrapInterface;


/**
 * Class Bootstrap
 * @package gvasilopulos\yii2-enhanced-gii
 * @author Tobias Munk <tobias@diemeisterei.de>
 */
class Bootstrap implements BootstrapInterface
{

    /**
     * Bootstrap method to be called during application bootstrap stage.
     *
     * @param Application $app the application currently running
     */
    public function bootstrap($app)
    {
        \Yii::setAlias('@gvengii','@vendor/gvasilopulos/yii2-enhanced-gii');
        if ($app->hasModule('gii')) {
            if (!isset($app->getModule('gii')->generators['enhanced-gii'])) {
                $app->getModule('gii')->generators['enhanced-gii-model'] = 'gvasilopulos\enhancedgii\model\Generator';
                $app->getModule('gii')->generators['enhanced-gii-crud']['class'] = 'gvasilopulos\enhancedgii\crud\Generator';
                $app->getModule('gii')->generators['enhanced-gii-crud']['templates'] = [
                    'default' => '@gvengii/crud/default',
                    'nested' => '@gvengii/crud/nested',
                    'mediman' =>'@gvengii/crud/mediman'
                ];
                $app->getModule('gii')->generators['enhanced-gii-migration'] = 'gvasilopulos\enhancedgii\migration\Generator';
            }
        }
    }
}
