<?php
/**
 *  Team: BOSHATEAM
 *  Coding by Luo XinKe 2112893
 *            2023/2/8
 *  Russia-Ukraine war weapons display
 */
namespace frontend\models;

/**
 * This is the ActiveQuery class for [[WeaponCountry]].
 *
 * @see WeaponCountry
 */
class WeaponCountryQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return WeaponCountry[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return WeaponCountry|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
