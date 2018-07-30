<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\HistoricoProfissionalRepository")
 * @ORM\Table(name="historicos_profissional")
 */
class HistoricoProfissional
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
    private $nome_empresa;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="date")
     */
    private $data_entrada;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="date", nullable=true)
     */
    private $data_saida;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean")
     */
    private $emprego_atual = false;

    /**
     * @var Candidato
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Candidato", inversedBy="historico")
     */
    private $candidato;

    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getNomeEmpresa (): string
    {
        return $this->nome_empresa;
    }

    /**
     * @param string $nome_empresa
     * @return HistoricoProfissional
     */
    public function setNomeEmpresa (string $nome_empresa): HistoricoProfissional
    {
        $this->nome_empresa = $nome_empresa;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDataEntrada (): \DateTime
    {
        return $this->data_entrada;
    }

    /**
     * @param \DateTime $data_entrada
     * @return HistoricoProfissional
     */
    public function setDataEntrada (\DateTime $data_entrada): HistoricoProfissional
    {
        $this->data_entrada = $data_entrada;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDataSaida (): \DateTime
    {
        return $this->data_saida;
    }

    /**
     * @param \DateTime $data_saida
     * @return HistoricoProfissional
     */
    public function setDataSaida (\DateTime $data_saida): HistoricoProfissional
    {
        $this->data_saida = $data_saida;
        return $this;
    }

    /**
     * @return bool
     */
    public function isEmpregoAtual (): bool
    {
        return $this->emprego_atual;
    }

    /**
     * @param bool $emprego_atual
     * @return HistoricoProfissional
     */
    public function setEmpregoAtual (bool $emprego_atual): HistoricoProfissional
    {
        $this->emprego_atual = $emprego_atual;
        return $this;
    }

    /**
     * @return Candidato
     */
    public function getCandidato (): Candidato
    {
        return $this->candidato;
    }

    /**
     * @param Candidato $candidato
     * @return HistoricoProfissional
     */
    public function setCandidato (Candidato $candidato): HistoricoProfissional
    {
        $this->candidato = $candidato;
        return $this;
    }

}
