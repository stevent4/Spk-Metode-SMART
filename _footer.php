<footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b>Version</b> 2.4.0
  </div>
  <strong>Copyright &copy; 2022-2023 <a href="https://www.instagram.com/a.stevents/">Stevent</a>.</strong> All rights
  reserved.
</footer>
</div>
<script src="/smart/_assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/smart/_assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="/smart/_assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/smart/_assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/v/bs/jszip-2.5.0/dt-1.13.3/b-2.3.5/b-colvis-2.3.5/b-html5-2.3.5/b-print-2.3.5/datatables.min.js"></script>

<!-- SlimScroll -->
<script src="/smart/_assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/smart/_assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/smart/_assets/dist/js/adminlte.min.js"></script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#select_all').on('click', function() {
      if (this.checked) {
        $('.check').each(function() {
          this.checked = true;
        })
      } else {
        $('.check').each(function() {
          this.checked = false;
        })
      }
    });
    $('.check').on('click', function() {
      if ($('.check:checked').length == $('.check').length) {
        $('#select_all').prop('checked', true)
      } else {
        $('#select_all').prop('checked', false)
      }
    })
  })

  function edit() {
    document.proses.action = 'edit.php';
    document.proses.submit();
  }

  function hapus() {
    var conf = confirm('Yakin hapus data?');
    if (conf) {
      document.proses.action = 'del.php';
      document.proses.submit();
    }
  }

  function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
</script>
<script>
  $(document).ready(function() {
    var table = $('#example1').DataTable({
      dom: 'Bfrtip',
      buttons: ['copy', 'excel', 'csv', 'pdf',
        {
          extend: 'print',
          exportOptions: {
            columns: ':visible'
          }
        },
        'colvis'
      ],
      columnDefs: [{
        targets: -1,
        collectionLayout: 'fixed columns',
        visible: true

      }],
      lengthMenu: [
        [5, 10, 20, 30, 40, 50, 60, -1],
        ['5 Data', '10 Data', '20 Data', '30 Data', '40 Data', '50 Data', '60 Data',
          'Semua'
        ]
      ],

      dom: "<'row'<'col-md-3'l><'col-md-5'B><'col-md-4'f>>" +
        "<'row'<'col-md-12'tr>>" +
        "<'row'<'col-md-5'i><'col-md-7'p>>"
    });
    table.buttons().container()
      .appendTo('#example1_wrapper .col-md-5:eq(0)');
  });
</script>

<script>
  $(document).ready(function() {
    $("#myModal").modal();
  });
</script>


<script>
  $(function() {
    $('#nav a[href~="' + location.href + '"]').parents('li').addClass('active');
  });
</script>

<script>
  $('[data-hidden-value] > .toggle').on('click', function() {
    var
      $wrapper = $(this).parent(),
      $display = $wrapper.find('.display'),
      revealed = $wrapper.data('revealed'),
      hiddenValue = String($wrapper.data('hidden-value'));

    $display.html(revealed ? hiddenValue.replace(/./g, '*') : hiddenValue);
    $wrapper.data('revealed', !revealed);
  });
</script>

<!-- <script>
  function format_uang($angka) {
    $hasil = "Rp ".number_format($angka, 0, ',', '.');
    return $hasil;
  }
</script> -->

<script>
  document.addEventListener('DOMContentLoaded', function() {
    var table = document.querySelector('#tabel-data');
    var rows = Array.from(table.querySelectorAll('tr'));
    var column = 3; // Urutkan berdasarkan kolom "Rank"
    var ascending = false;

    // Fungsi untuk mendapatkan nilai pada kolom yang dipilih
    function getCellValue(row, index) {
      return Number(row.querySelectorAll('td')[index].textContent);
    }

    // Fungsi untuk melakukan pengurutan
    function sortTable(column, order) {
      rows.sort(function(a, b) {
        var aVal = getCellValue(a, column);
        var bVal = getCellValue(b, column);
        if (aVal < bVal) return -1;
        if (aVal > bVal) return 1;
        return 0;
      });

      if (!order) {
        rows.reverse();
      }

      // Hapus semua baris pada tabel
      while (table.rows.length > 0) {
        table.deleteRow(0);
      }

      // Tambahkan kembali baris-baris yang sudah diurutkan
      var rank = 1;
      rows.forEach(function(row) {
        table.appendChild(row);
        row.cells[0].textContent = rank; // Isi nilai pada kolom Ranking
        row.cells[4].textContent = "Ranking " + rank; // Isi nilai pada kolom Ranking
        rank++;
      });
    }

    // Panggil fungsi sortTable() pada saat halaman dimuat
    sortTable(column, ascending);
  });
</script>

</body>

</html>