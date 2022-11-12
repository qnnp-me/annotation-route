<?php

namespace Qnnp\WebmanRoute\Defiend;

class encoding {
  const contentType   = 'contentType';
  const headers       = 'headers';
  const style         = 'style';
  const explode       = 'explode';
  const allowReserved = 'allowReserved';

  static $header        = header::class;
  static $explode       = boolean::class;
  static $allowReserved = boolean::class;
}