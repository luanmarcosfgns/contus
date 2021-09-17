<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VisualizadorTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VisualizadorTable Test Case
 */
class VisualizadorTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\VisualizadorTable
     */
    protected $Visualizador;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Visualizador',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Visualizador') ? [] : ['className' => VisualizadorTable::class];
        $this->Visualizador = $this->getTableLocator()->get('Visualizador', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Visualizador);

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
