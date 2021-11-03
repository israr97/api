@extends('layouts.app')
@section('title','EapiHome')

@section('content')

<a class="btn btn-dark" style="margin-left:600px; width:180px; margin-top:20px;" href="{{ route('mail.view') }}">mail</a>
<br>
<br>
<br>
@if(session()->has('change'))
<div class="alert alert-success">
    {{ session()->get('change') }}
</div>
@endif

<table class="table table-dark table-hover table-striped" style="width: 900px; border-radius:7px; margin-left:200px; border:none; margin-top:8px; box-shadow:0 0 5px black;">
    @foreach($product as $p)
    <tr>
        <th>{{$p->id}}</th>
        <td>{{$p->name}}</td>
        <td>{{$p->price}}</td>
        <td style="float: right;"><a class="btn btn-outline-secondary btn-sm del" color:bisque;" href="{{ url('eapishow',$p->id)}}"> Show </a>
        <button class="btn btn-outline-warning btn-sm del"  id="del_{{$p->id}}" product_id="{{$p->id}}">Delete</button>
        
            <span id="status_{{$p->id}}">
            @if($p->status == 0)
            <button class="btn btn-outline-danger btn-sm" onclick="btnstatus({{$p->status}},{{$p->id}})">Deactive</button>
            @else
            <button class="btn btn-outline-info btn-sm" onclick="btnstatus({{$p->status}},{{$p->id}})">Active</button>
            @endif
            </span>
        </td>
        
    </tr>
    @endforeach

    <caption>
        {{$product->links('pagination::bootstrap-4')}}
    </caption>
</table>


@endsection


@section('script')

<script>
    $(document).ready(function() {
        $('.del').click(function() {
            var p_id = $(this).attr('product_id');
            var sh = this;
            $.ajax({
                type: "get",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
                },
                url: "/eapidelete/{id}",
                data: {
                    p_id,
                },
                success: function(data) {
                    console.log(data);
                    if (data) {
                        $(sh).parent().parent().remove();

                    } else {
                        alert('not success');
                    }
                },
            });
        });
    });
</script>

<!-- Active to DeActive Button -->

<script>

function btnstatus(status,id)
{
    $.ajax({
        type:"get",
        url : "{{ route('status.change')}}",
        data:{
            status:status,
            id:id
        },
        success:function(data){
            // console.log(data);
            // alert(data.id);
            var html = "<button type='button'" + "onClick = 'btnstatus("+ data.status +", "+ data.id +")'" + "class = 'btn btn-outline-danger btn-sm'>Deactive</button>";

            var htmlactive = "<button type='button'" + "onClick = 'btnstatus(" + data.status +", "+ data.id +")'" + "class = 'btn btn-outline-info btn-sm'>Active</button>";

            if(data.status == 0)
            {
                $("#status_"+id).html(html);
            }
            else
            {
                $("#status_"+id).html(htmlactive);
            }
        }
    });
}

</script>

@endsection