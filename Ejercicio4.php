
<html>
</body>
<div style="text-align:center;">
      <form action="#" method="post">
        <table border="1" style="margin: 0 auto;">
          <tr>
            <th>No.</th>
            <th>Nombre Estudiante</th>
          </tr>
          <?php
            for ($i=1; $i <= 1; $i++) {
              echo "<tr>
               <td>".$i."</td>
                <td><input type='text' name='dato'></td>
              </tr>";
            }
          ?>
        </table>
        <br>
        <input type="submit" name="datos" value="Generate">
      </form>
    </div>
    </body>

    </html>

    <?php
          if (isset($_POST['dato'])) {

            $dato = $_POST['dato'];

            $datos = array('dato' => $dato);

            print_r($datos);
          };
        ?>