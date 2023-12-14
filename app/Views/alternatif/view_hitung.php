<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">

        <!-- Hitung NORMALISASI -->
        <div class="card">
          <div class="card-body">
            <p>[Note:  B = Benefit
                  C = Cost]</p>
            
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Keterangan</th>
                  
                  <th>C1 </th>
                  <th>C2 </th>
                  <th>C3 </th>
                  <th>C4 </th>
                  <th>C5 </th>
                  <th>C6 </th>
                  <th>C7 </th>
                  
                </tr>
              </thead>
              <tbody>
                <?php
                  $no=0;
                  foreach($dataMb as $row):
                    $no++;
                    
                ?>
                <tr>
                    <th> Nilai Max/Min Kriteria</th>
                    <td><?= $row->maxminK1?></td>
                    <td><?= $row->maxminK2?></td>
                    <td><?= $row->maxminK3?></td>
                    <td><?= $row->maxminK4?></td>
                    <td><?= $row->maxminK5?></td>
                    <td><?= $row->maxminK6?></td>
                    <td><?= $row->maxminK7?></td>
                </tr>
                <?php endforeach;?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>