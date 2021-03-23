<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
class DAOCartaPorte
{
    private $conexion;
    public function __construct($conexion)
    {
        $this->conexion = $conexion;
    }

    public function guardarCartaPorte($cartaPorte)
    {
        $consulta = "INSERT INTO `cartaPorte`(`CartaPorteFolio`, `CartaPorteFecha`, `CartaPorteOrigen`, `CartaPorteRemitente`, `CartaPorteRemitenteRFC`, `CartaPorteRemitenteDomicilio`, `CartaPorteRecoger`, `CartaPorteDestino`, `CartaPorteDestinatario`, `CartaPorteDestinatarioRFC`, `CartaPorteDestinatarioDomicilio`, `CartaPorteEntregar`, `CartaPorteCuotaTonelada`, `CartaPorteValorDeclarado`, `CartaPorteCondicionesPago`, `CartaPorteBultosNumero`, `CartaPorteBultosEmbalaje`, `CartaPorteContienen`, `CartaPortePeso`, `CartaPorteMetrosCubicos`, `CartaPortePesoEstimado`, `CartaPorteConcepto`, `CartaPorteImporte`, `CartaPorteSubTotal`, `CartaPorteIVA`, `CartaPorteRetIVA`, `CartaPorteTotal`, `CartaPorteCantidadConLetra`, `CartaPorteReembarco`, `CartaPorteReembarcarse`, `CartaPorteTractor`, `CartaPorteOperario`, `CartaPorteConducira`) VALUES (:folio,:fecha,:origen,:remitente,:remitenteRFC,:remitenteDomicilio,:recoger,:destino,:destinatario,:destinatarioRFC,:destinararioDomicilio,:entregar,:cuotaTonelada,:valorDeclarado,:condicionesPago,:bultosNumeros,:bultosEmbalaje,:contienen,:peso,:metrosCubicos,:pesoEstimado,:concepto,:importe,:subtotal,:iva,:retIva,:total,:cantidadConLetra,:reembarco,:reembarcarse,:tractor,:operario,:conducira)";


        $declaracion = $this->conexion->prepare($consulta);
        $declaracion->bindValue(':folio', $cartaPorte->obtenerFolio(), PDO::PARAM_INT);
        $declaracion->bindValue(':fecha',$cartaPorte->obtenerFecha(), PDO::PARAM_STR);
        $declaracion->bindValue(':origen',$cartaPorte->obtenerOrigen(), PDO::PARAM_STR);
        $declaracion->bindValue(':remitente',$cartaPorte->obtenerRemitente(), PDO::PARAM_STR);
        $declaracion->bindValue(':remitenteRFC',$cartaPorte->obtenerRemitenteRFC(), PDO::PARAM_STR);
        $declaracion->bindValue(':remitenteDomicilio',$cartaPorte->obtenerRemitenteDomicilio(), PDO::PARAM_STR);
        $declaracion->bindValue(':recoger',$cartaPorte->obtenerRecoger(), PDO::PARAM_STR);
        $declaracion->bindValue(':destino',$cartaPorte->obtenerDestino(), PDO::PARAM_STR);
        $declaracion->bindValue(':destinatario',$cartaPorte->obtenerDestinatario(), PDO::PARAM_STR);
        $declaracion->bindValue(':destinatarioRFC',$cartaPorte->obtenerDestinatarioRFC(), PDO::PARAM_STR);
        $declaracion->bindValue(':destinararioDomicilio',$cartaPorte->obtenerDestinatarioDomicilio(), PDO::PARAM_STR);
        $declaracion->bindValue(':entregar',$cartaPorte->obtenerEntregar(), PDO::PARAM_STR);
        $declaracion->bindValue(':cuotaTonelada',$cartaPorte->obtenerCuotaTonelada(), PDO::PARAM_STR);
        $declaracion->bindValue(':valorDeclarado',$cartaPorte->obtenerValorDeclarado(), PDO::PARAM_STR);
        $declaracion->bindValue(':condicionesPago',$cartaPorte->obtenerCondicionesPago(), PDO::PARAM_STR);
        $declaracion->bindValue(':bultosNumeros',$cartaPorte->obtenerBultosNumero(), PDO::PARAM_INT);
        $declaracion->bindValue(':bultosEmbalaje',$cartaPorte->obtenerBultosEmbalaje(), PDO::PARAM_STR);
        $declaracion->bindValue(':contienen',$cartaPorte->obtenerContienen(), PDO::PARAM_STR);
        $declaracion->bindValue(':peso',$cartaPorte->obtenerPeso(), PDO::PARAM_STR);
        $declaracion->bindValue(':metrosCubicos',$cartaPorte->obtenerMetrosCubicos(), PDO::PARAM_STR);
        $declaracion->bindValue(':pesoEstimado',$cartaPorte->obtenerPesoEstimado(), PDO::PARAM_STR);
        $declaracion->bindValue(':concepto',$cartaPorte->obtenerConcepto(), PDO::PARAM_STR);
        $declaracion->bindValue(':importe',$cartaPorte->obtenerImporte(), PDO::PARAM_STR);
        $declaracion->bindValue(':subtotal',$cartaPorte->obtenerSubTotal(), PDO::PARAM_STR);
        $declaracion->bindValue(':iva',$cartaPorte->obtenerIVA(), PDO::PARAM_STR);
        $declaracion->bindValue(':retIva',$cartaPorte->obtenerRetIVA(), PDO::PARAM_STR);
        $declaracion->bindValue(':total',$cartaPorte->obtenerTotal(), PDO::PARAM_STR);
        $declaracion->bindValue(':cantidadConLetra',$cartaPorte->obtenerCantidadConLetra(), PDO::PARAM_STR);
        $declaracion->bindValue(':reembarco',$cartaPorte->obtenerReembarco(), PDO::PARAM_STR);
        $declaracion->bindValue(':reembarcarse',$cartaPorte->obtenerReembarcarse(), PDO::PARAM_STR);
        $declaracion->bindValue(':tractor',$cartaPorte->obtenerTractor(), PDO::PARAM_STR);
        $declaracion->bindValue(':operario',$cartaPorte->obtenerOperario(), PDO::PARAM_STR);
        $declaracion->bindValue(':conducira',$cartaPorte->obtenerConducira(), PDO::PARAM_STR);
    
        if($declaracion->execute())
        {
            return "true";
        }
        else
        {
            return "f";
        }
    }
}
?>