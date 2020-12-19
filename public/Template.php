<?php

/*if (version_compare(phpversion(), '5.4.0', '<')) 
@import_request_variables("GP","");
else 
 extract($_REQUEST);*/
//require('../PHPWord.php');
require('PHPWord.php');
include('Librerias/CNumeroaLetra.php');
include("Librerias/cfg_connections.php");
require("Librerias/zip.lib.php");
	error_reporting(E_ALL);
	ini_set('display_errors', '1');



$dato = $_GET['info'];
$dato1 = $_GET['info2'];
$dato2 = $_GET['info3'];

/*echo $dato;
    echo "<br>";
    echo $dato1;
	 echo "<br>";
    echo $dato2;
	exit();*/


function edad($stamp){
    $c = date("Y",$stamp);
    $b = date("m",$stamp);
    $a = date("d",$stamp);
    $anos = date("Y")-$c;
    if(date("m")-$b > 0){
    }elseif(date("m")-$b == 0){
        if(date("d")-$a <= 0){
            $anos = $anos-1;
        }
    }else{
        $anos = $anos-1;
    }
    return $anos;
}
function cambiaFechas($fecha){
    $fechas = explode ('-',$fecha);
    $axu_mes = "";
    switch($fechas[1]){
        case "01":	$axu_mes = "ENERO";	break;
        case "02":	$axu_mes = "FEBRERO"; break;
        case "03":	$axu_mes = "MARZO"; break;
        case "04":	$axu_mes = "ABRIL"; break;
        case "05":	$axu_mes = "MAYO"; break;
        case "06":	$axu_mes = "JUNIO"; break;
        case "07":	$axu_mes = "JULIO"; break;
        case "08":	$axu_mes = "AGOSTO"; break;
        case "09":	$axu_mes = "SEPTIEMBRE"; break;
        case "10":	$axu_mes = "OCTUBRE"; break;
        case "11":	$axu_mes = "NOVIEMBRE"; break;
        case "12":	$axu_mes = "DICIEMBRE"; break;
    }
    return $fechas[2]." DE ".$axu_mes." DE ".$fechas[0];
}


