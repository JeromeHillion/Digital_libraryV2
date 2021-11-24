<?php
namespace App\Entity;

class Entity
{
  protected array  $data;


  /**
   * Get the value of data
   *
   * @return array
   */
  public function getData(): array
  {
    return $this->data;
  }

  /**
   * Set the value of data
   *
   * @param array $data
   *
   * @return self
   */
  public function setData(array $data): self
  {
    $this->data = $data;

    return $this;
  }

  public function setDataWithKey($key, $value): Entity
  {
    $this->data[$key] = $value;
    return $this;
  }

  public function getDataWithKey($key){
    //On renvoie la clé du tableau sinon on renvoie null
    return $this->data[$key] ?? null;
}
}