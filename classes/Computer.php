<?php
class Computer {
    private int $id;
    private string $brand;
    private string $graphics;
    private string $memory;
    private string $processor;

    public function __construct(string $marque, string $carteGraphique,
    string $processor){
        $this->setBrand($marque);
        $this->setGraphics($carteGraphique);
        $this->setProcessor($processor);

        $this->id = time();
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getBrand(): string
    {
        return $this->brand;
    }

    /**
     * @param string $brand
     */
    public function setBrand(string $brand): void
    {
        $this->brand = $brand;
    }

    /**
     * @return string
     */
    public function getGraphics(): string
    {
        return $this->graphics;
    }

    /**
     * @param string $graphics
     */
    public function setGraphics(string $graphics): void
    {
        $this->graphics = $graphics;
    }

    /**
     * @return string
     */
    public function getMemory(): string
    {
        return $this->memory;
    }

    /**
     * @param string $memory
     */
    public function setMemory(string $memory): void
    {
        $this->memory = $memory;
    }

    /**
     * @return string
     */
    public function getProcessor(): string
    {
        return $this->processor;
    }

    /**
     * @param string $processor
     */
    public function setProcessor(string $processor): void
    {
        $this->processor = $processor;
    }

    public function start(){
    echo 'ordi start...<br>';
    }

    public function sleep(){
    echo 'ordi dodo...<br>';
    }
}