if($dato=='Anexo1'){

 /*   echo $dato;
    echo "<br>";
    echo $dato1;
	 echo "<br>";
    echo $dato2;
	exit();*/

    $PHPWord = new PHPWord();

    $conexion = connectDB();

    /* Datos de la plantilla */


    $consulta = "SELECT id,id,anx1_hiper,anx1_cancer,anx1_gine,anx1_apari,anx1_otros,anx1_apari2,anx1_diabetes,anx1_patoTiro,anx1_otros2,anx1_TipoSangre,anx1_ejer,anx1_alcohol,
anx1_tabaquimo,anx1_drogas,anx1_extre,anx1_alergias,anx1_cirugia,anx1_trans,anx1_infecciosa,anx1_CroDege,anx1_trauma,anx1_gine2,anx1_menarca,anx1_ritmo,anx1_cantidad,
anx1_dolor,anx1_toalla,anx1_tratamiento,anx1_fum,anx1_ivisa,anx1_parejas,anx1_mpf,anx1_gestas,anx1_cesareas,anx1_partos,anx1_abortos,anx1_ectopicos,anx1_g1_ano,
anx1_g1_edadmat,anx1_g1_durembara,anx1_g1_sexo,anx1_g1_peso,anx1_g1_vivo,anx1_g1_resol,anx1_g1_comp,anx1_g1_lactancia,anx1_g1_meses,anx1_g2_ano,anx1_g2_edadmat,
anx1_g2_durembara,anx1_g2_sexo,anx1_g2_peso,anx1_g2_vivo,anx1_g2_resol,anx1_g2_comp,anx1_g2_lactancia,anx1_g2_meses,anx1_g3_ano,anx1_g3_edadmat,anx1_g3_durembara,
anx1_g3_sexo,anx1_g3_peso,anx1_g3_vivo,anx1_g3_resol,anx1_g3_comp,anx1_g3_lactancia,anx1_g3_meses,anx1_g4_ano,anx1_g4_edadmat,anx1_g4_durembara,anx1_g4_sexo,anx1_g4_peso,
anx1_g4_vivo,anx1_g4_resol,anx1_g4_comp,anx1_g4_lactancia,anx1_g4_meses,anx1_cervical,anx1_docma,anx1_autoexp,anx1_usg,anx1_mastogra,anx1_menopausia,anx1_inferti,
anx1_esquemaVPH,anx1_DOSIS,anx1_pActual,anx1_explF,anx1_EGL,anx1_impresionD,anx1_tratamiento1,anx1_Pmedico,anx1_pronos,anx1_fun,created_at,updated_at,deleted_at,
id_paciente,id_doctor
FROM anexo1
ORDER BY id DESC LIMIT 1;";

    $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

    $row = mysqli_fetch_object($resultado);


    $anx1_hiper = $row->anx1_hiper;
    $anx1_cancer = $row->anx1_cancer;
    $anx1_gine = $row->anx1_gine;
    $anx1_apari = $row->anx1_apari;
    $anx1_otros = $row->anx1_otros;
    $anx1_apari2 = $row->anx1_apari2;
    $anx1_diabetes = $row->anx1_diabetes;
    $anx1_patoTiro = $row->anx1_patoTiro;
    $anx1_otros2 = $row->anx1_otros2;
    $anx1_TipoSangre = $row->anx1_TipoSangre;
    $anx1_ejer = $row->anx1_ejer;
    $anx1_tabaquimo = $row->anx1_tabaquimo;
    $anx1_alcohol = $row->anx1_alcohol;
    $anx1_drogas = $row->anx1_drogas;
    $anx1_extre = $row->anx1_extre;
    $anx1_alergias = $row->anx1_alergias;
    $anx1_cirugia = $row->anx1_cirugia;
    $anx1_trans = $row->anx1_trans;
    $anx1_infecciosa = $row->anx1_infecciosa;
    $anx1_CroDege = $row->anx1_CroDege;
    $anx1_trauma = $row->anx1_trauma;
    $anx1_gine2 = $row->anx1_gine2;
    $anx1_menarca = $row->anx1_menarca;
    $anx1_ritmo = $row->anx1_ritmo;
    $anx1_cantidad = $row->anx1_cantidad;
    $anx1_dolor = $row->anx1_dolor;
    $anx1_toalla = $row->anx1_toalla;
    $anx1_tratamiento = $row->anx1_tratamiento;
    $anx1_fum = $row->anx1_fum;
    $anx1_ivisa = $row->anx1_ivisa;
    $anx1_parejas = $row->anx1_parejas;
    $anx1_mpf = $row->anx1_mpf;
    $anx1_gestas = $row->anx1_gestas;
    $anx1_cesareas = $row->anx1_cesareas;
    $anx1_partos = $row->anx1_partos;
    $anx1_abortos = $row->anx1_abortos;
    $anx1_ectopicos = $row->anx1_ectopicos;
    $anx1_g1_ano = $row->anx1_g1_año;
    $anx1_g1_edadmat = $row->anx1_g1_edadmat;
    $anx1_g1_durembara = $row->anx1_g1_durembara;
    $anx1_g1_sexo = $row->anx1_g1_sexo;
    $anx1_g1_peso = $row->anx1_g1_peso;
    $anx1_g1_vivo = $row->anx1_g1_vivo;
    $anx1_g1_resol = $row->anx1_g1_resol;
    $anx1_g1_comp = $row->anx1_g1_comp;
    $anx1_g1_lactancia = $row->anx1_g1_lactancia;
    $anx1_g1_meses = $row->anx1_g1_meses;
    $anx1_g2_ano = $row->anx1_g2_año;
    $anx1_g2_edadmat = $row->anx1_g2_edadmat;
    $anx1_g2_durembara = $row->anx1_g2_durembara;
    $anx1_g2_sexo = $row->anx1_g2_sexo;
    $anx1_g2_peso = $row->anx1_g2_peso;
    $anx1_g2_vivo = $row->anx1_g2_vivo;
    $anx1_g2_resol = $row->anx1_g2_resol;
    $anx1_g2_comp = $row->anx1_g2_comp;
    $anx1_g2_lactancia = $row->anx1_g2_lactancia;
    $anx1_g2_meses = $row->anx1_g2_meses;
    $anx1_g3_ano = $row->anx1_g3_año;
    $anx1_g3_edadmat = $row->anx1_g3_edadmat;
    $anx1_g3_durembara = $row->anx1_g3_durembara;
    $anx1_g3_sexo = $row->anx1_g3_sexo;
    $anx1_g3_peso = $row->anx1_g3_peso;
    $anx1_g3_vivo = $row->anx1_g3_vivo;
    $anx1_g3_resol = $row->anx1_g3_resol;
    $anx1_g3_comp = $row->anx1_g3_comp;
    $anx1_g3_lactancia = $row->anx1_g3_lactancia;
    $anx1_g3_meses = $row->anx1_g3_meses;
    $anx1_g4_ano = $row->anx1_g4_año;
    $anx1_g4_edadmat = $row->anx1_g4_edadmat;
    $anx1_g4_durembara = $row->anx1_g4_durembara;
    $anx1_g4_sexo = $row->anx1_g4_sexo;
    $anx1_g4_peso = $row->anx1_g4_peso;
    $anx1_g4_vivo = $row->anx1_g4_vivo;
    $anx1_g4_resol = $row->anx1_g4_resol;
    $anx1_g4_comp = $row->anx1_g4_comp;
    $anx1_g4_lactancia = $row->anx1_g4_lactancia;
    $anx1_g4_meses = $row->anx1_g4_meses;
    $anx1_cervical = $row->anx1_cervical;
    $anx1_docma = $row->anx1_docma;
    $anx1_autoexp = $row->anx1_autoexp;
    $anx1_usg = $row->anx1_usg;
    $anx1_mastogra = $row->anx1_mastogra;
    $anx1_menopausia = $row->anx1_menopausia;
    $anx1_inferti = $row->anx1_inferti;
    $anx1_esquemaVPH = $row->anx1_esquemaVPH;
    $anx1_DOSIS = $row->anx1_DOSIS;
    $anx1_explF = $row->anx1_explF;
    $anx1_EGL = $row->anx1_EGL;
    $anx1_impresionD = $row->anx1_impresionD;
    $anx1_tratamiento1 = $row->anx1_tratamiento1;
    $anx1_Pmedico = $row->anx1_Pmedico;
    $anx1_pronos = $row->anx1_pronos;
    $anx1_fun = $row->anx1_fun;

    ob_start();
    $nombre_zip = explode(".","contrato_".date("dmy_His")."zip");
    $zipfile = new zipfile($nombre_zip[0].".zip",'./DeepDir.php', './extendedfpdf.php');

    $document = $PHPWord->loadTemplate("plantillas/ANEXO1.docx");

    $document->setValue('anx1_hiper',$anx1_hiper);
    $document->setValue('anx1_cancer',$anx1_cancer);
    $document->setValue('anx1_gine',$anx1_gine);
    $document->setValue('anx1_apari',$anx1_apari);
    $document->setValue('anx1_otros',$anx1_otros);
    $document->setValue('anx1_apari2',$anx1_apari2);
    $document->setValue('anx1_diabetes',$anx1_diabetes);
    $document->setValue('anx1_patoTiro',$anx1_patoTiro);
    $document->setValue('anx1_otros2',$anx1_otros2);
    $document->setValue('anx1_TipoSangre',$anx1_TipoSangre);
    $document->setValue('anx1_ejer',$anx1_ejer);
    $document->setValue('anx1_tabaquimo',$anx1_tabaquimo);
    $document->setValue('anx1_alcohol',$anx1_alcohol);
    $document->setValue('anx1_drogas',$anx1_drogas);
    $document->setValue('anx1_extre',$anx1_extre);
    $document->setValue('anx1_alergias',$anx1_alergias);
    $document->setValue('anx1_cirugia',$anx1_cirugia);
    $document->setValue('anx1_trans',$anx1_trans);
    $document->setValue('anx1_infecciosa',$anx1_infecciosa);
    $document->setValue('anx1_CroDege',$anx1_CroDege);
    $document->setValue('anx1_trauma',$anx1_trauma);
    $document->setValue('anx1_gine2',$anx1_gine2);
    $document->setValue('anx1_menarca',$anx1_menarca);
    $document->setValue('anx1_ritmo',$anx1_ritmo);
    $document->setValue('anx1_cantidad',$anx1_cantidad);
    $document->setValue('anx1_dolor',$anx1_dolor);
    $document->setValue('anx1_toalla',$anx1_toalla);
    $document->setValue('anx1_tratamiento',$anx1_tratamiento);
    $document->setValue('anx1_fum',$anx1_fum);
    $document->setValue('anx1_ivisa',$anx1_ivisa);
    $document->setValue('anx1_parejas',$anx1_parejas);
    $document->setValue('anx1_mpf',$anx1_mpf);
    $document->setValue('anx1_gestas',$anx1_gestas);
    $document->setValue('anx1_cesareas',$anx1_cesareas);
    $document->setValue('anx1_partos',$anx1_partos);
    $document->setValue('anx1_abortos',$anx1_abortos);
    $document->setValue('anx1_ectopicos',$anx1_ectopicos);
    $document->setValue('anx1_g1_año',$anx1_g1_ano);
    $document->setValue('anx1_g1_edadmat',$anx1_g1_edadmat);
    $document->setValue('anx1_g1_durembara',$anx1_g1_durembara);
    $document->setValue('anx1_g1_sexo',$anx1_g1_sexo);
    $document->setValue('anx1_g1_peso',$anx1_g1_peso);
    $document->setValue('anx1_g1_vivo',$anx1_g1_vivo);
    $document->setValue('anx1_g1_resol',$anx1_g1_resol);
    $document->setValue('anx1_g1_comp',$anx1_g1_comp);
    $document->setValue('anx1_g1_lactancia',$anx1_g1_lactancia);
    $document->setValue('anx1_g1_meses',$anx1_g1_meses);
    $document->setValue('anx1_g2_año',$anx1_g2_ano);
    $document->setValue('anx1_g2_edadmat',$anx1_g2_edadmat);
    $document->setValue('anx1_g2_durembara',$anx1_g2_durembara);
    $document->setValue('anx1_g2_sexo',$anx1_g2_sexo);
    $document->setValue('anx1_g2_peso',$anx1_g2_peso);
    $document->setValue('anx1_g2_vivo',$anx1_g2_vivo);
    $document->setValue('anx1_g2_resol',$anx1_g2_resol);
    $document->setValue('anx1_g2_comp',$anx1_g2_comp);
    $document->setValue('anx1_g2_lactancia',$anx1_g2_lactancia);
    $document->setValue('anx1_g2_meses',$anx1_g2_meses);
    $document->setValue('anx1_g3_año',$anx1_g3_ano);
    $document->setValue('anx1_g3_edadmat',$anx1_g3_edadmat);
    $document->setValue('anx1_g3_durembara',$anx1_g3_durembara);
    $document->setValue('anx1_g3_sexo',$anx1_g3_sexo);
    $document->setValue('anx1_g3_peso',$anx1_g3_peso);
    $document->setValue('anx1_g3_vivo',$anx1_g3_vivo);
    $document->setValue('anx1_g3_resol',$anx1_g3_resol);
    $document->setValue('anx1_g3_comp',$anx1_g3_comp);
    $document->setValue('anx1_g3_lactancia',$anx1_g3_lactancia);
    $document->setValue('anx1_g3_meses',$anx1_g3_meses);
    $document->setValue('anx1_g4_año',$anx1_g4_ano);
    $document->setValue('anx1_g4_edadmat',$anx1_g4_edadmat);
    $document->setValue('anx1_g4_durembara',$anx1_g4_durembara);
    $document->setValue('anx1_g4_sexo',$anx1_g4_sexo);
    $document->setValue('anx1_g4_peso',$anx1_g4_peso);
    $document->setValue('anx1_g4_vivo',$anx1_g4_vivo);
    $document->setValue('anx1_g4_resol',$anx1_g4_resol);
    $document->setValue('anx1_g4_comp',$anx1_g4_comp);
    $document->setValue('anx1_g4_lactancia',$anx1_g4_lactancia);
    $document->setValue('anx1_g4_meses',$anx1_g4_meses);
    $document->setValue('anx1_cervical',$anx1_cervical);
    $document->setValue('anx1_docma',$anx1_docma);
    $document->setValue('anx1_autoexp',$anx1_autoexp);
    $document->setValue('anx1_usg',$anx1_usg);
    $document->setValue('anx1_mastogra',$anx1_mastogra);
    $document->setValue('anx1_menopausia',$anx1_menopausia);
    $document->setValue('anx1_inferti',$anx1_inferti);
    $document->setValue('anx1_esquemaVPH',$anx1_esquemaVPH);
    $document->setValue('anx1_DOSIS',$anx1_DOSIS);
    $document->setValue('anx1_explF',$anx1_explF);
    $document->setValue('anx1_EGL',$anx1_EGL);
    $document->setValue('anx1_impresionD',$anx1_impresionD);
    $document->setValue('anx1_tratamiento1',$anx1_tratamiento1);
    $document->setValue('anx1_Pmedico',$anx1_Pmedico);
    $document->setValue('anx1_pronos',$anx1_pronos);
    $document->setValue('anx1_fun',$anx1_fun);

    $document->setValue('weekday', date('l'));
    $document->setValue('time', date('H:i'));

    $nombreRpt=substr($nombre,0,25)."-".date('dmYHis').'.docx';

    $document->save('Contratos/'.$nombreRpt);

    $zipfile->addFileAndRead('Contratos/'.$nombreRpt);


    unlink('Contratos/'.$nombreRpt);
    unlink($plantilla_ruta);
    echo $zipfile->file();

    $directorio = getcwd();


    CleanFiles($directorio);




}

