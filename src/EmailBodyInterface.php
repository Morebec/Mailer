<?php

namespace Morebec\Mailer;

/**
 * Interface EmailBodyInterface
 */
interface EmailBodyInterface
{
    /**
     * Returns the contents of the body
     * @return string
     */
    public function getContent(): string;

    /**
     * Returns the content type of the body
     * @return string
     */
    public function getContentType(): string;
}