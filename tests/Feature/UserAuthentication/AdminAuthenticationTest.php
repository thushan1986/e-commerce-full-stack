<?php

namespace Tests\Feature\UserAuthentication;



use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;


class AdminAuthenticationTest extends TestCase
{
    use RefreshDatabase;


    public function test_admin_user_can_sign_in()
    {
        //A - Arrange test data for test data

       $user = User::factory()->create();

       $userLoginDetails = [
           'email' => $user->email,
           'password' => '12345678'
       ];



        //A - Action the test case

        $response = $this->post('api/user-sign-in',$userLoginDetails);

        dd($response->json());

        //A - Assertion the test outcome

        $response->assertStatus(200);
        $response->assertJsonStructure([
           'first_name' ,
            'last_name',
            'user_token'
        ]);


    }


}
