
<div class="wrapper wrapper-content animated fadeInRight">    
    <div class="row">
        <div class="ibox-content p-xl">
            <div class="jumbotron">
                  <h1>Laporan Keuangan</h1>
                  <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p><hr> 
                 <br>
               
                 <table class="table table-stripped" id="edo-copo">
                   <thead>
                     <tr>
                       <th>Bulan Transaksi </th>
                 
                     </tr>
                   </thead>

                   <tbody>
              
                     <tr>
                     <?php foreach($data as $row) { ?>
                       <td><?php echo $row->tgl_bayar; ?></td>
                       <?php } ?>
                     
         
                       
                     </tr>
                   </tbody>
                 </table>
            </div>
        </div>
      </div>
    </div>