if($dato=='Anexo2'){


    $PHPWord = new PHPWord();

    $conexion = connectDB();

    /* Datos de la plantilla */


    $consulta = "SELECT id,anx2_consumo_lt,anx2_urina_urgen_1,anx2_TiempoE,anx2_Frecuencia,anx2_Cantidadp,
                anx2_IUE,anx2_TiempoE2,anx2_Frecuencia2,anx2_Cantidadp2,anx2_CMiccional,anx2_SVaciamiento,anx2_Disuria,
                anx2_Hematuria,anx2_SCE,anx2_Rvaginal,anx2_ardor,anx2_prurito,anx2_estre,anx2_Claxantes,anx2_evacuacion,anx2_IFH,anx2_VSA,anx2_dispa,
                anx2_pene_orga,anx2_ReflejosPe,anx2_PTV,anx2_AtroVagi,anx2_notas,created_at,updated_at,deleted_at,id_paciente,id_doctor 
                FROM anexo2 
                ORDER BY id DESC LIMIT 1;";

    $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

    $row = mysqli_fetch_object($resultado);

    $anx2_consumo_lt = $row->anx2_consumo_lt;
    $anx2_urina_urgen_1 = $row->anx2_urina_urgen_1;
    $anx2_TiempoE = $row->anx2_TiempoE;
    $anx2_Frecuencia = $row->anx2_Frecuencia;
    $anx2_Cantidadp = $row->anx2_Cantidadp;
    $anx2_IUE = $row->anx2_IUE;
    $anx2_TiempoE2 = $row->anx2_TiempoE2;
    $anx2_Frecuencia2 = $row->anx2_Frecuencia2;
    $anx2_Cantidadp2 = $row->anx2_Cantidadp2;
    $anx2_Cmiccional = $row->anx2_Cmiccional;
    $anx2_SVaciamiento = $row->anx2_SVaciamiento;
    $anx2_Disuria = $row->anx2_Disuria;
    $anx2_Hematuria = $row->anx2_Hematuria;
    $anx2_SCE = $row->anx2_SCE;
    $anx2_Rvaginal = $row->anx2_Rvaginal;
    $anx2_ardor = $row->anx2_ardor;
    $anx2_prurito = $row->anx2_prurito;
    $anx2_estre = $row->anx2_estre;
    $anx2_Claxantes = $row->anx2_Claxantes;
    $anx2_evacuacion = $row->anx2_evacuacion;
    $anx2_IFH = $row->anx2_IFH;
    $anx2_VSA = $row->anx2_VSA;
    $anx2_dispa = $row->anx2_dispa;
    $anx2_pene_orga = $row->anx2_pene_orga;
    $anx2_ReflejosPe = $row->anx2_ReflejosPe;
    $anx2_PTV = $row->anx2_PTV;
    $anx2_AtroVagi = $row->anx2_AtroVagi;
    $anx2_notas = $row->anx2_notas;


    ob_start();
    $nombre_zip = explode(".","contrato_".date("dmy_His")."zip");
    $zipfile = new zipfile($nombre_zip[0].".zip",'./DeepDir.php', './extendedfpdf.php');

    $document = $PHPWord->loadTemplate("plantillas/ANEXO2.docx");

    $document->setValue('anx2_consumo_lt',$anx2_consumo_lt);
    $document->setValue('anx2_urina_urgen_1',$anx2_urina_urgen_1);
    $document->setValue('anx2_TiempoE',$anx2_TiempoE);
    $document->setValue('anx2_Frecuencia',$anx2_Frecuencia);
    $document->setValue('anx2_Cantidadp',$anx2_Cantidadp);
    $document->setValue('anx2_IUE',$anx2_IUE);
    $document->setValue('anx2_TiempoE2',$anx2_TiempoE2);
    $document->setValue('anx2_Frecuencia2',$anx2_Frecuencia2);
    $document->setValue('anx2_Cantidadp2',$anx2_Cantidadp2);
    $document->setValue('anx2_Cmiccional',$anx2_Cmiccional);
    $document->setValue('anx2_SVaciamiento',$anx2_SVaciamiento);
    $document->setValue('anx2_Disuria',$anx2_Disuria);
    $document->setValue('anx2_Hematuria',$anx2_Hematuria);
    $document->setValue('anx2_SCE',$anx2_SCE);
    $document->setValue('anx2_Rvaginal',$anx2_Rvaginal);
    $document->setValue('anx2_ardor',$anx2_ardor);
    $document->setValue('anx2_prurito',$anx2_prurito);
    $document->setValue('anx2_estre',$anx2_estre);
    $document->setValue('anx2_Claxantes',$anx2_Claxantes);
    $document->setValue('anx2_evacuacion',$anx2_evacuacion);
    $document->setValue('anx2_IFH',$anx2_IFH);
    $document->setValue('anx2_VSA',$anx2_VSA);
    $document->setValue('anx2_dispa',$anx2_dispa);
    $document->setValue('anx2_pene_orga',$anx2_pene_orga);
    $document->setValue('anx2_ReflejosPe',$anx2_ReflejosPe);
    $document->setValue('anx2_PTV',$anx2_PTV);
    $document->setValue('anx2_AtroVagi',$anx2_AtroVagi);
    $document->setValue('anx2_notas',$anx2_notas);




    $document->setValue('weekday', date('l'));
    $document->setValue('time', date('H:i'));

    $nombreRpt=substr($nombre,0,25)."-".date('dmYHis').'.docx';

    $document->save('Contratos/'.$nombreRpt);

    $zipfile->addFileAndRead('Contratos/'.$nombreRpt);


    unlink('Contratos/'.$nombreRpt);
    unlink($plantilla_ruta);
    echo $zipfile->file();

    $directorio = getcwd();


    CleanFiles($directorio);





}

