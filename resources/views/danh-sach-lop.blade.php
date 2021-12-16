<a href="{{route('them-lop')}}">Thêm lớp</a>
<table border='1px' cellspacing="0" cellpadding="0" width="100%">
    <tr>
        <td>Mã lớp</td>
        <td>Tên lớp</td>
    </tr>
    @foreach($list as $each)
        <tr>
            <td>{{$each->id}}</td>
            <td>{{$each->ten_lop}}</td>
        </tr>
    @endforeach
</table>