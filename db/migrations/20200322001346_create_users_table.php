<?php

use Phinx\Migration\AbstractMigration;

class CreateUsersTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    addCustomColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Any other destructive changes will result in an error when trying to
     * rollback the migration.
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $table = $this->table('users');
        $table->addColumn('names', 'string')
        ->addColumn('lastnames', 'string')
        ->addColumn('vid', 'string')
        ->addColumn('address', 'string')
        ->addColumn('sex', 'string')
        ->addColumn('contact', 'string')
        ->addColumn('email', 'string')
        ->addColumn('user', 'string')
        ->addColumn('password', 'string')
        ->addColumn('admin', 'boolean')
        ->addColumn('created_at', 'datetime')
        ->addColumn('updated_at', 'datetime')
        ->addColumn('deleted_at', 'datetime')
        ->create();
    }
}