if($dato=='Anexo10'){


    /*echo $dato;
    echo "<br>";
    echo $dato2;exit();*/

    /* # Instanciar el Archivo ZIP ##*/
    /* OBTENER LOS ID'S DE LOS EMPLEADOS */

    $PHPWord = new PHPWord();

    $conexion = connectDB();

    /* Datos de la plantilla */


   

    $consulta = "SELECT id,anx10_ht_oncologia AS oncologia,anx10_menarca AS menarca,anx10_embarazo AS primerembarazo,
anx10_lmaterna AS lmaterna,anx10_uso_hormonales AS hormonales,anx10_notas AS notas
FROM anexo10 
ORDER BY  id DESC  LIMIT 1";
    echo $consulta;//exit();
    /*echo"<br>";
    echo $consulta2;*/
    $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");



    $row = mysqli_fetch_object($resultado);



    $oncologia = $row->oncologia;
    $menarca = $row->menarca;
    $primerembarazo = $row->primerembarazo;
    $lmaterna = $row->lmaterna;
    $hormonales = $row->hormonales;
    $notas = $row->notas;

    ob_start();
    $nombre_zip = explode(".","contrato_".date("dmy_His")."zip");
    $zipfile = new zipfile($nombre_zip[0].".zip",'./DeepDir.php', './extendedfpdf.php');

    $document = $PHPWord->loadTemplate("plantillas/ANEXO10.docx");

    $document->setValue('oncologia', $oncologia);
    $document->setValue('menarca',$menarca);
    $document->setValue('primerembarazo',$primerembarazo);
    $document->setValue('lmaterna',$lmaterna);
    $document->setValue('hormonales',$hormonales);
    $document->setValue('notas',$notas);

    
    $document->setValue('weekday', date('l'));
    $document->setValue('time', date('H:i'));

    $nombreRpt=substr($nombre,0,25)."-".date('dmYHis').'.docx';

    $document->save('Contratos/'.$nombreRpt);

    $zipfile->addFileAndRead('Contratos/'.$nombreRpt);


    unlink('Contratos/'.$nombreRpt);
    unlink($plantilla_ruta);
    echo $zipfile->file();

    $directorio = getcwd();


    CleanFiles($directorio);

}


if($dato=='AEstudio'){
	
	$dato;
	$dato1;
	$dato2;

    $PHPWord = new PHPWord();

    $conexion = connectDB();

$consulta = "SELECT descripcion 
FROM aestudio 
ORDER BY id DESC LIMIT 1;";

$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

 $row = mysqli_fetch_object($resultado);

    $descripcion = $row->descripcion;
	


    /* Datos de la plantilla */
	
	ob_start();
    $nombre_zip = explode(".","contrato_".date("dmy_His")."zip");
    $zipfile = new zipfile($nombre_zip[0].".zip",'./DeepDir.php', './extendedfpdf.php');

    $document = $PHPWord->loadTemplate("plantillas/estudio.docx");

    $document->setValue('dato1',$dato1);
    $document->setValue('descripcion',$descripcion);
    

    
    $document->setValue('weekday', date('l'));
    $document->setValue('time', date('H:i'));

    $nombreRpt=substr($nombre,0,25)."-".date('dmYHis').'.docx';

    $document->save('Contratos/'.$nombreRpt);

    $zipfile->addFileAndRead('Contratos/'.$nombreRpt);


    unlink('Contratos/'.$nombreRpt);
    unlink($plantilla_ruta);
    echo $zipfile->file();

    $directorio = getcwd();


    CleanFiles($directorio);
	
	
}

if($dato=='Anexo17'){

}

if($dato=='Anexo18'){

}

if($dato=='Anexo29'){

}

