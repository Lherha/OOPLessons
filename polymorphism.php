<?php
/**
 * Class Message
 *
 * Represents a message formatter.
 */
class Message
{
    /**
     * Format the message to be displayed in italics.
     *
     * @param string $message The input message to be formatted.
     * @return int The length of the formatted message.
     */
    public function formatMessage($message)
    {
        return printf("<i>%s</i>", $message . '<br>');
    }
}

/**
 * Class BoldMessage
 *
 * Represents a message formatter that displays messages in bold.
 */
class BoldMessage extends Message
{
    /**
     * Format the message to be displayed in bold.
     *
     * @param string $message The input message to be formatted.
     * @return int The length of the formatted message.
     */
    public function formatMessage($message)
    {
        return printf("<b>%s</b>", $message);
    }
}

$message = new Message();
$message->formatMessage('Hello World');

$message = new BoldMessage();
$message->formatMessage('Welcome Here!');  
