<?php
include 'inc_header.php';
?>


<main class="content">
    <div class="container-fluid">
        <div class="container pb-5">
            <div class="mb-3 mt-3">
                <?php while ($admin = mysqli_fetch_array($data_admin)) { ?>
                    <h2>Selamat Datang <b><?= strtoupper($admin['username']); ?></b></h2>
                <?php } ?>
                <hr>
            </div>
            <div class="mb-4">
                <canvas id="myChart" style="width:100%;max-width:1200px;height:100%;height:300px;"></canvas>
            </div>
            <div class="mt-3">
                <h3>Visit Reports</h3>
                <table class="table table-striped mb-5">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Date</th>
                            <th class="text-primary">Today Visits</th>
                            <th class="text-secondary">Visitor Frequently</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <th>1-6-56</th>
                            <td>90</td>
                            <td>47</td>
                        </tr>
                        <tr>
                            <th>2</th>
                            <th>7-6-56</th>
                            <td>78</td>
                            <td>44</td>
                        </tr>
                        <tr>
                            <th>3</th>
                            <th>8-6-56</th>
                            <td>84</td>
                            <td>43</td>
                        </tr>
                        <tr>
                            <th>4</th>
                            <th>9-6-56</th>
                            <td>90</td>
                            <td>46</td>
                        </tr>
                        <tr>
                            <th>5</th>
                            <th>13-6-56</th>
                            <td>88</td>
                            <td>45</td>
                        </tr>
                        <tr>
                            <th>6</th>
                            <th>16-6-56</th>
                            <td>102</td>
                            <td>49</td>
                        </tr>
                        <tr>
                            <th>7</th>
                            <th>19-6-56</th>
                            <td>93</td>
                            <td>51</td>
                        </tr>
                        <tr>
                            <th>8</th>
                            <th>20-6-56</th>
                            <td>114</td>
                            <td>58</td>
                        </tr>
                        <tr>
                            <th>9</th>
                            <th>23-6-56</th>
                            <td>98</td>
                            <td>53</td>
                        </tr>
                        <tr>
                            <th>10</th>
                            <th>27-6-56</th>
                            <td>92</td>
                            <td>49</td>
                        </tr>
                        <tr>
                            <th>11</th>
                            <th>29-6-56</th>
                            <td>87</td>
                            <td>45</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>


<script>
    const xValues = [1, 7, 8, 9, 13, 16, 19, 20, 23, 27, 29];

    new Chart("myChart", {
        type: "line",
        data: {
            labels: xValues,
            datasets: [{
                data: [90, 78, 84, 90, 88, 102, 93, 114, 98, 92, 87],
                borderColor: "blue",
                fill: false
            }, {
                data: [47, 44, 43, 45, 49, 51, 58, 53, 49, 45, 44],
                borderColor: "gray",
                fill: false
            }]
        },
        options: {
            legend: {
                display: false
            }
        }
    });
</script>
<?php
include 'inc_footer.php';
?>