if($dato=='Anexo20'){

    /* # Instanciar el Archivo ZIP ##*/
    /* OBTENER LOS ID'S DE LOS EMPLEADOS */

    $PHPWord = new PHPWord();

    $conexion = connectDB();

    /* Datos de la plantilla */

    $consulta = "SELECT id,anx20_primert_pp_doc AS primerppdoc,anx20_primert_pp_fr AS primerppfr,anx20_primert_pp_fp AS primerppfp,
                        anx20_tiroideo_doc AS tiroideodoc,anx20_tiroideo_fr AS tiroideofr,anx20_tiroideo_fp AS tiroideofp,
                        anx20_segundot_glucosa_doc AS glucosadoc,anx20_segundot_glucosa_fr AS glucosafr,anx20_segundot_glucosa_fp AS glucosafp,
                        anx20_segundot_biometriah_doc AS biometriadoc,anx20_segundot_biometriah_fr AS biometriafr,anx20_segundot_biometriah_fp AS biometriafp,
                        anx20_segundot_ego_doc AS egodoc,anx20_segundot_ego_fr AS egofr,anx20_segundo_ego_fp AS egofp,
                        anx20_tercert_cespeciales_doc AS espedoc,anx20_tercert_cespeciales_fr AS espefr,anx20_tercert_cespeciales_fp AS espefp,
                        anx20_tercert_urocultivo_doc AS urodoc,anx20_tercert_urocultivo_fr AS urofr,anx20_tercert_urocultivo_fp AS urofp,
                        anx20_tercert_pp_doc AS ppdoc,anx20_tercert_pp_fr AS ppfr,anx20_tercert_pp_fp AS ppfp
                        FROM anexo20 
                        ORDER BY  id DESC  LIMIT 1";
    echo $consulta;//exit();
    /*echo"<br>";
    echo $consulta2;*/
    $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

    $row = mysqli_fetch_object($resultado);

    $primerppdoc = $row->primerppdoc;
    $primerppfr = $row->primerppfr;
    $primerppfp = $row->primerppfp;
    $tiroideodoc = $row->tiroideodoc;
    $tiroideofr = $row->tiroideofr;
    $tiroideofp = $row->tiroideofp;
    $glucosadoc = $row->glucosadoc;
    $glucosafr = $row->glucosafr;
    $glucosafp = $row->glucosafp;
    $biometriadoc = $row->biometriadoc;
    $biometriafr = $row->biometriafr;
    $biometriafp = $row->biometriafp;
    $egodoc = $row->egodoc;
    $egofr = $row->egofr;
    $egofp = $row->egofp;
    $espedoc = $row->espedoc;
    $espefr = $row->espefr;
    $espefp = $row->espefp;
    $urodoc = $row->urodoc;
    $urofr= $row->urofr;
    $urofp = $row->urofp;
    $ppdoc = $row->ppdoc;
    $ppfr = $row->ppfr;
    $ppfp = $row->ppfp;


    ob_start();
    $nombre_zip = explode(".","contrato_".date("dmy_His")."zip");
    $zipfile = new zipfile($nombre_zip[0].".zip",'./DeepDir.php', './extendedfpdf.php');

    $document = $PHPWord->loadTemplate("plantillas/ANEXO20.docx");

    $document->setValue('primerppdoc',$primerppdoc);
    $document->setValue('primerppfr',$primerppfr);
    $document->setValue('primerppfp',$primerppfp);
    $document->setValue('tiroideodoc',$tiroideodoc);
    $document->setValue('tiroideofr',$tiroideofr);
    $document->setValue('tiroideofp',$tiroideofp);
    $document->setValue('glucosadoc',$glucosadoc);
    $document->setValue('glucosafr',$glucosafr);
    $document->setValue('glucosafp',$glucosafp);
    $document->setValue('biometriadoc',$biometriadoc);
    $document->setValue('biometriafr',$biometriafr);
    $document->setValue('biometriafp',$biometriafp);
    $document->setValue('egodoc',$egodoc);
    $document->setValue('egofr',$egofr);
    $document->setValue('egofp',$egofp);
    $document->setValue('espedoc',$espedoc);
    $document->setValue('espefr',$espefr);
    $document->setValue('espefp',$espefp);
    $document->setValue('urodoc',$urodoc);
    $document->setValue('urofr',$urofr);
    $document->setValue('urofp',$urofp);
    $document->setValue('ppdoc',$ppdoc);
    $document->setValue('ppfr',$ppfr);
    $document->setValue('ppfp',$ppfp);



    $document->setValue('weekday', date('l'));
    $document->setValue('time', date('H:i'));

    $nombreRpt=substr($nombre,0,25)."-".date('dmYHis').'.docx';

    $document->save('Contratos/'.$nombreRpt);

    $zipfile->addFileAndRead('Contratos/'.$nombreRpt);


    unlink('Contratos/'.$nombreRpt);
    unlink($plantilla_ruta);
    echo $zipfile->file();

    $directorio = getcwd();


    CleanFiles($directorio);

}


if($dato=='Anexo22'){

    /* # Instanciar el Archivo ZIP ##*/
    /* OBTENER LOS ID'S DE LOS EMPLEADOS */

    $PHPWord = new PHPWord();

    $conexion = connectDB();

    /* Datos de la plantilla */




    $consulta = "SELECT id,anx22_USG_Mamario_Doc AS UMDOC,anx22_USG_Mamario_FR AS UMFR,anx22_USG_Mamario_FP AS UMFP,
                        anx22_USG_Pelvico_doc AS UPDOC,anx22_USG_Pelvico_FR AS UPFR,anx22_USG_Pelvico_FP AS UPFP,
                        anx22_Papanicolau_Doc AS PAPADOC,anx22_Papanicolau_FR AS PAPAFR,anx22_Papanicolau_FP AS PAPAFP,
                        anx22_Colposcopia_Doc AS COLDOC,anx22_Colposcopia_FR AS COLFR,anx22_Colposcopia_FP AS COLFP
                        FROM anexo22 
                        ORDER BY  id DESC  LIMIT 1";
    echo $consulta;//exit();
    /*echo"<br>";
    echo $consulta2;*/
    $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");



    $row = mysqli_fetch_object($resultado);



    $UMDOC = $row->UMDOC;
    $UMFR = $row->UMFR;
    $UMFP = $row->UMFP;
    $UPDOCa = $row->UPDOC;
    $UPFR = $row->UPFR;
    $UPFP = $row->UPFP;
    $PAPADOC = $row->PAPADOC;
    $PAPAFR = $row->PAPAFR;
    $PAPAFP = $row->PAPAFP;
    $COLDOC = $row->COLDOC;
    $COLFR = $row->COLFR;
    $COLFP = $row->COLFP;


    ob_start();
    $nombre_zip = explode(".","contrato_".date("dmy_His")."zip");
    $zipfile = new zipfile($nombre_zip[0].".zip",'./DeepDir.php', './extendedfpdf.php');

    $document = $PHPWord->loadTemplate("plantillas/ANEXO22.docx");

    $document->setValue('UMDOC',$UMDOC);
    $document->setValue('UMFR',$UMFR);
    $document->setValue('UMFP',$UMFP);
    $document->setValue('UPDOC',$UPDOC);
    $document->setValue('UPFR',$UPFR);
    $document->setValue('UPFP',$UPFP);
    $document->setValue('PAPADOC',$PAPADOC);
    $document->setValue('PAPAFR',$PAPAFR);
    $document->setValue('PAPAFP',$PAPAFP);
    $document->setValue('COLDOC',$COLDOC);
    $document->setValue('COLFR',$COLFR);
    $document->setValue('COLFP',$COLFP);



    $document->setValue('weekday', date('l'));
    $document->setValue('time', date('H:i'));

    $nombreRpt=substr($nombre,0,25)."-".date('dmYHis').'.docx';

    $document->save('Contratos/'.$nombreRpt);

    $zipfile->addFileAndRead('Contratos/'.$nombreRpt);


    unlink('Contratos/'.$nombreRpt);
    unlink($plantilla_ruta);
    echo $zipfile->file();

    $directorio = getcwd();


    CleanFiles($directorio);

}

