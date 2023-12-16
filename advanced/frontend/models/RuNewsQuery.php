<?php

/**   
* Team: BOSHATEAM   
* Coding by Que MingKai 2113601   
*          2023/2/5   
* Nuclear Contamination news table query class   
*/

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[RuNews]].
 *
 * @see RuNews
 */
class RuNewsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return RuNews[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return RuNews|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
