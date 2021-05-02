<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Boris Roßbach, Kathrin Hapke">
    <title>Ausbaustufe 1</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
</head>
<body class="p-3 mb-2 bg-light text-black">
<div class="container">
    <header>
        <h1 class="text-center">Ausbaustufe 1</h1>
    </header>
    <main>
        <form>
            <input type="hidden" value="id">
            <div class="form-group">
                <label for="titel">Titel</label>
                <input type="text" id="titel" name="titel" placeholder="Bitte Titel eingeben..." class="form-control">
            </div>
            <div class="form-group">
                <label for="kurzbeschreibung">Kurzbeschreibung</label>
                <textarea id="kurzbeschreibung" name="kurzbeschreibung" rows="4"
                          placeholder="Bitte Kurzbeschreibung eingeben..." class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="vermerk">Vermerk</label>
                <select name="vermerk" id="vermerk" class="form-control">
                    <option value="offen" selected>offen</option>
                    <option value="erledigt">erledigt</option>
                </select>
            </div>
            <div class="form-group">
                <label for="sollDatum">Soll-Datum</label>
                <input type="date" id="sollDatum" name="sollDatum" class="form-control">
            </div>
            <div class="form-group">
                <label for="istDatum">Ist-Datum</label>
                <input type="date" id="istDatum" name="istDatum" value="<?php echo date('Y-m-d'); ?>"
                       class="form-control">
            </div>
            <button type="reset" class="btn btn-secondary btn-sm">Daten zurücksetzen</button>
            <button class="btn btn-secondary btn-sm">Aufgabe speichern</button>
            <button type="reset" class="btn btn-secondary btn-sm"
                    onclick="return confirm('Wollen Sie das Formular wirklich löschen?');">Aufgabe löschen
            </button>
        </form>
    </main>
    <footer class="mt-5">
        <form>
            <div class="d-flex justify-content-around">
                <button class="btn btn-dark btn-lg">Vorige Aufgabe</button>
                <button class="btn btn-dark btn-lg">Aufgabenliste</button>
                <button class="btn btn-dark btn-lg">Nächste Aufgabe</button>
            </div>
        </form>
    </footer>
</div>
</body>
</html>