<?php


class User
{
    /**
     * @var Logger
     */
    private $logger;

    public function __construct(Logger $logger)
    {

        $this->logger = $logger;
    }

    public function create(array $data){
        try{
            die(var_dump($data));
        }catch (\mysql_xdevapi\Exception $exception){
            /*$this->logger($exception->getMessage()); BAD */
            $this->logger->error($exception); /** best **/
        }
    }
/* is not aplied SRP
    private function logger(string $getMessage)
    {
        //code
    }
*/
}
