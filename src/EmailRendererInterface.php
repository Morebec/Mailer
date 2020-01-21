<?php


namespace Morebec\Mailer;

/**
 * Interface EmailRendererInterface.
 * Interface for email renderers. Renderes are responsible for rendering emails from templates
 */
interface EmailRendererInterface
{
    public function render(string $templatePath, array $contextData): RenderedEmailInterface;
}