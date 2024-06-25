<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>
<script>
  $('.alert-message').alert().delay(3000).slideUp('slow');
</script>

<script>
  $(document).ready(function() {
    $('.apply-btn').on('click', function() {
      var id = $(this).prev('input').attr('name');
      var quantity = $(this).prev('input').val();
      var price = $(this).prev('input').data('price');
      var subtotal = quantity * price;
      $('#subtotal-' + id).text('Rp ' + subtotal.toLocaleString('id-ID', {
        minimumFractionDigits: 0
      }));
      updateTotal();
    });

    $('.quantity').on('change', function() {
      var id = $(this).attr('name');
      var quantity = $(this).val();
      var price = $(this).data('price');
      var subtotal = quantity * price;
      $('#subtotal-' + id).text('Rp ' +
        subtotal.toLocaleString('id-ID', {
          minimumFractionDigits: 0
        }));
      updateTotal(); // Call updateTotal() here
    });

    function updateTotal() {
      var total = 0;
      $('[id^="subtotal-"]').each(function() {
        total += parseInt($(this).text().replace('Rp ', '').replace('.', ''));
      });
      $('#total').text('Rp ' +
        total.toLocaleString('id-ID', {
          minimumFractionDigits: 0
        }));
    }
  });
</script>

</body>

</html>