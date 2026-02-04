<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>PojištěníApp</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<h1>Pojištěnci</h1>

<?php if (!empty($pojisteni)): ?>
    <table>
        <tr>
            <th>Jméno a příjmení</th>
            <th>Telefon</th>
            <th>Věk</th>
        </tr>

        <?php foreach ($pojisteni as $p): ?>
            <tr>
                <td><?= htmlspecialchars($p->jmeno) ?> <?= htmlspecialchars($p->prijmeni) ?></td>
                <td><?= htmlspecialchars($p->telefon) ?></td>
                <td><?= htmlspecialchars($p->vek) ?></td>
            </tr>
        <?php endforeach; ?>

    </table>
<?php else: ?>
    <p>Žádní pojištěnci nejsou zapsaní.</p>
<?php endif; ?>

<h2>Nový pojištěnec</h2>

<form method="post" class="novy-pojistenec-form">

    <div class="avatar">
        <img src="avatar.png" alt="Avatar" />
    </div>

    <div class="form-right-side">
        <div class="form-columns">
            <div class="form-left">
                <label for="jmeno">Jméno</label>
                <input type="text" id="jmeno" name="jmeno" placeholder="Jan" required>

                <label for="vek">Věk</label>
                <input type="number" id="vek" name="vek" placeholder="31" required>
            </div>

            <div class="form-right">
                <label for="prijmeni">Příjmení</label>
                <input type="text" id="prijmeni" name="prijmeni" placeholder="Novák" required>

                <label for="telefon">Telefon</label>
                <input type="text" id="telefon" name="telefon" placeholder="731 584 972" required>
            </div>
        </div>

        <div class="form-button-wrapper">
            <button type="submit">Uložit</button>
        </div>
    </div>

</form>

</body>
</html>



