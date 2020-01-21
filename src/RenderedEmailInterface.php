<?php


namespace Morebec\Mailer;

/**
 * Interface RenderedEmailInterface
 * Representes an Email that was rendered by an EmailRenderedInterface
 */
interface RenderedEmailInterface
{
    /**
     * Returns the subject of the email
     * @return string
     */
    public function getSubject(): string;

    /**
     * Returns the body of the email
     * @return EmailBodyInterface
     */
    public function getBody(): EmailBodyInterface;
}