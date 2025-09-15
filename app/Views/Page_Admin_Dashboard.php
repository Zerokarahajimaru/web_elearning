<head>

</head>

<body>
    <h1>sikabu yatta</h1>
    <table>
    <tr> 
        <?php foreach($course as $row)?>
        <td><?= $row['course_name'] ?></td>
        <?php endforeach ?>
    </tr>
    </table>;
</body>