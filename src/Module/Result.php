<?php

namespace Qnnp\AnnotationRoute\Module;

use support\Response;

class Result {
  static function jsonError(
    string $message,
    $http_code = 500,
    $error_code = null,
    $data = null,
    $trace = null
  ): Response {
    return static::json(
      $data,
      $message,
      http_code: $http_code,
      error_code: $error_code,
      trace: $trace
    );
  }

  static function json(
    mixed $data = null,
    string $message = 'success',
    array $headers = [],
    $http_code = 200,
    $error_code = null,
    int $options = JSON_UNESCAPED_UNICODE,
    mixed $trace = null,
    bool $raw = false
  ): Response {
    $_data = [
      'code'    => $error_code ?: $http_code,
      'message' => $message,
    ];
    if ($data) {
      if ($raw) {
        $_data['data'] = $data;

      } else {
        $_data['data'] = json_decode(json_encode($data), 1);
      }
    }
    $trace && $_data['trace'] = $trace;
    $result = new Response(
      $http_code, ['Content-Type' => 'application/json', ...$headers],
      json_encode(
        $_data,
        $options
      )
    );

    return $result;
  }
}