<div class="modal" id="bookHistoryModal">
    <div class="modal-dialog modal-lg modal-dialog-scrollable" ;>
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header bg-primary text-white">
                <h6 class="modal-title book_name" id="book_name">Kitap Adı Buraya Gelecek</h6>                
                <button type="button" class="close text-white editclose" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body" style="font-size:14px;!important">
                <div class="table-responsive">
                    <table class="table table-bordered modalTable" id="modalTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Sıra</th>
                                <th>Adı Soyadı</th>
                                <th>Alınma Tarihi</th>
                                <th>Teslim Tarihi</th>                                                         
                            </tr>
                        </thead>
                        <tbody id="modalTableBody">
                            <tr>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="form-group col-md-12">                    
                    <button type="button" class="btn btn-sm btn-danger btn-block"
                        data-dismiss="modal">Çıkış</button>
                </div>
            </div>
        </div>
    </div>
</div>