<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CandidatoRepository")
 * @ORM\Table(name="candidatos")
 */
class Candidato
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=1)
     */
    private $sexo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="date")
     */
    private $data_nascimento;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer")
     */
    private $idade;

    /**
     * @var float
     *
     * @ORM\Column(type="decimal", precision=2, length=10)
     */
    private $pretensao_salarial;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $foto;

    /**
     * @var Cargo
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Cargo")
     */
    private $cargo;

    /**
     * @var Endereco
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Endereco")
     */
    private $endereco;

    /**
     * @var HistoricoProfissional
     *
     * @ORM\OneToMany(targetEntity="App\Entity\HistoricoProfissional", mappedBy="candidato")
     */
    private $historico;

    /**
     * @var Tecnologia
     *
     * @ORM\ManyToMany(targetEntity="App\Entity\Tecnologia", inversedBy="candidatos")
     * @ORM\JoinTable(name="candidatos_tecnologias")
     */
    private $tecnologia;

    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     * @return Candidato
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * @param mixed $idade
     * @return Candidato
     */
    public function setIdade($idade)
    {
        $this->idade = $idade;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * @param mixed $sexo
     * @return Candidato
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDataNascimento()
    {
        return $this->data_nascimento;
    }

    /**
     * @param mixed $data_nascimento
     * @return Candidato
     */
    public function setDataNascimento($data_nascimento)
    {
        $this->data_nascimento = $data_nascimento;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPretensaoSalarial()
    {
        return $this->pretensao_salarial;
    }

    /**
     * @param mixed $pretensao_salarial
     * @return Candidato
     */
    public function setPretensaoSalarial($pretensao_salarial)
    {
        $this->pretensao_salarial = $pretensao_salarial;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * @param mixed $foto
     * @return Candidato
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;
        return $this;
    }

    /**
     * @return Cargo
     */
    public function getCargo (): Cargo
    {
        return $this->cargo;
    }

    /**
     * @param Cargo $cargo
     * @return Candidato
     */
    public function setCargo (Cargo $cargo): Candidato
    {
        $this->cargo = $cargo;
        return $this;
    }

    /**
     * @return Endereco
     */
    public function getEndereco (): Endereco
    {
        return $this->endereco;
    }

    /**
     * @param Endereco $endereco
     * @return Candidato
     */
    public function setEndereco (Endereco $endereco): Candidato
    {
        $this->endereco = $endereco;
        return $this;
    }

    /**
     * @return HistoricoProfissional
     */
    public function getHistorico (): HistoricoProfissional
    {
        return $this->historico;
    }

    /**
     * @param HistoricoProfissional $historico
     * @return Candidato
     */
    public function setHistorico (HistoricoProfissional $historico): Candidato
    {
        $this->historico = $historico;
        return $this;
    }

    /**
     * @return Tecnologia
     */
    public function getTecnologia (): Tecnologia
    {
        return $this->tecnologia;
    }

    /**
     * @param Tecnologia $tecnologia
     * @return Candidato
     */
    public function setTecnologia (Tecnologia $tecnologia): Candidato
    {
        $this->tecnologia = $tecnologia;
        return $this;
    }
}
