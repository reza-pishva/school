<?php
 
 namespace Tests\Feature;
 use Illuminate\Foundation\Testing\DatabaseTransactions;
 use Tests\TestCase;
 
class ExamTest extends TestCase
{
    use DatabaseTransactions;

    public function test_store_exam()
    {
        $data = [
            'lesson_id '=>1, 
            'exam_type_id  '=>1,
            'grade_id  '=>1,        
        ];
        $response = $this->post('/api/school/exam/store', $data);
        $response->assertStatus(200);
        $this->assertDatabaseHas('exams', $data);
    }
    public function test_update_exam()
    {
        $data = [
            'lesson_id '=>1, 
            'exam_type_id  '=>1,
            'grade_id  '=>1,        
        ];
        $response = $this->put('/api/school/exam/update/2', $data);
        $response->assertStatus(200);
    }
    public function test_get_exam_by_id()
    {
        $response = $this->get('/api/school/exam/2');
        $response->assertStatus(200);
    }
    public function test_get_exams()
    {
        $response = $this->get('/api/school/exam/exams');
        $response->assertStatus(200);
    }
    public function test_remove_exam()
    {
        $response = $this->delete('/api/school/exam/remove/2');
        $response->assertStatus(200);
    }

}