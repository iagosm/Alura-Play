<?php

namespace Alura\Mvc\Helper;

trait HtmlRendererTrait
{
  private function renderTemplate(string $templateName, array $context = []): string
  {
    $templatePath = __DIR__ ."/../../views/";
    extract($context);
    // inicializa um buffer de saída.
    ob_start();
    // O que é um buffer de saida? -> Um local, onde vai armazenando tudo que vai ser exibido na tela e no 
    // final solicita e dps limpa o buffer = OutPut Buffer
    require_once $templatePath . $templateName . '.php';
    return ob_get_clean();
    
  }
}
