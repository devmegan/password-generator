<?php

class PasswordGenerator
{
    private $length;
    private $complexity;
    private $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    private $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    private $numbers = '0123456789';
    private $symbols = '!@#$%^&*()_+-=[]{}|;:,.<>?';

    public function __construct(int $length = 8, string $complexity = 'medium')
    {
        $this->length = $length;
        $this->complexity = $complexity;
    }

    public function __toString()
    {
        return $this->generate();
    }

    private function generate(): string
    {
        $pool = $this->getPool();

        $password = '';
        $poolLength = strlen($pool);

        for ($i = 0; $i < $this->length; $i++) {
            $password .= $this->getRandomPoolChar($pool, $poolLength);
        }

        return $password;
    }

    private function getPool(): string
    {
        $pool = '';

        switch ($this->complexity) {
            case 'low':
                $pool = $this->lowercase.$this->numbers;
                break;
            case 'medium':
                $pool = $this->lowercase.$this->uppercase.$this->numbers;
                break;
            case 'high':
                $pool = $this->lowercase.$this->uppercase.$this->numbers.$this->symbols;
                break;
        }

        return $pool;
    }

    private function getRandomPoolChar(string $pool, int $poolLength): string
    {
        return $pool[rand(0, $poolLength - 1)];
    }
}
