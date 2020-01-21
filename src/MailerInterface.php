<?php


namespace Morebec\Mailer;

/**
 * Interface MailerInterface
 * Sends emails
 */
interface MailerInterface
{
    /**
     * Sends a mail from a given sender to a recipient
     * @param string $from
     * @param array $recipients
     * @param string $subjects
     */
    public function send(string $from, array $recipients, string $subjects): void;
}