if($dato=='Anexo34'){
    $PHPWord = new PHPWord();

    $conexion = connectDB();

    /* Datos de la plantilla */

    $consulta = "select anx34_fecha,anx34_folio,anx34_paciente,anx34_moti_estu,anx34_fecha_nac,anx34_sexo,anx34_edo_civil,anx34_domicilio,anx34_telefono,anx34_correo,
anx34_A_cancer_mama,anx34_CA_aque_edad,anx34_AF_cancel_mama,anx34_FCA_quien,anx34_AP_mamas,anx34_AP_mamas_tipo,anx34_dolor,anx34_masa_palpable,anx34_cambios_piel,
anx34_aumento_volumen,anx34_secrecion_pezon,anx34_inversion_pezon,anx34_otros,anx34_desde_cuando,anx34_senal_mamas_lunar,anx34_senal_mamas_cicatrices,
anx34_senal_mamas_verrugas,anx34_senal_mamas_otros,anx34_primer_menstru,anx34_vida_sexual,anx34_numero_embara,anx34_numero_partos,anx34_numero_cesareas,
anx34_masto_utra_fecha,anx34_masto_utra,anx34_readio_seno,anx34_reduc_mama_fecha,anx34_reduc_mama_amb,anx34_reduc_mama_izq,anx34_reduc_mama_dere,anx34_reduc_mama,
anx34_reca_implante_fecha,anx34_reca_implante,anx34_implantes_mama_fecha,anx34_implantes_mama_ambos,anx34_implantes_mama_izq,anx34_implantes_mama_dere,
anx34_implantes_mama,anx34_axilas_fecha,anx34_axilas_izq,anx34_axilas_dere,anx34_axilas,anx34_realizo_mastec_fecha,anx34_realizo_mastec_izq,anx34_realizo_mastec_der,
anx34_realizo_mastec,anx34_biopsia_izquierda,anx34_biopsia_derecha,anx34_biopsia_mama,anx34_fecha_ultima_mestruacion,anx34_menopausia,anx34_hormonal_tiempo,
anx34_anticonceptivo_tipo,anx34_anticonceptivo,anx34_numero_abortos from anexo34 order by id desc limit 1;";
    echo $consulta;//exit();
    /*echo"<br>";
    echo $consulta2;*/
    $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

    $row = mysqli_fetch_object($resultado);

    $anx34_fecha = $row->anx34_fecha;
    $anx34_folio = $row->anx34_folio;
    $anx34_paciente = $row->anx34_paciente;
    $anx34_moti_estu = $row->anx34_moti_estu;
    $anx34_fecha_nac = $row->anx34_fecha_nac;
    $anx34_sexo = $row->anx34_sexo;
    $anx34_edo_civil = $row->anx34_edo_civil;
    $anx34_domicilio = $row->anx34_domicilio;
    $anx34_telefono = $row->anx34_telefono;
    $anx34_correo = $row->anx34_correo;
    $anx34_A_cancer_mama = $row->anx34_A_cancer_mama;
    $anx34_CA_aque_edad = $row->anx34_CA_aque_edad;
    $anx34_AF_cancel_mama = $row->anx34_AF_cancel_mama;
    $anx34_FCA_quien = $row->anx34_FCA_quien;
    $anx34_AP_mamas = $row->anx34_AP_mamas;
    $anx34_AP_mamas_tipo = $row->anx34_AP_mamas_tipo;
    $anx34_dolor = $row->anx34_dolor;
    $anx34_masa_palpable = $row->anx34_masa_palpable;
    $anx34_cambios_piel = $row->anx34_cambios_piel;
    $anx34_aumento_volumen = $row->anx34_aumento_volumen;
    $anx34_secrecion_pezon = $row->anx34_secrecion_pezon;
    $anx34_inversion_pezon = $row->anx34_inversion_pezon;
    $anx34_otros = $row->anx34_otros;
    $anx34_desde_cuando = $row->anx34_desde_cuando;
    $anx34_senal_mamas_lunar = $row->anx34_senal_mamas_lunar;
    $anx34_senal_mamas_cicatrices = $row->anx34_senal_mamas_cicatrices;
    $anx34_senal_mamas_verrugas = $row->anx34_senal_mamas_verrugas;
    $anx34_senal_mamas_otros = $row->anx34_senal_mamas_otros;
    $anx34_primer_menstru = $row->anx34_primer_menstru;
    $anx34_vida_sexual = $row->anx34_vida_sexual;
    $anx34_numero_embara = $row->anx34_numero_embara;
    $anx34_numero_partos = $row->anx34_numero_partos;
    $anx34_numero_cesareas = $row->anx34_numero_cesareas;
    $anx34_numero_abortos = $row->anx34_numero_abortos;
    $anx34_anticonceptivo = $row->anx34_anticonceptivo;
    $anx34_anticonceptivo_tipo = $row->anx34_anticonceptivo_tipo;
    $anx34_hormonal = $row->anx34_hormonal;
    $anx34_hormonal_tiempo = $row->anx34_hormonal_tiempo;
    $anx34_menopausia = $row->anx34_menopausia;
    $anx34_fecha_ultima_mestruacion = $row->anx34_fecha_ultima_mestruacion;
    $anx34_biopsia_mama = $row->anx34_biopsia_mama;
    $anx34_biopsia_derecha = $row->anx34_biopsia_derecha;
    $anx34_biopsia_izquierda = $row->anx34_biopsia_izquierda;
    $anx34_realizo_mastec = $row->anx34_realizo_mastec;
    $anx34_realizo_mastec_der = $row->anx34_realizo_mastec_der;
    $anx34_realizo_mastec_izq = $row->anx34_realizo_mastec_izq;
    $anx34_realizo_mastec_fecha = $row->anx34_realizo_mastec_fecha;
    $anx34_axilas = $row->anx34_axilas;
    $anx34_axilas_dere = $row->anx34_axilas_dere;
    $anx34_axilas_izq = $row->anx34_axilas_izq;
    $anx34_axilas_ambas = $row->anx34_axilas_ambas;
    $anx34_axilas_fecha = $row->anx34_axilas_fecha;
    $anx34_implantes_mama = $row->anx34_implantes_mama;
    $anx34_implantes_mama_dere = $row->anx34_implantes_mama_dere;
    $anx34_implantes_mama_izq = $row->anx34_implantes_mama_izq;
    $anx34_implantes_mama_ambos = $row->anx34_implantes_mama_ambos;
    $anx34_implantes_mama_fecha = $row->anx34_implantes_mama_fecha;
    $anx34_reca_implante = $row->anx34_reca_implante;
    $anx34_reca_implante_fecha = $row->anx34_reca_implante_fecha;
    $anx34_reduc_mama = $row->anx34_reduc_mama;
    $anx34_reduc_mama_dere = $row->anx34_reduc_mama_dere;
    $anx34_reduc_mama_izq = $row->anx34_reduc_mama_izq;
    $anx34_reduc_mama_amb = $row->anx34_reduc_mama_amb;
    $anx34_reduc_mama_fecha = $row->anx34_reduc_mama_fecha;
    $anx34_readio_seno = $row->anx34_readio_seno;
    $anx34_masto_utra = $row->anx34_masto_utra;
    $anx34_masto_utra_fecha = $row->anx34_masto_utra_fecha;
    $anx34_dianostico = $row->anx34_dianostico;


    ob_start();
    $nombre_zip = explode(".","contrato_".date("dmy_His")."zip");
    $zipfile = new zipfile($nombre_zip[0].".zip",'./DeepDir.php', './extendedfpdf.php');

    $document = $PHPWord->loadTemplate("plantillas/ANEXO34.docx");


    $document->setValue('anx34_fecha',$anx34_fecha);
    $document->setValue('anx34_folio',$anx34_folio);
    $document->setValue('anx34_paciente',$anx34_paciente);
    $document->setValue('anx34_moti_estu',$anx34_moti_estu);
    $document->setValue('anx34_fecha_nac',$anx34_fecha_nac);
    $document->setValue('anx34_sexo',$anx34_sexo);
    $document->setValue('anx34_edo_civil',$anx34_edo_civil);
    $document->setValue('anx34_domicilio',$anx34_domicilio);
    $document->setValue('anx34_telefono',$anx34_telefono);
    $document->setValue('anx34_correo',$anx34_correo);
    $document->setValue('anx34_A_cancer_mama',$anx34_A_cancer_mama);
    $document->setValue('anx34_CA_aque_edad',$anx34_CA_aque_edad);
    $document->setValue('anx34_AF_cancel_mama',$anx34_AF_cancel_mama);
    $document->setValue('anx34_FCA_quien',$anx34_FCA_quien);
    $document->setValue('anx34_AP_mamas',$anx34_AP_mamas);
    $document->setValue('anx34_AP_mamas_tipo',$anx34_AP_mamas_tipo);
    $document->setValue('anx34_dolor',$anx34_dolor);
    $document->setValue('anx34_masa_palpable',$anx34_masa_palpable);
    $document->setValue('anx34_cambios_piel',$anx34_cambios_piel);
    $document->setValue('anx34_aumento_volumen',$anx34_aumento_volumen);
    $document->setValue('anx34_secrecion_pezon',$anx34_secrecion_pezon);
    $document->setValue('anx34_inversion_pezon',$anx34_inversion_pezon);
    $document->setValue('anx34_otros',$anx34_otros);
    $document->setValue('anx34_desde_cuando',$anx34_desde_cuando);
    $document->setValue('anx34_senal_mamas_lunar',$anx34_senal_mamas_lunar);
    $document->setValue('anx34_senal_mamas_cicatrices',$anx34_senal_mamas_cicatrices);
    $document->setValue('anx34_senal_mamas_verrugas',$anx34_senal_mamas_verrugas);
    $document->setValue('anx34_senal_mamas_otros',$anx34_senal_mamas_otros);
    $document->setValue('anx34_primer_menstru',$anx34_primer_menstru);
    $document->setValue('anx34_vida_sexual',$anx34_vida_sexual);
    $document->setValue('anx34_numero_embara',$anx34_numero_embara);
    $document->setValue('anx34_numero_partos',$anx34_numero_partos);
    $document->setValue('anx34_numero_cesareas',$anx34_numero_cesareas);
    $document->setValue('anx34_numero_abortos',$anx34_numero_abortos);
    $document->setValue('anx34_anticonceptivo',$anx34_anticonceptivo);
    $document->setValue('anx34_anticonceptivo_tipo',$anx34_anticonceptivo_tipo);
    $document->setValue('anx34_hormonal',$anx34_hormonal);
    $document->setValue('anx34_hormonal_tiempo',$anx34_hormonal_tiempo);
    $document->setValue('anx34_menopausia',$anx34_menopausia);
    $document->setValue('anx34_fecha_ultima_mestruacion',$anx34_fecha_ultima_mestruacion);
    $document->setValue('anx34_biopsia_mama',$anx34_biopsia_mama);
    $document->setValue('anx34_biopsia_derecha',$anx34_biopsia_derecha);
    $document->setValue('anx34_biopsia_izquierda',$anx34_biopsia_izquierda);
    $document->setValue('anx34_realizo_mastec',$anx34_realizo_mastec);
    $document->setValue('anx34_realizo_mastec_der',$anx34_realizo_mastec_der);
    $document->setValue('anx34_realizo_mastec_izq',$anx34_realizo_mastec_izq);
    $document->setValue('anx34_realizo_mastec_fecha',$anx34_realizo_mastec_fecha);
    $document->setValue('anx34_axilas',$anx34_axilas);
    $document->setValue('anx34_axilas_dere',$anx34_axilas_dere);
    $document->setValue('anx34_axilas_izq',$anx34_axilas_izq);
    $document->setValue('anx34_axilas_ambas',$anx34_axilas_ambas);
    $document->setValue('anx34_axilas_fecha',$anx34_axilas_fecha);
    $document->setValue('anx34_implantes_mama',$anx34_implantes_mama);
    $document->setValue('anx34_implantes_mama_dere',$anx34_implantes_mama_dere);
    $document->setValue('anx34_implantes_mama_izq',$anx34_implantes_mama_izq);
    $document->setValue('anx34_implantes_mama_ambos',$anx34_implantes_mama_ambos);
    $document->setValue('anx34_implantes_mama_fecha',$anx34_implantes_mama_fecha);
    $document->setValue('anx34_reca_implante',$anx34_reca_implante);
    $document->setValue('anx34_reca_implante_fecha',$anx34_reca_implante_fecha);
    $document->setValue('anx34_reduc_mama',$anx34_reduc_mama);
    $document->setValue('anx34_reduc_mama_dere',$anx34_reduc_mama_dere);
    $document->setValue('anx34_reduc_mama_izq',$anx34_reduc_mama_izq);
    $document->setValue('anx34_reduc_mama_amb',$anx34_reduc_mama_amb);
    $document->setValue('anx34_reduc_mama_fecha',$anx34_reduc_mama_fecha);
    $document->setValue('anx34_readio_seno',$anx34_readio_seno);
    $document->setValue('anx34_masto_utra',$anx34_masto_utra);
    $document->setValue('anx34_masto_utra_fecha',$anx34_masto_utra_fecha);
    $document->setValue('anx34_dianostico',$anx34_dianostico);



    $document->setValue('weekday', date('l'));
    $document->setValue('time', date('H:i'));

    $nombreRpt=substr($nombre,0,25)."-".date('dmYHis').'.docx';

    $document->save('Contratos/'.$nombreRpt);

    $zipfile->addFileAndRead('Contratos/'.$nombreRpt);


    unlink('Contratos/'.$nombreRpt);
    unlink($plantilla_ruta);
    echo $zipfile->file();

    $directorio = getcwd();


    CleanFiles($directorio);


}

