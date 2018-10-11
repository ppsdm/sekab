<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

use yii\web\View;
use app\assets\AppAsset;
use yii\helpers\ArrayHelper;

$monthUS = array("","January","February","March","April","May","June","July","August","September","October","November","December");
$monthID = ["","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];

$date_test = $activityModel->tanggal_test;

$month = date("m",strtotime($date_test));
$dayTest = date("d", strtotime($date_test));
$monthTest = $monthID[(int)$month];
$yearTest = date("Y",strtotime($date_test));

$dateActivityAssesse = $dayTest." ".$monthTest." ".$yearTest;

/**
* Psikogram ( Potensi )
*/
$psikogramPengaturanDiri = $activityModel->psikogram_pengaturandiri;
$psikogramPemahamanSosial = $activityModel->psikogram_pemahamansosial;
$psikogramEmpati = $activityModel->psikogram_empati;
$psikogramKonsepDiri = $activityModel->psikogram_konsepdiri;
$psikogramMotivasi = $activityModel->psikogram_motivasi;
$psikogramKomunikasiEfektif = $activityModel->psikogram_komunikasiefektif;
$psikogramKetekunan = $activityModel->psikogram_ketekunan;
$psikogramKetelitian = $activityModel->psikogram_ketelitian;
$psikogramTempoKerja = $activityModel->psikogram_tempokerja;
$psikogramSistematikakerja = $activityModel->psikogram_sistematikakerja;
$psikogramKemampuanBelajar = $activityModel->psikogram_kemampuanbelajar;
$psikogramFleksibilitasBerpikir = $activityModel->psikogram_fleksibilitasberpikir;
$psikogramLogikaBerpikir = $activityModel->psikogram_logikaberpikir;
$psikogramBerpikirAnalitis = $activityModel->psikogram_berpikiranalitis;
$psikogramInteligensiUmum = $activityModel->psikogram_inteligensiumum;

$psikogramTotalSkor = $psikogramPengaturanDiri +
                      $psikogramPemahamanSosial +
                      $psikogramEmpati +
                      $psikogramKonsepDiri +
                      $psikogramMotivasi +
                      $psikogramKomunikasiEfektif +
                      $psikogramKetekunan +
                      $psikogramKetelitian +
                      $psikogramTempoKerja +
                      $psikogramSistematikakerja +
                      $psikogramKemampuanBelajar +
                      $psikogramFleksibilitasBerpikir +
                      $psikogramLogikaBerpikir +
                      $psikogramBerpikirAnalitis +
                      $psikogramInteligensiUmum;

$pembagiPsikogram = 105;
/**
* Diagram Kompetensi / LKJ
*/
$kompetensigramIntegritas = $lkjModel->kompetensigram_integritas;
$kompetensigramKerjasama = $lkjModel->kompetensigram_kerjasama;
$kompetensigramKomunikasi = $lkjModel->kompetensigram_komunikasi;
$kompetensigramOrientasihasil = $lkjModel->kompetensigram_orientasihasil;
$kompetensigramPelayananPublik = $lkjModel->kompetensigram_pelayananpublik;
$kompetensigramPengembanganDiri = $lkjModel->kompetensigram_pengembangandiri;
$kompetensigramPengelolaanPerubahan = $lkjModel->kompetensigram_pengelolaanperubahan;
$kompetensigramPengambilanKeputusan = $lkjModel->kompetensigram_pengambilankeputusan;
$kompetensigramPerekatBangsa = $lkjModel->kompetensigram_perekatbangsa;

$totalKompetensigram = $kompetensigramIntegritas +
                       $kompetensigramKerjasama +
                       $kompetensigramKomunikasi +
                       $kompetensigramOrientasihasil +
                       $kompetensigramPelayananPublik +
                       $kompetensigramPengembanganDiri +
                       $kompetensigramPengelolaanPerubahan +
                       $kompetensigramPengambilanKeputusan +
                       $kompetensigramPerekatBangsa;

$totalPembagiKompetensigram = 9 * $kompetensigramIntegritas;
/**
* LKI ( Kompetensi )
*/
$lkiIntegritas = $activityModel->integritas_lki;
$lkiKerjasama = $activityModel->kerjasama_lki;
$lkiKomunikasi = $activityModel->komunikasi_lki;
$lkiOrientasiHasil = $activityModel->orientasihasil_lki;
$lkiPelayananPublik = $activityModel->pelayananpublik_lki;
$lkiPengembanganDiri = $activityModel->pengembangandiri_lki;
$lkiPengelolaanPerubahan = $activityModel->pengelolaanperubahan_lki;
$lkiPengambilanKeputusan = $activityModel->pengambilankeputusan_lki;
$lkiPerekatBangsa = $activityModel->perekatbangsa_lki;

$totalLKI = $lkiIntegritas +
            $lkiKerjasama +
            $lkiKomunikasi +
            $lkiOrientasiHasil +
            $lkiPelayananPublik +
            $lkiPengembanganDiri +
            $lkiPengelolaanPerubahan +
            $lkiPengambilanKeputusan +
            $lkiPerekatBangsa;
/*
* Result Assessment
*/
$standarLKJ = $kompetensigramIntegritas;

$resultIntegritasLKI = $activityModel->integritas_lki;
$resultIntegritasUraian = $activityModel->integritas_uraian;
$resultIntegritasFit = ceil(( $resultIntegritasLKI / $standarLKJ ) * 100);

$resultKerjasamaLKI = $activityModel->kerjasama_lki; #2
$resultKerjasamaUraian = $activityModel->kerjasama_uraian;
$resultKerjasamaFit = ceil(( $resultKerjasamaLKI / $standarLKJ ) * 100);

$resultKomunikasiLKI = $activityModel->komunikasi_lki; #3
$resultKomunikasiUraian = $activityModel->komunikasi_uraian;
$resultKomunikasiFit = ceil(( $resultKomunikasiLKI / $standarLKJ ) * 100);

$resultOrientasiHasilLKI = $activityModel->orientasihasil_lki; #4
$resultOrientasiHasilUraian = $activityModel->orientasihasil_uraian;
$resultOrientasiHasilFit = ceil(( $resultOrientasiHasilLKI / $standarLKJ ) * 100);

$resultPelayananPublikLKI = $activityModel->pelayananpublik_lki; #5
$resultPelayananPublikUraian = $activityModel->pelayananpublik_uraian;
$resultPelayananPublikFit = ceil(( $resultPelayananPublikLKI / $standarLKJ ) * 100);

$resultPengembanganDiriLKI = $activityModel->pengembangandiri_lki; #6
$resultPengembanganDiriUraian = $activityModel->pengembangandiri_uraian;
$resultPengembanganDiriFit = ceil(( $resultPengembanganDiriLKI / $standarLKJ ) * 100);

$resultPengelolaanPerubahanLKI = $activityModel->pengelolaanperubahan_lki; #7
$resultPengelolaanPerubahanUraian = $activityModel->pengelolaanperubahan_uraian;
$resultPengelolaanPerubahanFit = ceil(( $resultPengelolaanPerubahanLKI / $standarLKJ ) * 100);

$resultPengambilanKeputusanLKI = $activityModel->pengambilankeputusan_lki; #8
$resultPengambilanKeputusanUraian = $activityModel->pengambilankeputusan_uraian;
$resultPengambilanKeputusanFit = ceil(( $resultPengambilanKeputusanLKI / $standarLKJ ) * 100);

$resultPerekatBangsaLKI = $activityModel->perekatbangsa_lki;
$resultPerekatBangsaUraian = $activityModel->perekatbangsa_uraian;
$resultPerekatBangsaFit = ceil(( $resultPerekatBangsaLKI / $standarLKJ ) * 100);

$footerReport='
<div class="footerReport">

  <table width=100%>
    <tr>
      <td style="text-align:left;border-right: solid  1px #000000; padding-left:10px; width: 80px; font-family:cambria;" valign="top">
        <div style="font-weight: bold; padding-bottom: -10px;" id="pageFooter" class="totalPage"></div>
      </td>
      <td style="padding-left:5px; text-align:left; font-size: 12px font-weight: 700; padding-bottom: 2px; ">
        <i>Laporan Uji Kompetensi</i>
      </td>
    </tr>
    <tr style="border-top: solid  3px #000; font-size: 12px">
      <td  style="text-align:left; border-right: solid  1px #000000; padding-left:10px;" valign="top">
      </td>
      <td style="padding-left:5px; text-align:left; padding-top: 2px; font-family:cambria; font-size: 12px ">
        <i>Sekretariat Kabinet</i> <br/>
        <i>Republik Indonesia, Tahun 2018</i></div>
      </td>
    </tr>
  </table>';

$pagebreak = $footerReport.'</b></p></article>
  </section>
    <section class="sheet padding-25mm" style="background-position: center; background-repeat: no-repeat;background-size: 210mm 296mm">
      <div class="headerReport" style="color:#969696; font-family:cambria; font-size: 16px; ">
        <h2>RAHASIA</h2>
      </div>
      <div class="left" style="color: #969696; margin-top: -20px; font-family:cambria; font-size: 12px ">
        <h6>
        <b>'.$assesseeModel->nama_lengkap.'</b><br/>
        '.$assesseeModel->jabatan_saat_ini.'</h6>
      </div>
      <article style="font-size: 18px; font-family: cambria;"><br/>';

  $pagebreakResume = $footerReport.'</b></p></article>
    </section>
      <section class="sheet padding-25mm" style="background-position: center; background-repeat: no-repeat;background-size: 210mm 296mm">
        <div class="headerReport" style="color:#969696; font-family:cambria;font-size: 16px; ">
          <h2>RAHASIA</h2>
        </div>
        <div class="left" style="color: #969696; margin-top: -20px; font-family:cambria; font-size: 12px">
          <h6>
          <b>'.$assesseeModel->nama_lengkap.'</b><br/>
          '.$assesseeModel->jabatan_saat_ini.'</h6>
        </div>
        <article style="font-size: 18px; font-family: cambria;"></br><ul>';

function upperCase($data){
  return strtoupper($data);
}

function SplitStringToParts($sourceInput, &$first, &$rest, $countWordsInFirst = 20)
{
    $arr_exploded = explode(" ", $sourceInput);

    $arr_part1 = array_slice($arr_exploded, 0, $countWordsInFirst);
    $arr_part2 = array_slice($arr_exploded, $countWordsInFirst);

    $first = implode(" ",$arr_part1);
    $rest = implode(" ",$arr_part2);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title> <?php echo $assesseeModel->nama_lengkap; ?> </title>
  <!-- Normalize or reset CSS with your favorite library -->
  <link rel="stylesheet" type="text/css" href="<?php echo Url::to('@web/css/normalize.css');?>">
  <!-- Load paper.css for happy printing  -->
  <link rel="stylesheet" type="text/css"href="<?php echo Url::to('@web/css/paper.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo Url::to('@web/css/psikogramTable.css');?>">
  <!-- Set page size here: A5, A4 or A3 -->
  <!-- Set also "landscape" if you need -->
  <script src="<?php echo Url::to('@web/js/d3.min.js');?>" charset="utf-8"></script>
</head>
<body class="A4">
  <!-- Each sheet element should have the class "sheet" -->
  <!-- "padding-**mm" is optional: you can set 10, 15, 20 or 25 -->
  <section class="sheet padding-0mm" style="font-family: cambria;">
    <div>
      <?php echo Html::img('@web/images/setkab.png', ['alt' => '--missing image--','style'=> 'max-width:200px; max-height:180px; position:absolute; right: 65px; top: 50px;' ]);?>
    </div>
    <div style="margin-top: 300px; margin-right: 65px; font-size: 26px; font-weight: 700; color: #2e2e2e; float: right; text-align: right; font-family: cambria;">
        LAPORAN UJI KOMPETENSI<br>
        DI LINGKUNGAN SEKRETARIAT KABINET<br>
        REPUBLIK INDONESIA
    </div>
    <div style= "width: 210mm; height: 296mm; margin-top:30px; color: #2e2e2e;" >
      <div style="font-size: 14pt; position:absolute; right: 65px; top: 460px;"><b>NAMA</b></div>
      <div style="font-size: 18pt; position:absolute; right: 65px; top: 490px;"><b><?php echo $assesseeModel->nama_lengkap; ?></b></div>
      <div style="width:60%; height:0%; border: 1px solid #2e2e2e; position:absolute; right: 65px; top: 522px;"></div>

      <div style="font-size: 14pt; position:absolute; right: 65px; top: 537px;"><b>NIP</b></div>
      <div style="font-size: 18pt;position:absolute; right: 65px; top: 563px;"><b><?php echo $assesseeModel->nip; ?></b></div>
      <div style="width:60%; height:0%; border: 1px solid #2e2e2e; position:absolute; right: 65px; top: 595px;"></div>

      <div style="font-size: 12pt; position:absolute; right: 65px; top: 665px;"><b>PENGAMBILAN DATA: </b></div>
      <div style="font-size: 18pt;position:absolute; right: 65px; top: 685px;"><b><?php echo $dateTest; ?></b></div>
      <div style="width:60%; height:0%; border: 1px solid #2e2e2e; position:absolute; right: 65px; top: 716px;"></div>
    </div>
    <div style= "width: 210mm; height: 296mm; margin-top:30px; color: #2e2e2e;" >
      <div style="font-size: 12pt; font-style: italic; position:absolute; right: 65px; top: 800px;"><b>Disampaikan Oleh:</b></div>
      <?php echo Html::img('@web/images/setkab/logo-ppsdm.png', ['alt' => '--missing image--','style'=> 'max-width:130px; max-height:130px; position:absolute; right: 65px; top: 830px;' ]);?>
      <div style="font-size: 12pt; position:absolute; right: 65px; top: 920px;"><b>PT. PRIMA PERSONA SUMBER DAYA MANDIRI</b></div>
      <div style="font-size: 14pt; position:absolute; right: 65px; top: 1025px;"><b>JAKARTA</b></div>
      <div style="font-size: 14pt; position:absolute; right: 65px; top: 1045px;"><b>2018</b></div>
    </div>
  </section>

  <section class="sheet padding-25mm" style= "font-family:cambria;');
background-position: center; background-repeat: no-repeat;background-size: 210mm 296mm">
    <div class="headerReport" style="color: #d5d5d5; font-size:16px;">
      <h2>RAHASIA</h2>
    </div>
    <article style="margin-top: -20px;">
      <div class='left' style="color: #d5d5d5; ">
        <h6>
        <b><?php echo $assesseeModel->nama_lengkap; ?></b><br/>
        <?php echo $assesseeModel->jabatan_saat_ini; ?></h6>
      </div>
      <div class='center' style="margin-top: 20px; font-size: 18px;">
        <h3>
        LAPORAN UJI KOMPETENSI<br/>
        DI LINGKUNGAN SEKRETARIAT KABINET<br/>
        REPUBLIK INDONESIA</h3>
      </div>
      <br/>
      <!-- <div style="position:absolute; right: 95px; top: 290px;">
        <?php  Html::img('@web/project-uploads/setkab/photos/'.$assesseeModel->id.'.JPG', ['alt' => '--missing image--','style'=> 'width:120px; height:140px' ]);?>
      </div> -->
      <table class='cover'>
      <tbody>
      <tr>
        <td style="width: 120px;">Nomor Test</td>
        <td>:</td>
        <td><b></b><?php echo upperCase($noTest); ?></td>
        <td colspan="2" rowspan="3" style="padding:2px 0px 0px 0px; text-align: right;"> <?php echo Html::img('@web/project-uploads/setkab/photos/'.$assesseeModel->id.'.JPG', ['alt' => '--missing image--','style'=> 'width:120px; height:150px' ]);?> </td>
      </tr>
      <tr><td>Nama Lengkap</td><td>:</td><td colspan="2"><b><?php echo upperCase($assesseeModel->nama_lengkap); ?></b></td></tr>
      <tr><td>Tempat / Tgl. Lahir</td><td>:</td><td colspan="2"><?php echo upperCase($assesseeModel->tempat_lahir. ", ". $assesseeModel->tanggal_lahir); ?></td></tr>
      <tr><td>Jabatan Saat ini</td><td>:</td><td colspan="3"><b><?php echo upperCase($assesseeModel->jabatan_saat_ini); ?></b></td></tr>
      <tr><td>Pendidikan Terakhir</td><td>:</td><td colspan="2"> <?php echo upperCase($assesseeModel->pendidikan_terakhir); ?></td><td></td></tr>
      <tr><td>Alamat</td><td>:</td><td colspan="3"><?php echo upperCase($assesseeModel->alamat); ?></td></tr>
      <tr><td>Tujuan Pemeriksaan</td><td>:</td><td colspan="2">PROFILE ASSESSMENT COMPETENCY</td><td></td></tr>
      <tr><td>Tempat / Tgl Test</td><td>:</td><td colspan="2"><?php echo upperCase($activityModel->tempat_test).", ".upperCase($dateTest); ?> </td><td></td></tr>
      </tbody>
      </table>
      <div class='center' style="font-size: 16px;">
        <br/>
        <br/>
            <?php echo $activityModel->tempat_test.", 5 November 2018"; ?><br/><b>PPSDM Consultant</b>
      </div>
      <br/>
      <table>
        <tr>
          <td>
            <div class='kananTandaTangan'>
              <div class='center'>
      	           Asessor<br/><b> <?php echo upperCase($asessorName); ?>
              </div>
            </div>
          </td>
          <td width='200px'>
          </td>
          <td>
            <div class='kiriTandaTangan'>
              <div class='center'>
      	         Penanggung jawab<br/>
      	         <strong>Drs. BUDIMAN SANUSI, M.Psi.
      	         <br/>
      	         PSIKOLOG</strong>
              </div>
            </div>
          </td>
        </tr>
      </table>
      <?php echo $footerReport;?>
    </article>
  </section>

  <section class="sheet padding-25mm">
      <div class="headerReport" style="color: #d5d5d5; font-family:cambria; font-size: 16px">
        <h2>RAHASIA</h2>
      </div>
      <article style="margin-top: -20px;">
        <div class='left' style="color: #d5d5d5; font-family:cambria; font-size: 12px;">
          <h6>
          <b><?php echo $assesseeModel->nama_lengkap; ?></b><br/>
          <?php echo $assesseeModel->jabatan_saat_ini; ?></h6>
        </div>
        <div class='center'>
          <h3 style="font-size: 20px;">DIAGRAM KOMPETENSI</H3>
          <div class="radarChart" style="background-image: url('<?php echo Url::base(); ?>/images/setkab/LINGKARAN.png'); background-position: center; background-repeat: no-repeat;background-size: 320px 340px; height: 340px;"></div>
          <script src="<?=Url::to('@web/js/radarChart.js');?>"></script>
             <script>

               /* Radar chart design created by Nadieh Bremer - VisualCinnamon.com */

               //////////////////////////////////////////////////////////////
               //////////////////////// Set-Up //////////////////////////////
               //////////////////////////////////////////////////////////////

               var margin = {top: 40, right: 52, bottom: 35, left: 52},
                   width = Math.min(340, window.innerWidth - 10) - margin.left - margin.right,
                   height = Math.min(width, window.innerHeight - margin.top - margin.bottom - 20);

               //////////////////////////////////////////////////////////////
               ////////////////////////// Data //////////////////////////////
               //////////////////////////////////////////////////////////////
               var data = [
                 [
                   <?php
                     echo "{axis:'',value:'".trim($kompetensigramIntegritas)."'},";
                     echo "{axis:'',value:'".trim($kompetensigramKerjasama)."'},";
                     echo "{axis:'',value:'".trim($kompetensigramKomunikasi)."'},";
                     echo "{axis:'',value:'".trim($kompetensigramOrientasihasil)."'},";
                     echo "{axis:'',value:'".trim($kompetensigramPelayananPublik)."'},";
                     echo "{axis:'',value:'".trim($kompetensigramPengembanganDiri)."'},";
                     echo "{axis:'',value:'".trim($kompetensigramPengelolaanPerubahan)."'},";
                     echo "{axis:'',value:'".trim($kompetensigramPengambilanKeputusan)."'},";
                     echo "{axis:'',value:'".trim($kompetensigramPerekatBangsa)."'},";
                   ?>
                 ],[
                   <?php
                     echo "{axis:'',value:'".trim($lkiIntegritas)."'},";
                     echo "{axis:'',value:'".trim($lkiKerjasama)."'},";
                     echo "{axis:'',value:'".trim($lkiKomunikasi)."'},";
                     echo "{axis:'',value:'".trim($lkiOrientasiHasil)."'},";
                     echo "{axis:'',value:'".trim($lkiPelayananPublik)."'},";
                     echo "{axis:'',value:'".trim($lkiPengembanganDiri)."'},";
                     echo "{axis:'',value:'".trim($lkiPengelolaanPerubahan)."'},";
                     echo "{axis:'',value:'".trim($lkiPengambilanKeputusan)."'},";
                     echo "{axis:'',value:'".trim($lkiPerekatBangsa)."'},";
                   ?>
                 ]
                 ];

               //////////////////////////////////////////////////////////////
               //////////////////// Draw the Chart //////////////////////////
               //////////////////////////////////////////////////////////////

               var color = d3.scale.ordinal()
               .range(['#AEDFFB','#35274E']);

               var radarChartOptions = {
                   w: width,
                   h: height,
                   margin: margin,
                   maxValue: 6,
                   levels: 5,
                   roundStrokes: false,
                   color: color,
                   opacityArea: 0.5,
                   opacityCircles: 0,
                   dotRadius: 3,
                   strokeWidth: 2,
                   wrapWidth: 10,
                   labelFactor: 10,
               };
               //Call function to draw the Radar chart
               RadarChart(".radarChart", data, radarChartOptions);
             </script>
        </div>
      </br>
      <?php
        $sumC = $totalKompetensigram;
        $PArk = $dataSumbuY;
      ?>
      <table class="table-kompetensi" border="1" cellpadding="0" cellspacing="0" style="border-collapse:collapse;width:100%;" >
          <thead>
              <tr style="height: 20px; border-top: 1px solid #ffffff; border-left: 1px solid #ffffff; border-right: 1px solid #ffffff;">
                  <th style="padding: 2px; width: 20px;"></th>
                  <th style="padding: 2px; width: 20px;"></th>
                  <th style="padding: 2px; width: 20px;"></th>
                  <th style="padding: 2px; width: 20px;"></th>
                  <th style="padding: 2px; width: 20px;"></th>
                  <th style="padding: 2px; width: 20px;"></th>
                  <th style="padding: 2px; width: 20px;"></th>
                  <th style="padding: 2px; width: 20px;"></th>
                  <th style="padding: 2px; width: 20px;"></th>
                  <th style="padding: 2px; width: 20px;"></th>
                  <th style="padding: 2px; width: 20px;"></th>
                  <th style="padding: 2px; width: 20px;"></th>
                  <th style="padding: 2px; width: 20px;"></th>
                  <th style="padding: 2px; width: 20px;"></th>
                  <th style="padding: 2px; width: 20px;"></th>
                  <th style="padding: 2px; width: 20px;"></th>
                  <th style="padding: 2px; width: 20px;"></th>
                  <th style="padding: 2px; width: 20px;"></th>
                  <th style="padding: 2px; width: 20px;"></th>
                  <th style="padding: 2px; width: 20px;"></th>
                  <th style="padding: 2px; width: 20px;"></th>
                  <th style="padding: 2px; width: 20px;"></th>
                  <th style="padding: 2px; width: 20px;"></th>
                  <th style="padding: 2px; width: 20px;"></th>
                  <th style="padding: 2px; width: 20px;"></th>
                  <th style="padding: 2px; width: 20px;"></th>
                  <th style="padding: 2px; width: 20px;"></th>
                  <th style="padding: 2px; width: 20px;"></th>

              </tr>
              <tr>
                  <td style="width: 20px; background-color: #fff; border-top: 1px solid #ffffff; border-bottom: 1px solid #ffffff; border-left: 1px solid #ffffff;"></td>
                  <th bgcolor="yellow" colspan="17" style="padding: 2px; border: 2px solid #000;">Kompetensi</th>
                  <th bgcolor="yellow" class="td-kompetensi" colspan="3">LKJ</th>
                  <th bgcolor="yellow" class="td-kompetensi" colspan="2">LKI</th>
                  <th bgcolor="yellow" class="td-kompetensi" colspan="2">GAP</th>
                  <th bgcolor="yellow" class="td-kompetensi" colspan="2">PCT</th>
                  <td style="width: 20px; background-color: #fff; border-top: 1px solid #ffffff; border-bottom: 1px solid #ffffff; border-right: 1px solid #ffffff;"></td>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <td style="background-color: #fff; border-top: 1px solid #ffffff; border-bottom: 1px solid #ffffff; border-left: 1px solid #ffffff;"></td>
                  <td rowspan="12" colspan="2" style="background-color: #acb9ca; padding:5px; border: 2px solid #000;"><div style="writing-mode: tb-rl; transform: rotate(-180deg); font-weight: 700">KOMPETENSI MANAGERIAL</div></td>
                  <td style="padding: 2px;border: 2px solid #000;height:15px;" colspan="12";>Integritas</td>
                  <td style="padding: 2px; border: 2px solid #000;" colspan="3">M-01</td>
                  <td class="td-kompetensi" colspan="3"><?php echo $lkjModel->kompetensigram_integritas; ?></td>
                  <td class="td-kompetensi" colspan="2"><?php echo $activityModel->integritas_lki; ?></td>
                  <td class="td-kompetensi" colspan="2"><?php echo $lkjModel->kompetensigram_integritas - $activityModel->integritas_lki < 0 ? 0 : $lkjModel->kompetensigram_integritas - $activityModel->integritas_lki; ?></td>
                  <td class="td-kompetensi" colspan="2"><?php echo $lkjModel->kompetensigram_integritas == 0 ? "" : round($activityModel->integritas_lki / $lkjModel->kompetensigram_integritas, 2) * 100; ?>%</td>
                  <td style="width: 20px; background-color: #fff; border-top: 1px solid #ffffff; border-bottom: 1px solid #ffffff; border-right: 1px solid #ffffff;"></td>
              </tr>
              <tr>
                  <td style="background-color: #fff; border-top: 1px solid #ffffff; border-bottom: 1px solid #ffffff; border-left: 1px solid #ffffff;"></td>
                  <td style="padding: 2px; border: 2px solid #000;height:15px;" colspan="12";>Kerjasama</td>
                  <td style="padding: 2px; border: 2px solid #000;" colspan="3">M-02</td>
                  <td class="td-kompetensi" colspan="3"><?php echo $lkjModel->kompetensigram_kerjasama; ?></td>
                  <td class="td-kompetensi" colspan="2"><?php echo $activityModel->kerjasama_lki; ?></td>
                  <td class="td-kompetensi" colspan="2"><?php echo $lkjModel->kompetensigram_kerjasama - $activityModel->kerjasama_lki < 0 ? 0 : $lkjModel->kompetensigram_kerjasama - $activityModel->kerjasama_lki; ?></td>
                  <td class="td-kompetensi" colspan="2"><?php echo $lkjModel->kompetensigram_kerjasama == 0 ? "" : round($activityModel->kerjasama_lki / $lkjModel->kompetensigram_kerjasama, 2) * 100; ?>%</td>
                  <td style="width: 20px; background-color: #fff; border-top: 1px solid #ffffff; border-bottom: 1px solid #ffffff; border-right: 1px solid #ffffff;"></td>
              </tr>
              <tr>
                  <td style="background-color: #fff; border-top: 1px solid #ffffff; border-bottom: 1px solid #ffffff; border-left: 1px solid #ffffff;"></td>
                  <td style="padding: 2px; border: 2px solid #000;height:15px;" colspan="12";>Komunikasi</td>
                  <td style="padding: 2px; border: 2px solid #000;" colspan="3">M-03</td>
                  <td class="td-kompetensi" colspan="3"><?php echo $lkjModel->kompetensigram_komunikasi; ?></td>
                  <td class="td-kompetensi" colspan="2"><?php echo $activityModel->komunikasi_lki; ?></td>
                  <td class="td-kompetensi" colspan="2"><?php echo $lkjModel->kompetensigram_komunikasi - $activityModel->komunikasi_lki < 0 ? 0 : $lkjModel->kompetensigram_komunikasi - $activityModel->komunikasi_lki; ?></td>
                  <td class="td-kompetensi" colspan="2"><?php echo $lkjModel->kompetensigram_komunikasi == 0 ? "" : round($activityModel->komunikasi_lki / $lkjModel->kompetensigram_komunikasi, 2) * 100; ?>%</td>
                  <td style="width: 20px; background-color: #fff; border-top: 1px solid #ffffff; border-bottom: 1px solid #ffffff; border-right: 1px solid #ffffff;"></td>
              </tr>
              <tr>
                  <td style="background-color: #fff; border-top: 1px solid #ffffff; border-bottom: 1px solid #ffffff; border-left: 1px solid #ffffff;"></td>
                  <td style="padding: 2px; border: 2px solid #000;height:15px;" colspan="12";>Orientasi pada Hasil</td>
                  <td style="padding: 2px; border: 2px solid #000;" colspan="3">M-04</td>
                  <td class="td-kompetensi" colspan="3"><?php echo $lkjModel->kompetensigram_orientasihasil; ?></td>
                  <td class="td-kompetensi" colspan="2"><?php echo $lkjModel->kompetensigram_orientasihasil - $activityModel->orientasihasil_lki < 0 ? 0 : $lkjModel->kompetensigram_orientasihasil - $activityModel->orientasihasil_lki; ?></td>
                  <td class="td-kompetensi" colspan="2"><?php echo $activityModel->orientasihasil_lki; ?></td>
                  <td class="td-kompetensi" colspan="2"><?php echo $lkjModel->kompetensigram_orientasihasil == 0 ? "" : round($activityModel->orientasihasil_lki / $lkjModel->kompetensigram_orientasihasil, 2) * 100; ?>%</td>
                  <td style="width: 20px; background-color: #fff; border-top: 1px solid #ffffff; border-bottom: 1px solid #ffffff; border-right: 1px solid #ffffff;"></td>
              </tr>
              <tr>
                  <td style="background-color: #fff; border-top: 1px solid #ffffff; border-bottom: 1px solid #ffffff; border-left: 1px solid #ffffff;"></td>
                  <td style="padding: 2px;border: 2px solid #000;"  colspan="12">Pelayanan Publik</td>
                  <td style="padding: 2px; border: 2px solid #000;" colspan="3">M-05</td>
                  <td class="td-kompetensi" colspan="3"><?php echo $lkjModel->kompetensigram_pelayananpublik; ?></td>
                  <td class="td-kompetensi" colspan="2"><?php echo $activityModel->pelayananpublik_lki; ?></td>
                  <td class="td-kompetensi" colspan="2"><?php echo $lkjModel->kompetensigram_pelayananpublik - $activityModel->pelayananpublik_lki < 0 ? 0 : $lkjModel->kompetensigram_pelayananpublik - $activityModel->pelayananpublik_lki; ?></td>
                  <td class="td-kompetensi" colspan="2"><?php echo $lkjModel->kompetensigram_pelayananpublik == 0 ? "" : round($activityModel->pelayananpublik_lki / $lkjModel->kompetensigram_pelayananpublik, 2) * 100; ?>%</td>
                  <td style="width: 20px; background-color: #fff; border-top: 1px solid #ffffff; border-bottom: 1px solid #ffffff; border-right: 1px solid #ffffff;"></td>
              </tr>
              <tr>
                  <td style="background-color: #fff; border-top: 1px solid #ffffff; border-bottom: 1px solid #ffffff; border-left: 1px solid #ffffff;"></td>
                  <td style="padding: 2px; border: 2px solid #000;height:15px;" colspan="12"; rowspan="2">Pengembangan Diri & Orang Lain</td>
                  <td style="padding: 2px; border: 2px solid #000;" colspan="3" rowspan="2">M-06</td>
                  <td class="td-kompetensi" colspan="3" rowspan="2"><?php echo $lkjModel->kompetensigram_pengembangandiri; ?></td>
                  <td class="td-kompetensi" colspan="2" rowspan="2"><?php echo $activityModel->pengembangandiri_lki; ?></td>
                  <td class="td-kompetensi" colspan="2" rowspan="2"><?php echo $lkjModel->kompetensigram_pengembangandiri - $activityModel->pengembangandiri_lki < 0 ? 0 : $lkjModel->kompetensigram_pengembangandiri - $activityModel->pengembangandiri_lki; ?></td>
                  <td class="td-kompetensi" colspan="2" rowspan="2"><?php echo $lkjModel->kompetensigram_pengembangandiri == 0 ? "" : round($activityModel->pengembangandiri_lki / $lkjModel->kompetensigram_pengembangandiri, 2) * 100; ?>%</td>
                  <td style="width: 20px; background-color: #fff; border-top: 1px solid #ffffff; border-bottom: 1px solid #ffffff; border-right: 1px solid #ffffff;"></td>
              </tr>
              <tr>
                  <td style="height: 20px; background-color: #fff; border-top: 1px solid #ffffff; border-bottom: 1px solid #ffffff; border-left: 1px solid #ffffff;"></td>
                  <td style="width: 20px; background-color: #fff; border-top: 1px solid #ffffff; border-bottom: 1px solid #ffffff; border-right: 1px solid #ffffff;"></td>
              </tr>
              <tr>
                  <td style="background-color: #fff; border-top: 1px solid #ffffff; border-bottom: 1px solid #ffffff; border-left: 1px solid #ffffff;"></td>
                  <td style="padding: 2px; border: 2px solid #000;height:15px;" colspan="12"; rowspan="2">Mengelola Perubahan</td>
                  <td style="padding: 2px; border: 2px solid #000;" colspan="3" rowspan="2">M-07</td>
                  <td class="td-kompetensi" colspan="3" rowspan="2"><?php echo $lkjModel->kompetensigram_pengelolaanperubahan; ?></td>
                  <td class="td-kompetensi" colspan="2" rowspan="2"><?php echo $activityModel->pengelolaanperubahan_lki; ?></td>
                  <td class="td-kompetensi" colspan="2" rowspan="2"><?php echo $lkjModel->kompetensigram_pengelolaanperubahan - $activityModel->pengelolaanperubahan_lki < 0 ? 0 : $lkjModel->kompetensigram_pengelolaanperubahan - $activityModel->pengelolaanperubahan_lki; ?></td>
                  <td class="td-kompetensi" colspan="2" rowspan="2"><?php echo $lkjModel->kompetensigram_pengelolaanperubahan == 0 ? "" : round($activityModel->pengelolaanperubahan_lki / $lkjModel->kompetensigram_pengelolaanperubahan, 2) * 100; ?>%</td>
                  <td style="width: 20px; background-color: #fff; border-top: 1px solid #ffffff; border-bottom: 1px solid #ffffff; border-right: 1px solid #ffffff;"></td>
              </tr>
              <tr>
                  <td style="height: 20px; background-color: #fff; border-top: 1px solid #ffffff; border-bottom: 1px solid #ffffff; border-left: 1px solid #ffffff;"></td>
                  <td style="width: 20px; background-color: #fff; border-top: 1px solid #ffffff; border-bottom: 1px solid #ffffff; border-right: 1px solid #ffffff;"></td>
              </tr>
              <tr>
                  <td style="background-color: #fff; border-top: 1px solid #ffffff; border-bottom: 1px solid #ffffff; border-left: 1px solid #ffffff;"></td>
                  <td style="padding: 2px;border: 2px solid #000;height:15px;" colspan="12"; rowspan="2">Pengambilan Keputusan</td>
                  <td style="padding: 2px; border: 2px solid #000;" colspan="3" rowspan="2">M-08</td>
                  <td class="td-kompetensi" colspan="3" rowspan="2"><?php echo $lkjModel->kompetensigram_pengambilankeputusan; ?></td>
                  <td class="td-kompetensi" colspan="2" rowspan="2"><?php echo $activityModel->pengambilankeputusan_lki; ?></td>
                  <td class="td-kompetensi" colspan="2" rowspan="2"><?php echo $lkjModel->kompetensigram_pengambilankeputusan - $activityModel->pengambilankeputusan_lki < 0 ? 0 : $lkjModel->kompetensigram_pengambilankeputusan - $activityModel->pengambilankeputusan_lki; ?></td>
                  <td class="td-kompetensi" colspan="2" rowspan="2"><?php echo $lkjModel->kompetensigram_pengambilankeputusan == 0 ? "" : round($activityModel->pengambilankeputusan_lki / $lkjModel->kompetensigram_pengambilankeputusan, 2) * 100; ?>%</td>
                  <td style="width: 20px; background-color: #fff; border-top: 1px solid #ffffff; border-bottom: 1px solid #ffffff; border-right: 1px solid #ffffff;"></td>
              </tr>
              <tr>
                  <td style="height: 20px; background-color: #fff; border-top: 1px solid #ffffff; border-bottom: 1px solid #ffffff; border-left: 1px solid #ffffff;"></td>
                  <td style="width: 20px; background-color: #fff; border-top: 1px solid #ffffff; border-bottom: 1px solid #ffffff; border-right: 1px solid #ffffff;"></td>
              </tr>
              <tr style="background-color: #acb9ca; font-weight: bold; padding: 5px;">
                  <td style="background-color: #fff; border-top: 1px solid #ffffff; border-bottom: 1px solid #ffffff; border-left: 1px solid #ffffff;"></td>
                  <td colspan="15" style="padding: 2px; border-left: 1px solid #acb9ca;"></td>
                  <td class="td-kompetensi" colspan="3"><?php echo ($sumC - $lkjModel->kompetensigram_perekatbangsa); ?></td>
                  <td class="td-kompetensi" colspan="2"><?php echo ($PArk - $activityModel->perekatbangsa_lki); ?></td>
                  <td class="td-kompetensi" colspan="2"><?php echo ($sumC - $lkjModel->kompetensigram_perekatbangsa) - ($PArk - $activityModel->perekatbangsa_lki) < 0 ? 0 : ($sumC - $lkjModel->kompetensigram_perekatbangsa) - ($PArk - $activityModel->perekatbangsa_lki); ?></td>
                  <td class="td-kompetensi" colspan="2"><?php echo ($sumC - $lkjModel->kompetensigram_perekatbangsa) == 0 ? "" : round(($PArk - $activityModel->perekatbangsa_lki) / ($sumC - $lkjModel->kompetensigram_perekatbangsa), 2) * 100; ?>%</td>
                  <td style="width: 20px; background-color: #fff; border-top: 1px solid #ffffff; border-bottom: 1px solid #ffffff; border-right: 1px solid #ffffff;"></td>
              </tr>
              <tr>
                  <td style="background-color: #fff; border-top: 1px solid #ffffff; border-bottom: 1px solid #ffffff; border-left: 1px solid #ffffff; border-right: 2px solid #000;"></td>
                  <td rowspan="2" colspan="2" style="background-color: #ff66cc; padding: 5px; border: 2px 2px 2px 2px solid #000;"><div style="writing-mode: tb-rl; transform: rotate(-180deg); font-weight: 700">SOS KUL</div></td>
                  <td style="padding: 2px; border: 2px solid #000;height:15px;" colspan="12";>Perekat Bangsa</td>
                  <td style="padding: 2px; border: 2px solid #000;" colspan="3">SK.01</td>
                  <td class="td-kompetensi" colspan="3"><?php echo $lkjModel->kompetensigram_perekatbangsa; ?></td>
                  <td class="td-kompetensi" colspan="2"><?php echo $activityModel->perekatbangsa_lki; ?></td>
                  <td class="td-kompetensi" colspan="2"><?php echo $lkjModel->kompetensigram_perekatbangsa - $activityModel->perekatbangsa_lki < 0 ? 0 : $lkjModel->kompetensigram_perekatbangsa - $activityModel->perekatbangsa_lki; ?></td>
                  <td class="td-kompetensi" colspan="2"><?php echo $lkjModel->kompetensigram_perekatbangsa == 0 ? "" : round($activityModel->perekatbangsa_lki / $lkjModel->kompetensigram_perekatbangsa, 2) * 100; ?>%</td>
                  <td style="width: 20px; background-color: #fff; border-top: 1px solid #ffffff; border-bottom: 1px solid #ffffff; border-right: 1px solid #ffffff;"></td>
              </tr>
              <tr style="background-color: #ff66cc; font-weight: bold;">
                  <td style="background-color: #fff; border-top: 1px solid #ffffff; border-bottom: 1px solid #ffffff; border-left: 1px solid #ffffff;"></td>
                  <td colspan="15" style="padding: 2px; border: 2px solid #000;"></td>
                  <td class="td-kompetensi" colspan="3"><?php echo $lkjModel->kompetensigram_perekatbangsa; ?></td>
                  <td class="td-kompetensi" colspan="2"><?php echo $activityModel->perekatbangsa_lki; ?></td>
                  <td class="td-kompetensi" colspan="2"><?php echo $lkjModel->kompetensigram_perekatbangsa - $activityModel->perekatbangsa_lki < 0 ? 0 : $lkjModel->kompetensigram_perekatbangsa - $activityModel->perekatbangsa_lki; ?></td>
                  <td class="td-kompetensi" colspan="2"><?php echo $lkjModel->kompetensigram_perekatbangsa == 0 ? "" : round($activityModel->perekatbangsa_lki / $lkjModel->kompetensigram_perekatbangsa, 2) * 100; ?>%</td>
                  <td style="width: 20px; background-color: #fff; border-top: 1px solid #ffffff; border-bottom: 1px solid #ffffff; border-right: 1px solid #ffffff;"></td>
              </tr>
              <tr style="background-color: #bfbfbf;">
                  <td style="background-color: #fff; border-top: 1px solid #ffffff; border-bottom: 1px solid #ffffff; border-left: 1px solid #ffffff;"></td>
                  <td colspan="17" class="text-right" style="padding: 2px; border: 2px solid #000;">TOTAL</td>
                  <td class="td-kompetensi" colspan="3"><?php echo $sumC; ?></td>
                  <td class="td-kompetensi" colspan="2"><?php echo $PArk; ?></td>
                  <td class="td-kompetensi" colspan="2"><?php echo $sumC - $PArk < 0 ? 0 : $sumC - $PArk; ?></td>
                  <td class="td-kompetensi" colspan="2"><?php echo $sumC == 0 ? "" : round($PArk / $sumC, 2) * 100; ?>%</td>
                  <td style="width: 20px; background-color: #fff; border-top: 1px solid #ffffff; border-bottom: 1px solid #ffffff; border-right: 1px solid #ffffff;"></td>
              </tr>
              <tr style="height: 20px; border-bottom: 2px solid #000; border-left: 1px solid #ffffff; border-right: 1px solid #ffffff;">
                <th style="padding: 2px; width: 20px;"></th>
                <th style="padding: 2px; width: 20px;"></th>
                <th style="padding: 2px; width: 20px;"></th>
                <th style="padding: 2px; width: 20px;"></th>
                <th style="padding: 2px; width: 20px;"></th>
                <th style="padding: 2px; width: 20px;"></th>
                <th style="padding: 2px; width: 20px;"></th>
                <th style="padding: 2px; width: 20px;"></th>
                <th style="padding: 2px; width: 20px;"></th>
                <th style="padding: 2px; width: 20px;"></th>
                <th style="padding: 2px; width: 20px;"></th>
                <th style="padding: 2px; width: 20px;"></th>
                <th style="padding: 2px; width: 20px;"></th>
                <th style="padding: 2px; width: 20px;"></th>
                <th style="padding: 2px; width: 20px;"></th>
                <th style="padding: 2px; width: 20px;"></th>
                <th style="padding: 2px; width: 20px;"></th>
                <th style="padding: 2px; width: 20px;"></th>
                <th style="padding: 2px; width: 20px;"></th>
                <th style="padding: 2px; width: 20px;"></th>
                <th style="padding: 2px; width: 20px;"></th>
                <th style="padding: 2px; width: 20px;"></th>
                <th style="padding: 2px; width: 20px;"></th>
                <th style="padding: 2px; width: 20px;"></th>
                <th style="padding: 2px; width: 20px;"></th>
                <th style="padding: 2px; width: 20px;"></th>
                <th style="padding: 2px; width: 20px;"></th>
                <th style="padding: 2px; width: 20px;"></th>
              </tr>
              <tr style="height: 40px;">
                <th style="border: 2px solid #000; padding: 2px; text-align: center;" colspan="30"> KOMPETENSI / SUMBU Y</th>
              </tr>
              <tr bgcolor="#B8CCE4" style=" height: 20px; border-bottom: 1px solid #ffffff; border-left: 1px solid #ffffff; border-right: 1px solid #ffffff;">
                <td colspan="8" class="td-sumbu-y">KUALIFIKASI</td>
                <td colspan="14" class="td-sumbu-y">REKOMENDASI</td>
                <td colspan="8" class="td-sumbu-y">SKALA</td>
              </tr>
              <?php
                $hasilSumbuY = round($PArk / $sumC, 2) * 100;
                if ($hasilSumbuY >=100) {
                    $backgroundK1 = '#C4D79B';
                    $backgroundK2 = '#FFFFFF';
                    $backgroundK3 = '#FFFFFF';
                }
                elseif ($hasilSumbuY >= 80 && $hasilSumbuY <= 99) {
                  $backgroundK1 = '#FFFFFF';
                  $backgroundK2 = '#C4D79B';
                  $backgroundK3 = '#FFFFFF';
                }
                else {
                  $backgroundK1 = '#FFFFFF';
                  $backgroundK2 = '#FFFFFF';
                  $backgroundK3 = '#C4D79B';
                }
              ?>
              <tr bgcolor="<?php echo $backgroundK1; ?>" style=" height: 20px; border-bottom: 1px solid #ffffff; border-left: 1px solid #ffffff; border-right: 1px solid #ffffff;">
                <td colspan="3" class="td-sumbu-y">K-1</td>
                <td colspan="5" class="td-sumbu-y">Baik</td>
                <td colspan="14" class="td-sumbu-y">Strong</td>
                <td colspan="2" class="td-sumbu-y">100%</td>
                <td colspan="1" class="td-sumbu-y"></td>
                <td colspan="5" class="td-sumbu-y">Ke Atas</td>
              </tr>
              <tr bgcolor="<?php echo $backgroundK2; ?>" style=" height: 20px; border-bottom: 1px solid #ffffff; border-left: 1px solid #ffffff; border-right: 1px solid #ffffff;">
                <td colspan="3" class="td-sumbu-y">K-2</td>
                <td colspan="5" class="td-sumbu-y">Cukup</td>
                <td colspan="14" class="td-sumbu-y">Effective</td>
                <td colspan="2" class="td-sumbu-y">80%</td>
                <td colspan="1" class="td-sumbu-y"> - </td>
                <td colspan="5" class="td-sumbu-y">99%</td>
              </tr>
              <tr bgcolor="<?php echo $backgroundK3; ?>" style=" height: 20px; border-bottom: 1px solid #ffffff; border-left: 1px solid #ffffff; border-right: 1px solid #ffffff;">
                <td colspan="3" class="td-sumbu-y">K-3</td>
                <td colspan="5" class="td-sumbu-y">Kurang</td>
                <td colspan="14" class="td-sumbu-y">Development needed</td>
                <td colspan="2" class="td-sumbu-y">79%</td>
                <td colspan="1" class="td-sumbu-y"> - </td>
                <td colspan="5" class="td-sumbu-y">Ke Bawah</td>
              </tr>
          </tbody>
      </table>
    </div>
    <?=$footerReport;?>
    </article>
  </section>

  <section class="sheet padding-25mm">
    <div class="headerReport" style="color: #d5d5d5; font-family:cambria; font-size: 16px">
      <h2>RAHASIA</h2>
    </div>
    <article>
      <div class='left' style="color: #d5d5d5; font-family:cambria; font-size: 12px">
        <h6>
        <b><?php echo $assesseeModel->nama_lengkap; ?></b><br/>
        <?php echo $assesseeModel->jabatan_saat_ini; ?></h6>
      </div>
      <div class='center'>
        <h3 style="font-size: 20px;">PSIKOGRAM POTENSI</H3>
      </div>
    <div class='center'>
      <table border="3" cellpadding="0" cellspacing="0" style="border-collapse:collapse;width:100%">
         <colgroup>
           <col span="1"><col span="3"  width="64">
           <col  width="30">
           <col span="5"  width="64">
           <col  width="22">
           <col  width="22">
           <col  width="22">
           <col  width="22">
           <col  width="22">
           <col width="22">
           <col  width="22">
           <col  width="22">
         </colgroup>
         <tr bgcolor="yellow">
           <td class="psikogramtable1" colspan="5" rowspan="2"  >
           ASPEK PSIKOLOGIS</td>
           <td class="psikogramtable2" colspan="6" rowspan="2" >
           KETERANGAN</td>
           <td class="psikogramtable3" colspan="7" >P E  N I L A I A N</td>
         </tr>
         <tr bgcolor="yellow">
           <td class="psikogramtable4" >1</td>
           <td class="psikogramtable4" >2</td>
           <td class="psikogramtable4" >3</td>
           <td class="psikogramtable4" >4</td>
           <td class="psikogramtable4" >5</td>
           <td class="psikogramtable4" >6</td>
           <td class="psikogramtable5" >7</td>
         </tr>
         <tr bgcolor="#B8CCE4">
           <td class="psikogramtable6"  style="height: 20pt;; width: 25px;">
           A</td>
           <td class="psikogramtable7" colspan="17">ASPEK INTELEKTUAL</td>
         </tr>
         <tr>
           <td class="psikogramtable8" rowspan="5" >&nbsp;</td>
           <td class="psikogramtable9" >1</td>
           <td class="psikogramtable10" colspan="3">Intelegensi Umum</td>
           <td class="psikogramtable11" colspan="6" >
             Gabungan keseluruhan potensi kecerdasan sebagai perpaduan dari aspek-aspek pembentukan intelektualitas
           </td>
           <?php
              for($i = 0; $i < 7; $i++){
                $class = 5-1 == $i ? "psikogramtable13" : "psikogramtable12";
                if($i == $psikogramInteligensiUmum-1){
                  echo "<td class='".$class."'>"."X"."</td>";
                }else{
                  echo "<td class='".$class."'>"." "."</td>";
                }
              }
           ?>
         </tr>
         <tr>
           <td class="psikogramtable9" >2</td>
           <td class="psikogramtable10" colspan="3">Berpikir Analitis</td>
           <td class="psikogramtable11" colspan="6">
             Kemampuan menguraikan masalah menjadi bagian-bagian dan menemukan hubungan sebab akibat dari suatu situasi
           </td>
           <?php
              for($i = 0; $i < 7; $i++){
                $class = 5-1 == $i ? "psikogramtable13" : "psikogramtable12";
                if($i == $psikogramBerpikirAnalitis-1){
                  echo "<td class='".$class."'>"."X"."</td>";
                }else{
                  echo "<td class='".$class."'>"." "."</td>";
                }
              }
           ?>
         </tr>
         <tr>
           <td class="psikogramtable9" >3</td>
           <td class="psikogramtable10" colspan="3">Logika Berifikir</td>
           <td class="psikogramtable11" colspan="6" >
             Kemampuan untuk mengorganisir proses berfikir yang menunjukkan adanya alur berfikir yang sistematis dan logis
           </td>
           <?php
              for($i = 0; $i < 7; $i++){
                $class = 5-1 == $i ? "psikogramtable13" : "psikogramtable12";
                if($i == $psikogramLogikaBerpikir-1){
                  echo "<td class='".$class."'>"."X"."</td>";
                }else{
                  echo "<td class='".$class."'>"." "."</td>";
                }
              }
           ?>
         </tr>
         <tr>
           <td class="psikogramtable9" >4</td>
           <td class="psikogramtable10" colspan="3">Fleksibilitas Berfikir</td>
           <td class="psikogramtable11" colspan="6">
             Kemapuan mengalihkan perhatian dengan cepat dari satu masalah ke masalah lain
           </td>
           <?php
              for($i = 0; $i < 7; $i++){
                $class = 4-1 == $i ? "psikogramtable13" : "psikogramtable12";
                if($i == $psikogramFleksibilitasBerpikir-1){
                  echo "<td class='".$class."'>"."X"."</td>";
                }else{
                  echo "<td class='".$class."'>"." "."</td>";
                }
              }
           ?>
         </tr>
         <tr>
           <td class="psikogramtable9"  > 5</td>
           <td class="psikogramtable10" colspan="3"> Kemampuan Belajar </td>
           <td class="psikogramtable11" colspan="6" >
             Kemampuan menguasai dan meningkatkan pengetahuan dan keterampilan kerja yang baru maupun yang telah dimiliki
           </td>
           <?php
              for($i = 0; $i < 7; $i++){
                $class = 5-1 == $i ? "psikogramtable13" : "psikogramtable12";
                if($i == $psikogramKemampuanBelajar-1){
                  echo "<td class='".$class."'>"."X"."</td>";
                }else{
                  echo "<td class='".$class."'>"." "."</td>";
                }
              }
           ?>
         </tr>
         <tr bgcolor="bf8f00">
           <td class="psikogramtable6"  style="height: 20pt;; width: 25px;">
           B</td>
           <td class="psikogramtable7" colspan="17">ASPEK SIKAP KERJA</td>
         </tr>
         <tr>
           <td class="psikogramtable8"  rowspan="5" >
           &nbsp;</td>
           <td class="psikogramtable9" >1</td>
           <td class="psikogramtable10" colspan="3"> Sistematika Kerja</td>
           <td class="psikogramtable11" colspan="6" >
             Kemampuan dan keterampilan menyelesaikan suatu tugas secara runut proposional, sesuai dengan skala prioritas tertentu
           </td>
           <?php
              for($i = 0; $i < 7; $i++){
                $class = 5-1 == $i ? "psikogramtable13" : "psikogramtable12";
                if($i == $psikogramSistematikakerja-1){
                  echo "<td class='".$class."'>"."X"."</td>";
                }else{
                  echo "<td class='".$class."'>"." "."</td>";
                }
              }
           ?>
         </tr>
         <tr>
           <td class="psikogramtable9" >2</td>
           <td class="psikogramtable10" colspan="3">Tempo Kerja</td>
           <td class="psikogramtable11" colspan="6" >
             Kecepatan dan kecelakaan kerja yang menunjukan kemampuan menyelesaikan sejumlah tugas dalam batas waktu tertentu
           </td>
           <?php
              for($i = 0; $i < 7; $i++){
                $class = 4-1 == $i ? "psikogramtable13" : "psikogramtable12";
                if($i == $psikogramTempoKerja-1){
                  echo "<td class='".$class."'>"."X"."</td>";
                }else{
                  echo "<td class='".$class."'>"." "."</td>";
                }
              }
           ?>
         </tr>
         <tr>
           <td class="psikogramtable9" >3</td>
           <td class="psikogramtable10" colspan="3"> Ketelitian</td>
           <td class="psikogramtable11" colspan="6" >
             Kemampuan bekerja dengan sedikit mungkin melakukan kesalahan atau kekeliruan
           </td>
           <?php
              for($i = 0; $i < 7; $i++){
                $class = 5-1 == $i ? "psikogramtable13" : "psikogramtable12";
                if($i == $psikogramKetelitian-1){
                  echo "<td class='".$class."'>"."X"."</td>";
                }else{
                  echo "<td class='".$class."'>"." "."</td>";
                }
              }
           ?>
         </tr>
         <tr>
           <td class="psikogramtable9" >4</td>
           <td class="psikogramtable10" colspan="3" >Ketekunan</td>
           <td class="psikogramtable11" colspan="6" width="332">
             Daya tahan menghadapi dan menyelesaikan tugas sampai tuntas dalam waktu relatif lama dengan mencapai hasil yang optimal
           </td>
           <?php
              for($i = 0; $i < 7; $i++){
                $class = 4-1 == $i ? "psikogramtable13" : "psikogramtable12";
                if($i == $psikogramKetekunan-1){
                  echo "<td class='".$class."'>"."X"."</td>";
                }else{
                  echo "<td class='".$class."'>"." "."</td>";
                }
              }
           ?>
         </tr>
         <tr>
           <td class="psikogramtable9">5</td>
           <td class="psikogramtable10" colspan="3">Komunikasi Efektif</td>
           <td class="psikogramtable11" colspan="6" >
             Kemampuan menyampaikan pendapat secara lancar, sehingga pendengar paham dan bersedia mengikuti pendapatnya
           </td>
           <?php
              for($i = 0; $i < 7; $i++){
                $class = 5-1 == $i ? "psikogramtable13" : "psikogramtable12";
                if($i == $psikogramKomunikasiEfektif-1){
                  echo "<td class='".$class."'>"."X"."</td>";
                }else{
                  echo "<td class='".$class."'>"." "."</td>";
                }
              }
           ?>
         </tr>
         <tr bgcolor="#00b050">
           <td class="psikogramtable6"  style="height: 20pt;; width: 25px;">
           C</td>
           <td class="psikogramtable7" colspan="17">ASPEK KEPRIBADIAN</td>
         </tr>
         <tr>
           <td class="psikogramtable8" rowspan="5" &nbsp;</td>
           <td class="psikogramtable9" >1</td>
           <td class="psikogramtable10" colspan="3">Motivasi</td>
           <td class="psikogramtable11" colspan="6" >
             Keinginan meningkatkan hasil kerja dan selalu berfokus pada profit opportunities
           </td>
           <?php
              for($i = 0; $i < 7; $i++){
                $class = 5-1 == $i ? "psikogramtable13" : "psikogramtable12";
                if($i == $psikogramMotivasi-1){
                  echo "<td class='".$class."'>"."X"."</td>";
                }else{
                  echo "<td class='".$class."'>"." "."</td>";
                }
              }
           ?>
         </tr>
         <tr>
           <td class="psikogramtable9" >2</td>
           <td class="psikogramtable10" colspan="3">Konsep Diri</td>
           <td class="psikogramtable11" colspan="6" >
             Pemahaman atas kelebihan dan kekurangan diri sendiri
           </td>
           <?php
              for($i = 0; $i < 7; $i++){
                $class = 4-1 == $i ? "psikogramtable13" : "psikogramtable12";
                if($i == $psikogramKonsepDiri-1){
                  echo "<td class='".$class."'>"."X"."</td>";
                }else{
                  echo "<td class='".$class."'>"." "."</td>";
                }
              }
           ?>
         </tr>
         <tr>
           <td class="psikogramtable9" >3</td>
           <td class="psikogramtable10" colspan="3">Empati</td>
           <td class="psikogramtable11" colspan="6" >
             Kemampuan memahami dan merasakan adanya permasalahan dan kondisi emosional orang lain
           </td>
           <?php
              for($i = 0; $i < 7; $i++){
                $class = 5-1 == $i ? "psikogramtable13" : "psikogramtable12";
                if($i == $psikogramEmpati-1){
                  echo "<td class='".$class."'>"."X"."</td>";
                }else{
                  echo "<td class='".$class."'>"." "."</td>";
                }
              }
           ?>
         </tr>
         <tr>
           <td class="psikogramtable9" >4</td>
           <td class="psikogramtable10" colspan="3">Pemahaman Sosial</td>
           <td class="psikogramtable11" colspan="6" >
             Kemampuan bereaksi dengan cepat terhadap kebutuhan orang lain atau tuntutan lingkungan, serta memahami norma sosial yang berlaku
           </td>
           <?php
              for($i = 0; $i < 7; $i++){
                $class = 5-1 == $i ? "psikogramtable13" : "psikogramtable12";
                if($i == $psikogramPemahamanSosial-1){
                  echo "<td class='".$class."'>"."X"."</td>";
                }else{
                  echo "<td class='".$class."'>"." "."</td>";
                }
              }
           ?>
         </tr>
         <tr>
           <td class="psikogramtable9" >5</td>
           <td class="psikogramtable10" colspan="3">Pengaturan Diri</td>
           <td class="psikogramtable11" colspan="6" >
             Kemampuan mengendalikan diri dalam situasi-situasi sulit dan kemampuan melakukan perencanaan sebelum bertindak
           </td>
           <?php
              for($i = 0; $i < 7; $i++){
                $class = 4-1 == $i ? "psikogramtable13" : "psikogramtable12";
                if($i == $psikogramPengaturanDiri-1){
                  echo "<td class='".$class."'>"."X"."</td>";
                }else{
                  echo "<td class='".$class."'>"." "."</td>";
                }
              }
           ?>
         </tr>
         <tr bgcolor="#B8CCE4">
           <td class="psikogramtable18" colspan="11" width="444">
           TOTAL SKOR<font class="font5">.</font></td>
           <td class="psikogramtable2" colspan="7"><?php echo $psikogramTotalSkor." = ".  round($dataSumbuX/$pembagiSumbuX*100). "%" ; ?></td>
         </tr>
      </table>
    <br/>

    <table width="100%" class="table-potensi">
      <thead>
        <tr style="height:40px;">
          <td style="border: 2px solid #000; padding: 2px; text-align: center;" colspan="7"><center><strong>POTENSI / SUMBU X : </strong></center></td>
        </tr>
      </thead>
      <tbody>
      <tr bgcolor="#B8CCE4" style=" height: 20px; border-bottom: 1px solid #ffffff; border-left: 1px solid #ffffff; border-right: 1px solid #ffffff;">
      <th class="td-sumbu-x" colspan="2" rowspan="1" scope="col">KUALIFIKASI</th>
      <th class="td-sumbu-x" colspan="1" rowspan="1" scope="col">REKOMENDASI</th>
      <th class="td-sumbu-x" colspan="3" rowspan="1" scope="col">SKALA</th>
      </tr>
      <?php
        $hasil = round($dataSumbuX/$pembagiSumbuX*100);
        if ($hasil >=100) {
            $backgroundK1 = '#C4D79B';
            $backgroundK2 = '#ffffff';
            $backgroundK3 = '#ffffff';
        }
        else if ($hasil >= 80 && $hasil <= 99) {
            $backgroundK1 = '#ffffff';
            $backgroundK2 = '#C4D79B';
            $backgroundK3 = '#ffffff';
        }
        else {
        	$backgroundK1 = '#ffffff';
          $backgroundK2 = '#ffffff';
          $backgroundK3 = '#C4D79B';
        }
      ?>
      <tr bgcolor="<?php echo $backgroundK1;?>" style=" height: 20px; border-bottom: 1px solid #ffffff; border-left: 1px solid #ffffff; border-right: 1px solid #ffffff;">
        <td class="td-sumbu-x">K-1</td>
        <td class="td-sumbu-x">Baik</td>
        <td class="td-sumbu-x">Mampu berkembang secara wajar</td>
        <td class="td-sumbu-x">100%</td>
        <td class="td-sumbu-x">-</td>
        <td class="td-sumbu-x">ke atas</td>
      </tr>
      <tr bgcolor="<?php echo $backgroundK2;?>" style=" height: 20px; border-bottom: 1px solid #ffffff; border-left: 1px solid #ffffff; border-right: 1px solid #ffffff;">
        <td class="td-sumbu-x">K-2</td>
        <td class="td-sumbu-x">Cukup</td>
        <td class="td-sumbu-x">Mampu berkembang spesifik</td>
        <td class="td-sumbu-x">80%</td>
        <td class="td-sumbu-x">-</td>
        <td class="td-sumbu-x">99%</td>
      </tr>
      <tr bgcolor="<?php echo $backgroundK3;?>" style=" height: 20px; border-bottom: 1px solid #ffffff; border-left: 1px solid #ffffff; border-right: 1px solid #ffffff;">
        <td class="td-sumbu-x">K-3</td>
        <td class="td-sumbu-x">Kurang</td>
        <td class="td-sumbu-x">Kemampuan perkembangannya terbatas</td>
        <td class="td-sumbu-x">79%</td>
        <td class="td-sumbu-x">-</td>
        <td class="td-sumbu-x">ke bawah</td>
      </tr>
      </tbody>
    </table>
  </div>
  <?=$footerReport;?>
  </article>
</section>

<section class="sheet padding-25mm">
  <div class="headerReport" style="color: #d5d5d5;font-family:cambria; font-size: 16px;">
    <h2>RAHASIA</h2>
  </div>
  <article style="margin-top: -20px;">
    <div class='left' style="color: #d5d5d5;font-family:cambria; font-size:12px">
      <h6>
      <b><?php echo $assesseeModel->nama_lengkap; ?></b><br/>
      <?php echo $assesseeModel->jabatan_saat_ini; ?></h6>
    </div>
    <div class='center'>
      <h3 style="font-size: 20px;">GAMBARAN POSISI 9-CELL (KOMPETENSI DAN POTENSI)</h3>
    </div>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart'], 'language': 'id'});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
          var data = google.visualization.arrayToDataTable([
            ['Potensi', 'Kompetensi'],
            [ <?=round($dataSumbuX/$pembagiSumbuX*100); ?>,  <?=round($dataSumbuY/$pembagiSumbuY*100); ?>], //ini harus diisi

          ]);

          var options = {

            hAxis: {
                //title: 'Potensi', minValue: 0, maxValue: 100,
                gridlines:{color: '#eee', count: 7},
            ticks: [0, 10, 20,30, 40, 50, 60, 70, 80, 90, 100, 110, 120, 130, 140, ]
                },
            vAxis: {
               // title: 'Kompetensi', minValue: 0, maxValue: 100,
               gridlines:{color: '#eee', count: 7},
            ticks: [0, 10, 20,30, 40, 50, 60, 70, 80, 90, 100, 110, 120, 130, 140, ]
               },
            crosshair: { trigger: 'both' },
            legend: 'none',
            backgroundColor: { fill:'transparent' },
            pointSize: 10,
            fontSize: 11
            //vAxis.gridlines:{color: '#333', count: 4}
          };

          var chart = new google.visualization.ScatterChart(document.getElementById('chart_div'));

          chart.draw(data, options);
        }
    </script>
      <table class="center" style="margin-top: 20px;">
      <tr>
        <!-- Sumbu Y-->
        <td align="left">
          <?php
            $sumbuY = round($dataSumbuY/$pembagiSumbuY*100);
            $sumbuX = round($dataSumbuX/$pembagiSumbuX*100);
            if ($sumbuY >=100) {
                echo "<img height='400' width='133' src=".Url::base()."/images/setkab-sumbuYtop.PNG>";
            }

            else if ($sumbuY >= 80 && $sumbuY <= 99) {
                echo "<img height='400' width='133' src=".Url::base()."/images/setkab-sumbuYmiddle.PNG>";

            }
            else {
            	echo "<img height='400' width='133' src=".Url::base()."/images/setkab-sumbuYbot.PNG>";
            }
          ?>
        </td>
      </tr>
      <tr>
        <td>
          <table style="width: 100%; margin-left: auto; margin-right: auto;" border="1" cellspacing="1" cellpadding="1">
          <tbody>
          <tr>
            <td bgcolor="yellow">X</td>
            <td bgcolor="yellow"><?=$sumbuX;?>%</td>
            <td rowspan="2" style="width: 30px;"><h2>
                <?php
                  if ($sumbuX < 80 && $sumbuY < 80){
                    $ninecellScore = 1;
                  } else if ($sumbuX < 80 && $sumbuY < 100 && $sumbuY > 79 && $sumbuY < 100) {
                    $ninecellScore = 2;
                  } else if ($sumbuX >= 80 && $sumbuX < 100 && $sumbuY < 80) {
                    $ninecellScore = 3;
                  } else if ($sumbuX < 80 && $sumbuY < 99) {
                    $ninecellScore = 4;
                  } else if ($sumbuX >= 80 && $sumbuX < 100 && $sumbuY > 79 && $sumbuY < 100) {
                    $ninecellScore = 5;
                  } else if ($sumbuX >= 100 && $sumbuY < 80) {
                    $ninecellScore = 6;
                  } else if ($sumbuX >= 80 && $sumbuX < 100 && $sumbuY >= 100) {
                    $ninecellScore = 7;
                  } else if ($sumbuX >= 100 && $sumbuY >= 80 && $sumbuY < 100) {
                    $ninecellScore = 8;
                  } else if ($sumbuX >= 100 && $sumbuY >= 100) {
                    $ninecellScore = 9;
                  } else {
                    $ninecellScore = 0;
                  }

                  echo '<font style="color:green;">'.$ninecellScore.'</font>';
                ?>
            </h2></td>
            </tr>
            <tr >
              <td bgcolor="#B8CCE4">Y</td>
              <td bgcolor="#B8CCE4"><?=$sumbuY;?>%</td>
            </tr>
            </tbody>
            </table>
          </td>
        </tr>
        <tr>
          <td width="127px;"></td>
          <td align="left" colspan="2">
              <?php
              if ($sumbuX >=100) {
                  echo "<img height='125' width='472' src=".Url::base()."/images/setkab-sumbuXtop.PNG>";
              }

              else if ($sumbuX >= 80 && $sumbuX<= 99) {
                  echo "<img height='125' width='472' src=".Url::base()."/images/setkab-sumbuXmiddle.PNG>";

              }

              else {
                  echo "<img height='125' width='472' src=".Url::base()."/images/setkab-sumbuXbot.PNG>";
              }
              ?>
          </td>
        </tr>
       </table>
       <!-- 9 Cell -->
       <div id="chart_div" style="position: absolute; bottom: 31.8%; left:17%; width: 698px; height: 705px; background-image: url('<?=Url::base()?>/images/setkab/bg-9-cell.png'); background-repeat: no-repeat; background-position: 50% 50%; background-size: 435px 435px; "></div>
       <br/>
       <table>

       </table>
       <table width="100%" class="rekomendasi">
         <thead>
           <tr>
             <td bgcolor="#eeaa65" style='font-size: 16px; height: 17px; padding: 1mm; text-align: justify;' colspan="7"><center><strong>REKOMENDASI PENERIMAAN</strong></center></td>
           </tr>
         </thead>
         <tbody>
         <tr bgcolor="#eeaa65">
           <th colspan="2" rowspan="1" scope="col">KUALIFIKASI</th>
           <th colspan="1" rowspan="1" scope="col">REKOMENDASI</th>
           <th colspan="3" rowspan="1" scope="col">POSISI DALAM SELL <?php echo $ninecellScore; ?></th>
         </tr>
         <?php
             $backgroundK1 = '#ffffff';
             $backgroundK2 = '#C4D79B';
         ?>
         <tr bgcolor="<?php echo $ninecellScore == 9 ? $backgroundK2 : $backgroundK1;?>">
           <td>K-1</td>
           <td>SANGAT BAIK</td>
           <td>Prioritas disarankan</td>
           <td>SEL 9</td>
         </tr>
         <tr bgcolor="<?php if($ninecellScore == 7 || $ninecellScore == 8) { echo $backgroundK2; } else { echo $backgroundK1; } ?>">
           <td>K-2</td>
           <td>BAIK</td>
           <td>Dapat disarankan</td>
           <td>SEL 7 atau 8</td>
         </tr>
         <tr bgcolor="<?php echo $ninecellScore == 5 ? $backgroundK2 : $backgroundK1;?>">
           <td>K-3</td>
           <td>CUKUP</td>
           <td>Masih dapat di sarankan</td>
           <td>SEL 5</td>
         </tr>
         <tr bgcolor="<?php echo $ninecellScore == 4 ? $backgroundK2 : $backgroundK1;?>">
           <td>K-4</td>
           <td>KURANG</td>
           <td>Kurang dapat disarankan</td>
           <td>SEL 4 atau 6</td>
         </tr>
         <tr bgcolor="<?php if($ninecellScore == 1 || $ninecellScore == 2 || $ninecellScore == 3) { echo $backgroundK2; } else { echo $backgroundK1; }?>">
           <td>K-5</td>
           <td>BURUK</td>
           <td>Tidak dapat disarankan</td>
           <td>SEL 1,2 atau 3</td>
         </tr>
         </tbody>
       </table>
     </div>
    </div>
    <?php echo $footerReport;?>
  </article>
</section>

<section class="sheet padding-25mm">
  <div class="headerReport" style="color: #d5d5d5; font-family:cambria; font-size: 16px;">
    <h2>RAHASIA</h2>
  </div>
  <article style="margin-top: -20px; font-family:cambria; font-size: 12px;">
    <div class='left' style="color: #d5d5d5;">
      <h6>
      <b><?php echo $assesseeModel->nama_lengkap; ?></b><br/>
      <?php echo $assesseeModel->jabatan_saat_ini; ?></h6>
    </div>
    <div class='center'>
      <span style="font-size: 22px; font-weight: 700">RESUME & EXECUTIVE SUMMARY</span>
      <div style="width:100%; height:0%; border: 2px solid #000; margin-top: 5px;"></div>
      <div style="width:100%; height:0%; border: 1px solid #000; margin-top: 2px;"></div>
    </div>
    <?php
      $htmltag = array('<ul>','<ul></ul>');
      $htmlesc   = array('<ul>','</ul>');
    ?>
    <div class="exsum";>
      <?php echo wordwrap(str_replace($htmltag, $htmlesc, $activityModel->executive_summary), 2850,  $pagebreak, true);?>
    </div>
    <div class="pemeriksa">
      <div class='center' style="font-size: 18px;">
        <?php echo $activityModel->tempat_test.", 5 November 2018"; ?></br>
         a.n Psikolog Pemeriksa,<br/>
         <?php echo Html::img('@web/images/setkab/ttd.png', ['alt' => '--missing image--','style'=> 'max-width:200px; max-height:200px; text-align: right;' ]);?></br>
         <strong>( DRS. BUDIMAN SANUSI, M.Psi. Psikolog )</strong>
      </div>
    </div>
    <?php echo $footerReport;?>
  </article>
</section>

<section class="sheet padding-25mm">
  <div class="headerReport rahasia">
    <h2>RAHASIA</h2>
  </div>
  <article style="margin-top: -20px;">
    <div class="left jabatan">
      <h6>
      <b><?php echo $assesseeModel->nama_lengkap; ?></b><br/>
      <?php echo $assesseeModel->jabatan_saat_ini; ?></h6>
    </div>
    <div class='center judul'>
      <h3 style="font-size: 22px;">HASIL ASSESSMENT</br>BERDASARKAN KOMPETENSI</h3>
      <div style="width:100%; height:0%; border: 2px solid #000;"></div>
      <div style="width:100%; height:0%; border: 1px solid #000; margin-top: 2px;"></div>
    </div>
    <?php
      $htmltag = array('<p style="text-align: justify;">','<p></p>');
      $htmlesc   = array('<p>','');
    ?>
    </br>
    <h3 class="sub-judul">A. KOMPETENSI MANAGERIAL</h3>
    <table width="100%" class="rekomendasi" style="font-family: cambria;">
      <thead>
        <tr bgcolor="#dadada">
          <td class="kode" rowspan="2"><center><strong><h2>M-01</h2></strong></center></td>
          <td class="title" style="height: 20px;	padding: 3mm;" colspan="7"><strong>INTEGRITAS</stron></td>
        </tr>
        <tr bgcolor="#dadada">
          <td  class="sub-title" style='height: 20px; padding: 3mm 2mm 2mm 2mm;' colspan="7">Konsisten berperilaku selaras dengan nilai, norma dan/atau etika
          organisasi, dan jujur dalam hubungan dengan manajemen, rekan
          kerja, bawahan langsung, dan pemangku kepentingan, menciptakan
          budaya etika tinggi, bertanggungjawab atas tindakan atau keputusan
          beserta risiko yang menyertainya.</td>
        </tr>
      </thead>
    </thead>
      <tbody>
      <tr>
        <td style="width:150px; height: 30px; padding-left: 3mm;"  bgcolor="#fff400"><strong>Standar (LKJ) </strong></td>
        <?php
          for ($i = 1; $i <= 4 ;$i ++){
            if($i <= $standarLKJ){
              echo "<td bgcolor='#fff400' style='width: 70px;'></td>";
            } else {
              echo "<td bgcolor='#ffffff' style='width: 70px;'></td>";
            }
          }
        ?>
        <td ><center><?php echo $standarLKJ; ?></center></td>
      </tr>
      <tr>
        <td bgcolor="#f8bf17" style="height: 30px; padding-left: 3mm;" ><strong>Individu (LKI) </strong></td>
        <?php
          for ($i = 1; $i <= 4 ;$i ++){
            if($i <= $resultIntegritasLKI){
              echo "<td bgcolor='#f8bf17'></td>";
            } else {
              echo "<td bgcolor='#ffffff' style='width: 70px;'></td>";
            }
          }
        ?>
        <td ><center><?php echo $resultIntegritasLKI; ?></center></td>
      </tr>
      <tr>
        <td bgcolor="#44b2ef" style="height: 30px; padding-left: 3mm;" ><strong>Fit (%)</strong></td>
        <?php
          for ($i = 1; $i <= 4 ;$i ++){
            if($i <= $standarLKJ){
              if($resultIntegritasFit <= 25){
                if($i == 1){
                  echo "<td bgcolor='#44b2ef'></td>";
                }else{
                  echo "<td bgcolor='#fff'></td>";
                }
              } elseif ($resultIntegritasFit <= 50){
                if($i <= 2){
                  echo "<td bgcolor='#44b2ef'></td>";
                }else{
                  echo "<td bgcolor='#fff'></td>";
                }
              } elseif ($resultIntegritasFit <= 75){
                if($i <= 3){
                  echo "<td bgcolor='#44b2ef'></td>";
                }else{
                  echo "<td bgcolor='#fff'></td>";
                }
              } elseif ($resultIntegritasFit <= 100){
                if($i <= 4){
                  echo "<td bgcolor='#44b2ef'></td>";
                }else{
                  echo "<td bgcolor='#fff'></td>";
                }
              }
            } else {
              echo "<td bgcolor='#fff'></td>";
            }

          }
        ?>
        <td ><center><?php echo $resultIntegritasFit; ?></center></td>
      </tr>
      <tr>
        <td colspan="7"  style="font-family: cambria; padding: 1mm 2mm 1mm 2mm; text-align: justify;"><?php echo $resultIntegritasUraian; ?></td>
      </tr>
      </tbody>
    </table>

    <?php echo $pagebreak; ?>
    <table width="100%" class="rekomendasi" style="font-family: cambria;">
      <thead>
        <tr bgcolor="#dadada">
          <td class="kode" rowspan="2"><center><strong><h2>M-02</h2></strong></center></td>
          <td class="title" style='height: 20px; padding: 3mm; text-align: justify;' colspan="7"><strong>KERJASAMA</stron></td>
        </tr>
        <tr bgcolor="#dadada">
          <td class="sub-title" style='height: 20px; padding: 3mm 2mm 2mm 2mm;' colspan="7">Kemampuan menjalin, membina, mempertahankan hubungan kerja
          yang efektif, memiliki komitmen saling membantu dalam penyelesaian
          tugas, dan mengoptimalkan segala sumberdaya untuk mencapai
          tujuan strategis organisasi.</td>
        </tr>
      </thead>
    </thead>
      <tbody>
      <tr>
        <td style="width:150px; height: 30px; padding-left: 3mm;" bgcolor="#fff400"><strong>Standar (LKJ) </strong></td>
        <?php
          for ($i = 1; $i <= 4 ;$i ++){
            if($i <= $standarLKJ){
              echo "<td bgcolor='#fff400' style='width: 70px;'></td>";
            } else {
              echo "<td bgcolor='#ffffff' style='width: 70px;'></td>";
            }
          }
        ?>
        <td style="font-size: 16px;"><center><?php echo $standarLKJ; ?></center></td>
      </tr>
      <tr>
        <td bgcolor="#f8bf17" style="height: 30px; padding-left: 3mm;"><strong>Individu (LKI) </strong></td>
        <?php
          for ($i = 1; $i <= 4 ;$i ++){
            if($i <= $resultKerjasamaLKI){
              echo "<td bgcolor='#f8bf17'></td>";
            } else {
              echo "<td bgcolor='#ffffff' style='width: 70px;'></td>";
            }
          }
        ?>
        <td><center><?php echo $resultKerjasamaLKI; ?></center></td>
      </tr>
      <tr>
        <td bgcolor="#44b2ef" style="height: 30px; padding-left: 3mm;"><strong>Fit (%)</strong></td>
        <?php
          for ($i = 1; $i <= 4 ;$i ++){
            if($i <= $standarLKJ){
              if($resultKerjasamaFit <= 25){
                if($i == 1){
                  echo "<td bgcolor='#44b2ef'></td>";
                }else{
                  echo "<td bgcolor='#fff'></td>";
                }
              } elseif ($resultKerjasamaFit <= 50){
                if($i <= 2){
                  echo "<td bgcolor='#44b2ef'></td>";
                }else{
                  echo "<td bgcolor='#fff'></td>";
                }
              } elseif ($resultKerjasamaFit <= 75){
                if($i <= 3){
                  echo "<td bgcolor='#44b2ef'></td>";
                }else{
                  echo "<td bgcolor='#fff'></td>";
                }
              } elseif ($resultKerjasamaFit <= 100){
                if($i <= 4){
                  echo "<td bgcolor='#44b2ef'></td>";
                }else{
                  echo "<td bgcolor='#fff'></td>";
                }
              }
            }else{
              echo "<td bgcolor='#fff'></td>";
            }

          }
        ?>
        <td><center><?php echo $resultKerjasamaFit; ?></center></td>
      </tr>
      <tr>
        <td colspan="7" style="font-family: cambria; padding: 1mm 2mm 1mm 2mm; text-align: justify;"><?php echo $resultKerjasamaUraian; ?></td>
      </tr>
      </tbody>
    </table>

    <?php echo $pagebreak; ?>
    <table width="100%" class="rekomendasi" style="font-family: cambria;">
      <thead>
        <tr bgcolor="#dadada">
          <td class="kode" rowspan="2"><center><strong><h2>M-03</h2></strong></center></td>
          <td class="title" style='height: 20px; padding: 3mm; text-align: justify;' colspan="7"><strong>KOMUNIKASI</stron></td>
        </tr>
        <tr bgcolor="#dadada">
          <td class="sub-title" style='font-family: cambria; height: 20px; padding: 3mm 2mm 2mm 2mm;' colspan="7">Kemampuan untuk menerangkan pandangan dan gagasan secara jelas,
          sistematis disertai argumentasi yang logis dengan cara-cara yang
          sesuai baik secara lisan maupun tertulis; memastikan pemahaman;
          mendengarkan secara aktif dan efektif; mempersuasi, meyakinkan
          dan membujuk orang lain dalam rangka mencapai tujuan organisasi.</td>
        </tr>
      </thead>
    </thead>
      <tbody>
      <tr>
        <td style="width:150px; height: 30px; padding-left: 3mm;" bgcolor="#fff400"><strong>Standar (LKJ) </strong></td>
        <?php
          for ($i = 1; $i <= 4 ;$i ++){
            if($i <= $standarLKJ){
              echo "<td bgcolor='#fff400' style='width: 70px;'></td>";
            } else {
              echo "<td bgcolor='#ffffff' style='width: 70px;'></td>";
            }
          }
        ?>
        <td><center><?php echo $standarLKJ; ?></center></td>
      </tr>
      <tr>
        <td bgcolor="#f8bf17" style="height: 30px; padding-left: 3mm;"><strong>Individu (LKI) </strong></td>
        <?php
          for ($i = 1; $i <= 4 ;$i ++){
            if($i <= $resultKomunikasiLKI){
              echo "<td bgcolor='#f8bf17'></td>";
            } else {
              echo "<td bgcolor='#ffffff' style='width: 70px;'></td>";
            }
          }
        ?>
        <td style="font-size: 16px;"><center><?php echo $resultKomunikasiLKI; ?></center></td>
      </tr>
      <tr>
        <td bgcolor="#44b2ef" style="height: 30px; padding-left: 3mm;"><strong>Fit (%)</strong></td>
        <?php
          for ($i = 1; $i <= 4 ;$i ++){
            if($i <= $standarLKJ){
              if($resultKomunikasiFit <= 25){
                if($i == 1){
                  echo "<td bgcolor='#44b2ef'></td>";
                }else{
                  echo "<td bgcolor='#fff'></td>";
                }
              } elseif ($resultKomunikasiFit <= 50){
                if($i <= 2){
                  echo "<td bgcolor='#44b2ef'></td>";
                }else{
                  echo "<td bgcolor='#fff'></td>";
                }
              } elseif ($resultKomunikasiFit <= 75){
                if($i <= 3){
                  echo "<td bgcolor='#44b2ef'></td>";
                }else{
                  echo "<td bgcolor='#fff'></td>";
                }
              } elseif ($resultKomunikasiFit <= 100){
                if($i <= 4){
                  echo "<td bgcolor='#44b2ef'></td>";
                }else{
                  echo "<td bgcolor='#fff'></td>";
                }
              }
            } else {
              echo "<td bgcolor='#fff'></td>";
            }
          }
        ?>
        <td><center><?php echo $resultKomunikasiFit; ?></center></td>
      </tr>
      <tr>
        <td colspan="7" style="font-family: cambria; padding: 1mm 2mm 1mm 2mm; text-align: justify;"><?php echo $resultKomunikasiUraian; ?></td>
      </tr>
      </tbody>
    </table>

    <?php echo $pagebreak; ?>
    <table width="100%" class="rekomendasi" style="font-family: cambria;">
      <thead>
        <tr bgcolor="#dadada">
          <td  class="kode" style='height: 50px;' rowspan="2"><center><strong><h2>M-04</h2></strong></center></td>
          <td  class="title" style='height: 20px; padding: 3mm; text-align: justify;' colspan="7"><strong>ORIENTASI PADA HASIL</stron></td>
        </tr>
        <tr bgcolor="#dadada">
          <td class="sub-title" style='font-family: cambria; height: 20px; padding: 3mm 2mm 2mm 2mm;' colspan="7">Kemampuan mempertahankan komitmen pribadi yang tinggi untuk
          menyelesaikan tugas, dapat diandalkan, bertanggung jawab, mampu
          secara sistimatis mengidentifikasi risiko dan peluang dengan
          memperhatikan keterhubungan antara perencanaan dan hasil, untuk
          keberhasilan organisasi.</td>
        </tr>
      </thead>
    </thead>
      <tbody>
      <tr>
        <td style="width:150px; height: 30px; padding-left: 3mm;" bgcolor="#fff400"><strong>Standar (LKJ) </strong></td>
        <?php
          for ($i = 1; $i <= 4 ;$i ++){
            if($i <= $standarLKJ){
              echo "<td bgcolor='#fff400' style='width: 70px;'></td>";
            } else {
              echo "<td bgcolor='#ffffff' style='width: 70px;'></td>";
            }
          }
        ?>
        <td><center><?php echo $standarLKJ; ?></center></td>
      </tr>
      <tr>
        <td bgcolor="#f8bf17" style="height: 30px; padding-left: 3mm;"><strong>Individu (LKI) </strong></td>
        <?php
          for ($i = 1; $i <= 4 ;$i ++){
            if($i <= $resultOrientasiHasilLKI){
              echo "<td bgcolor='#f8bf17'></td>";
            } else {
              echo "<td bgcolor='#ffffff' style='width: 70px;'></td>";
            }
          }
        ?>
        <td><center><?php echo $resultOrientasiHasilLKI; ?></center></td>
      </tr>
      <tr>
        <td bgcolor="#44b2ef" style="height: 30px; padding-left: 3mm;"><strong>Fit (%)</strong></td>
        <?php
          for ($i = 1; $i <= 4 ;$i ++){
            if($i <= $standarLKJ){
              if($resultOrientasiHasilFit <= 25){
                if($i == 1){
                  echo "<td bgcolor='#44b2ef'></td>";
                }else{
                  echo "<td bgcolor='#fff'></td>";
                }
              } elseif ($resultOrientasiHasilFit <= 50){
                if($i <= 2){
                  echo "<td bgcolor='#44b2ef'></td>";
                }else{
                  echo "<td bgcolor='#fff'></td>";
                }
              } elseif ($resultOrientasiHasilFit <= 75){
                if($i <= 3){
                  echo "<td bgcolor='#44b2ef'></td>";
                }else{
                  echo "<td bgcolor='#fff'></td>";
                }
              } elseif ($resultOrientasiHasilFit <= 100){
                if($i <= 4){
                  echo "<td bgcolor='#44b2ef'></td>";
                }else{
                  echo "<td bgcolor='#fff'></td>";
                }
              }
            } else {
              echo "<td bgcolor='#fff'></td>";
            }
          }
        ?>
        <td><center><?php echo $resultOrientasiHasilFit; ?></center></td>
      </tr>
      <tr>
        <td colspan="7" style="font-family: cambria; padding: 1mm 2mm 1mm 2mm; text-align: justify;"><?php echo $resultOrientasiHasilUraian; ?></td>
      </tr>
      </tbody>
    </table>

    <?php echo $pagebreak; ?>
    <table width="100%" class="rekomendasi" style="font-family: cambria;">
      <thead>
        <tr bgcolor="#dadada">
          <td class="kode" style='height: 50px;' rowspan="2"><center><strong><h2>M-05</h2></strong></center></td>
          <td class="title" style='height: 20px; padding: 3mm; text-align: justify;' colspan="7"><strong>PELAYANAN PUBLIK</stron></td>
        </tr>
        <tr bgcolor="#dadada">
          <td class="sub-title" style='font-family: cambria; height: 20px; padding: 3mm 2mm 2mm 2mm;' colspan="7">Kemampuan dalam melaksanakan tugas-tugas pemerintahan,
            pembangunan dan kegiatan pemenuhan kebutuhan pelayanan publik
            secara profesional, transparan, mengikuti standar pelayanan yang
            objektif, netral, tidak memihak, tidak diskriminatif, serta tidak
            terpengaruh kepentingan pribadi/kelompok/golongan/partai politik</td>
        </tr>
      </thead>
    </thead>
      <tbody>
      <tr>
        <td style="width:150px; height: 30px; padding-left: 3mm;" bgcolor="#fff400"><strong>Standar (LKJ) </strong></td>
        <?php
          for ($i = 1; $i <= 4 ;$i ++){
            if($i <= $standarLKJ){
              echo "<td bgcolor='#fff400' style='width: 70px;'></td>";
            } else {
              echo "<td bgcolor='#ffffff' style='width: 70px;'></td>";
            }
          }
        ?>
        <td><center><?php echo $standarLKJ; ?></center></td>
      </tr>
      <tr>
        <td bgcolor="#f8bf17" style="height: 30px; padding-left: 3mm;"><strong>Individu (LKI) </strong></td>
        <?php
          for ($i = 1; $i <= 4 ;$i ++){
            if($i <= $resultPelayananPublikLKI){
              echo "<td bgcolor='#f8bf17'></td>";
            } else {
              echo "<td bgcolor='#ffffff' style='width: 70px;'></td>";
            }
          }
        ?>
        <td><center><?php echo $resultPelayananPublikLKI; ?></center></td>
      </tr>
      <tr>
        <td bgcolor="#44b2ef" style="height: 30px; padding-left: 3mm;"><strong>Fit (%)</strong></td>
        <?php
          for ($i = 1; $i <= 4 ;$i ++){
            if($i <= $standarLKJ){
              if($resultPelayananPublikFit <= 25){
                if($i == 1){
                  echo "<td bgcolor='#44b2ef'></td>";
                }else{
                  echo "<td bgcolor='#fff'></td>";
                }
              } elseif ($resultPelayananPublikFit <= 50){
                if($i <= 2){
                  echo "<td bgcolor='#44b2ef'></td>";
                }else{
                  echo "<td bgcolor='#fff'></td>";
                }
              } elseif ($resultPelayananPublikFit <= 75){
                if($i <= 3){
                  echo "<td bgcolor='#44b2ef'></td>";
                }else{
                  echo "<td bgcolor='#fff'></td>";
                }
              } else{
                if($i <= 4){
                  echo "<td bgcolor='#44b2ef'></td>";
                }else{
                  echo "<td bgcolor='#fff'></td>";
                }
              }
            } else {
              echo "<td bgcolor='#fff'></td>";
            }
          }
        ?>
        <td><center><?php echo $resultPelayananPublikFit; ?></center></td>
      </tr>
      <tr>
        <td colspan="7" style="font-family: cambria; padding: 1mm 2mm 1mm 2mm; text-align: justify;"><?php echo $resultPelayananPublikUraian; ?></td>
      </tr>
      </tbody>
    </table>

    <?php echo $pagebreak; ?>
    <table width="100%" class="rekomendasi" style="font-family: cambria;">
      <thead>
        <tr bgcolor="#dadada">
          <td class="kode" style='height: 50px;' rowspan="2"><center><strong><h2>M-06</h2></strong></center></td>
          <td class="title" style='height: 20px; padding: 3mm; text-align: justify;' colspan="7"><strong>PENGEMBANGAN DIRI DAN ORANG LAIN</stron></td>
        </tr>
        <tr bgcolor="#dadada">
          <td class="sub-title" style='font-family: cambria; height: 20px; padding: 3mm 2mm 2mm 2mm;' colspan="7">Kemampuan untuk meningkatkan pengetahuan dan
            menyempurnakan keterampilan diri; menginspirasi orang lain untuk
            mengembangkan dan menyempurnakan pengetahuan dan
            keterampilan yang relevan dengan pekerjaan dan pengembangan
            karir jangka panjang, mendorong kemauan belajar sepanjang hidup,
            memberikan saran/bantuan, umpan balik, bimbingan untuk
            membantu orang lain untuk mengembangkan potensi dirinya.</td>
        </tr>
      </thead>
    </thead>
      <tbody>
      <tr>
        <td style="width:150px; height: 30px; padding-left: 3mm;" bgcolor="#fff400"><strong>Standar (LKJ) </strong></td>
        <?php
          for ($i = 1; $i <= 4 ;$i ++){
            if($i <= $standarLKJ){
              echo "<td bgcolor='#fff400' style='width: 70px;'></td>";
            } else {
              echo "<td bgcolor='#ffffff' style='width: 70px;'></td>";
            }
          }
        ?>
        <td><center><?php echo $standarLKJ; ?></center></td>
      </tr>
      <tr>
        <td bgcolor="#f8bf17" style="height: 30px; padding-left: 3mm;"><strong>Individu (LKI) </strong></td>
        <?php
          for ($i = 1; $i <= 4 ;$i ++){
            if($i <= $resultPengembanganDiriLKI){
              echo "<td bgcolor='#f8bf17'></td>";
            } else {
              echo "<td bgcolor='#ffffff' style='width: 70px;'></td>";
            }
          }
        ?>
        <td><center><?php echo $resultPengembanganDiriLKI; ?></center></td>
      </tr>
      <tr>
        <td bgcolor="#44b2ef" style="height: 30px; padding-left: 3mm;"><strong>Fit (%)</strong></td>
        <?php
          for ($i = 1; $i <= 4 ;$i ++){
            if($i <= $standarLKJ){
              if($resultPengembanganDiriFit <= 25){
                if($i == 1){
                  echo "<td bgcolor='#44b2ef'></td>";
                }else{
                  echo "<td bgcolor='#fff'></td>";
                }
              } elseif ($resultPengembanganDiriFit <= 50){
                if($i <= 2){
                  echo "<td bgcolor='#44b2ef'></td>";
                }else{
                  echo "<td bgcolor='#fff'></td>";
                }
              } elseif ($resultPengembanganDiriFit <= 75){
                if($i <= 3){
                  echo "<td bgcolor='#44b2ef'></td>";
                }else{
                  echo "<td bgcolor='#fff'></td>";
                }
              } elseif ($resultPengembanganDiriFit <= 100){
                if($i <= 4){
                  echo "<td bgcolor='#44b2ef'></td>";
                }else{
                  echo "<td bgcolor='#fff'></td>";
                }
              }
            } else {
              echo "<td bgcolor='#fff'></td>";
            }
          }
        ?>
        <td><center><?php echo $resultPengembanganDiriFit; ?></center></td>
      </tr>
      <tr>
        <td colspan="7" style="font-family: cambria; padding: 1mm 2mm 1mm 2mm; text-align: justify;"><?php echo $resultPengembanganDiriUraian; ?></td>
      </tr>
      </tbody>
    </table>

    <?php echo $pagebreak; ?>
    <table width="100%" class="rekomendasi" style="font-family: cambria;">
      <thead>
        <tr bgcolor="#dadada">
          <td class="kode" style='height: 50px;' rowspan="2"><center><strong><h2>M-07</h2></strong></center></td>
          <td class="title" style=' height: 20px; padding: 3mm; text-align: justify;' colspan="7"><strong>PENGELOLAAN PERUBAHAN</stron></td>
        </tr>
        <tr bgcolor="#dadada">
          <td class="sub-title" style='font-family: cambria; height: 20px; padding: 3mm 2mm 2mm 2mm;' colspan="7">Kemampuan dalam menyesuaikan diri dengan situasi yang baru atau
            berubah dan tidak bergantung secara berlebihan pada metode dan
            proses lama, mengambil tindakan untuk mendukung dan
            melaksanakan insiatif perubahan, memimpin usaha perubahan,
            mengambil tanggung jawab pribadi untuk memastikan perubahan
            berhasil diimplementasikan secara efektif.</td>
        </tr>
      </thead>
    </thead>
      <tbody>
      <tr>
        <td style="width:150px; height: 30px; padding-left: 3mm;" bgcolor="#fff400"><strong>Standar (LKJ) </strong></td>
        <?php
          for ($i = 1; $i <= 4 ;$i ++){
            if($i <= $standarLKJ){
              echo "<td bgcolor='#fff400' style='width: 70px;'></td>";
            } else {
              echo "<td bgcolor='#ffffff' style='width: 70px;'></td>";
            }
          }
        ?>
        <td><center><?php echo $standarLKJ; ?></center></td>
      </tr>
      <tr>
        <td bgcolor="#f8bf17" style="height: 30px; padding-left: 3mm;"><strong>Individu (LKI) </strong></td>
        <?php
          for ($i = 1; $i <= 4 ;$i ++){
            if($i <= $resultPengelolaanPerubahanLKI){
              echo "<td bgcolor='#f8bf17'></td>";
            } else {
              echo "<td bgcolor='#ffffff' style='width: 70px;'></td>";
            }
          }
        ?>
        <td><center><?php echo $resultPengelolaanPerubahanLKI; ?></center></td>
      </tr>
      <tr>
        <td bgcolor="#44b2ef" style="height: 30px; padding-left: 3mm;"><strong>Fit (%)</strong></td>
        <?php
          for ($i = 1; $i <= 4 ;$i ++){
            if($i <= $standarLKJ){
              if($resultPengelolaanPerubahanFit <= 25){
                if($i == 1){
                  echo "<td bgcolor='#44b2ef'></td>";
                }else{
                  echo "<td bgcolor='#fff'></td>";
                }
              } elseif ($resultPengelolaanPerubahanFit <= 50){
                if($i <= 2){
                  echo "<td bgcolor='#44b2ef'></td>";
                }else{
                  echo "<td bgcolor='#fff'></td>";
                }
              } elseif ($resultPengelolaanPerubahanFit <= 75){
                if($i <= 3){
                  echo "<td bgcolor='#44b2ef'></td>";
                }else{
                  echo "<td bgcolor='#fff'></td>";
                }
              } elseif ($resultPengelolaanPerubahanFit <= 100){
                if($i <= 4){
                  echo "<td bgcolor='#44b2ef'></td>";
                }else{
                  echo "<td bgcolor='#fff'></td>";
                }
              }
            } else {
              echo "<td bgcolor='#fff'></td>";
            }
          }
        ?>
        <td><center><?php echo $resultPengelolaanPerubahanFit; ?></center></td>
      </tr>
      <tr>
        <td colspan="7" style="font-family: cambria; padding: 1mm 2mm 1mm 2mm; text-align: justify;"><?php echo $resultPengelolaanPerubahanUraian; ?></td>
      </tr>
      </tbody>
    </table>

    <?php echo $pagebreak; ?>
    <table width="100%" class="rekomendasi" style="font-family: cambria;">
      <thead>
        <tr bgcolor="#dadada">
          <td class="kode" style='height: 50px;' rowspan="2"><center><strong><h2>M-08</h2></strong></center></td>
          <td class="title" style='height: 20px; padding: 3mm; text-align: justify;' colspan="7"><strong>PENGAMBILAN KEPUTUSAN</stron></td>
        </tr>
        <tr bgcolor="#dadada">
          <td class="sub-title" style='font-family: cambria; height: 20px; padding: 3mm 2mm 2mm 2mm;' colspan="7">Kemampuan membuat keputusan yang baik secara tepat waktu dan
            dengan keyakinan diri setelah mempertimbangkan prinsip kehatihatian,
            dirumuskan secara sistematis dan seksama berdasarkan
            berbagai informasi, alternatif pemecahan masalah dan
            konsekuensinya, serta bertanggung jawab atas keputusan yang
            diambil.</td>
        </tr>
      </thead>
    </thead>
      <tbody>
      <tr>
        <td style="width:150px; height: 30px; padding-left: 3mm;" bgcolor="#fff400"><strong>Standar (LKJ) </strong></td>
        <?php
          for ($i = 1; $i <= 4 ;$i ++){
            if($i <= $standarLKJ){
              echo "<td bgcolor='#fff400' style='width: 70px;'></td>";
            } else {
              echo "<td bgcolor='#ffffff' style='width: 70px;'></td>";
            }
          }
        ?>
        <td><center><?php echo $standarLKJ; ?></center></td>
      </tr>
      <tr>
        <td bgcolor="#f8bf17" style="height: 30px; padding-left: 3mm;"><strong>Individu (LKI) </strong></td>
        <?php
          for ($i = 1; $i <= 4 ;$i ++){
            if($i <= $resultPengambilanKeputusanLKI){
              echo "<td bgcolor='#f8bf17'></td>";
            } else {
              echo "<td bgcolor='#ffffff' style='width: 70px;'></td>";
            }
          }
        ?>
        <td><center><?php echo $resultPengambilanKeputusanLKI; ?></center></td>
      </tr>
      <tr>
        <td bgcolor="#44b2ef" style="height: 30px; padding-left: 3mm;"><strong>Fit (%)</strong></td>
        <?php
          for ($i = 1; $i <= 4 ;$i ++){
            if($i <= $standarLKJ){
              if($resultPengambilanKeputusanFit <= 25){
                if($i == 1){
                  echo "<td bgcolor='#44b2ef'></td>";
                }else{
                  echo "<td bgcolor='#fff'></td>";
                }
              } elseif ($resultPengambilanKeputusanFit <= 50){
                if($i <= 2){
                  echo "<td bgcolor='#44b2ef'></td>";
                }else{
                  echo "<td bgcolor='#fff'></td>";
                }
              } elseif ($resultPengambilanKeputusanFit <= 75){
                if($i <= 3){
                  echo "<td bgcolor='#44b2ef'></td>";
                }else{
                  echo "<td bgcolor='#fff'></td>";
                }
              } elseif ($resultPengambilanKeputusanFit <= 100){
                if($i <= 4){
                  echo "<td bgcolor='#44b2ef'></td>";
                }else{
                  echo "<td bgcolor='#fff'></td>";
                }
              }
            } else {
              echo "<td bgcolor='#fff'></td>";
            }
          }
        ?>
        <td><center><?php echo $resultPengambilanKeputusanFit; ?></center></td>
      </tr>
      <tr>
        <td colspan="7" style="font-family: cambria; padding: 1mm 2mm 1mm 2mm; text-align: justify;"><?php echo $resultPengambilanKeputusanUraian; ?></td>
      </tr>
      </tbody>
    </table>

    <?php echo $pagebreak; ?>
    <h3 style="font-family: cambria; font-size: 20px;">B. KOMPETENSI SOSIAL KULTURAL</h3>
    <table width="100%" class="rekomendasi" style="font-family: cambria;">
      <thead>
        <tr bgcolor="#dadada">
          <td class="kode" style='height: 50px;' rowspan="2"><center><strong><h2>SK-01</h2></strong></center></td>
          <td class="title" style='height: 20px; padding: 3mm; text-align: justify;' colspan="7"><strong>PEREKAT BANGSA</stron></td>
        </tr>
        <tr bgcolor="#dadada">
          <td class="sub-title" style='font-family: cambria; height: 20px; padding: 3mm 2mm 2mm 2mm;' colspan="7">Kemampuan dalam mempromosikan sikap toleransi, keterbukaan,
            peka terhadap perbedaan individu/kelompok masyarakat; mampu
            menjadi perpanjangan tangan pemerintah dalam mempersatukan
            masyarakat dan membangun hubungan sosial psikologis dengan
            masyarakat di tengah kemajemukan Indonesia sehingga menciptakan
            kelekatan yang kuat antara ASN dan para pemangku kepentingan
            serta diantara para pemangku kepentingan itu sendiri; menjaga,
            mengembangkan, dan mewujudkan rasa persatuan dan kesatuan
            dalam kehidupan bermasyarakat, berbangsa dan bernegara Indonesia</td>
        </tr>
      </thead>
    </thead>
      <tbody>
      <tr>
        <td style="width:150px; height: 30px; padding-left: 3mm;" bgcolor="#fff400"><strong>Standar (LKJ) </strong></td>
        <?php
          for ($i = 1; $i <= 4 ;$i ++){
            if($i <= $standarLKJ){
              echo "<td bgcolor='#fff400' style='width: 70px;'></td>";
            } else {
              echo "<td bgcolor='#ffffff' style='width: 70px;'></td>";
            }
          }
        ?>
        <td><center><?php echo $standarLKJ; ?></center></td>
      </tr>
      <tr>
        <td bgcolor="#f8bf17" style="height: 30px; padding-left: 3mm;"><strong>Individu (LKI) </strong></td>
        <?php
          for ($i = 1; $i <= 4 ;$i ++){
            if($i <= $resultPerekatBangsaLKI){
              echo "<td bgcolor='#f8bf17'></td>";
            } else {
              echo "<td bgcolor='#ffffff' style='width: 70px;'></td>";
            }
          }
        ?>
        <td><center><?php echo $resultPerekatBangsaLKI; ?></center></td>
      </tr>
      <tr>
        <td bgcolor="#44b2ef" style="height: 30px; padding-left: 3mm;"><strong>Fit (%)</strong></td>
        <?php
          for ($i = 1; $i <= 4 ;$i ++){
            if($i <= $standarLKJ){
              if($resultPerekatBangsaFit <= 25){
                if($i == 1){
                  echo "<td bgcolor='#44b2ef'></td>";
                }else{
                  echo "<td bgcolor='#fff'></td>";
                }
              } elseif ($resultPerekatBangsaFit <= 50){
                if($i <= 2){
                  echo "<td bgcolor='#44b2ef'></td>";
                }else{
                  echo "<td bgcolor='#fff'></td>";
                }
              } elseif ($resultPerekatBangsaFit <= 75){
                if($i <= 3){
                  echo "<td bgcolor='#44b2ef'></td>";
                }else{
                  echo "<td bgcolor='#fff'></td>";
                }
              } elseif ($resultPerekatBangsaFit <= 100){
                if($i <= 4){
                  echo "<td bgcolor='#44b2ef'></td>";
                }else{
                  echo "<td bgcolor='#fff'></td>";
                }
              }
            } else {
              echo "<td bgcolor='#fff'></td>";
            }

          }
        ?>
        <td><center><?php echo $resultPerekatBangsaFit; ?></center></td>
      </tr>
      <tr>
        <td colspan="7" style="font-family: cambria; padding: 1mm 2mm 1mm 2mm; text-align: justify;"><?php echo $resultPerekatBangsaUraian; ?></td>
      </tr>
      </tbody>
    </table>
    <?php echo $footerReport;?>
  </article>
</section>
<section class="sheet padding-25mm">
  <div class="headerReport" style="color: #d5d5d5; font-family:cambria; font-size: 16px;">
    <h2>RAHASIA</h2>
  </div>
  <article>
    <div class='left' style="color: #d5d5d5; font-family:cambria; font-size: 12px">
      <h6>
      <b><?php echo $assesseeModel->nama_lengkap; ?></b><br/>
      <?php echo $assesseeModel->jabatan_saat_ini; ?></h6>
    </div>
    <div class='center' style="font-family: cambria;">
      <h2 class="judul">KESIMPULAN</h2>
      <div style="width:100%; height:0%; border: 2px solid #000;"></div>
      <div style="width:100%; height:0%; border: 1px solid #000; margin-top: 2px;"></div>
    </div>
    <?php
      $htmltag = array('<p style="text-align: justify;">','<p></p>');
      $htmlesc   = array('<p>','');
    ?>
    <div style="font-size: 18px; font-family: cambria; font-weight: 700; margin-top: 10px;">
      <span class="sub-judul">HAL HAL POSITIF YANG MENUNJANG TAMPILNYA KINERJA YANG OPTIMAL :</span>
    </div>
    <div style="margin-bottom:20px;text-align:justify;text-justify:inter-word;font-size: 18; font-family: cambria;";>
      <p><?php echo $activityModel->kekuatan; ?></p>
    </div>

    <div style="width:100%; height:0%; border: 2px solid #000;"></div>
    <div style="width:100%; height:0%; border: 1px solid #000; margin-top: 2px;"></div>
    <div style="font-size: 18px; font-family: cambria; font-weight: 700; margin-top: 10px;">
      <span class="sub-judul">HAL HAL NEGATIF YANG MENGHAMBAT TAMPILNYA KINERJA YANG OPTIMAL :</span>
    </div>
    <?php
      $htmltag = array('<p style="text-align: justify;">','<p></p>');
      $htmlesc   = array('<p>','');
    ?>
    <div style="margin-bottom:10px;text-align:justify;text-justify:inter-word;font-size: 18; font-family: cambria;";>
      <p><?php
        // $totalWordNegatif = strlen($activityModel->kelemahan);
        $totalWordPositif = strlen($activityModel->kekuatan);
        // $stringNegatif = $activityModel->kelemahan;
        // // 1141 + 1035 = 3087 strlen
        // $totalWord = $totalWordNegatif + $totalWordPositif;
        //
        $splitWord = 2475 - $totalWordPositif;
        // $stringSplit = str_split($stringNegatif, $splitWord);
        // if(count($stringSplit) <= 1){
        //   echo $stringSplit[0];
        // } else {
        //   echo $stringSplit[0];
        //   echo $pagebreakResume;
        //   echo $stringSplit[1];
        // }
        echo wordwrap(str_replace($htmltag, $htmlesc, $activityModel->kelemahan), $splitWord,  $pagebreakResume, true);
      ?></p>
    </div>
    <?php echo $footerReport;?>
  </article>
</section>
<section class="sheet padding-25mm">
  <div class="headerReport judul">
    <h2>RAHASIA</h2>
  </div>
  <article style="margin-top: -20px;">
    <div class='left' style="color: #d5d5d5; font-family:cambria; font-size: 12px;">
      <h6>
      <b><?php echo $assesseeModel->nama_lengkap; ?></b><br/>
      <?php echo $assesseeModel->jabatan_saat_ini; ?></h6>
    </div>
    <div class='center' style="font-family: cambria;">
      <h3 class="sub-judul">SARAN PENGEMBANGAN</h3>
      <div style="width:100%; height:0%; border: 2px solid #000;"></div>
      <div style="width:100%; height:0%; border: 1px solid #000; margin-top: 2px;"></div>
    </div>
    <?php
      $htmltag = array('<p style="text-align: justify;">','<p></p>');
      $htmlesc   = array('<p>','');
    ?>
    <div style="margin-bottom:60px;text-align:justify;text-justify:inter-word; font-size: 18px; font-family: cambria;";>
      <?php echo wordwrap(str_replace($htmltag, $htmlesc, $activityModel->saran), 2500,  $pagebreak, false);?>
    </div>
    <?php echo $footerReport;?>
  </article>
</section>
</body>
