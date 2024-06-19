<?php
//namespace models;

class Utilisateur extends CI_Model
{
    private $idClient;
    private $login;
    private $motdepasse;
    private $nom;

    /* ----- CONSTRUCTORS ---------- */
        public function __construct()
        {
            parent::__construct();
        }

        /**
             * @param int $idClient
             * @param string $login
             * @param string $motdepasse
             * @param string $nom
         */
        public function newUtilisateur($idClient, $login, $motdepasse, $nom){
            $this->idClient = $idClient;
            $this->setLogin($login);
            $this->setMotdepasse($motdepasse);
            $this->setNom($nom);
        }
    /* ----- ------------ ---------- */


    /* ----- --- SETTERS ---------- */
    /**
     * @param int $idClient
     */
    public function setIdClient($idClient)
    {
        $this->idClient = $idClient;
    }

    /**
     * @param string $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @param string $motdepasse
     */
    public function setMotdepasse($motdepasse)
    {
        $this->motdepasse = $motdepasse;
    }

    /**
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /* ----- ------------ ---------- */


    /* --------- GETTES ---------------- */
    /**
     * @return int
     */
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @return string
     */
    public function getMotdepasse()
    {
        return $this->motdepasse;
    }

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }
    /* ----- ------------ ---------- */


    /* -------- Login ----------- */
    /**
     * @param string $login
     * @param string $pwd
     * @return bool
     * @throws Exception
     */
    public function login(string $login, string $pwd): bool
    {
        $authentification = false;
        if (Utilisateur::isMailExist($login)) {
            $sql = "SELECT login from utilisateur where login = %s AND motdepasse = %s LIMIT 1";
            $sql = sprintf($sql, $this->db->escape($login), $this->db->escape($pwd));

            $query = $this->db->query($sql);
            if ($query->num_rows() === 0) {
                throw new Exception("Mot de passe incorrect");
            }
            $authentification = true;
        }
        return $authentification;
    }

    public function getUtilisateur(string $login, string $pwd): Utilisateur
    {
        $sql = "SELECT login from utilisateur where login = %s AND motdepasse = %s LIMIT 1";
        $sql = sprintf($sql, $this->db->escape($login), $this->db->escape($pwd));

        $query = $this->db->query($sql);
        if ($query->num_rows() === 0) {
            throw new Exception("Utilisateur introuvable.");
        }
        $row = $query->row_array();
        $user = new Utilisateur();
        $user->newUtilisateur($row['idClient'], $row['login'], $row['motdepasse'], $row['nom']);

        return $user;
    }

    /**
     * @param int $id
     * @throws Exception
     */
    public function getById(int $id): Utilisateur
    {
        $sql = "SELECT login from utilisateur where idClient = %d ";
        $sql = sprintf($sql, $id);

        $query = $this->db->query($sql);
        if ($query->num_rows() === 0) {
            throw new Exception("Utilisateur introuvable.");
        }
        $row = $query->row_array();
        $user = new Utilisateur();
        $user->newUtilisateur($row['idClient'], $row['login'], $row['motdepasse'], $row['nom']);

        return $user;
    }

    /**
     * @param string $login
     * @return bool
     * @throws Exception
     */
    public function isMailExist(string $login): bool
    {
        $sql = "SELECT login FROM utilisateur where login = %s LIMIT 1";
        $sql = sprintf($sql, $this->db->escape($login));
        $query = $this->db->query($sql);

        if ($query->num_rows() === 1)
            return true;
        throw new Exception("Le login " . $login . " n'est pas associé à un compte");
    }
    /* -------- -- ----------- */
}