<?php

Use App\Http\Controllers\Admin\TimeController;

class TimeControllerTest extends TestCase
{
    /**
     * A basic functional test example.
     */
    
     

    
    public function testSumUp(){

        $calc=new TimeController;
    	$this->assertEquals(4, $calc->SumUp(2, 2));
    }

    public function testIndex(){
          $calc=new TimeController;
          //$response = $this->action('GET', $calc->index());
          $this->assertResponseStatus($calc->index());

        
    }
}
