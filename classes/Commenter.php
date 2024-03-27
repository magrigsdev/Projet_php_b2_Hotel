<?php 

class Commenter{
    private $id_user;
    private $id_chambre;
    private $mesage;

    public function __construct( $id_user,  $id_chambre,  $mesage){$this->id_user = $id_user;$this->id_chambre = $id_chambre;$this->mesage = $mesage;}
	public function getIdUser() {return $this->id_user;}

	public function getIdChambre() {return $this->id_chambre;}

	public function getMesage() {return $this->mesage;}

	public function setIdUser( $id_user): void {$this->id_user = $id_user;}

	public function setIdChambre( $id_chambre): void {$this->id_chambre = $id_chambre;}

	public function setMesage( $mesage): void {$this->mesage = $mesage;}

	

	
}