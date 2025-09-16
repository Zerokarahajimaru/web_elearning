<head>

</head>

<body>
    <h1>sikabbu yatt
    </h1>
    <form action="<?= base_url('dashboard_admin/delete')?>"method="post">
    <table>
        <tr> 
            <?php $i = 0; ?> 
            <?php foreach ($course as $row1):?>
                <td> <?= $row1['course_name'] ?></td>    
                <?php foreach ($takes as $row2):?>
                    <?php if ($row2['course_id_fk']  == $row1['course_id']): ?>
                        <?php $row2['user_id'] ?>
                        <label>hehe</label> 
                        <h2><?= $row2['nama']  ?> </h2>
                        <input type="checkbox" name="input_value[<?= $i ?>]" value="<?= $row2['user_id']; ?>"> 
                        <?php $i++; ?>
                        <?php endif; ?> 
                        <?php endforeach;  ?>
                        <?php endforeach; ?>
                    </tr>
                </table>
                <button>submit</button>
            </form>
</body>