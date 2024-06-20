<?php

class Produit extends CI_Model
{
    /**
     * @type int
     */
    private  $idProduit;
    /**
     * @type string
     */
    private  $designation;
    /**
     * @type float
     */
    private  $prixUnitaire;
    /**
     * @type int
     */
    private  $enStock;

    /**
     * @type array
     */
    private $erreurs;



    public function __construct()
    {
        parent::__construct();
        $this->erreurs = array("idProduit" => '', "designation" => '', "prix" => '', "enstock" => '', "server" => array());
    }


    /* ---- --- GETTERS --------*/
        public function getErreurs(): array
        {
            return $this->erreurs;
        }
        public function getIdProduit(): int
        {
            return $this->idProduit;
        }
        public function getDesignation(): string
        {
            return $this->designation;
        }
        public function getPrixUnitaire(): float
        {
            return $this->prixUnitaire;
        }
        public function getEnStock(): int
        {
            return $this->enStock;
        }
    /* ---- --- -------- --------*/



    /* ---- --- SETTERS --------*/
        public function setters(int $idProduit, string $designation, float $prixUnitaire, int $enStock)
        {
            $this->idProduit = $idProduit;
            $this->setDesignation($designation);
            $this->setPrixUnitaire($prixUnitaire);
            $this->setEnStock($enStock);
        }
        public function setIdProduit(int $idProduit)
        {
            $this->idProduit = $idProduit;
        }
        public function setDesignation(string $designation)
        {
            if (empty($designation) || trim($designation) === ''){
                $this->erreurs['designation'] = "Le designation ne doit pas être vide.";
                $this->designation ='';
                exit();
            }
            $this->designation = $designation;
        }
        public function setPrixUnitaire(float $prixUnitaire)
        {
            if ($prixUnitaire < 0){
                $this->erreurs['designation'] = "Prix invalid";
                $this->prixUnitaire = 0;
                exit();
            }
            $this->prixUnitaire = $prixUnitaire;
        }
        public function setEnStock(int $enStock)
        {
            if ($enStock < 0){
                $this->erreurs['enstock'] = "Stock invalid";
                $this->erreurs = 0;
                exit();
            }
            $this->enStock = $enStock;
        }
    /* ---- --- ----- --------*/


    /*------  find all -------*/
    /**
     * @return Produit[]
     * @throws Exception
     */
    public function getAll(){
        $produits = array();
        $sql = "SELECT * FROM Produit";
        $query = $this->db->query($sql);

        foreach ($query->result_array() as $row ){
            $prodtuit = new Produit();
            $prodtuit->setters($row['idProduit'], $row['designation'], $row['prixUnitaire'], $row['enStock']);
            $produits[] = $prodtuit;
        }
        return $produits;
    }
    /* ---------- ----------- ------------*/


    /*------  getById -------*/
    /**
     * @return Produit
     * @throws Exception
     */
    public function getById(int $id):Produit{
        $sql = "SELECT * FROM Produit WHERE idProduit = %d LIMIT 1";
        $sql = sprintf($sql, $this->db->escape($id));
        $query = $this->db->query($sql);

        $row = $query->row_array();
        $prodtuit = new Produit();
        $prodtuit->setters($row['idProduit'], $row['designation'], $row['prixUnitaire'], $row['enStock']);
        return $prodtuit;
    }
    /* ---------- ----------- ------------*/
}