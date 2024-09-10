<?php
require 'FileUtility.php';

$data = FileUtility::readFile('persons.csv');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Person Records</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        .header {
            font-weight: bold;
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Person Records</h1>
    <table>
        <tbody>
            <?php for ($i = 1; $i < count($data); $i++): ?>
                <tr>
                    <td class="header">UUID</td>
                    <td><?php echo htmlspecialchars($data[$i][0]); ?></td>
                </tr>
                <tr>
                    <td class="header">Title</td>
                    <td><?php echo htmlspecialchars($data[$i][1]); ?></td>
                </tr>
                <tr>
                    <td class="header">First Name</td>
                    <td><?php echo htmlspecialchars($data[$i][2]); ?></td>
                </tr>
                <tr>
                    <td class="header">Last Name</td>
                    <td><?php echo htmlspecialchars($data[$i][3]); ?></td>
                </tr>
                <tr>
                    <td class="header">Street Address</td>
                    <td><?php echo htmlspecialchars($data[$i][4]); ?></td>
                </tr>
                <tr>
                    <td class="header">Barangay</td>
                    <td><?php echo htmlspecialchars($data[$i][5]); ?></td>
                </tr>
                <tr>
                    <td class="header">Municipality</td>
                    <td><?php echo htmlspecialchars($data[$i][6]); ?></td>
                </tr>
                <tr>
                    <td class="header">Province</td>
                    <td><?php echo htmlspecialchars($data[$i][7]); ?></td>
                </tr>
                <tr>
                    <td class="header">Country</td>
                    <td><?php echo htmlspecialchars($data[$i][8]); ?></td>
                </tr>
                <tr>
                    <td class="header">Phone Number</td>
                    <td><?php echo htmlspecialchars($data[$i][9]); ?></td>
                </tr>
                <tr>
                    <td class="header">Mobile Number</td>
                    <td><?php echo htmlspecialchars($data[$i][10]); ?></td>
                </tr>
                <tr>
                    <td class="header">Company Name</td>
                    <td><?php echo htmlspecialchars($data[$i][11]); ?></td>
                </tr>
                <tr>
                    <td class="header">Company Website</td>
                    <td><?php echo htmlspecialchars($data[$i][12]); ?></td>
                </tr>
                <tr>
                    <td class="header">Job Title</td>
                    <td><?php echo htmlspecialchars($data[$i][13]); ?></td>
                </tr>
                <tr>
                    <td class="header">Favorite Color</td>
                    <td><?php echo htmlspecialchars($data[$i][14]); ?></td>
                </tr>
                <tr>
                    <td class="header">Birthdate</td>
                    <td><?php echo htmlspecialchars($data[$i][15]); ?></td>
                </tr>
                <tr>
                    <td class="header">Email Address</td>
                    <td><?php echo htmlspecialchars($data[$i][16]); ?></td>
                </tr>
                <tr>
                    <td class="header">Password</td>
                    <td><?php echo htmlspecialchars($data[$i][17]); ?></td>
                </tr>
                <tr><td colspan="2"><hr></td></tr> <!-- Add a separator after each record -->
            <?php endfor; ?>
        </tbody>
    </table>
</body>
</html>
