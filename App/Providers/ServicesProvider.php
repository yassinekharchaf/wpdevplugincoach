<?php

namespace App\Providers;

class ServicesProvider
{
  /**
   * Enregistrement des providers. Nous chargeons tout les providers du fichier config providers.php et nous lançons leur méthode 'boot' pour le démarrage.
   *
   * @return void
   */
  public static function register()
  {
    $providers = config('providers');

    foreach ($providers as $provider) {
      call_user_func([$provider, 'boot']);
    }
  }
}
