<div class="portlet" >
  <br><br><br><br><br>
  <h1><?=$evaluations_type->name?></h1>
  <div class="portlet-body">
    <table>
      <thead>
          <tr>
            <th>Ejecutivo de Ventas</th>
            <th>Cliente</th>
            <th>Fecha/Hora</th>
            <?php 
              foreach ($questions as $q => $question) {
                echo "<th>".$question->name."</th>";
              }
            ?>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($data as $d) {
            
            echo "<tr>";
              echo "<td>".$d['ejecutivo']."</td>";
              echo "<td>".$d['customer']."</td>";
              echo "<td>".$d['created']."</td>";

              foreach ($d['answers'] as $answer) {
                echo "<td>";
                  echo ( ($answer && $answer->answer)? $answer->answer : 'Sin respuesta');
                echo "</td>";
              }

            echo "</tr>";

          } ?>
          
        </tbody>
    </table>
  </div>
</div>