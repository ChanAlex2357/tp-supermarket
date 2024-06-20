<?php

class Caisse extends CI_Model
{
    /**
     * @type int
     */
    private $idCaisse;
    /**
     * @type int
     */
    private $numeroCaisse;

    /**
     * @type float
     */
    private $montant;

    /**
     * @param int $idCaisse
     * @param int $numeroCaisse
     * @param float $montant
     */

    /* ------- --- CONSTRUCTEUR ------------ */
    public function __construct()
    {
        parent::__construct();
    }
    /* ---------- ----------- ------------*/


    /* ------- --- GETTERS ------------ */
        public function getIdCaisse(): int
        {
            return $this->idCaisse;
        }
        public function getNumeroCaisse(): int
        {
            return $this->numeroCaisse;
        }
        public function getMontant(): float
        {
            return $this->montant;
        }
        public function setIdCaisse(int $idCaisse)
        {
            $this->idCaisse = $idCaisse;
        }
    /* ---------- ----------- ------------*/



    /* ------- SETTERS ------------ */
        public function setters(int $idCaisse, int $numeroCaisse, float $montant){
            $this->setIdCaisse($idCaisse);
            $this->setMontant($montant);
            $this->setNumeroCaisse($numeroCaisse);
        }
        public function setNumeroCaisse(int $numeroCaisse)
        {
            $this->numeroCaisse = $numeroCaisse;
        }

        /**
         * @param float $montant
         * @return void
         */
        public function setMontant(float $montant)
        {
            if ($montant < 0) throw new UnexpectedValueException("Le montant ne pas etre négatif.");
            $this->montant = $montant;
        }
    /* ---------- ----------- ------------*/

    /*------  find all -------*/
        /**
         * @return Caisse[]
         * @throws Exception
         */
        public function getAll(){
            $caisses = array();
            $sql = "SELECT * FROM Caisse";
            $query = $this->db->query($sql);

            foreach ($query->result_array() as $row ){
                $caisse = new Caisse();
                $caisse->setters($row['idCaisse'], $row['numeroCaisse'], $row['montant']);
                $caisses[] = $caisse;
            }
            return $caisses;
        }
    /* ---------- ----------- ------------*/


    /*------  getById -------*/
    /**
     * @return Caisse
     * @throws Exception
     */
    public function getById(int $id):Caisse{
        $sql = "SELECT * FROM Caisse WHERE idCaisse = %d LIMIT 1";
        $sql = sprintf($sql, $this->db->escape($id));
        $query = $this->db->query($sql);

        $row = $query->row_array();
        $caisse = new Caisse();
        $caisse->setters($row['idCaisse'], $row['numeroCaisse'], $row['montant']);
        return $caisse;
    }
    /* ---------- ----------- ------------*/
}