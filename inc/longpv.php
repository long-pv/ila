<?php
function getYoutubeEmbedUrl($input)
{
    if (filter_var($input, FILTER_VALIDATE_URL)) {
        return $input;
    } else if (preg_match('/<iframe[^>]+src=["\']([^"\']+)["\']/i', $input, $matches)) {
        $url = $matches[1];
        $parsedUrl = parse_url($url);
        $cleanUrl = $parsedUrl['scheme'] . '://' . $parsedUrl['host'] . $parsedUrl['path'];

        return $cleanUrl;
    }

    return '';
}
