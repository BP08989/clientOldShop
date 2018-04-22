<?php

namespace BPashkevich\CatalogBundle\Helper;

class Methods
{
    /**
     * @param $url
     * @param array $conditions
     * @return array
     */
    public static function sendRequest($url, $conditions = [])
    {
        if ($curl = curl_init()) {
            curl_setopt ($curl, CURLOPT_URL, $url);
            curl_setopt ($curl, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt ($curl, CURLOPT_HEADER, 0);
            foreach ($conditions as $option => $value) {
                curl_setopt ($curl, CURLOPT_POSTFIELDS, $option . '=' . $value);
            }

            $result = curl_exec ($curl);
            curl_close ($curl);
        }
        else {
            $result = null;
        }

        return json_decode($result, true);
    }
}
