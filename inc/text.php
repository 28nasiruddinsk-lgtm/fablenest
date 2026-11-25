<?php
// Title Case for headings (AP style): small words (a, the, and, of, to, in, by ...) stay lower-case except first and last word.
// Acronyms and words that already have capitals inside (ISBN, KDP, IngramSpark) are left alone.
function tc(string $s): string
{
    static $small = ['a', 'an', 'the', 'and', 'but', 'or', 'nor', 'for', 'as', 'at', 'by', 'in', 'of', 'on', 'to', 'up', 'vs', 'via', 'per'];
    $words = explode(' ', $s);
    $last = count($words) - 1;
    $afterColon = true;
    foreach ($words as $i => $w) {
        if ($w === '') continue;
        $parts = explode('-', $w);
        foreach ($parts as $j => $p) {
            if ($p === '' || preg_match('/\p{Lu}.*\p{Lu}|\d/u', $p)) continue;
            $core = mb_strtolower(preg_replace('/^[^\p{L}]+|[^\p{L}]+$/u', '', $p));
            $edge = ($i === 0 && $j === 0) || ($i === $last && $j === count($parts) - 1) || $afterColon && $j === 0;
            $lower = in_array($core, $small, true) && !$edge;
            if ($lower) { $parts[$j] = mb_strtolower($p); continue; }
            $parts[$j] = preg_replace_callback('/\p{L}/u', fn($m) => mb_strtoupper($m[0]), $p, 1);
        }
        $words[$i] = implode('-', $parts);
        $afterColon = substr($w, -1) === ':';
    }
    return implode(' ', $words);
}
// A heading drawn in several lines: title-case the whole sentence, then cut it back into the same lines.
function tc_lines(array $lines): array
{
    $counts = array_map(fn($l) => count(array_filter(explode(' ', $l), 'strlen')), $lines);
    $words = array_values(array_filter(explode(' ', tc(implode(' ', $lines))), 'strlen'));
    $out = []; $pos = 0;
    foreach ($counts as $n) { $out[] = implode(' ', array_slice($words, $pos, $n)); $pos += $n; }
    return $out;
}
