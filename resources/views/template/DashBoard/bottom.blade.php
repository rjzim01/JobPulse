<footer id="footer" class="footer" >
    <div class="copyright">
      &copy; Copyright <strong><span>Job Pulse</span></strong>. All Rights Reserved
    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @if(Session::has('success'))
    <script>
      Swal.fire({
        position: "top-end",
        icon: "success",
        title: "{{ session('success') }}",
        showConfirmButton: false,
        timer: 4000
      });
    </script>
  @elseif(Session::has('error'))
    <script>
      Swal.fire({
        position: "top-end",
        icon: "error",
        title: "{{ session('error') }}",
        showConfirmButton: false,
        timer: 4000
      });
    </script>
  @endif
  
  <!-- Vendor JS Files -->
  <script src="{{ asset('assets2/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('assets2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets2/vendor/chart.js/chart.umd.js') }}"></script>
  <script src="{{ asset('assets2/vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ asset('assets2/vendor/quill/quill.min.js') }}"></script>
  <script src="{{ asset('assets2/vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ asset('assets2/vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('assets2/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets2/js/main.js') }}"></script>