<?php

/**
 * @Entity 
 * @Table(name="jugador")
 **/

class Jugador
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;

    /** @Column(type="string") **/
    protected $nombre;

    /** @Column(type="string") **/
    protected $apellidos;

    /** @Column(type="integer") **/
    protected $edad;

    /** @Column(type="string") **/
    protected $equipo;


    public function __construct(string $nombre, string $apellidos, int $edad, string $equipo)
    {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edad;
        $this->equipo = $equipo;
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
     * @return Jugador
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
     * Set apellidos.
     *
     * @param string $apellidos
     *
     * @return Jugador
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos.
     *
     * @return string
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set edad.
     *
     * @param int $edad
     *
     * @return Jugador
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    /**
     * Get edad.
     *
     * @return int
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set equipo.
     *
     * @param string $equipo
     *
     * @return Jugador
     */
    public function setEquipo($equipo)
    {
        $this->equipo = $equipo;

        return $this;
    }

    /**
     * Get equipo.
     *
     * @return string
     */
    public function getEquipo()
    {
        return $this->equipo;
    }
}
