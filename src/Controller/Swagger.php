<?php
/*
 * This file is part of webman-auto-route.
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @author    qnnp<qnnp@qnnp.me>
 * @copyright qnnp<qnnp@qnnp.me>
 * @link      https://qnnp.me
 * @license   https://opensource.org/licenses/MIT MIT License
 */

namespace Qnnp\AnnotationRoute\Controller;

use Exception;
use Qnnp\AnnotationRoute\Attributes\Route;
use Qnnp\AnnotationRoute\Module\OpenAPI;
use support\Request;
use support\Response;

class Swagger {

  #[Route('/swagger{all:.*}')]
  public function getStaticFiles(
    Request $request,
    string  $path = null,
  ): Response {
    $path         = preg_replace('/^\//', '', $path);
    $path         = $path ?: 'index.html';
    $custom_file  = realpath(dirname(__DIR__) . '/public/swagger/' . $path);
    $swagger_file = realpath(base_path() . '/vendor/swagger-api/swagger-ui/dist/' . $path);
    if (is_file($custom_file)) {
      return response('')->file($custom_file);
    } elseif (is_file($swagger_file)) {
      return response('')->file($swagger_file);
    }

    return response('<h1>404</h1>')->withStatus(404);
  }

  #[Route('/openapi.json')]
  public function getDoc(): Response {
    return json(OpenAPI::generate());
  }

  #[Route('/openapi-product.json')]
  public function getProductDoc(): Response {
    $doc           = OpenAPI::generate();
    $error_waring  = '<strong>Waring: app.product_openapi 设置错误或者没有设置</strong>';
    $error_message = '';
    try {
      $remote_doc = config('app.product_openapi')
        ? file_get_contents(config('app.product_openapi'))
        : null;
    } catch (Exception $exception) {
      $remote_doc    = null;
      $error_message = '<strong>Error: ' . $exception->getMessage() . '</strong>';
    }
    $error = <<<EOF
<table bgcolor="#ffd700">
    <tr>
        <td>
            <font color="red">
                &emsp;$error_waring
                <br/>
                &emsp;$error_message
            </font>
        </td>
    </tr>
</table>
EOF;

    $doc                        = $remote_doc ? json_decode($remote_doc, 1) : $doc;
    $doc['info']['description'] .= $remote_doc ? '' : $error;

    return json($doc);
  }

}