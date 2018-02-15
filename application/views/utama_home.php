<!-- Content -->
<div class="main">
  <div class="hipsum">
    <div class="jumbotron">
                
            <div class="container">
            <?php echo form_open('home/add'); ?>
              <h2>Form Testimoni</h2>
              </br>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="first">Judul</label>
                    <input type="text" class="form-control" placeholder="Masukan Judul" id="first" name="title">
                  </div>
                
                  <div class="form-group">
                    <label for="first">Isi Testimoni</label>
                    <textarea class="form-control" rows="5" placeholder="Masukan Keterangan" id="first" name="view"></textarea>
                  </div>

                  </div>
                
            </div>
            <br>
              <input type="submit" class="btn btn-primary" value="Add Testimoni">
            <?php echo form_close(); ?>
          </div>

      </div>
    </div>
  </div>
</div>