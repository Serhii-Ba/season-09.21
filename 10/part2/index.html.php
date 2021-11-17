<html>
<body>
    Hello from <strong>Web Basic course!</strong>
    <br/>
    My name is <?php echo $user ?>
    <table border="1">
        <?php foreach($users as $v) { ?>
            <tr>
                <td><?php echo $v['name'] ?></td>
                <td><?php echo $v['age'] ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
