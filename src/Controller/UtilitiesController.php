<?php
namespace src\Controller;

class UtilitiesController
{
    public function getRender(string $urlTemplate, array $args=[]): string
    {
        if (file_exists(PLUGIN_PATH.$urlTemplate)) {
            return vsprintf(file_get_contents(PLUGIN_PATH.$urlTemplate), $args);
        } else {
            $msgError = 'Fichier '.$urlTemplate
                . ' introuvable.<br>Vérifier le chemin ou la présence.';
            //throw new \Exception($msgError);
            return $msgError;
        }
    }
}
