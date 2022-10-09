<?php

namespace Qnnp\Route\Module;

use Throwable;
use Webman\Exception\ExceptionHandler as WebmanExceptionHandler;
use Webman\Http\Request;
use Webman\Http\Response;

// TODO

class ExceptionHandler extends WebmanExceptionHandler {

  protected static array $expectsJsonPaths = [''];

  /**
   * @param array|string[] $expectsJsonPaths
   */
  static function setExpectsJsonPaths(array $expectsJsonPaths): void {
    static::$expectsJsonPaths = $expectsJsonPaths;
  }

  public function render(Request $request, Throwable $exception): Response {
    if (method_exists($exception, 'render')) {
      return $exception->render($request);
    }
    $expectsJson = $request->expectsJson();

    // foreach (static::$expectsJsonPaths as $path) {
    //   if (str_starts_with($request->path(), $path)) {
    //     $expectsJson = true;
    //   }
    // }

    $code      = $exception->getCode();
    $message   = $exception->getMessage();
    $message   = str_replace(BASE_PATH, '[ROOT]', $message);
    $trace     = str_replace(BASE_PATH, '[ROOT]', $exception->getTraceAsString());
    $http_code = match (true) {
      $code >= 400 && $code < 600 => $code,
      default => 500
    };

    if ($expectsJson) {

      return Result::jsonError(
               $message,
               $http_code,
               $code,
        trace: $this->_debug ? $trace : null
      );
    }

    $error = "<pre>\nServer internal error: \n" . $message;
    $error .= $this->_debug ? "\nStack trace:\n" . $trace : '';
    $error .= "\n</pre>";

    return response($error)->withStatus($http_code);
  }

}