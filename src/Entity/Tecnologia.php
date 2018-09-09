<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TecnologiaRepository")
 * @ORM\Table(name="tecnologias")
 */
class Tecnologia
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    private $nome;

    /**
     * @var Candidato
     *
     * @ORM\ManyToMany(targetEntity="App\Entity\Candidato", mappedBy="historico")
     */
    private $candidatos;

    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param string $nome
     * @return Tecnologia
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @return Candidato
     */
    public function getCandidatos ()
    {
        return $this->candidatos;
    }

    /**
     * @param $candidatos
     * @return $this
     */
    public function setCandidatos ($candidatos)
    {
        $this->candidatos = $candidatos;
        return $this;
    }
}
