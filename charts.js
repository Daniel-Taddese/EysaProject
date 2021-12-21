// Morris.Bar({
//     element: 'chart',
//     data: [<?php echo $chart_data; ?>],
//     xKey: 'test_num',
//     ykeys: ['total'],
//     labels: ['total'],
//     hideHover: "auto",
// });




















// $(document).ready(function() {
//     $.ajax({
//         url: "http://localhost/project/show_test_r.php",
//         method: "GET",
//         success: function(data) {
//             console.log(data);
//             var test = [];
//             var total_r = [];
//             for (var i in data) {
//                 test.push("test" + data[i].test_num);
//                 total_r.push(data[i].total);
//             }

//             var chartdata = {
//                 labels: test,
//                 datasets: [{
//                     label: 'total result',
//                     backgroundColor: 'rgba(200,200,200,0.75)',
//                     borderColor: 'rgba(200,200,200,0.75)',
//                     hoverBackgroundColor: 'rgba(200,200,200,1)',
//                     hoverBorderColor: 'rgba(200,200,200,1)',
//                     data: total
//                 }]
//             };
//             var ctx = $("#mycanvas");
//             var barGraph = new chart(ctx, {
//                 type: 'bar',
//                 data: chartdata
//             });

//         },
//         error: function(data) {
//             console.log(data);
//         }
//     });
// });