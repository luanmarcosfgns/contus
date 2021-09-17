<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Visualizador Model
 *
 * @method \App\Model\Entity\Visualizador newEmptyEntity()
 * @method \App\Model\Entity\Visualizador newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Visualizador[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Visualizador get($primaryKey, $options = [])
 * @method \App\Model\Entity\Visualizador findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Visualizador patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Visualizador[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Visualizador|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Visualizador saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Visualizador[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Visualizador[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Visualizador[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Visualizador[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class VisualizadorTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('visualizador');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('label')
            ->maxLength('label', 100)
            ->requirePresence('label', 'create')
            ->notEmptyString('label');

        $validator
            ->scalar('visualizacao')
            ->requirePresence('visualizacao', 'create')
            ->notEmptyString('visualizacao');

        return $validator;
    }
}
