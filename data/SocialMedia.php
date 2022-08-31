<?php

/**
 * final class merupak class yang tidak bisa lagi diturunkan
 * final juga bisa diterapkan di function jadi ketika di set final maka secara otomatis function tersebut tidak bisa di overaid
 */
class SocialMedia
{
    public string $name;
}

 class Facebook extends SocialMedia
{
   final public function login(string $username, string $password) : bool
    {
        return true;
    }
}
//error
class FakeFacebook extends Facebook
{  //otomatis error
    public function login(string $username, string $password): bool
    {
      return false;
    }
}