if($dato=='Anexo35'){
    $url="http://localhost:8080/CiclicaV2/public/procesoconsultas/19";

    $PHPWord = new PHPWord();

    $conexion = connectDB();

    /* Datos de la plantilla */

    $consulta ="select anx35_nombre_paciente,anx35_mot_estudio,anx35_tipo_estudio,anx35_tecnica_estudio,anx35_hallazgo,anx35_conclucion,anx35_categoria,anx35_conducta,NOW() AS fecha  from anexo35 order by id desc limit 1;" ;
    echo $consulta;//exit();
    /*echo"<br>";
    echo $consulta2;*/
    $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

   if(!$row) {
       $row = mysqli_fetch_object($resultado);

       $anx35_nombre_paciente = $row->anx35_nombre_paciente;
       $anx35_mot_estudio = $row->anx35_mot_estudio;
       $anx35_tipo_estudio = $row->anx35_tipo_estudio;
       $anx35_tecnica_estudio = $row->anx35_tecnica_estudio;
       $anx35_hallazgo = $row->anx35_hallazgo;
       $anx35_conclucion = $row->anx35_conclucion;
       $anx35_categoria = $row->anx35_categoria;
       $anx35_conducta = $row->anx35_conducta;
       $fecha = $row->fecha;


       ob_start();
       $nombre_zip = explode(".", "contrato_" . date("dmy_His") . "zip");
       $zipfile = new zipfile($nombre_zip[0] . ".zip", './DeepDir.php', './extendedfpdf.php');

       $document = $PHPWord->loadTemplate("plantillas/ANEXO35.docx");


       $document->setValue('anx35_nombre_paciente', $anx35_nombre_paciente);
       $document->setValue('anx35_mot_estudio', $anx35_mot_estudio);
       $document->setValue('anx35_tipo_estudio', $anx35_tipo_estudio);
       $document->setValue('anx35_tecnica_estudio', $anx35_tecnica_estudio);
       $document->setValue('anx35_hallazgo', $anx35_hallazgo);
       $document->setValue('anx35_conclucion', $anx35_conclucion);
       $document->setValue('anx35_categoria', $anx35_categoria);
       $document->setValue('anx35_conducta', $anx35_conducta);
       $document->setValue('fecha', $fecha);


       $document->setValue('weekday', date('l'));
       $document->setValue('time', date('H:i'));

       $nombreRpt = substr($nombre, 0, 25) . "-" . date('dmYHis') . '.docx';

       $document->save('Contratos/' . $nombreRpt);

        $zipfile->addFileAndRead('Contratos/' . $nombreRpt);


       unlink('Contratos/' . $nombreRpt);
       unlink($plantilla_ruta);
       echo $zipfile->file();

      // $url="http://localhost:8080/CiclicaV2/public/procesoconsultas/19";



      /* $directorio = getcwd();


     CleanFiles($directorio);*/


   }

    //header("Location: http://localhost:8080/CiclicaV2/public/procesoconsultas/19");

}

