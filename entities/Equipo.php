<?php

/**
 * @Entity 
 * @Table(name="equipo")
 **/

class Equipo
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;

    /** @Column(type="string") **/
    protected $nombre;

    /** @Column(type="string") **/
    protected $fundacion;

    /** @Column(type="integer") **/
    protected $socios;

    /** @Column(type="string") **/
    protected $ciudad;


    public function __construct(string $nombre, string $fundacion, int $socios, string $ciudad)
    {
        $this->nombre = $nombre;
        $this->fundacion = $fundacion;
        $this->socios = $socios;
        $this->ciudad = $ciudad;
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre.
     *
     * @param string $nombre
     *
     * @return Equipo
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre.
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set fundacion.
     *
     * @param string $fundacion
     *
     * @return Equipo
     */
    public function setFundacion($fundacion)
    {
        $this->fundacion = $fundacion;

        return $this;
    }

    /**
     * Get fundacion.
     *
     * @return string
     */
    public function getFundacion()
    {
        return $this->fundacion;
    }

    /**
     * Set socios.
     *
     * @param int $socios
     *
     * @return Equipo
     */
    public function setSocios($socios)
    {
        $this->socios = $socios;

        return $this;
    }

    /**
     * Get socios.
     *
     * @return int
     */
    public function getSocios()
    {
        return $this->socios;
    }

    /**
     * Set ciudad.
     *
     * @param string $ciudad
     *
     * @return Equipo
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get ciudad.
     *
     * @return string
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }
}
