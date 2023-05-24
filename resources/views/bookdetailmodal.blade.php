
 <div class="modal fade" id="bookDetailModal" style="display: none;" aria-hidden="true">
     <div class="modal-dialog modal-lg">
         <div class="modal-content">
             <div class="modal-header">
                 <h4 class="modal-title fw-bold text-primary">Kitap İncele</h4>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                 </button>
             </div>

             <div class="modal-body">
                <div class="row">
                 <div class="col-12 form-group text-center">
                     <img src="{{asset('back')}}/dist/img/logo3.png" width="100px" alt="">
                 </div>
                 <div class="col-6 form-group">
                     <label for="name">Kitap Adı</label>
                     <input type="text" name="name" id="name" class="form-control" readonly
                         value="Kitap Adı">
                 </div>
                 <div class="col-6 form-group">
                     <label for="writer">Yazar Adı</label>
                     <input type="text" name="writer" id="writer" class="form-control" readonly
                         value="Yazar Adı Soyadı">
                 </div>
                 <div class="col-6 form-group">
                     <label for="type">Kitap Türü</label>
                     <input type="text" name="writer" id="writer" class="form-control" readonly
                         value="Yazar Adı Soyadı">
                 </div>
                 <div class="col-6 form-group">
                     <label for="publicyear">Basım Yılı</label>
                     <input type="date" name="publicyear" id="publicyear" readonly class="form-control">
                 </div>
                 <div class="col-12 form-group">
                     <label for="info">Özet</label>
                     <textarea name="summary" id="summary" readonly class="form-control" rows="4">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero, sapiente aliquid aspernatur magnam quos eius accusantium dignissimos saepe illum. Cumque ut facilis quia debitis possimus libero facere hic? Sint, consequatur!
                    </textarea>
                 </div>


             </div>


             <div class="modal-footer justify-content-between">
                 <button type="button" class="btn btn-default btn-block" data-dismiss="modal">Kapat</button>

             </div>

            </div>
         </div>
         <!-- /.modal-content -->
     </div>
     <!-- /.modal-dialog -->
 </div>

