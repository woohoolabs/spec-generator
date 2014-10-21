<?php
namespace WoohooLabs\SpecGenerator\Swagger2\Headers;

class Headers implements HeadersInterface
{
    /**
     * @var array
     */
    private $headers;

    /**
     * @param array $headers
     */
    public function __construct(array $headers = [])
    {
        $this->headers = $headers;
    }

    /**
     * @return array
     */
    public function generate()
    {
        $result= [];

        foreach ($this->headers as $name => $header) {
            if ($header instanceof HeaderInterface) {
                $result[$name] = $header->generate();
            }
        }

        return $result;
    }

    /**
     * @param string $name
     * @return \WoohooLabs\SpecGenerator\Swagger2\Headers\HeaderInterface|null
     */
    public function getHeader($name)
    {
        return isset($this->headers[$name]) ? $this->headers[$name] : null;
    }

    /**
     * @return array
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * @param string $name
     * @param \WoohooLabs\SpecGenerator\Swagger2\Headers\HeaderInterface $header
     * @return $this
     */
    public function setHeader($name, HeaderInterface $header)
    {
        $this->headers[$name] = $header;

        return $this;
    }

    /**
     * @param array $headers
     * @return $this
     */
    public function setHeaders(array $headers)
    {
        $this->headers = $headers;

        return $this;
    }
}
