<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": true,
            "autoWidth": false,
            "buttons": ["copy", "excel", "pdf", "print"],
            "lengthMenu": [ [25, 50,100, -1], [25, 50,100, "All"] ],
            language: {
            info: "_TOTAL_ kayıttan _START_ ile _END_ arasındaki kayıtlar gösteriliyor.",
            infoEmpty: "Gösterilecek hiç kayıt yok.",
            loadingRecords: "Kayıtlar yükleniyor.",
            zeroRecords: "Tablo boş",
            lengthMenu: "Her sayfada _MENU_ kayıt göster",
            search: "Arama:",
            infoFiltered: "(toplam _MAX_ kayıttan filtrelenenler)",
            buttons: {
                copyTitle: "Panoya kopyalandı.",
                copySuccess: "Panoya %d satır kopyalandı",
                copy: "Kopyala",
                print: "Yazdır",
            },

            paginate: {
                first: "İlk",
                previous: "Önceki",
                next: "Sonraki",
                last: "Son"
            },
        }
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        

    });
</script>