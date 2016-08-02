<?php

if (!function_exists('http-chunked-decode')) {
    /**
     * dechunk an http 'transfer-encoding: chunked' message
     *
     * @param string $chunk the encoded message
     *
     * @return string the decoded message.  If $chunk wasn't encoded properly it will be returned unmodified.
     */
    function http_chunked_decode($chunk)
    {
        $pos = 0;

        $len = strlen($chunk);

        $dechunk = null;

        while (($pos < $len) && ($chunkLenHex = substr(
                $chunk,
                $pos,
                ($newlineAt = strpos($chunk, "\n", $pos + 1)) - $pos
            ))) {
            if (!is_hex($chunkLenHex)) {
                trigger_error('Value is not properly chunk encoded', E_USER_WARNING);

                return $chunk;
            }

            $pos = $newlineAt + 1;

            $chunkLen = hexdec(rtrim($chunkLenHex, "\r\n"));

            $dechunk .= substr($chunk, $pos, $chunkLen);

            $pos = strpos($chunk, "\n", $pos + $chunkLen) + 1;
        }

        return $dechunk;
    }
}
