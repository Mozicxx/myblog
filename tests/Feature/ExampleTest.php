<?php

namespace Tests\Feature;

use App\Post;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        // $response = $this->get('/');

        // $response->assertStatus(200);

        $first = factory(Post::class)->create();

        $second = factory(Post::class)->create([
            'created_at' => \Carbon\Carbon::now()->subMonth()
        ]);

        $post = Post::archives();

        $this->assertCount(2, $post);
    }
}
