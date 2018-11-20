
<?php include'all_show.php'; ?>

<footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
     <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js "></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/js/messages/messages.es-es.js" type="text/javascript"></script>
    <script>
        $('#datepicker').datepicker({
            locale: 'es-es',
            format: 'yyyy-mm-dd',
            uiLibrary: 'bootstrap4'
        });
    </script>
    
    <script src="vendor/Print/lib/jquery.printThis.js"></script>
    <script type="text/javascript">
            $(document).ready(function(e) {
               $('button#print_btn').on('click', function(e)  {
                    $('#div_to_print').printThis({
                        styles: ['vendor/bootstrap/css/bootstrap.min.css']
                    });
               }); 
            });
        </script>

     <script src="vendor/ckeditor/ckeditor.js"></script>   
     <script>
            CKEDITOR.replace( 'body',
            {height: '450px', });
      </script>


    <script src="//cdnjs.cloudflare.com/ajax/libs/speakingurl/6.0.0/speakingurl.min.js"></script>
    <script src="vendor/Slug/dist/jquery.stringtoslug.min.js"></script>
    <script type="text/javascript">
    $(document).ready( function() {
         $(".title").stringToSlug();
    });
   </script>

    <link rel="stylesheet" href="vendor/tags-autocomplete/dist/jquery.tagsinput-revisited.min.css">
    <script src="vendor/tags-autocomplete/dist/jquery.tagsinput-revisited.min.js"></script>
   <script>
      
      $('#tags').tagsInput({

          interactive: true,
          placeholder: 'Add a tag',
          width: 'auto',
          height: 'auto',
          hide: true,
          delimiter: ',',
          removeWithBackspace: true

      });
  </script>


 <script type="text/javascript">
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

$("#imageUpload").change(function() {
    readURL(this);
});
</script>

    <script src="js/sb-admin.js"></script>
    <script src="js/demo/datatables-demo.js"></script>

  </body>

</html>
