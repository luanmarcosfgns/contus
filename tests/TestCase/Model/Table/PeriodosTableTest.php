<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PeriodosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PeriodosTable Test Case
 */
class PeriodosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PeriodosTable
     */
    protected $Periodos;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Periodos',
        'app.Contas',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Periodos') ? [] : ['className' => PeriodosTable::class];
        $this->Periodos = $this->getTableLocator()->get('Periodos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Periodos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
