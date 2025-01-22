<?php

function printTable($data) {
    if (empty($data)) {
        echo "<p>Brak danych do wyświetlenia.</p>";
        return;
    }

    echo "<table border='1' cellpadding='5' cellspacing='0' style='border-collapse: collapse; width: 100%;'>";
    echo "<thead>";
    echo "<tr>";

    foreach (array_keys($data[0]) as $header) {
        echo "<th style='background-color: #f2f2f2; text-align: left;'>$header</th>";
    }

    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    foreach ($data as $row) {
        echo "<tr>";
        foreach ($row as $cell) {
            echo "<td>$cell</td>";
        }
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
}