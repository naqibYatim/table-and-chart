@extends('layouts.app')

@section('content')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'per hundred'],
          ['Analyst',     221],
          ['Automation',    123]
        ]);
        var chart = new google.visualization.PieChart(document.getElementById('analystVsAutomation'));
        chart.draw(data);
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawCharts);

      function drawCharts() {

        var dataa = google.visualization.arrayToDataTable([
          ['Task', 'per hundred'],
          ['SCO',     0],
          ['Kirubalan Ragu',    5],
          ['Kavitha A/P Kumanan',     4],
          ['Umes',     4],
          ['Kean Keong Ang',     5],
          ['Alex Ng',    3],
          ['Iran Mahadi',    4],
          ['Huda Rahman',    4],
          ['Vijay',    3]
        ]);
        var chart = new google.visualization.PieChart(document.getElementById('totalWorking'));
        chart.draw(dataa);
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(actionTaken);

      function actionTaken() {

        var at = google.visualization.arrayToDataTable([
          ['Task', 'per hundred'],
          ['Task',     72],
          ['Email',    59],
          ['Resolve',     213]
        ]);
        var chart = new google.visualization.PieChart(document.getElementById('actionTaken'));
        chart.draw(at);
      }
    </script>
    <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(trend);
    function trend() {
     var datan = google.visualization.arrayToDataTable([
        ['INC', 'Morning', 'Night', { role: 'annotation' } ],
        ['WMI Health Monitor', 36, 13, ''],
        ['Hardware Issue', 50, 47, ''],
        ['Ping Down', 25, 36, ''],
        ['CPU Load', 14, 41, ''],
        ['[Windows]File System Space', 22, 16, ''],
        ['[Linux]File System Space', 22, 22, '']
      ]);

      var optionsn = {
        width: 900,
        height: 500,
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: '75%' },
        isStacked: true,
      };
      
      var chart = new google.visualization.ColumnChart(document.getElementById("trend"));
      chart.draw(datan, optionsn);
  }
  </script>
<style>
    #baru{
        text-align: center;
    }
