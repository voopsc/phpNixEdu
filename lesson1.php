<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NixEdu php course</title>
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <header class="header">
      <div class="wrapper">
        <nav class="navigation">
          <a href="lesson1.php">Урок 1</a>
          <a href="lesson2.php">Урок 2</a>
        </nav>
      </div>
    </header>
    <main>
      <section class="table-wrp">
        <?php $a = 1; ?>
        <?php while($a <= 10): ?>
          <table>
            <?php for($i = 1; $i <= 10; $i++): ?>
              <tr>
                <td>
                  <?php echo $a; ?>
                </td>
                <td>*</td>
                <td>
                  <?php echo $i ?>
                </td>
                <td>=</td>
                <td><?php $b = $a * $i; echo $b; ?></td>
              </tr>
            <?php endfor;?>
          </table>
        <?php $a++; endwhile;?>
      </section>
    </main>
    <footer>

    </footer>
  </body>
</html>
