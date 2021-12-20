<table border="1">
    <?php foreach ($list as $user): ?>

    <tr>
        <td><?php echo $user['id'] ?></td>
        <td><?php echo $user['name'] ?></td>
        <td><?php echo $user['age'] ?></td>
    </tr>

    <?php endforeach; ?>
</table>

<?php for ($i = 0; $i < 5; $i++): ?>
    <!---
    <a href="users.php?page=<?php echo $i ?>">
        <?php echo $i ?>
    </a>
    -->

    <button onclick="getUsersResult(<?php echo $i ?>)">
        <?php echo $i ?>
    </button>
<?php endfor ?>
