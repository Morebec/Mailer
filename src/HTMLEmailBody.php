<?php


namespace Morebec\Mailer;

/**
 * Represents an HTML Email Body
 */
class HTMLEmailBody implements EmailBodyInterface
{
    private const CONTENT_TYPE = 'text/html';

    /**
     * @var string
     */
    private $content;

    public function __construct(string $content)
    {
        $this->content = $content;
    }

    /**
     * @inheritDoc
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @inheritDoc
     */
    public function getContentType(): string
    {
        return self::CONTENT_TYPE;
    }
}