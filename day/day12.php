<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table th{
            border:double;
        }
        table tr{
            border:double;
        }
    </style>
</head>
<body>
<?php
    $mult = array(
        array(
            'Fname' =>'kurt', 
            'Mname' =>'john',
            'Lname' =>'mojado'
        ),
        array(
            'Fname' =>'naoya', 
            'Mname' =>'fuji', 
            'Lname' =>'moto'
        ),
        array(
            'Fname' =>'maho', 
            'Mname' =>'kimu', 
            'Lname' =>'ra'
            )
        );

echo"<pre>";
    print_r($mult);
echo"<pre>";
?>
<hr>
<?php

if (count($mult) > 0): ?>
    <table>
      <thead>
        <tr>
          <th><?php echo implode('</th><th>', array_keys(current($mult))); ?></th>
        </tr>
      </thead>
      <tbody>
    <?php foreach ($mult as $row): array_map('htmlentities', $row); ?>
        <tr>
          <td><?php echo implode('</td><td>', $row); ?></td>
        </tr>
    <?php endforeach; ?>
      </tbody>
    </table>
    <?php endif; ?>

</body>
</html>