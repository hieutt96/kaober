{{-- jQuery 2.2.3 --}}
<script src="{{ asset("/backend/plugins/jQuery/jquery-2.2.3.min.js") }}"></script>
{{-- jQuery UI 1.11.4 --}}
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>

{{-- <script src="{{ asset("/public/backend/plugins/jQueryUI/jquery-ui.min.js") }}"></script> --}}

{{-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip --}}
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
{{-- Bootstrap 3.3.6 --}}
<script src="{{ asset("/backend/bootstrap/js/bootstrap.min.js") }}"></script>


{{-- jvectormap --}}
<script src="{{ asset("/backend/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js") }}"></script>
<script src="{{ asset("/backend/plugins/jvectormap/jquery-jvectormap-world-mill-en.js") }}"></script>


{{-- chart JS --}}
<script src="{{ asset("/backend/plugins/chartjs/Chart.min.js") }}"></script>
{{-- jQuery Knob Chart --}}
<script src="{{ asset("/backend/plugins/knob/jquery.knob.js") }}"></script>
{{-- Sparkline --}}
<script src="{{ asset("/backend/plugins/sparkline/jquery.sparkline.min.js") }}"></script>
{{-- end chart --}}


{{-- daterangepicker --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="{{ asset("/backend/plugins/daterangepicker/daterangepicker.js") }}"></script>
{{-- datepicker --}}
<script src="{{ asset("/backend/plugins/datepicker/bootstrap-datepicker.js") }}"></script>
{{-- Bootstrap WYSIHTML5 --}}
<script src="{{ asset("/backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js") }}"></script>
{{-- Slimscroll --}}
<script src="{{ asset("/backend/plugins/slimScroll/jquery.slimscroll.min.js") }}"></script>
{{-- FastClick --}}
<script src="{{ asset("/backend/plugins/fastclick/fastclick.js") }}"></script>
{{-- App --}}
<script src="{{ asset("/backend/dist/js/app.min.js") }}"></script>
{{-- dashboard --}}
<script src="{{ asset("/backend/dist/js/pages/dashboard.js") }}"></script>
{{-- Admin Handmadevn.com --}}
<script src="{{ asset("/backend/dist/js/demo.js") }}"></script>

{{-- Bootstrap WYSIHTML5 --}}
<script src="{{ asset("/backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js") }}"></script>



{{-- Pace, preload --}}
<script src="{{ asset("/backend/plugins/pace/pace.min.js") }}"></script>
{{-- DataTables --}}
<script src="{{ asset("/backend/plugins/datatables/jquery.dataTables.min.js") }}"></script>
<script src="{{ asset("/backend/plugins/datatables/dataTables.bootstrap.min.js") }}"></script>

{{-- kaober js --}}
<script src="{{ asset("/js/kaober.js") }}"></script>
<script src="{{ asset("/js/funrefer.js") }}"></script>

{{-- ajax add kaober --}}
{{-- <script src="{{ asset("/public/backend/dist/js/ajaxproduct.js") }}"></script> --}}

{{--  cài đặt js --}}
<script type="text/javascript">

    document.addEventListener("DOMContentLoaded", function(event) { 
  		$('li.at a').each(function(){
            if($(this).attr("href")==window.location.href){
                $(this).parents('li.at').addClass('active');
              }
              
              $("#list").DataTable();
      	});

	});

</script>