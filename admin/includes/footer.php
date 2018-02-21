  </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- WYSIWYG TEXT EDITOR -->
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>

    <script src="js/dropzone.js"></script>

    <script src="js/scripts.js"></script>

    <!-- Google Chart example-->
    <script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() 
    {

        var data = google.visualization.arrayToDataTable
        ([
          ['Task', 'Hours per Day'],
          ['Views',     <?php echo $session->count; ?>],
          ['Photos',      111],
          ['Users',  122],
          ['Comments', 133]
        ]);

        var options = 
        {
            legend:'none',
            pieSliceText: 'label',
            title: 'My Daily Activities',
            backgroundColor: 'transparent'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
    }
    </script>
    <!-- Google Chart example END-->



</body>

</html>
