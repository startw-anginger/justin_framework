<?php
// Justin PHP Framework
// (c)2021 SuperSonic(https://randychen.tk)

namespace AbigailExample\Kernel;

class Context
{
    private State $state;
    private Request $request;
    private Response $response;
    protected Config $config;
    protected Database $database;

    public function __construct()
    {
        $this->state = new State();
        $this->request = new Request();
        $this->response = new Response();
        $this->config = new Config();
        $this->database = new Database($this->config);
    }

    /**
     * @return State
     */
    public function getState(): State
    {
        return $this->state;
    }

    /**
     * @return Request
     */
    public function getRequest(): Request
    {
        return $this->request;
    }

    /**
     * @return Response
     */
    public function getResponse(): Response
    {
        return $this->response;
    }

    /**
     * @return Config
     */
    public function getConfig(): Config
    {
        return $this->config;
    }

    /**
     * @return Database
     */
    public function getDatabase(): Database
    {
        return $this->database;
    }
}
