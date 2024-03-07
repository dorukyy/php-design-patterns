<?php

use App\CustomerIsGold;
use App\CustomersRepository;
use PHPUnit\Framework\TestCase;
use App\Customer;
use Illuminate\Database\Capsule\Manager as DB;

class CustomersRepositoryTest extends TestCase
{

    protected $customers;

    public function setUp(): void
    {
        $this->setUpDatabase();
        $this->migrateTables();
        $this->customers = new CustomersRepository;
    }

    public function setUpDatabase()
    {
        $database = new DB;
        $database->addConnection([
            'driver' => 'sqlite',
            'database' => ':memory:'
        ]);

        $database->bootEloquent();
        $database->setAsGlobal();

    }

    /** @test */
    public function it_fetches_all_customers()
    {
        $results = $this->customers->all();

        $this->assertCount(2, $results);

    }

    /** @test */
    public function it_fetches_all_customers_whp_match_a_given_specification()
    {
        $results = $this->customers->matchingSpecification(new CustomerIsGold);
        $this->assertCount(1, $results);
    }

    protected function migrateTables()
    {
        DB::schema()->create('customers', function ($table) {
            $table->increments('id');
            $table->string('name');
            $table->string('type');
            $table->timestamps();
        });

        Customer::create(['name' => 'Joe', 'type' => 'gold']);
        Customer::create(['name' => 'Jane', 'type' => 'silver']);
    }
}