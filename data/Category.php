<?php
class Category
{
    private string $name;
    private bool $expensive;

  //untuk mengambil data yang privat selain bool
    public function getName(): string
    {
        return $this->name;
    }

    // untuk melakukan perubahan
    public function setName(string $name): void
    {
        if (trim($name) != ""){
            $this->name = $name;
        }

    }

    /**
     * @return bool
     */
    public function isExpensive(): bool
    {
        return $this->expensive;
    }

    /**
     * @param bool $expensive
     */
    public function setExpensive(bool $expensive): void
    {
        $this->expensive = $expensive;
    }

}