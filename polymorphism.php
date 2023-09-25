<?php
class Message
{
  public function formatMessage($message)
  {
    return printf("<i>%s</i>", $message . '<br>');
  }
}
class BoldMessage extends Message
{
  public function formatMessage($message)
  {
    return printf("<b>%s</b>", $message);
  }
}
$message = new Message();
$message->formatMessage('Hello World');

$message = new BoldMessage();
$message->formatMessage('Welcome Here!');  
?>