<?php

namespace Tests\Feature;

use App\Models\Wp_User;
use App\Models\Wp_Usermeta;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FormSubmissionTest extends TestCase
{

    use WithFaker, RefreshDatabase;

    // public function __construct()
    // {
    //     $this->setUpFaker();
    // }



    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_form_submission()
    {

        $formData = [
            'name' => $this->faker->name(),
            'phone_number' => $this->faker->PhoneNumber(),
            'email' => $this->faker->email(),
            'budget' => $this->faker->randomNumber(5),
            'message' => $this->faker->text(),
        ];


        //Create the customer and check if there is a change in route i.e redirection
        $this->post(route('save_customer'), $formData)
             ->assertStatus(302);

    }


    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_success_customer_profile_export()
    {

        //Export the customer
        $this->post(route('migrate_user', 1))
             ->assertStatus(200);

    }



    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_failed_customer_profile_export()
    {

        //Export the customer
        $this->post(route('migrate_user', $this->faker->randomNumber(3)))
             ->assertStatus(404);

    }

}
