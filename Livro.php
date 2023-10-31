<?php
require_once 'Pessoa.php';
require_once 'Publicacao.php';
class Livro implements Publicacao
{
  private $titulo;
  private $autor;
  private $totPaginas;
  private $pagAtual;
  private $aberto;
  private $leitor;

  // Método construtor 
  public function __construct($ti, $au, $tp, $le)
  {
    $this->titulo = $ti;
    $this->autor = $au;
    $this->totPaginas = $tp;
    $this->leitor = $le;
  }

  // Métodos Publicos
  public function detalhes()
  {
  }
  public function abrir()
  {
  }
  public function fechar()
  {
  }
  public function folhear($p)
  {
  }
  public function avancarPag()
  {
  }
  public function voltarPag()
  {
  }

  // Métodos Getters
  function getTitulo()
  {
    return $this->titulo;
  }
  function getAutor()
  {
    return $this->autor;
  }
  function getTotPaginas()
  {
    return $this->totPaginas;
  }
  function getPagAtual()
  {
    return $this->pagAtual;
  }
  function getAberto()
  {
    return $this->aberto;
  }
  function getLeitor()
  {
    return $this->leitor;
  }

  // Métodos Setters
  function setTitulo($ti)
  {
    $this->titulo - $ti;
  }
  function setAutor($au)
  {
    $this->atuor = $au;
  }
  function setTotPaginas($tp)
  {
    $this->totPaginas = $tp;
  }
  function setPagAtual($pa)
  {
    $this->pagAtual = $pa;
  }
  function setAberto($ab)
  {
    $this->aberto = $ab;
  }
  function setLeitor($le)
  {
    $this->leitor = $le;
  }
}
