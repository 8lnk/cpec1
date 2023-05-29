    <?php 
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $num1 = (int) $_POST['num1'];
            $num2 = (int) $_POST['num2'];
            $operator = strip_tags(trim($_POST['operator']));
        }
        
    ?>
<!-- Область основного контента -->
    <form action=" <?= $_SERVER['REQUEST_URI']; ?> " method='POST'>
      <label>Число 1:</label>
      <br />
      <input name='num1' type='text' />
      <br />
      <label>Оператор: </label>
      <br />
      <input name='operator' type='text' />
      <br />
      <label>Число 2: </label>
      <br />
      <input name='num2' type='text' />
      <br />
      <br />
      <input type='submit' value='Считать'>
    </form>

   <?= calc($num1, $num2, $operator); ?>
    <!-- Область основного контента -->
