<?php
/**
 * This file is part of webman.
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the MIT-LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @author    walkor<walkor@workerman.net>
 * @copyright walkor<walkor@workerman.net>
 * @link      http://www.workerman.net/
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */

use Qnnp\AnnotationRoute\Module\AutoRoute;
use Qnnp\AnnotationRoute\Module\Result;
use Webman\Route;

/**
 * 加载注解路由
 */
AutoRoute::load(
  [],
  true
);

/**
 * 因注解路由可注解加载中间件
 * 防止需要中间件的被直接加载
 * 安全起见关闭默认路由
 */
Route::disableDefaultRoute();

// Route::any(
//   '/{path: .+}',
//   function () {
//     return Result::jsonError('资源不存在', 404, 404);
//   }
// );
