<!DOCTYPE html>
<html lang="en">
    @include('components.style')
<body data-spy="scroll" data-target=".navbar-fixed-top" data-gr-c-s-loaded="true">
    @include('components.sidebar')
    @include('components.header')
{{$slot}}

 
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript">
        $(function() {
           $('#datetimepicker').datetimepicker();
        });
        $(function() {
           $('#datetimepicker1').datetimepicker();
        });
        $(function() {
           $('#datetimepicker2').datetimepicker();
        });
    </script>    
</html>