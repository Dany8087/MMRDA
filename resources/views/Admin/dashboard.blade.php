<x-layout>
<!-- loader -->
<div class="wrapper"> 
  <!-- ======== Header Section ======  -->
  <div id="content" class="ap-com content-wrapper"> 
    <!-- Sidebar start -->
    
    <div class="ap-com content-manger"> 
      <!-- header start -->
      <div style="margin-top:100px;">
      <html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          <?php echo $chartData?>
        ]);

        var options = {
          title: 'Work Distribution According to Company'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div class="row">
    <div id="piechart" style="width: 900px; height: 500px;" class="col-lg-6 col-12"></div>
    </div>
  </body>
</html>


      </div>
    </div>
  </div>
</div>
</x-layout>