<?php

namespace Alura\Mvc\Controller;

abstract class ControllerWithHtml implements Controller
{
  private const TEMPLATE_PATH = __DIR__ ."/../../views/";
  protected function renderTemplate(string $templateName, array $context = []): string
  {
    extract($context);
    // inicializa um buffer de saída.
    ob_start();
    // O que é um buffer de saida? -> Um local, onde vai armazenando tudo que vai ser exibido na tela e no 
    // final solicita e dps limpa o buffer = OutPut Buffer
    require_once self::TEMPLATE_PATH . $templateName . '.php';
    return ob_get_clean();
    
  }
}