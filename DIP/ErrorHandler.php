<?php


class ErrorHandler
{
    /**
     * @var Logger
     */
    private $logger;

    public function __construct(Logger $logger)
    {

        $this->logger = $logger;
    }
    public function error($errNo,$errStr,$errFile,$errLine){
        $this->logger->error("ERROR.".$errStr);
    }
    public function exception(Exception $exception){
        $this->logger->error($exception->getMessage());
    }
}
