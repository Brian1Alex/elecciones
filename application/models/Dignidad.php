<?php
class Dignidad extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function insertar($datos)
    {
        return $this->db->insert("candidato", $datos);
    }

    function obtener()
    {
        $listaDigni = $this->db->get("candidato");
        if ($listaDigni->num_rows() > 0) {
            return $listaDigni->result();
        } else {
            return false;
        }
    }

    function borrar($id_can)
    {
        $this->db->where("id_can", $id_can);
        return $this->db->delete("candidato");
    }

    function obtenerGene()
    {
        $listadoLugares = $this->db->get("candidato");
        if ($listadoLugares->num_rows() > 0) {
            return $listadoLugares->result();
        }
        return false;
    }

    function obtenerPre()
    {
        $listadoPre=$this->db->select()->where('dignidad_id_dig','1')->get("candidato");
        if ($listadoPre->num_rows() > 0) {
            return $listadoPre->result();
        }
        return false;
    }

    function obtenerAsaNac()
    {
        $listadoAsaNac=$this->db->select()->where('dignidad_id_dig','2')->get("candidato");
        if ($listadoAsaNac->num_rows() > 0) {
            return $listadoAsaNac->result();
        }
        return false;
    }

    function obtenerAsaPro()
    {
        $listadoAsaPro=$this->db->select()->where('dignidad_id_dig','3')->get("candidato");
        if ($listadoAsaPro->num_rows() > 0) {
            return $listadoAsaPro->result();
        }
        return false;
    }
}
