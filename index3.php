<!DOCTYPE html>
<html>
<head>
    <title>筆電推薦系統</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f2f2f2;
            margin: 20px;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            box-sizing: border-box;
        }
        .container {
            width: 100%;
            max-width: 800px;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            box-sizing: border-box;
        }
        h1 {
            color: #333333;
            font-size: 2rem;
            margin-bottom: 20px;
        }
        form {
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
            margin-top: 10px;
            display: block;
        }
        select, input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border: 1px solid #cccccc;
            border-radius: 5px;
            transition: all 0.3s ease;
            box-sizing: border-box;
        }
        select:focus, input[type="submit"]:hover {
            border-color: #666666;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }
        @media (max-width: 600px) {
            .container {
                width: 100%;
                padding: 10px;
            }
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            animation: fadeIn 0.5s;
        }
        table, th, td {
            border: 1px solid #cccccc;
        }
        th, td {
            padding: 10px;
            text-align: left;
            color: #333333;
        }
        th {
            background-color: #f9f9f9;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>筆電推薦系統</h1>
        <form method="POST" action="">
            <label for="size">尺寸：</label>
            <select id="size" name="size">
                <option value="-1">13寸以下</option>
                <option value="14">14寸</option>
                <option value="15">15寸</option>
                <option value="999">16寸以上</option>
            </select>
            <label for="size-weight">尺寸 權重：</label>
            <select id="size-weight" name="size-weight">
                <?php for ($i = 1; $i <= 5; $i++): ?>
                    <option value="<?= $i ?>"><?= $i ?></option>
                <?php endfor; ?>
                <option value="none">None</option>
            </select><br>

            <label for="brand">品牌挑選：</label>
            <select id="brand" name="brand">
                <option value="ASUS">ASUS</option>
                <option value="ACER">ACER</option>
                <option value="HP">HP</option>
                <option value="MSI">MSI</option>
                <option value="DELL">DELL</option>
                <option value="Lenovo">Lenovo</option>
                <option value="GIGABYTE">GIGABYTE</option>
            </select>
            <label for="brand-weight">品牌 權重：</label>
            <select id="brand-weight" name="brand-weight">
                <?php for ($i = 1; $i <= 5; $i++): ?>
                    <option value="<?= $i ?>"><?= $i ?></option>
                <?php endfor; ?>
                <option value="none">None</option>
            </select><br>

            <label for="cpu-manufacturer">CPU(處理器) 廠家：</label>
            <select id="cpu-manufacturer" name="cpu-manufacturer">
                <option value="INTEL">INTEL</option>
                <option value="AMD">AMD</option>
            </select>
            <label for="cpu-weight">CPU(處理器) 權重：</label>
            <select id="cpu-weight" name="cpu-weight">
                <?php for ($i = 1; $i <= 5; $i++): ?>
                    <option value="<?= $i ?>"><?= $i ?></option>
                <?php endfor; ?>
                <option value="none">None</option>
            </select><br>

            <label for="gpu-manufacturer">GPU(顯示卡) 廠家：</label>
            <select id="gpu-manufacturer" name="gpu-manufacturer">
                <option value="Nvidia">Nvidia</option>
                <option value="AMD">AMD</option>
                <option value="INTEL">INTEL</option>
            </select>
            <label for="gpu-weight">GPU(顯示卡) 權重：</label>
            <select id="gpu-weight" name="gpu-weight">
                <?php for ($i = 1; $i <= 5; $i++): ?>
                    <option value="<?= $i ?>"><?= $i ?></option>
                <?php endfor; ?>
                <option value="none">None</option>
            </select><br>

            <label for="storage">儲存容量：</label>
            <select id="storage" name="storage">
                <option value="256">256G</option>
                <option value="512">512G</option>
                <option value="1000">1T</option>
                <option value="2000">2T</option>
            </select>
            <label for="storage-weight">儲存容量 權重：</label>
            <select id="storage-weight" name="storage-weight">
                <?php for ($i = 1; $i <= 5; $i++): ?>
                    <option value="<?= $i ?>"><?= $i ?></option>
                <?php endfor; ?>
                <option value="none">None</option>
            </select><br>

            <label for="memory">記憶體：</label>
            <select id="memory" name="memory">
                <option value="8">8G</option>
                <option value="16">16G</option>
                <option value="32">32G</option>
                <option value="64">64G</option>
            </select>
            <label for="memory-weight">記憶體 權重：</label>
            <select id="memory-weight" name="memory-weight">
                <?php for ($i = 1; $i <= 5; $i++): ?>
                    <option value="<?= $i ?>"><?= $i ?></option>
                <?php endfor; ?>
                <option value="none">None</option>
            </select><br>

            <label for="type">類型：</label>
            <select id="type" name="type">
                <option value="輕薄">輕薄</option>
                <option value="電競">電競</option>
                <option value="商用">商用</option>
                <option value="一般">一般</option>
            </select>
            <label for="type-weight">類型 權重：</label>
            <select id="type-weight" name="type-weight">
                <?php for ($i = 1; $i <= 5; $i++): ?>
                    <option value="<?= $i ?>"><?= $i ?></option>
                <?php endfor; ?>
                <option value="none">None</option>
            </select><br>

            <label for="price">價格：</label>
            <select id="price" name="price">
                <option value="0-10000">萬元以下</option>
                <option value="10000-15000">1萬-1.5萬</option>
                <option value="15000-25000">1.5萬-2.5萬</option>
                <option value="25000-30000">2.5萬-3萬</option>
                <option value="30000-999999">3萬以上</option>
            </select>
            <label for="price-weight">價格 權重：</label>
            <select id="price-weight" name="price-weight">
                <?php for ($i = 1; $i <= 5; $i++): ?>
                    <option value="<?= $i ?>"><?= $i ?></option>
                <?php endfor; ?>
                <option value="none">None</option>
            </select><br>
            <input type="submit" value="提交">
        </form>
    </div>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // 用户提交的要求和权重
    $user_requirements = [
        "size" => (float)$_POST['size'] < 0 ? 13 : ((float)$_POST['size'] > 20 ? 16 : (float)$_POST['size']),  // 处理“13寸以下”和“16寸以上”
        "儲存容量" => (int)$_POST['storage'],
        "品牌" => $_POST['brand'],
        "CPU廠家" => $_POST['cpu-manufacturer'],
        "GPU廠家" => $_POST['gpu-manufacturer'],
        "記憶體" => (int)$_POST['memory'],
        "類型" => $_POST['type'],
        "價格範圍" => explode('-', $_POST['price']),
    ];

    $weights = [
        "size" => $_POST['size-weight'] != 'none' ? (int)$_POST['size-weight'] : null,
        "儲存容量" => $_POST['storage-weight'] != 'none' ? (int)$_POST['storage-weight'] : null,
        "品牌" => $_POST['brand-weight'] != 'none' ? (int)$_POST['brand-weight'] : null,
        "CPU廠家" => $_POST['cpu-weight'] != 'none' ? (int)$_POST['cpu-weight'] : null,
        "GPU廠家" => $_POST['gpu-weight'] != 'none' ? (int)$_POST['gpu-weight'] : null,
        "記憶體" => $_POST['memory-weight'] != 'none' ? (int)$_POST['memory-weight'] : null,
        "類型" => $_POST['type-weight'] != 'none' ? (int)$_POST['type-weight'] : null,
        "價格" => $_POST['price-weight'] != 'none' ? (int)$_POST['price-weight'] : null,
    ];

    $average_weight = array_sum(array_filter($weights)) / count(array_filter($weights));
    $weights = array_map(function($v) use ($average_weight) {
        return $v !== null ? $v : $average_weight;
    }, $weights);

    // 连接到数据库
    $conn = new mysqli("127.0.0.1", "root", "", "laptop");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $query = "SELECT 型號, 品牌, size, CPU廠家, 價格, GPU廠家, 記憶體, 類型, 儲存容量 FROM laptop_stats";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $laptops = [];
        while($row = $result->fetch_assoc()) {
            $laptops[] = $row;
        }

        function calculate_score($laptop, $requirements, $weights) {
            $score = 0;
            $score += $weights["品牌"] * ($laptop["品牌"] == $requirements["品牌"] ? 1 : 0);
            $score += $weights["size"] * (1 - abs($laptop["size"] - $requirements["size"]) / $requirements["size"]);
            $score += $weights["CPU廠家"] * ($laptop["CPU廠家"] == $requirements["CPU廠家"] ? 1 : 0);
            $score += $weights["GPU廠家"] * ($laptop["GPU廠家"] == $requirements["GPU廠家"] ? 1 : 0);
            $score += $weights["儲存容量"] * (1 - abs($laptop["儲存容量"] - $requirements["儲存容量"]) / $requirements["儲存容量"]);
            $score += $weights["記憶體"] * (1 - abs($laptop["記憶體"] - $requirements["記憶體"]) / $requirements["記憶體"]);
            $score += $weights["類型"] * ($laptop["類型"] == $requirements["類型"] ? 1 : 0);
            $score += $weights["價格"] * (1 - abs($laptop["價格"] - ($requirements["價格範圍"][0] + $requirements["價格範圍"][1]) / 2) / ($requirements["價格範圍"][0] + $requirements["價格範圍"][1]) / 2);
            return $score;
        }

        foreach ($laptops as &$laptop) {
            $laptop['score'] = calculate_score($laptop, $user_requirements, $weights);
        }

        usort($laptops, function($a, $b) {
            return $b['score'] <=> $a['score'];
        });
        
        $recommendations = array_slice($laptops, 0, 5);
        echo "<h2>推薦的筆電如下：</h2>";
        echo "<table>
                <tr>
                    <th>型號</th>
                    <th>品牌</th>
                    <th>size</th>
                    <th>CPU廠家</th>
                    <th>GPU廠家</th>
                    <th>儲存容量</th>
                    <th>記憶體</th>
                    <th>類型</th>
                    <th>價格</th>
                    
                </tr>";
        foreach ($recommendations as $laptop) {
            echo "<tr>
                    <td>{$laptop['型號']}</td>
                    <td>{$laptop['品牌']}</td>
                    <td>{$laptop['size']}</td>
                    <td>{$laptop['CPU廠家']}</td>
                    <td>{$laptop['GPU廠家']}</td>
                    <td>{$laptop['儲存容量']}</td>
                    <td>{$laptop['記憶體']}</td>
                    <td>{$laptop['類型']}</td>
                    <td>{$laptop['價格']}</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "沒有從數據庫中找到相應的筆電。";
    }
    $conn->close();
}
?>

