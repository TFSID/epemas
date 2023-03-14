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
        <form action="../Data_Siswa/tambah_data" method="POST">
          <div class="form-group">
            <label for="Username">Username</label>
            <input name="Username" type="text" class="form-control" id="username" placeholder="Enter username">
          </div>
          <div class="form-group">
            <label for="NIS">NIS</label>
            <input name="NIS" type="text" class="form-control" id="NIS" placeholder="Enter NIS">
          </div>
          <div class="form-group">
            <label for="Email">Email</label>
            <input name="Email" type="email" class="form-control" id="email" placeholder="Enter email">
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
      <th >Username</th>
      <th >NIS</th>
      <th >Email</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
  
  <?php $i = 0; while ($i < count($siswa)) { ?>
    <tr>

      <td><?php echo $siswa[$i]['username']; ?></td>
      <td><?php echo $siswa[$i]['NIS']; ?></td>
      <td><?php echo $siswa[$i]['email']; ?></td>
      <td>
        <div class="d-flex ">
        <button type="button" class="mx-1 btn btn-danger" data-dismiss="modal"><a class="text-white" href="delete_id/<?php echo $siswa[$i]['NIS'];?>"  >Delete</a></button>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#updatemodal<?php echo $siswa[$i]['NIS']; ?>">
  Update
</button>
        </div>
      </td>
      <td></td>
      
        
      
    </tr>
     <!-- MODAL TAMBAH DATA -->
<div class="modal fade" id="updatemodal<?php echo $siswa[$i]['NIS']; ?>">
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
            <label for="Username">Username</label>
            <input name="Username" type="text" class="form-control" id="username" placeholder="<?php echo $siswa[$i]['username']; ?>">
          </div>
          <div class="form-group">
            <label for="NIS">NIS</label>
            <input name="NIS" type="text" class="form-control" id="NIS" placeholder="<?php echo $siswa[$i]['NIS']; ?>">
          </div>
          <div class="form-group">
            <label for="Email">Email</label>
            <input name="Email" type="email" class="form-control" id="email" placeholder="<?php echo $siswa[$i]['email']; ?>">
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
