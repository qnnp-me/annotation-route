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

namespace Qnnp\Route\Module;

use support\Response;

class Result {
  static function jsonError(
    string $message,
    int    $http_code = 500,
           $error_code = null,
    mixed  $data = null,
           $trace = null
  ): Response {
    $trace = config(key: 'app.debug') ? $trace : null;

    return static::json(
                   $data,
                   $message,
      http_code:   $http_code,
      error_code:  $error_code,
      trace:       $trace,
      remove_data: true
    );
  }

  static function json(
    mixed  $data,
    string $message = 'success',
    array  $headers = [],
           $http_code = 200,
           $error_code = null,
    int    $option = JSON_UNESCAPED_UNICODE,
    mixed  $trace = null,
    bool   $raw = false,
    bool   $remove_data = false
  ): Response {
    $_data = [
      'code'    => $error_code ?: $http_code,
      'message' => $message,
    ];
    if (!$remove_data) {
      if ($raw) {
        $_data['data'] = $data;

      } else {
        $_data['data'] = json_decode(json_encode($data), 1);
      }
    }
    $trace && $_data['trace'] = $trace;

    return new Response(
      $http_code, ['Content-Type' => 'application/json', ...$headers],
      json_encode(
        $_data,
        $option
      )
    );
  }
}