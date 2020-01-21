<?php


namespace Morebec\Mailer;

/**
 * A Simple plain text email body
 */
class PlainTextEmailBody implements EmailBodyInterface
{
    private const CONTENT_TYPE = 'text/plain';

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