</style>
<div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">DECEMBER : WEEK 2</div>

                <div class="panel-body">
                    <br><br>
                    <table class="table table-bordered" id="baru">
                        <tr class="thead-dark">
                            <th class="bg-primary text-center" rowspan="2">No</th>
                            <th class="bg-primary text-center" rowspan="2">Assignee Login</th>
                            <th class="bg-primary text-center" colspan="3">Incident Priority</th>
                            <th class="bg-primary text-center" colspan="3">Action Taken</th>
                            <th class="bg-primary text-center" rowspan="2">Total Incident Closure</th>
                            <th class="bg-primary text-center" rowspan="2">Total Working</th>
                        </tr>
                        <tr>
                            <th class="bg-info text-center" >Low</th>
                            <th class="bg-info text-center" >Medium</th>
                            <th class="bg-info text-center" >High</th>
                            <th class="bg-info text-center" >Task</th>
                            <th class="bg-info text-center" >Email</th>
                            <th class="bg-info text-center" >Resolve</th>
                        </tr>
                        <tr>
                            <td class="text-center">1</td>
                            <td class="text-center">SCO</td>
                            <td class="text-center">51</td>
                            <td class="text-center">39</td>
                            <td class="text-center">33</td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center">123</td>
                            <td class="text-center">123</td>
                            <td class="text-center">0</td>                        
                            </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td class="text-center">Kirubalan Ragu</td>
                            <td class="text-center">10</td>
                            <td class="text-center">9</td>
                            <td class="text-center">6</td>
                            <td class="text-center">9</td>
                            <td class="text-center">7</td>
                            <td class="text-center">9</td>
                            <td class="text-center">25</td>
                            <td class="text-center">5</td>
                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td class="text-center">Kavitha A/P Kumanan</td>
                            <td class="text-center">12</td>
                            <td class="text-center">13</td>
                            <td class="text-center">7</td>
                            <td class="text-center">13</td>
                            <td class="text-center">7</td>
                            <td class="text-center">12</td>
                            <td class="text-center">32</td>
                            <td class="text-center">4</td>
                        </tr>
                        <tr>
                            <td class="text-center">4</td>
                            <td class="text-center">Umes</td>
                            <td class="text-center">6</td>
                            <td class="text-center">12</td>
                            <td class="text-center">2</td>
                            <td class="text-center">7</td>
                            <td class="text-center">5</td>
                            <td class="text-center">8</td>
                            <td class="text-center">20</td>
                            <td class="text-center">4</td>
                        </tr>
                        <tr>
                            <td class="text-center">5</td>
                            <td class="text-center">Kean Keong Ang</td>
                            <td class="text-center">8</td>
                            <td class="text-center">11</td>
                            <td class="text-center">8</td>
                            <td class="text-center">9</td>
                            <td class="text-center">7</td>
                            <td class="text-center">11</td>
                            <td class="text-center">27</td>
                            <td class="text-center">5</td>
                        </tr>
                        <tr>
                            <td class="text-center">6</td>
                            <td class="text-center">Alex Ng</td>
                            <td class="text-center">15</td>
                            <td class="text-center">15</td>
                            <td class="text-center">10</td>
                            <td class="text-center">13</td>
                            <td class="text-center">10</td>
                            <td class="text-center">17</td>
                            <td class="text-center">40</td>
                            <td class="text-center">3</td>
                        </tr>
                        <tr>
                            <td class="text-center">7</td>
                            <td class="text-center">Irfan Mahadi</td>
                            <td class="text-center">11</td>
                            <td class="text-center">9</td>
                            <td class="text-center">5</td>
                            <td class="text-center">7</td>
                            <td class="text-center">7</td>
                            <td class="text-center">11</td>
                            <td class="text-center">25</td>
                            <td class="text-center">4</td>
                        </tr>
                        <tr>
                            <td class="text-center">8</td>
                            <td class="text-center">Huda Rahman</td>
                            <td class="text-center">10</td>
                            <td class="text-center">13</td>
                            <td class="text-center">8</td>
                            <td class="text-center">9</td>
                            <td class="text-center">9</td>
                            <td class="text-center">13</td>
                            <td class="text-center">31</td>
                            <td class="text-center">4</td>
                        </tr>
                        <tr>
                            <td class="text-center">9</td>
                            <td class="text-center">Vijay</td>
                            <td class="text-center">10</td>
                            <td class="text-center">7</td>
                            <td class="text-center">4</td>
                            <td class="text-center">5</td>
                            <td class="text-center">7</td>
                            <td class="text-center">9</td>
                            <td class="text-center">21</td>
                            <td class="text-center">3</td>
                        </tr>
                        <tr>
                            <td class="text-center" colspan="2">Grand Total</td>
                            <td class="text-center">133</td>
                            <td class="text-center">128</td>
                            <td class="text-center">83</td>
                            <td class="text-center">72</td>
                            <td class="text-center">59</td>
                            <td class="text-center">213</td>
                            <td class="text-center">344</td>
                            <td class="text-center">32</td>
                        </tr>
                    </table>
                    <br>
                    
                    <center><H2>ANALYST VS AUTOMATION</h2></center>
                    <center><div id="analystVsAutomation" style="width: 900px; height: 500px;"></div></center>
                    
                    <center><H2>TOTAL WORKING DAY</h2></center>
                    <center><div id="totalWorking" style="width: 900px; height: 500px;"></div></center>
                    
                    <center><H2>ACTION TAKEN</h2></center>
                    <center><div id="actionTaken" style="width: 900px; height: 500px;"></div></center>
                    
                    <center><H2>INC TRENDS PER SHIFT</h2></center>
                    <center><div id="trend" style="width: 900px; height: 500px;"></div></center>
                    
                    <BR><bR>
                </div>
            </div>           
</div>

<script src="{{ asset('js/bootrap.min.js') }}"></script>
@endsection
