<?php
 
 namespace Tests\Feature;
 use Illuminate\Foundation\Testing\RefreshDatabase;
 use Illuminate\Foundation\Testing\WithFaker;
 use Tests\TestCase;
 
class GradeValidationTest extends TestCase
{
    
    public function testGradeNameValidation()
    {

        $data = ['grade_name' => 'test'];
        $response = $this->post('/api/school/grade/store', $data);
        $response->assertStatus(200);
        $this->assertDatabaseHas('grades', $data);
    }


}