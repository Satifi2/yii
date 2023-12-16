<?php

/**   
* Team: BOSHATEAM   
* Coding by Que MingKai 2113601   
*          2023/2/12
* Nuclear Contamination weapons's producer country number query class
*/

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[CountryNum]].
 *
 * @see CountryNum
 */
class CountryNumQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return CountryNum[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return CountryNum|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
