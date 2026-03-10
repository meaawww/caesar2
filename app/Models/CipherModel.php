<?php

namespace App\Models;

class CipherModel
{
    public function encrypt($text, $shift)
    {
        return $this->process($text, $shift);
    }

    public function decrypt($text, $shift)
    {
        return $this->process($text, -$shift);
    }

    private function process($text, $shift)
    {
        $result = "";

        for ($i = 0; $i < strlen($text); $i++) {
            $char = $text[$i];

            if (ctype_alpha($char)) {
                $base = ctype_upper($char) ? ord('A') : ord('a');
                $result .= chr((ord($char) - $base + $shift + 26) % 26 + $base);
            } else {
                $result .= $char;
            }
        }

        return $result;
    }
}
