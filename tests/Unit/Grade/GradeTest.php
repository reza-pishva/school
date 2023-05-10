<?php
 
 namespace Tests\Feature;
 use Illuminate\Foundation\Testing\DatabaseTransactions;
 use Tests\TestCase;
 
class GradeTest extends TestCase
{
    use DatabaseTransactions;

    public function test_store_grade()
    {
        $data = [
            'grade_name'=>'test111111',            
        ];
        $response = $this->post('/api/school/grade/store', $data);
        $response->assertStatus(200);
        $this->assertDatabaseHas('grades', $data);
    }
    public function test_update_grade()
    {
        $data = [
            'grade_name'=>'test',            
        ];
        $response = $this->put('/api/school/grade/update/2', $data);
        $response->assertStatus(200);
    }
    public function test_get_grade_by_id()
    {
        $response = $this->get('/api/school/grade/2');
        $response->assertStatus(200);
    }
    public function test_get_grades()
    {
        $response = $this->get('/api/school/grade/grades');
        $response->assertStatus(200);
    }
    public function test_remove_grade()
    {
        $response = $this->delete('/api/school/grade/remove/2');
        $response->assertStatus(200);
    }

}