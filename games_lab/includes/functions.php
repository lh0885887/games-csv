<?php
function esc_html(string $text): string
{
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}

function read_csv_rows(string $path): array
{
    if (is_file($path) === true)
    {
        $fp = fopen($path, 'rb');

        while(!feof($fp))
        {
            $result[] = fgetcsv($fp);
        }
        return $result;

    }
    else
    {
        return [];
    }
}
?>