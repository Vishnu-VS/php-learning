<html>
    <body>
        <table>
            <tr>
                <td>Filter Name</td>
                <td>Filter ID</td>
            </tr>
            <?php
                foreach(filter_list() as $id=>$filter){//list all the php filter extensions
                    echo "<tr><td>".$filter."</td><td>".filter_id($filter)."</td></tr>";
                }
            ?>
        </table>
    </body>
</html>    