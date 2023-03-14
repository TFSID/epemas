<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  Tambah data +
</button>

<!-- MODAL TAMBAH DATA -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Create New Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url('admin/Kategori/tambah_data') ?>" method="POST">
          <div class="form-group">
            <label for="Kategori">Kategori</label>
            <input name="Kategori" type="text" class="form-control" id="kategori" placeholder="Enter kategori">
          </div>
          <div class="form-group">
            <label for="id_kategori">id_kategori</label>
            <input name="id_kategori" type="text" class="form-control" id="id_kategori" placeholder="Enter id_kategori">
          </div>
          <div class="form-group">
            <label for="total_data">total_data</label>
            <input name="total_data" type="total_data" class="form-control" id="total_data" placeholder="Enter total_data">
          </div>
          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>







<table class="table table-hover  ">

  <thead>
    <tr>
      <th >Kategori</th>
      <th >id_kategori</th>
      <th >total_data</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
  
  <?php $i = 0; while ($i < count($category)) { ?>
    <tr>

      <td><?php echo $category[$i]['kategori']; ?></td>
      <td><?php echo $category[$i]['id_kategori']; ?></td>
      <td><?php echo $category[$i]['total_data']; ?></td>
      <td>
        <div class="d-flex ">
        <button type="button" class="mx-1 btn btn-danger" data-dismiss="modal"><a class="text-white" href="delete_id/<?php echo $category[$i]['id_kategori'];?>"  >Delete</a></button>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#updatemodal<?php echo $category[$i]['id_kategori']; ?>">
  Update
</button>
        </div>
      </td>
      <td></td>
      
        
      
    </tr>
     <!-- MODAL UPDATE DATA -->
<div class="modal fade" id="updatemodal<?php echo $category[$i]['id_kategori']; ?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Update Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="../Data_Siswa/tambah_data" method="POST">
          <div class="form-group">
            <label for="Kategori">Kategori</label>
            <input name="Kategori" type="text" class="form-control" id="kategori" placeholder="<?php echo $category[$i]['kategori']; ?>">
          </div>
          <div class="form-group">
            <label for="id_kategori">id_kategori</label>
            <input name="id_kategori" type="text" class="form-control" id="id_kategori" placeholder="<?php echo $category[$i]['id_kategori']; ?>">
          </div>
          <div class="form-group">
            <label for="total_data">total_data</label>
            <input name="total_data" type="total_data" class="form-control" id="total_data" placeholder="<?php echo $category[$i]['total_data']; ?>">
          </div>
          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>

  
    <?php $i++;} ?>
    
 

  </tbody>
</table>
