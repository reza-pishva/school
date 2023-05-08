<?php
 
 namespace Tests\Feature;
 use Illuminate\Foundation\Testing\DatabaseTransactions;
 use Tests\TestCase;
 
class LessonTest extends TestCase
{
    use DatabaseTransactions;

    public function test_store_lesson_type()
    {
        $data = [
            'lesson_name'=>'test', 
            'grade_id'=>2,   
        ];
        $response = $this->post('/api/school/lesson/store', $data);
        $response->assertStatus(200);
        $this->assertDatabaseHas('lessons',$data);
    }
    public function test_update_lesson_type()
    {
        $data = [
            'lesson_name'=>'test', 
            'grade_id'=>2,   
        ];
        $response = $this->put('/api/school/lesson/update/1', $data);
        $response->assertStatus(200);
    }
    public function test_get_lesson_by_id()
    {
        $response = $this->get('/api/school/lesson/1');
        $response->assertStatus(200);
    }
    public function test_get_lessons_by_gradeid()
    {
        $response = $this->get('/api/school/lesson/lessons/2');
        $response->assertStatus(200);
    }
    public function test_remove_lesson()
    {
        $response = $this->delete('/api/school/lesson/remove/1');
        $response->assertStatus(200);
    }

}