<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;
use Modules\Front\App\Models\Card;
use Modules\Front\App\Models\Product;
use Modules\Front\App\Models\ProductPrice;
use Modules\User\App\Models\Comment;
use Tests\TestCase;

class ProductTest extends TestCase
{
    const USER_ID = 21;
    const PRODUCT_ID = 1;
    public $model_product_price;
    public $model_product;
    public $model_comment;
    public $model_card;
    private $model_request;
    private $request_comment;
    private $request_delete_card;
    public function setUp() : void
    {
        parent::setUp();

        auth()->login(User::find(21));

        $this->model_product_price = new ProductPrice();

        $this->model_product = new Product();

        $this->model_comment = new Comment();

        $this->model_card = new Card();

        $this->model_request = new Request();

        $this->request_comment = $this->model_request->replace(['title' => 'test_3', 'body' => 'test_3']);

        $this->request_delete_card = $this->model_request->replace(['mode' => 'one', 'id' => 8]);

    }
    public function test_send_product_card(): void
    {

        $this->assertTrue(auth()->check());

        $this->assertTrue($this->model_product_price->hasProduct(self::PRODUCT_ID));

        $this->model_card->addCard(self::USER_ID, self::PRODUCT_ID);

        $this->assertTrue($this->model_card->hasProduct(self::USER_ID, self::PRODUCT_ID));

    }

    public function test_new_comment_for_product():void
    {

        $this->assertTrue(auth()->check());

        $this->assertTrue($this->model_product->hasProduct(self::PRODUCT_ID));

        if ($this->model_comment->hasComment(self::USER_ID, self::PRODUCT_ID)) {

            $this->assertTrue(true);

        } else {

            $this->model_comment->addComment($this->request_comment, self::USER_ID, self::PRODUCT_ID);

            $gfc = $this->getFirstComment();

            $this->assertEquals(self::USER_ID, $gfc->user_id);

            $this->assertEquals(self::PRODUCT_ID, $gfc->product_id);

        }

    }

    private function getFirstComment()
    {
        return $this->model_comment->latest('id')->first();
    }

    public function test_save_vote_for_product():void
    {
        cookie('test-vote', '80', 60);

        dd($this->model_request->cookie('test-vote'));
    }

    public function test_delete_product_for_card(): void
    {
        $this->model_card->popCard($this->request_delete_card);
    }
}
