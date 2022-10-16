<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<div id="myChart" style="width:100%; max-width:600px; height:500px;">
</div>

<script>
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Loại hàng', 'Số lượng sản phẩm'],
            <?php
            $tong_loaihang = count($list_thongke);
            $i = 1;
            foreach ($list_thongke as $show) {
                extract($show);
                if ($i == $tong_loaihang) {
                    $dau_phay = "";
                } else {
                    $dau_phay = ",";
                }
                echo "['" . $show['ten_loai'] . "', " . $show['count_sp'] . "]" .$dau_phay;
                $i += 1;
            }
            ?>

            
        ]);

        var options = {
            title: 'Biểu đồ thống kê theo loại hàng'
        };

        var chart = new google.visualization.PieChart(document.getElementById('myChart'));
        chart.draw(data, options);
    }
</script>