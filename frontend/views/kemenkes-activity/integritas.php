<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\redactor\widgets\Redactor as Redactor;
use yii\web\View;
use yii\helpers\ArrayHelper;
use common\modules\catalog\models\RefAssessmentDictionary;
use yii\helpers\HtmlPurifier;
/* @var $this yii\web\View */
/* @var $model frontend\models\SetkabActivity */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => Yii::$app->params['projectName']. ' Activity',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', Yii::$app->params['projectName'] . ' Activities'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="setkab-activity-update">

    <h1>Aspek Kompetensi : Integritas</h1>
	<p>Konsisten berperilaku selaras dengan nilai, norma dan/atau etika organisasi, dan jujur dalam hubungan dengan manajemen, rekan kerja, bawahan langsung, dan pemangku kepentingan, menciptakan budaya etika tinggi, bertanggungjawab atas tindakan atau keputusan beserta risiko yang menyertainya.</p>
    <?php $form = ActiveForm::begin(); ?>
<?php


$keyvalue = 'integritas' . $model->integritas_lki;
$indikators = RefAssessmentDictionary::find()->andWhere(['key' => $keyvalue])->andWhere(['>', 'value',0])->asArray()->All();

$indikator = [
//    ['id' => '123', 'name' => 'aaa', 'class' => 'x'],
  //  ['id' => '124', 'name' => 'bbb', 'class' => 'x'],
    //['id' => '345', 'name' => 'ccc', 'class' => 'y'],
];


$gap = $model->integritas_lki - $lkj->kompetensigram_integritas;
if ($gap > 0) {
	$gap = 0;
	}



$daftar_lki =  ['0' => '0','1' => '1 - Mampu bertindak sesuai nilai, norma,etika organisasi dalam kapasitas pribadi',
		'2' => '2 - Mampu mengingatkan, mengajak rekan kerja untuk bertindak sesuai nilai, norma, dan etika organisasi',
		'3' => '3 - Mampu memastikan, menanamkan keyakinan bersama agar anggota yang dipimpin bertindak sesuai nilai, norma, dan etika organisasi, dalam lingkup formal',
		 '4' => '4 - Mampu menciptakan situasi kerja yang mendorong kepatuhan pada nilai, norma, dan etika organisasi',
		 '5' => '5 - Mampu menjadi role model dalam penerapan standar keadilan dan etika di tingkat nasional'];




//$daftar_lki = ArrayHelper::map($indikators, 'value', 'textvalue');
echo    $form->field($model, 'integritas_lki')->dropDownList($daftar_lki, ['prompt' => 'select...']);
echo Html::submitButton(Yii::t('app', 'Simpan LKI'), ['class' =>'btn btn-primary', 'value' => 'refresh', 'name'=>'submit2']);
echo '<h3>LKI = ' . $model->integritas_lki . '</h3>';
echo '<h3>LKJ = ' . $lkj->kompetensigram_integritas . '</h3>';
echo '<h3>GAP = ' . $gap . '</h3>';
echo '<hr/>';
$uraian_aspek = $model->integritas_lki;
if (isset($daftar_lki[$uraian_aspek] )) {
	echo '<h3>' . $daftar_lki[$uraian_aspek] . '</h3>';
} else {

}

//echo Html::a('Profile', ['', 'id' => $model->id], ['class' => 'btn btn-primary']);
echo '<p>';
				echo Html::label('Indikator Perilaku', 'integritas_lki');
				echo '</p>';
				echo Html::activeCheckboxList($model, 'indikatorarrayintegritas', ArrayHelper::map($indikators, 'value', 'textvalue'));

                                echo Html::submitButton(Yii::t('app', 'Tunjukkan usulan uraian'), ['class' =>'btn btn-primary', 'value' => 'refresh', 'name'=>'submit2']);
                                echo '<hr/>';
				echo '<p>';

				$uraian_kamus = "";

				$activeIndikators = explode(',', str_replace(['[', ']', '"'], '', $model->integritas_indikator));
				foreach($activeIndikators as $activeIndikator) {
					foreach($indikators as $indikator) {
						if ($indikator['value'] == $activeIndikator) {
							$uraian_kamus .= $indikator['textvalue'] . "\n";
						}
					}
				}

				echo Html::label('Uraian Kamus', 'uraian_kamus');
				echo '</p>';
echo '<p>';


				echo Html::textArea('uraian_kamus', $uraian_kamus,['readonly' => true, 'rows' => '6', 'cols' => '100', 'disable' => true]);
				echo '</p>';


echo '<p>';


	echo $form->field($model, 'integritas_uraian')->widget(\yii\redactor\widgets\Redactor::className(), [

    'clientOptions' => [
		'plugins' => ['clips', 'fontcolor','fullscreen', 'counter']
    ]
]);

$dom = new DOMDocument;
$li_count = 0;
$word_count = 0;

if (!empty($model->integritas_uraian)) {
$dom->loadHTML(HtmlPurifier::process($model->integritas_uraian));

$new_element = $dom->createElement('test', ' ');
    foreach($dom->getElementsByTagName('li') as $li) {
        $li_count = $li_count + str_word_count(strip_tags($li->textContent));
    }



	   $replaced_dom = preg_replace('#\<(.+?)\>#', ' ', $dom->saveHTML());
	   $word_count = preg_match_all("/[\w]+/i", html_entity_decode(strip_tags($replaced_dom), ENT_QUOTES));
        $word_count = str_word_count(strip_tags($replaced_dom));
}
		$total_count = $word_count;
		

echo $hint_text = 'words : ' . $total_count. ' , characters : ' . strlen(str_replace(' ','',strip_tags($model->integritas_uraian)));
			echo '</p>';
?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Simpan Uraian') : Yii::t('app', 'Update Uraian'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary', 'value' => 'update', 'name' => 'submit2']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>





<?php

			$this->registerJs(
    "$(function(){
    $('#setkabactivity-integritas_lki').change(function(){


    });
});",
    View::POS_READY,
    'my-button-handler'
);


?>
