<?php

namespace common\modules\catalog\models;

/**
 * This is the ActiveQuery class for [[RefAssessmentDictionary]].
 *
 * @see RefAssessmentDictionary
 */
class RefAssessmentDictionaryQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return RefAssessmentDictionary[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return RefAssessmentDictionary|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
