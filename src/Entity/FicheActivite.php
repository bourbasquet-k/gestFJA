// src/Entity/FicheActivite.php
namespace App/Entity;

class FicheActivite
{

  protected $date;
  protected $lieu;
  protected $client;
  protected $responsable;
  protected $operations;

  public function getDate()
  {
    return $this->date;
  }

  public function setDate($date)
  {
    $this->date = $date;
  }

  public function getLieu()
  {
    return $this->lieu;
  }

  public function setLieu()
  {
    $this->lieu = $lieu;
  }

  public function getClient()
  {
    return $this->client;
  }

  public function setClient()
  {
    $this->client = $client;
  }
  
  public function getResponsable()
  {
    return $this->responsable;
  }

  public function setResponsable()
  {
    $this->responsable = $responsable;
  }
  
  public function getOperations()
  {
    return $this->operations;
  }

  public function setOperations()
  {
    $this->operations = $operations;
  }
}