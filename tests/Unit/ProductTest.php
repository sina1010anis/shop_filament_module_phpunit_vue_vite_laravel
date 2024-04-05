<?php

namespace Tests\Unit;

use App\Models\User;
use Modules\Front\App\Models\Card;
use Modules\Front\App\Models\ProductPrice;
use Tests\TestCase;

class ProductTest extends TestCase
{
    const USER_ID = 21;
    const PRODUCT_ID = 2;
    public $model_product_price;
    public $model_card;
    public function setUp() : void
    {
        parent::setUp();
        auth()->login(User::find(21));
        $this->model_product_price = new ProductPrice();
        $this->model_card = new Card();
    }
    public function test_send_product_card(): void
    {

        $this->assertTrue(auth()->check());

        $this->assertTrue($this->model_product_price->hasProduct(1));

        $this->model_card->addCard(self::USER_ID, self::PRODUCT_ID);

        $this->assertTrue($this->model_card->hasProduct(self::USER_ID, self::PRODUCT_ID));

    }
}
