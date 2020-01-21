<?php


namespace Morebec\Mailer;


class RenderedEmail implements RenderedEmailInterface
{
    /**
     * @var string
     */
    private $subject;
    /**
     * @var EmailBodyInterface
     */
    private $body;

    public function __construct(string $subject, EmailBodyInterface $body)
    {
        $this->subject = $subject;
        $this->body = $body;
    }

    /**
     * @inheritDoc
     */
    public function getSubject(): string
    {
        return $this->subject;
    }

    /**
     * @inheritDoc
     */
    public function getBody(): EmailBodyInterface
    {
        return $this->body;
    }
}