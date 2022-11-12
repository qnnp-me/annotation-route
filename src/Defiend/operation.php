<?php

namespace Qnnp\WebmanRoute\Defiend;

class operation {
  const tags         = 'tags';
  const summary      = 'summary';
  const description  = 'description';
  const externalDocs = 'externalDocs';
  const operationId  = 'operationId';
  const parameters   = 'parameters';
  const requestBody  = 'requestBody';
  const responses    = 'responses';
  const callbacks    = 'callbacks';
  const deprecated   = 'deprecated';
  const security     = 'security';
  const servers      = 'servers';

  static $externalDocs = externalDocs::class;
  static $parameter    = parameter::class;
  static $requestBody  = requestBody::class;
  static $responses    = responses::class;
  static $callback     = callback::class;
  static $deprecated   = boolean::class;
  static $server       = server::class;
}