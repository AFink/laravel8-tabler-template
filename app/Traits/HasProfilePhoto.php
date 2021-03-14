<?php

namespace App\Traits;

trait HasProfilePhoto
{
    /**
     * Get the default profile photo URL if no profile photo has been uploaded.
     *
     * @return null
     */
    public function defaultProfilePhotoUrl()
    {
        return null;
    }

    /**
     * Get the models acronym.
     *
     * @return string
     */
    function acronym()
    {
        $words = preg_split("/[\s,_-]+/", $this->name);
        $acronym = "";

        foreach ($words as $w) {
            $acronym .= $w[0];
        }
        return $acronym;
    }
}
