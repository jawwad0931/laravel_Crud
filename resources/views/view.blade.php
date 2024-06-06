<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students List</title>
</head>
<body>
    <h1>Customers List</h1>
    {{-- here search function used --}}
    <form action="" method="">
        <input type="search" name="search" id="name" value="{{ old('search', $search ?? '') }}">
        <button type="submit">Search</button>
    </form>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Grade</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
                <tr>
                    <td>{{ $customer->id }}</td>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->grade }}</td>
                    <td>
                        <a href="{{ route('customer.edit',['id' => $customer->id]) }}">Edit</a>
                        <a href="{{ route('customer.delete', ['id' => $customer->id]) }}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- {{ changeDateFormate(date('Y-m-d'), '/d/Y') }} --}}
    {{-- <img src="{{ productImagePath('1.jpg') }}" alt="Example image"> --}}


    {{-- {!! showMessage('Hello, world!') !!} --}}

    {{-- {!! add(10,12) !!} --}}

</body>
</html>
