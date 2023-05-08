<?php
 
 namespace Tests\Feature;
 
 use Illuminate\Foundation\Testing\RefreshDatabase;
 use Illuminate\Foundation\Testing\WithoutMiddleware;
 use Illuminate\Http\UploadedFile;
 use Illuminate\Support\Facades\Storage;
 use Tests\TestCase;
 
class UserTest extends TestCase
{
    /**
     * A basic test example.
     */

    public function test_store_user()
    {
        $data = [
            'f_name'=>'1',
            'l_name'=>'2',
            'father_name'=>'3',
            'national_code'=>'4',
            'gender'=>'1',
            'role'=>'1',
            'email'=>'rpishva888@gmail.com',
            'password'=>'1111111',
        ];
        $response = $this->post('/api/school/user/store', $data);
        $response->assertStatus(200);
        $this->assertDatabaseHas('users', $data);
    }
}