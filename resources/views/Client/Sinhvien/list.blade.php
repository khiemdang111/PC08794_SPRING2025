<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sinh viên</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-6">
    <h1 class="text-2xl font-bold mb-4">Danh sách sinh viên</h1>

    <table class="w-full border-collapse border border-gray-300">
        <thead>
            <tr class="bg-gray-200">
                <th class="border border-gray-300 p-2">ID</th>
                <th class="border border-gray-300 p-2">Tên</th>
                <th class="border border-gray-300 p-2">Mã</th>
                <th class="border border-gray-300 p-2">Email</th>
                <th class="border border-gray-300 p-2">Khoa</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sinhviens as $sinhvien)
                <tr class="text-center">
                    <td class="border border-gray-300 p-2">{{ $sinhvien->id }}</td>
                    <td class="border border-gray-300 p-2">{{ $sinhvien->name }}</td>
                    <td class="border border-gray-300 p-2">{{ $sinhvien->code }}</td>
                    <td class="border border-gray-300 p-2">{{ $sinhvien->email }}</td>
                    <td class="border border-gray-300 p-2">{{ $sinhvien->khoa_name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
