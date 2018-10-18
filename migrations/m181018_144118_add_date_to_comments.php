<?php

use yii\db\Migration;

/**
 * Class m181018_144118_add_date_to_comments
 */
class m181018_144118_add_date_to_comments extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('comment', 'date', $this->date());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('comment', 'data');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181018_144118_add_date_to_comments cannot be reverted.\n";

        return false;
    }
    */
}
