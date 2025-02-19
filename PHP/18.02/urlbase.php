<?php

// Criar uma classe para formar uma URL, onde você passa os parâmetros e ele retorna a URL pronta.
// Se o user e pass não forem passados, não deve ser adicionado na URL.
// Se a porta for 80, não deve ser adicionada na URL.
// Se a query for vazia, não deve ser adicionada na URL.
// Se o fragmento não for passado, não deve ser adicionado na URL.

class URLBuilder
{
    private string $scheme;
    private ?string $user;
    private ?string $pass;
    private string $host;
    private int $port;
    private string $path;
    private array $query;
    private ?string $fragment;

    public function __construct(array $params)
    {
        if (empty($params['host'])) {
            throw new Exception("O host é obrigatório.");
        }

        $this->scheme = $params['scheme'] ?? 'http';
        $this->user = $params['user'] ?? null;
        $this->pass = $params['pass'] ?? null;
        $this->host = $params['host'];
        $this->port = isset($params['port']) && is_numeric($params['port']) ? (int)$params['port'] : 80;
        $this->path = $params['path'] ?? '/';
        $this->query = $params['query'] ?? [];
        $this->fragment = $params['fragment'] ?? null;

        if (!is_array($this->query)) {
            throw new Exception("A query deve ser um array.");
        }
    }

    public function build(): string
    {
        $url = '';
        $url .= $this->scheme . '://';

        if ($this->user) {
            $url .= urlencode($this->user);
            if ($this->pass) {
                $url .= ':' . urlencode($this->pass);
            }
            $url .= '@';
        }

        $url .= $this->host;

        if ($this->port !== 80) {
            $url .= ':' . $this->port;
        }

        $url .= $this->path ?: '/';

        if (!empty($this->query)) {
            $url .= '?' . http_build_query($this->query);
        }

        if (!empty($this->fragment)) {
            $url .= '#' . $this->fragment;
        }

        return $url;
    }
}

// Testando a classe no terminal.
$params = [
    'scheme' => 'https',
    'user' => 'avestruz',
    'pass' => 'dsds',
    'host' => 'teste.com',
    'port' => '',
    'path' => '',
    'query' => [],
    'fragment' => ''
];

$urlBuilder = new URLBuilder($params);
echo $urlBuilder->build();
