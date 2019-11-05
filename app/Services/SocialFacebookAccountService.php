<?php
namespace App\Service;

use Laravel\Socialite\Contracts\User as ProviderUser;

class SocialFacebookAccountService
{
   public function createOrGetUser(ProviderUser $providerUser)
   {
      // Get the Social Account if it's already in the system
      $account = SocialAccount::whereProvider('facebook')
               ->whereProviderUserId($providerUser->getId())
               ->first();
   }
}