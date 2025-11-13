<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Analiza i Przetwarzanie Danych Tablicowych</title>
</head>
<body>
  
   <?php



$tab1 = [7, 3, 1, 6, 9, 5, 4, 10, 2, 2];


echo "<h2>Krok 1: Inicjalizacja i Odczyt</h2>";
echo "Tablica tab1: <pre>";
print_r($tab1);
echo "</pre>";

echo "Zawartość 5. komórki (indeks 4): <strong>" . $tab1[4] . "</strong><br><br>";



$tab1[6] = 12;

echo "<h2>Krok 2: Modyfikacja Danych</h2>";
echo "Po zmianie 7. komórki (indeks 6) na 12:<br>";
echo "<pre>";
print_r($tab1);
echo "</pre>";



$tab2 = [];
for ($i = 0; $i < count($tab1); $i++) {
    $tab2[$i] = $tab1[$i];
}

echo "<h2>Krok 3: Kopiowanie</h2>";
echo "Tablica tab2 (kopia tab1):<br><pre>";
print_r($tab2);
echo "</pre>";



$tab3 = [];
for ($i = 0; $i < count($tab1); $i++) {
    $tab3[$i] = $tab1[$i] + $tab2[$i];
}

echo "<h2>Krok 4: Sumowanie Indeksów</h2>";
echo "Tablica tab3 (suma tab1 + tab2):<br><pre>";
print_r($tab3);
echo "</pre>";



$tab2 = [];
for ($i = count($tab1) - 1; $i >= 0; $i--) {
    $tab2[] = $tab1[$i];
}

echo "<h2>Krok 5: Odwrócenie Kolejności</h2>";
echo "Tablica tab2 (odwrócona wersja tab1):<br><pre>";
print_r($tab2);
echo "</pre>";
?>

</body>
</html>