if($dato=='Anexo37_1'){

    $dato;
    $dato1;


    $conexion = connectDB();
    $consulta = "SELECT CURDATE() AS fecha;";
    $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
    $row = mysqli_fetch_object($resultado);
    $fecha = cambiaFechas($row->fecha);

    $PHPWord = new PHPWord();
    /* Datos de la plantilla */

    ob_start();
    $nombre_zip = explode(".","contrato_".date("dmy_His")."zip");
    $zipfile = new zipfile($nombre_zip[0].".zip",'./DeepDir.php', './extendedfpdf.php');

    $document = $PHPWord->loadTemplate("plantillas/ANEXO 37_1.docx");

    $document->setValue('dato1',$dato1);
    $document->setValue('fecha',$fecha);



    $document->setValue('weekday', date('l'));
    $document->setValue('time', date('H:i'));

    $nombreRpt=substr($nombre,0,25)."-".date('dmYHis').'.docx';

    $document->save('Contratos/'.$nombreRpt);

    $zipfile->addFileAndRead('Contratos/'.$nombreRpt);


    unlink('Contratos/'.$nombreRpt);
    unlink($plantilla_ruta);
    echo $zipfile->file();

    $directorio = getcwd();


    CleanFiles($directorio);


}





if($dato=='Consulta'){


echo $dato;
echo "<br>";
//echo $dato2;exit();
      	      	

	/* # Instanciar el Archivo ZIP ##*/
	/* OBTENER LOS ID'S DE LOS EMPLEADOS */

$PHPWord = new PHPWord();

	$conexion = connectDB();
		
		/* Datos de la plantilla */
		

    /*$consulta = "SELECT  id AS id, CONCAT(paterno, ' ', materno, ' ', nombre) AS nombre,  CURDATE() AS fecha FROM  pacientes where id=".$dato ;
    $consulta2="SELECT id_plantilla AS plantilla, id_paciente AS paciente, descripcion FROM anexo WHERE id_paciente=".$dato;*/


 $consulta = "SELECT fechap,fechac,descripcionp,id_paciente,id_doctor,talla,peso,temp,ta,fc,fr,expo_me
              FROM receta_medica 
              order by id desc limit 1";
   /*echo $consulta;
   exit();*/
		/*echo"<br>";
		echo $consulta2;*/
	$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	

		
		$row = mysqli_fetch_object($resultado);
		


		$fechap = $row->fechap;
		$fechac = $row->fechac;
		$descripcionp = $row->descripcionp;
		$talla = $row->talla;
		$peso = $row->peso;
		$temp = $row->temp;
		$ta = $row->ta;
		$fr = $row->fr;
		$fc = $row->fc;
		$fc = $row->fc;
		$expo_me = $row->expo_me;
        $receta = $row->receta;


   

    ob_start();
	$nombre_zip = explode(".","contrato_".date("dmy_His")."zip");
	$zipfile = new zipfile($nombre_zip[0].".zip",'./DeepDir.php', './extendedfpdf.php');

$document = $PHPWord->loadTemplate("plantillas/receta.docx");

$document->setValue('fechap', $fechap);
$document->setValue('fechac',$fechac);
$document->setValue('descripcionp',$descripcionp);
$document->setValue('talla',$talla);
$document->setValue('peso',$peso);
$document->setValue('temp',$temp);
$document->setValue('ta',$ta);
$document->setValue('fr',$fr);
$document->setValue('fc',$fc);
$document->setValue('expo_me',$expo_me);
$document->setValue('receta',$receta);









$document->setValue('weekday', date('l'));
$document->setValue('time', date('H:i'));

$nombreRpt=substr($nombre,0,25)."-".date('dmYHis').'.docx';

$document->save('Contratos/'.$nombreRpt);

$zipfile->addFileAndRead('Contratos/'.$nombreRpt);


unlink('Contratos/'.$nombreRpt);
unlink($plantilla_ruta);
echo $zipfile->file();

$directorio = getcwd();


CleanFiles($directorio);


    header("Location: http://www.google.com/");

}
else
{
	echo"Datos del Anexo: ******* NO ENCONTRADOS ******";



}

var_dump(parse_url($url));

//header("Location: http://localhost:8080/CiclicaV2/public/procesoconsultas/19");


//

?>