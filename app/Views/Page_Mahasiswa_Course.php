<body>
    
    <p>salam dari course mahasiswa</p>
    <table>
        <tr>
            <?php foreach ($course_mahasiswa as $row):?>
                <td> <?= $row['course_name'] ?></td>    
                <td> <a href="<?=base_url('dashboard_mahasiswa/course/' . $row['course_name'])   ?>">enroll course gass</a></td>
                <?php endforeach; ?>
        </tr>
        </table>
</body>