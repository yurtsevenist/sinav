 {{-- delete book modall --}}
 <div class="modal fade" id="bookEditModal" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title fw-bold text-primary">Kitap Güncelle</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="#" method="POST" enctype="multipart/form-data">
        <div class="modal-body">         
                @csrf
                <input type="hidden" name="id" id="id" value="">
                <div class="form-group">
                    <label for="name">Kitap Resmi</label>
                    <input type="file" class="form-control" required name="photo" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                </div>
                <div class="form-group">
                    <label for="name">Kitap Adı</label>
                    <input type="text"  name="name" id="name" class="form-control" value="Kitap Adı">
                </div>
                <div class="form-group">
                    <label for="writer">Yazar Adı</label>
                    <input type="text"  name="writer" id="writer" class="form-control" value="Yazar Adı Soyadı">
                </div>
                <div class="form-group">
                    <label for="type">Kategori</label>
                    <select name="type" id="type" class="form-control custom-select">
                        <option selected="" disabled="">Seçim Yapınız</option>                                
                    </select>
                </div>
                <div class="form-group">
                    <label for="publicyear">Basım Yılı</label>
                    <input type="date"  name="publicyear" id="publicyear" class="form-control">
                </div>
                <div class="form-group">
                    <label for="info">Özet</label>
                    <textarea  name="summary" id="summary" class="form-control" rows="4"></textarea>
                </div>                    
           
            
        </div>
     
      
       
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
          <button type="submit" class="btn btn-primary">Onayla</button>
        </div>
        </form>

      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
{{-- delete product modal end --}}