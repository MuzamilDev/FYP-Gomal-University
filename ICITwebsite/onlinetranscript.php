<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">


    <script type="text/Javascript" src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script type="text/Javascript" src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script type="text/Javascript" src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
    <script type="text/Javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script type="text/Javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/Javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/Javascript" src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
    <script type="text/Javascript" src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>



    <script>
        $(document).ready(function() {
        $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
    </script>

    
</head>
<body>
    <h1 style="text-align:center; color:blue;"> Lets take Your Transcript </h1>
    <div class="container">
        <table id="example" class="display nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>Semester</th>
                    <th>Title of Course</th>
                    <th>Cr Hrs</th>
                    <th>Marks%</th>
                    <th>LG</th>
                    <th>GP</th>
                    <th>GPA</th>
                    <th>Remarks</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $connection = mysqli_connect("localhost","root","","student");
                $select = "SELECT * FROM semesterone ";
                $fetch_record = mysqli_query($connection,$select);
                if(mysqli_num_rows($fetch_record) > 0)
                {
                    foreach($fetch_record as $row)
                    {
                ?>
                <tr>
                    <td><?php echo $row ['semester']; ?></td>
                    <td><?php echo $row ['course']; ?></td>
                    <td><?php echo $row ['credit']; ?></td>
                    <td><?php echo $row ['marks']; ?></td>
                    <td><?php echo $row ['lg']; ?></td>
                    <td><?php echo $row ['gp']; ?></td>
                    <td><?php echo $row ['gpa']; ?></td>
                    <td><?php echo $row ['remarks']; ?></td>
                </tr>
                <?php
            }
        }
        else{
            ?>
            <tr><td colspan="4">NO record Found</td></tr>
            
        <?php
        }
        ?>
            </tbody>
        </table>
    </div>


</body>
</html>