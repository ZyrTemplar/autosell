<h1 class="text-center mt-3">Пропозиції</h1>
<table class="table table-bordered mt-2 col-8 mx-auto" style="font-size: 24px">
    <thead class="thead-dark">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Ім'я</th>
        <th scope="col">Мобільний номер</th>
        <th scope="col">Email</th>
        <th scope="col">Пропозиція ціни</th>
    </tr>
    </thead>
    <tbody>
    @for($i=0;$i<count($messages);$i++)
        <tr>
            <th scope="row">{{$i+1}}</th>
            <td>{{$messages[$i]->name}}</td>
            <td>0{{$messages[$i]->number}}</td>
            <td>{{$messages[$i]->email}}</td>
            <td>{{$messages[$i]->price}}</td>
        </tr>
    @endfor
    </tbody>
</table>
