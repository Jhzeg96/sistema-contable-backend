<?php
class CartaPorte
{
    private $folio;
    private $fecha;
    private $origen;
    private $remitente;
    private $remitenteRFC;
    private $remitenteDomicilio;
    private $recoger;
    private $destino;
    private $destinatario;
    private $destinatarioRFC;
    private $destinatarioDomicilio;
    private $entregar;
    private $cuotaTonelada;
    private $valorDeclarado;
    private $condicionesPago;
    private $bultosNumero;
    private $bultosEmbalaje;
    private $contienen;
    private $peso;
    private $metrosCubicos;
    private $pesoEstimado;
    private $concepto;
    private $importe;
    private $subTotal;
    private $IVA;
    private $retIVA;
    private $total;
    private $cantidadConLetra;
    private $reembarco;
    private $reembarcarse;
    private $tractor;
    private $operario;
    private $conducira;

    public function __construct($data)
    {
        $this->folio = $data["folio"];
        $this->fecha = $data["fecha"];
        $this->origen = $data["origen"];
        $this->remitente = $data["remitente"];
        $this->remitenteRFC = $data["remitenteRFC"];
        $this->remitenteDomicilio = $data["remitenteDomicilio"];
        $this->recoger = $data["recoger"];
        $this->destino = $data["destino"];
        $this->destinatario = $data["destinatario"];
        $this->destinatarioRFC = $data["destinatarioRFC"];
        $this->destinatarioDomicilio = $data["destinatarioDomicilio"];
        $this->entregar = $data["entregar"];
        $this->cuotaTonelada = $data["cuotaTonelada"];
        $this->valorDeclarado = $data["valorDeclarado"];
        $this->condicionesPago = $data["condicionesPago"];
        $this->bultosNumero = $data["bultosNumero"];
        $this->bultosEmbalaje = $data["bultosEmbalaje"];
        $this->contienen = $data["contienen"];
        $this->peso = $data["peso"];
        $this->metrosCubicos = $data["metrosCubicos"];
        $this->pesoEstimado = $data["pesoEstimado"];
        $this->concepto = $data["concepto"];
        $this->importe = $data["importe"];
        $this->subTotal = $data["subTotal"];
        $this->IVA = $data["IVA"];
        $this->retIVA = $data["retIVA"];
        $this->total = $data["total"];
        $this->cantidadConLetra = $data["cantidadConLetra"];
        $this->reembarco = $data["reembarco"];
        $this->reembarcarse = $data["reembarcarse"];
        $this->tractor = $data["tractor"];
        $this->operario = $data["operario"];
        $this->conducira = $data["conducira"];
    }

    public function obtenerFolio()
    {
        return $this->folio;
    }

    public function obtenerFecha()
    {
        return $this->fecha;
    }
    public function obtenerOrigen()
    {
        return $this->origen;
    }
    public function obtenerRemitente()
    {
        return $this->remitente;
    }
    public function obtenerRemitenteRFC()
    {
        return $this->remitenteRFC;
    }
    public function obtenerRemitenteDomicilio()
    {
        return $this->remitenteDomicilio;
    }
    public function obtenerRecoger()
    {
        return $this->recoger;
    }
    public function obtenerDestino()
    {
        return $this->destino;
    }
    public function obtenerDestinatario()
    {
        return $this->destinatario;
    }
    public function obtenerDestinatarioRFC()
    {
        return $this->destinatarioRFC;
    }
    public function obtenerDestinatarioDomicilio()
    {
        return $this->destinatarioDomicilio;
    }
    public function obtenerEntregar()
    {
        return $this->entregar;
    }
    public function obtenerCuotaTonelada()
    {
        return $this->cuotaTonelada;
    }
    public function obtenerValorDeclarado()
    {
        return $this->valorDeclarado;
    }
    public function obtenerCondicionesPago()
    {
        return $this->condicionesPago;
    }
    public function obtenerBultosNumero()
    {
        return $this->bultosNumero;
    }
    public function obtenerBultosEmbalaje()
    {
        return $this->bultosEmbalaje;
    }
    public function obtenerContienen()
    {
        return $this->contienen;
    }
    public function obtenerPeso()
    {
        return $this->peso;
    }
    public function obtenerMetrosCubicos()
    {
        return $this->metrosCubicos;
    }
    public function obtenerPesoEstimado()
    {
        return $this->pesoEstimado;
    }
    public function obtenerConcepto()
    {
        return $this->concepto;
    }
    public function obtenerImporte()
    {
        return $this->importe;
    }
    public function obtenerSubTotal()
    {
        return $this->subTotal;
    }
    public function obtenerIVA()
    {
        return $this->IVA;
    }
    public function obtenerRetIVA()
    {
        return $this->retIVA;
    }
    public function obtenerTotal()
    {
        return $this->total;
    }
    public function obtenerCantidadConLetra()
    {
        return $this->cantidadConLetra;
    }
    public function obtenerReembarco()
    {
        return $this->reembarco;
    }
    public function obtenerReembarcarse()
    {
        return $this->reembarcarse;
    }
    public function obtenerTractor()
    {
        return $this->tractor;
    }
    public function obtenerOperario()
    {
        return $this->operario;
    }
    public function obtenerConducira()
    {
        return $this->conducira;
    }
}
?>