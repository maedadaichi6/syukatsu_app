<?php
$data = array_map('str_getcsv', file('data.csv'));
$labels = [
  "自己分析のやり方が分からない",
  "志望動機や自己PRがうまく書けない",
  "面接が苦手／緊張する",
  "エントリーシートが通らない",
  "ブラック企業を避けたい",
  "業界・企業の選び方が分からない",
  "内定がなかなか出ない",
  "親や周囲の期待とのギャップがある"
];

$counts = array_fill_keys($labels, 0);
foreach ($data as $row) {
  $items = explode(" / ", $row[2] ?? '');
  foreach ($items as $item) {
    if (isset($counts[$item])) {
      $counts[$item]++;
    }
  }
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>アンケート結果</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
  <h1>アンケート集計結果</h1>

  <table>
    <tr><th>名前</th><th>Email</th><th>悩み</th><th>その他</th></tr>
    <?php foreach ($data as $row): ?>
      <tr>
        <?php foreach ($row as $cell): ?>
          <td><?= htmlspecialchars($cell, ENT_QUOTES) ?></td>
        <?php endforeach; ?>
      </tr>
    <?php endforeach; ?>
  </table>

  <canvas id="chart" height="100"></canvas>
  <script>
    const ctx = document.getElementById('chart').getContext('2d');
    const chart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: <?= json_encode(array_keys($counts)) ?>,
        datasets: [{
          label: '回答数',
          data: <?= json_encode(array_values($counts)) ?>,
          backgroundColor: 'rgba(75, 192, 192, 0.6)',
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: { beginAtZero: true }
        }
      }
    });
  </script>
</body>
</html>
